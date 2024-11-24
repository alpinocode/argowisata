<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class OrderTicket extends Controller
{
    public function index(Request $request):View
    {
        return view('orderTicket.orderTicket');
    }

    public function create(Request $request) 
    {
        $orderTicket = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique'],
            'telepon' => ['required', 'string', 'max:255'],
            'alamat' => ['required', 'string', 'max:255'],
            'tanggal_pesan' => ['required', 'date'],
            'waktu_pesan' => ['required', 'date'],
            'jumlah_tiket' => ['required', 'integer'],
        ]);

        $request->user()->orderTicket()->create($orderTicket);
        return redirect()->back()->with('message', 'Pemesanan tiket berhasil');
    }
}
