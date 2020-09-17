<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\View;
use Spatie\Permission\Models\Role;
use DB;
use Hash;
use PDF;
use Auth;
use File;
use App\User;
use App\Http\Requests\StoreUser;

class UserController extends Controller
{   
    public function __construct()
    {
        $this->middleware('role:Admin|Manager');
    }  

    public function index()
    {
        $data = User::all();
        return view ( 'admin.pages.user.alluser', compact('data') );
    }


    public function create()
    {   
        $roles = Role::pluck('name','name')->all();
        return view('admin.pages.user.create',compact('roles'));
    }

    public function store(StoreUser $request)
    {   
         $input = $request->all();
         $input['password'] = Hash::make($input['password']);
         $input['status'] = $request->has('status');   
         $user = User::create($input);
         $user->assignRole($request->input('roles'));
         return redirect()->route('users.index')
                            ->with('success','User created successfully');
            
    }

   
    public function show($id)
    {
        $user = User::find($id);
        return view('admin.pages.user.show', compact('user'));
    }

  
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::pluck('name','name')->all();
        $userRole = $user->roles->pluck('name','name')->all();  //! for multiselect You must change the first() -> all() function
        // dd($userRole);
        return view('admin.pages.user.edit',compact('user','roles','userRole'));
    }



    public function profile_update(Request $request)
    {

        $userId = Auth::user()->id;
        $user = User::find($userId);
        $input = $request->except(['_method','_token', 'roles','email']);
        
        if($input['password']) {
            $input['password'] = Hash::make($input['password']);
            $user->password=$input['password'];
        }

        if($request->has('image')){
            $filename = public_path().'/profile/'.$user->image;

            if (File::exists($filename)) {
                File::delete($filename);
                // unlink($filename);
            }
            $imageName = time().'-'.Auth::user()->id.'.'.$request->image->getClientOriginalExtension();   
            $request->image->move(public_path('profile/'), $imageName);
            $user->image=$imageName;
        }

        $user->name=$input['name'];
        $user->save();
        return  redirect()->back()->with('success', 'Profile Updated Successfully !');
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            // 'password'=>'required|same:confirm_password',
            'roles' => 'required'
        ]);

        $input = $request->except(['password','_method','_token', 'roles']);
        $user = User::find($id);
        $user->update($input);
        // $user = User::whereId($id)->update($input);
        DB::table('model_has_roles')->where('model_id',$id)->delete(); //delete the previous Role of the User
        $user->assignRole($request->get('roles'));
        return redirect()->route('users.index')
                        ->with('success','User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('users.index')
                        ->with('success','User deleted successfully');
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


    public function createPDF($id) {
        $user = User::find($id);
        $pdf = PDF::loadView('admin.pages.user.user_pdf', compact('user'));
        
        return $pdf->download($user->name.'.pdf');

      }
    

}
