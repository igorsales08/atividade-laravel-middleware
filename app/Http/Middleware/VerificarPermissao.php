<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VerificarPermissao
{
    public function handle(Request $request, Closure $next): Response
    {
        $temPermissao = false;

        if (!$temPermissao) {
            return response()->view('acesso', [], 403);
        }

        return $next($request);
    }
}