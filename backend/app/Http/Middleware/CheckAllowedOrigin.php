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
     *
     * Allowed entries support a leading "*." wildcard (e.g. "https://*.vercel.app")
     * so any Vercel deployment/preview URL is accepted, and a bare "*" to
     * allow any origin.
     */
    public function handle(Request $request, Closure $next): Response
    {
        $origin = $request->headers->get('Origin');

        if ($origin) {
            if ($origin !== $request->getSchemeAndHttpHost()) {
                if (! $this->originAllowed($origin)) {
                    return response()->json(['message' => 'Forbidden.'], 403);
                }
            }
        }

        return $next($request);
    }

    private function originAllowed(string $origin): bool
    {
        $origin = strtolower(trim($origin));

        foreach ((array) config('cors.allowed_origins') as $allowed) {
            $allowed = strtolower(trim((string) $allowed));

            if ($allowed === '*') {
                return true;
            }

            // Exact match (scheme + host, no trailing slash)
            if ($origin === $allowed) {
                return true;
            }

            // Wildcard host with scheme, e.g. https://*.vercel.app
            if (str_contains($allowed, '://*.')) {
                $allowedHost  = parse_url($allowed, PHP_URL_HOST);
                $originHost   = parse_url($origin, PHP_URL_HOST);
                $allowedScheme = parse_url($allowed, PHP_URL_SCHEME);
                $originScheme  = parse_url($origin, PHP_URL_SCHEME);

                if (
                    $allowedHost !== false
                    && $originHost !== false
                    && $allowedScheme === $originScheme
                    && str_starts_with($allowedHost, '*.')
                ) {
                    $suffix = substr($allowedHost, 1); // .vercel.app

                    if ($originHost === $suffix || str_ends_with($originHost, $suffix)) {
                        return true;
                    }
                }

                continue;
            }

            // Bare host wildcard, e.g. *.vercel.app
            if (str_starts_with($allowed, '*.')) {
                $suffix = substr($allowed, 1);

                if (str_ends_with($origin, $suffix)) {
                    return true;
                }
            }
        }

        return false;
    }
}