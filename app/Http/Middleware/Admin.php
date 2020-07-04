<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Models\Settings;

class Admin
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
        if (!empty(Auth::user()->id)) {
            $id = Auth::user()->id;
            $role = \DB::table('roles')->select('roles.name','roles.permission')->whereIn('roles.id',function ($query) use ($id) {
                $query->select('users.role_id')->from('users')->where('users.id',$id);
            })->first();
            $permissions = json_decode($role->permission);
            $request->attributes->add(['permission' => $permissions]);
        }
        if (!Auth::check()) {
            return redirect('login');
        }
        $setting = Settings::findOrFail(1);
        view()->share('setting',$setting);
        return $next($request);
    }
}
