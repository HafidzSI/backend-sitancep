<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Kreait\Firebase\Auth;
use Kreait\Firebase\Exception\FirebaseException;
use Session;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,...$roles)
    {
        $uid = Session::get('uid');
        $user = app('firebase.auth')->getUser($uid);

        $data = explode('-',$user->displayName);
        $role = $data[0];

        if(in_array($role,$roles))
        {
            return $next($request);
        }
        return redirect()->route('home');
    }
}
