<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;

use App\User;

use Spatie\Permission\Models\Role;
use DB;
use Hash;


class UserController extends Controller
{   
    public function __construct()
    {
        $this->middleware('role:Admin');
    }  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::all();
        return view ( 'admin.pages.user.alluser' )->withData ( $data );
    }


    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $roles = Role::pluck('name','name')->all();
        return view('admin.pages.user.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
       
        $isValidate = $this->validate($request, [
            'name' => 'required|min:5',
            'email' => 'required|email|unique:users,email',
            'password' => ['required', 
               'min:6', 
               'regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/', 
               'same:confirm_password'
            ],
            'mobile_number' => 'required|size:10',
            'dob' => 'required',
            'roles' => 'required',

            // 'status' => 'required',
            ]);

                $input = $request->all();
                $input['password'] = Hash::make($input['password']);
                $user = User::create($input);
                $user->assignRole($request->input('roles'));
                return redirect()->route('users.index')
                ->with('success','User created successfully');
            
            

            
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::pluck('name','name')->all();
        $userRole = $user->roles->pluck('name','name')->all();
        dd($userRole);
        return view('users.edit',compact('user','roles','userRole'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }



    public function changeStatus(Request $request)
    {
        $user = User::find($request->user_id);
        $user->status = $request->status;
        $user->save();
  
        return response()->json(['success'=>'Status change successfully.']);
    }


    public function exportExcel() 
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }

    public function exportCSV()
    {
        return Excel::download(new UsersExport, 'users.csv', \Maatwebsite\Excel\Excel::CSV);
    }

    

}
