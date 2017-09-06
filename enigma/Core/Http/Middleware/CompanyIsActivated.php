<?php
namespace Enigma\Modules\Core\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate;
use Enigma\Modules\Core\Helper\Helper;
use Closure;

class CompanyIsActivated extends Authenticate
{

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$guards)
    {
        // Auth Middleware
        $this->authenticate($guards);

        // Organization Middleware
        $this->checkCompany();

        return $next($request);
    }

    private function checkCompany()
    {
        // Check company
        $slug = $request->route()->parameter('slug');
        if (!Helper::validateSlug($slug)) {
            abort(404);
        }

        if (!Helper::isActiveCompany()) {
            return redirect()->to('payment');
        }
    }
}
