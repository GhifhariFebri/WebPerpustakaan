<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckLibrarian
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    #middleware Librarian only page handling
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check() && Auth::user()->role == 'librarian') {
            return $next($request);
        }
        else if (Auth::check() && Auth::user()->role == 'members') {
            return redirect('/home')->with('error', 'You do not have admin access.');
        }
        
        return redirect('/login');
    }
}
?>
