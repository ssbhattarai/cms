<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    public function redirectTo(){
        
        // User role
        // $role = User::roles()->get()->name;
        $role = Auth::user()->roles->pluck('name'); 
        // dd($role[0]);

        // if($role == 'SUPER_ADMIN'){
        //     return '/superadmin';
        // }
        
        // Check user role
        switch ($role[0]) {
            case 'SUPER_ADMIN':
                    return '/superadmin';
                break;
            case 'ADMIN':
                    return '/admin';
                break; 
            case 'STUDENT':
                    return '/student';
                break; 
            case 'TEACHER':
                    return '/teacher';
                break;
            case 'TEACHER':
                    return '/teacher';
                break;       
            default:
                    return '/login'; 
                break;
        }
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
