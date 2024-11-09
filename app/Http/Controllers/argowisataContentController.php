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

    public function fasilitas() : View
    {
        return view('argowisataContent.fasilitas');
    }

    public function getInTouch() : View
    {
        return view('argowisataContent.getInTouch');
    }

    public function gallery(): View
    {
        return view('argowisataContent.galery');
    }
}
