<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAllowedOrigin
{
    /**
     * Reject API requests that carry an Origin header which is not in the
     * allowed list. Requests without an Origin header (curl, same-site
     * navigation) pass through; this primarily stops other websites from
     * submitting inquiries on behalf of the resort.
     */
    public function handle(Request $request, Closure $next): Response
    {
        $origin = $request->headers->get('Origin');

        if ($origin) {
            if ($origin !== $request->getSchemeAndHttpHost()) {
                if (! in_array($origin, (array) config('cors.allowed_origins'), true)) {
                    return response()->json(['message' => 'Forbidden.'], 403);
                }
            }
        }

        return $next($request);
    }
}