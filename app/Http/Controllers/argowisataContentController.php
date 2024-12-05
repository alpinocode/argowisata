<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\userComentar;
use Illuminate\Http\Request;
use Illuminate\View\View;

class argowisataContentController extends Controller
{
    public function beranda(): View
    {
        $comment = userComentar::all();
        return view('argowisataContent.beranda', compact('comment'));
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
    public function faq(): View
    {
        return view('argowisataContent.faq');
    }
}
