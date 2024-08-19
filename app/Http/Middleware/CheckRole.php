<?php


namespace App\Http\Middleware;

use App\Helpers\MainHelper;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {

        if (Auth::check()) {
            $user = auth()->user();
            if ($user['role'] != MainHelper::ROLE_ADMIN) {
                abort(403, 'Bu sahifaga kirish huquqi yo\'q');
            }
        }

        return $next($request);
    }
}
