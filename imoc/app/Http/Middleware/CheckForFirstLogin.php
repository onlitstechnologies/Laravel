<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class CheckForFirstLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    public function check()
    {
        $users = User::all();
        if ($users == null)
            return true;
        else
            return false;
    }

    public function handle(Request $request, Closure $next)
    {
        if ($this->check() == true)
            // echo "First login reqired!";
            return response(view('dashboard'));

        return $next($request);
    }
}
