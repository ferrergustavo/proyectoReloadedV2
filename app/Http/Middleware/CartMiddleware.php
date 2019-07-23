<?php

namespace App\Http\Middleware;

use Closure;
use App\Cart;

class CartMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        session()->put(Cart::SESSION_KEY, new Cart(session(Cart::SESSION_KEY)));

        return $next($request);
    }
}
