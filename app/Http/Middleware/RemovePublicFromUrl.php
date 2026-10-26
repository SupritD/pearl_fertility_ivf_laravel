<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RemovePublicFromUrl
{
    /**
     * Handle an incoming request.
     * Redirect any request containing /public to its clean canonical URL.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $uri = $request->getRequestUri();

        // Redirect requests starting with /public or /public/ to the clean URL without /public
        if (preg_match('#^/public(?:/(.*))?$#is', $uri, $matches)) {
            $cleanPath = '/' . ltrim($matches[1] ?? '', '/');
            return redirect($cleanPath, 301);
        }

        return $next($request);
    }
}
