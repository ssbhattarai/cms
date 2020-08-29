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
        
    //     $role = Auth::user()->roles->pluck('name'); 

    //     if($role[0] === 'admin' || $role[0] === 'manager' || $role[0] === 'teacher' ) {
    //         return '/admin';
    //     } else {
    //     switch ($role[0]) {
    //         case 'student':
    //                 return '/student';
    //             break;
    //         default:
    //                 return '/login'; 
    //             break;
    //     }
    // }

        if(Auth::user()->hasRole('admin')){
            return '/admin';
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
