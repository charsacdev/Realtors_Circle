<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        $user = Auth::user(); // Get the authenticated user

        // Check if the user is authenticated and their role matches the expected role
        if (!$user || $user->role !== $role) {
            if($user->role == 'realtor')
            {
                return redirect()->route('realtor.dashboard');

            }elseif($user->role == 'agency'){

                return redirect()->route('agency.dashboard');
            }elseif($user->role == 'admin'){
                return redirect()->route('admin.dashboard');
            }else{
                abort(403);
            }
        }

        return $next($request);
    }
}
