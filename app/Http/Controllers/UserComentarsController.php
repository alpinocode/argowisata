<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserComentarsController extends Controller
{
    public function index() {
        return view('argowisataContent.userComentar');
    }

    public function create(Request $request)
    {
        $comentar = $request->validate([
            'comentar' => ['required', 'string'],
            'rating' => ['required', 'integer', 'min: 1', 'max: 5'],
        ]);

        $request->user()->comment()->create($comentar);
        return view('argowisataContent.beranda', compact('comentar'))->with('success', 'Komentar berhasil ditambahkan.');
    }
}
