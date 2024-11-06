<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Symfony\Component\HttpFoundation\Response;

class Authenticate
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        // return $request->expectsJson() ? null : route('login');
        if ($request->expectsJson()) {
            return null;
        }
        // Check if the request URI contains 'backend' or 'frontend'
        if ($request->is('backend/*')) {
            return route('backend.login');
        } elseif ($request->is('frontend/*')) { /* akan digunakan jika frontend telah tersedia */
            return route('frontend.login'); /* akan digunakan jika frontend telah tersedia */
        }
        // Default redirect if none of the above match
        return route('backend.login'); /* ganti ke frontend jika telah tersedia */
    }
}
