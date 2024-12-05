<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\OrderTicket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserHistory extends Controller
{
    public function history()
    {
        $user = Auth::user();
        $order = OrderTicket::where('user_id', $user->id)->get();
     

        return view('userHistory.historyUser', compact('user', 'order'));
    }
}
