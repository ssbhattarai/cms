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
        
        if(Auth::check()){
            $status = Auth::user()->status;
            // dd($status);
            $role = Auth::user()->hasRole('Student'); 

            
            if($role) {
                return '/student';
            } else {
                return '/admin';
            }
        }
        return '/login';
    }


    protected function credentials(\Illuminate\Http\Request $request)
    {
        //return $request->only($this->username(), 'password');
        return ['email' => $request->email, 'password' => $request->password, 'status' => 1];
    }

    // protected $redirectTo = RouteServiceProvider::HOME;


        // if(Auth::user()->hasRole('admin')){
        //     return '/admin';
        // }
    // }
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
