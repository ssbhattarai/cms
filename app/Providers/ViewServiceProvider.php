<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use DB;
use App\Models\About;
use App\User;
use Spatie\Permission\Models\Role;


class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {   
        //* All these function send the data to the specific view with out any route;
        view()->composer('frontend.Landing', function ($view) {
            $view->with('SliderImages',  DB::table('image_sliders')->get());

        });

        view()->composer('frontend.pages.aboutus', function ($view){
            $view->with('aboutus', DB::table('abouts')->orderBy('id', 'desc')->first());
        });

        view()->composer('admin.superadmin', function ($view){
            $allUser = DB::table('users')->count();
            $rolesWithUsers = Role::withCount('users')->get();
            
            // $all_users_with_all_their_roles = User::with('roles')->get();

            // dd($all_users_with_all_their_roles->role->name);
            $view->with([
                'totaluser' => $allUser,
                'rolesWithuserCount' => $rolesWithUsers,
                // 'totalAdminUser' => $allAdmin
            ]);
        });
    }
}
