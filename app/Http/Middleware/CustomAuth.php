<?php

namespace App\Http\Middleware;

use Closure;
use Session;
class CustomAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {  
        $path=$request->path();
       if(($path=='login' or $path=='register') and Session::get('user')){
        return redirect('/home');
       }else if(($path!=='login' and !Session::get('user')) and($path!=='register' and !Session::get('user'))) {
       
       return redirect('/login');
       }else if($path=='/'){
        return redirect('/');
       }
        return $next($request);
    }
}
