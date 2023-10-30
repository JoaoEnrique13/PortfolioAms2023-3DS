<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $isAdmin = auth()->check() && auth()->user()->isAdmin();
                            
        //Se estiver logado e for admin deixa acessar a rota
        if ($isAdmin) {
            return $next($request);
        }

        // return $isAdmin;
        return redirect('/'); // Redireciona para a página inicial se o usuário não for admin
    }
}
