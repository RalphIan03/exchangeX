<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureSantaAccess
{
    public function handle(Request $request, Closure $next)
    {
        $granted = session('santa.access_granted', false);
        $expiresAt = session('santa.expires_at', null);

        if (! $granted || ! $expiresAt) {
            return redirect()->route('santa.show');
        }

        try {
            $expires = Carbon::parse($expiresAt);
        } catch (\Exception $e) {
            // invalid time format, force re-entry
            return redirect()->route('santa.show');
        }

        if (Carbon::now()->greaterThan($expires)) {
            // expired: clear session and redirect back to entry form
            session()->forget(['santa.access_granted', 'santa.granted_at', 'santa.expires_at']);
            return redirect()->route('santa.show')->with('error', 'Access expired — enter the Santa code again.');
        }

        return $next($request);
    }
}
