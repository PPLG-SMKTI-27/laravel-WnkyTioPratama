<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class OwnerOnly
{
    public function handle(Request $request, Closure $next): Response
    {
        $user = $request->user();

        if (!$user) {
            abort(403);
        }

        $ownerEmail = config('app.owner_email');

        if (!$ownerEmail || $user->email !== $ownerEmail) {
            abort(403, 'Owner access only.');
        }

        return $next($request);
    }
}
