<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\OrderTicket as ModelsOrderTicket;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class OrderTicket extends Controller
{
    public function page():View
    {
        return view('orderTicket.orderTicket');
    }

    public function create(Request $request)
    {   
        $messages = [
            'jumlah_tiket.min' => 'Jumlah tiket tidak boleh kurang dari 1.',
            'jumlah_tiket.max' => 'Jumlah tiket tidak boleh lebih dari 10.',
        ];
        try {
          
            // Validasi data yang diterima dari form
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'telepon' => 'required|string|max:255',
                'alamat' => 'required|string|max:255',
                // 'tanggal_pesan' => 'required|date',
                // 'waktu_pesan' => 'required|date_format:H:i',
                'jumlah_tiket' => 'required|integer|min:1|max:10',
                'total_harga' => 'nullable|integer',
                'status' => 'nullable|string',
                'harga_masuk' => 'nullable|string',
                'harga_parkir' => 'nullable|string',
                'payment_method' => 'nullable|string',
            ], $messages);

            $harga_masuk =0 ;

            if($validatedData['harga_masuk'] == 'anak-anak') {
                $harga_masuk = 10000;
            } elseif ($validatedData['harga_masuk'] == 'dewasa') {
                $harga_masuk = 15000;
            }

            $harga_parkir = 0;
            if($validatedData['harga_parkir'] == 'motor') {
                $harga_parkir = 1000;
            } elseif ($validatedData['harga_parkir'] == 'mobil') {
                $harga_parkir = 5000;
            }
        

            $request->request->add(['total_harga'=> $validatedData['jumlah_tiket'] * ($harga_masuk + $harga_parkir) + 2500]);

            if($request->user()->name !== $validatedData['name'] || $request->user()->email !== $validatedData['email']) {
                return abort(403, 'Tidak Bisa Melakukan Pemesanan Tiket, email atau nama tidak sesuai.');
            }
            // if($validatedData && $request->order()) {
            //     return abort(403, 'Tidak Bisa Melakukan Pemesanan Tiket, Silahkan Selesaikan Pembayaran Sebelumnya.');
            // }
    
            // Simpan data pemesanan tiket ke dalam database
            $order =$request->user()->order()->create($request->all());
    
            
            
         

            return redirect()->route('payment', $order->id);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $th->getMessage() );
        }
    }
    
    public function paymentRedirect($orderId) {
        $order = ModelsOrderTicket::find($orderId);
        try {
            /*Install Midtrans PHP Library (https://github.com/Midtrans/midtrans-php)
            composer require midtrans/midtrans-php
                                        
            Alternatively, if you are not using **Composer**, you can download midtrans-php library 
            (https://github.com/Midtrans/midtrans-php/archive/master.zip), and then require 
            the file manually.   

            require_once dirname(__FILE__) . '/pathofproject/Midtrans.php'; */

            //SAMPLE REQUEST START HERE

            // Set your Merchant Server Key
            \Midtrans\Config::$serverKey = config('midtrans.server_key');
            // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
            \Midtrans\Config::$isProduction = false;
            // Set sanitization on (default)
            \Midtrans\Config::$isSanitized = true;
            // Set 3DS transaction for credit card to true
            \Midtrans\Config::$is3ds = true;

            $params = array(
                'transaction_details' => array(
                    'order_id' => $order['id'],
                    'gross_amount' => $order['total_harga'],
               
                ),
                'customer_details' => array(
                    'first_name' => $order['name'],
                    'last_name' => '',
                    'email' => $order['email'],
                    'phone' => $order['telepon'],
                ),
            );

            $snapToken = \Midtrans\Snap::getSnapToken($params);

            return view('payment', compact('snapToken', 'order'));
        } catch (\Throwable $th) {
            Log::error($th);
        }

    }

    public function callback(Request $request) 
    {

        
        $serverKey = config('midtrans.server_key');
        $hashed = hash('sha512', $request->order_id . $request->status_code . $request->gross_amount  .$serverKey );

        if($hashed == $request->signature_key) {
           
            if($request->transaction_status == 'capture' or $request->transaction_status == 'settlement') {
                $order = ModelsOrderTicket::find($request->order_id);
                Log::info("Cek data Object :".$order);
                $order->update(['status' => 'paid', 'payment_method' => $request->payment_type]);
            }
        }
    }

    public function invoice($id, Request $request)
    {
        try {
            //code...
            $user = Auth::user();
            $order = ModelsOrderTicket::where('user_id',$user->id)->where('id', $id)->first();
            
            if($request->get('export') == 'pdf') {
                $pdf = Pdf::loadView('pdf.invoice', ["data" => $order]);
                return $pdf->download('invoice.pdf');
            }
            if(!$order){
                return redirect()->route('orderTicketPage')->with('error', 'Tidak ada pemesanan tiket.');
            } else {
                return view('argowisataContent.invoice', compact('order', 'user'));
            }
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $th->getMessage() );
        }
    }

}
