<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class QuoteAuthMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        if (!session('quote_authenticated')) {
            return redirect()->route('quote.login');
        }

        return $next($request);
    }
}