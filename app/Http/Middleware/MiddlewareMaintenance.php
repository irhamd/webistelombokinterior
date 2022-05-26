<?php

namespace App\Http\Middleware;

use App\Models\SettingWebsite;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MiddlewareMaintenance
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        try {
            $cek = SettingWebsite::find(1);
            if ($cek->is_maintenance) {
                return response()->view('pages.maintenence.maintanace');
            } else {
                return $next($request);
            }
        } catch (\Throwable $th) {
            return response()->view('pages.maintenence.maintanace');
        }
    }
}
