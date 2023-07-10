<?php

namespace App\Http\Middleware;

use App\Models\logInterno;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class logAcessoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $ip = $request->server->get('REMOTE_ADDR');
        $uri = $request->getRequestUri();
        logInterno::create(['log' => "$ip xyz requisitou a rota $uri"]);
        return $next($request);
    }
}
