<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class checkAdminOrUser
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //1.User-> dali je admin ili ne
        //2User-> da lo je korisnik admi ili ne

        $role = Auth::user()->role;

        if ($role !== 'admin') {
            return redirect('/');
        }

        return $next($request);
    }
}
