<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class TokenRemember
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::check()) {
            return abort(403, 'Anda Tidak dpt Izin');
        }

        // Periksa apakah atribut 'token_remember' tersedia dan bernilai true
        if (!Auth::user()->remember_token) {
            return abort(403, 'Anda Tidak dpt Izin');
        }
        return $next($request);
    }
}
