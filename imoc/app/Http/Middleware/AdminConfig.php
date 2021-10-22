<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;

class AdminConfig
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    public function handle(Request $request, Closure $next)
    {
        foreach (User::where('ido', 'dictator')->get() as $user)
            $password = $user->password;

        if ($password == null)
            return response(view('user.admin_configure'));

        return $next($request);
    }
}
