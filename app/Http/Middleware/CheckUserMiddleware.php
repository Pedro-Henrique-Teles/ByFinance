<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckUserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!$request->user()) { // Se não houver usuário autenticado
            return redirect('login'); // Redireciona para a página de login
        }

        $response = $next($request);

        $response->headers->set('X-Middleware-Example', 'Value');
        
        return $next($request);
    }
}
