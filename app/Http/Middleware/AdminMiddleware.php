<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Ksgreg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $ksgreg = Ksgreg::all();

        // Pass products to the controller
        $request->merge(['ksgreg' => $ksgreg]);
        // Check if the user is authenticated as admin
        if (Auth::guard('admin')->check()) {
            return $next($request);
        }

        // Redirect to login page for admin
        return redirect()->route('admin')->with('error', 'Unauthorized access.');
    }
}
