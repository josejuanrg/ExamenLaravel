<?php

namespace service_control\Http\Middleware;

use Closure;
use Session;
use Redirect;
class validateUserStatus
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
        $dataSession = Session::get('userSession');
        if ($dataSession['status'] == 1) {
            return $next($request);
        }else{
            return Redirect::to('/iniciar-sesion');
        }
        
    }
}
