<?php

namespace Enigma\Modules\Core\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Enigma\Modules\Core\Helpers\Helper;
use Enigma\Modules\Core\Repositories\Member\MemberRepository as Member;

class ActivationMiddleware
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
        // Check if user is activated
        if(!Helper::isActiveMember()){
            $activation = Helper::getMemberActivation();
            if($activation == Member::NEED_ACTIVATION){
                abort(500, "Anda belum melakukan aktivasi akun <br/> Silakan buka halaman aktivasi");
            } elseif (($activation == Member::INACTIVE) || ($activation == Member::BLOCKED)) {
                abort(500, "Anda tidak dapat mengakses halaman ini! <br/> Silakan menghubungi Admin anda");
            }
        }
        
        // Check is company is activated
        if(!Helper::isActiveCompany()){
            abort(500, "Lembaga Pendidikan anda belum diaktivasi! <br/> Silakan menghubungi Admin anda");
        }
        
        return $next($request);
    }
}
