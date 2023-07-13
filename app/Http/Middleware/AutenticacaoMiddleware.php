<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Session;

class AutenticacaoMiddleware
{
    /**
     * Handle an incoming request.
     *
     **
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next): Response
    {
        $email = Session::get('email');

        if ($email) {
            return $next($request);
        } else {
            return redirect()->route('login.index', ['erro' => 'autenticacao']);
        }
    }
}
