<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\OrderTicket as ModelsOrderTicket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class OrderTicket extends Controller
{
    public function page():View
    {
        return view('orderTicket.orderTicket');
    }

    public function create(Request $request, )
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
                    'tanggal_pesan' => 'required|date',
                    'waktu_pesan' => 'required|date_format:H:i',
                    'jumlah_tiket' => 'required|integer|min:1|max:10',
                ], $messages);
            //code...

            if($request->user()->name !== $validatedData['name'] || $request->user()->email !== $validatedData['email']) {
                return abort(403, 'Tidak Bisa Melakukan Pemesanan Tiket, email atau nama tidak sesuai.');
            }
            // if($validatedData && $request->order()) {
            //     return abort(403, 'Tidak Bisa Melakukan Pemesanan Tiket, Silahkan Selesaikan Pembayaran Sebelumnya.');
            // }
    
            // Simpan data pemesanan tiket ke dalam database
            $request->user()->order()->create($validatedData);
    
            // Mengarahkan kembali dengan pesan sukses
            return redirect()->back()->with('success', 'Pemesanan tiket berhasil!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $th->getMessage() );
        }
    }
}
