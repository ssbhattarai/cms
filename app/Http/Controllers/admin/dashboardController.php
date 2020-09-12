<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function __contruct()
    {
        return $this->middleware('role:Admin');
    }

    public function index(){
        return view('admin.superadmin');
    }
}
