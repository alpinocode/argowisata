<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class argowisataContentController extends Controller
{
    public function beranda(): View
    {
        return view('argowisataContent.beranda');
    }
}
