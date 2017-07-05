<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class CheckUserSession
{

    public function handle($request, Closure $next)
    {
        if (!$request->session()->exists('DBNAME') && !$request->session()->exists('USERNAME')) {
            // user value cannot be found in session
            return redirect('/login');
        }
        return $next($request);

    }

}

?>
