<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use PDF;
use DB;
use App\user;
use App\Http\Requests\StoreStudent;

class StudentController extends Controller
{
    public function __contruct()
    {

        $this->middleware('role:Admin|Manager');
    }
    

    public function index()
    {
        $students = Student::all();
        return view('admin.pages.student.index', compact('students'));

    }
    public function search(Request $request)
    {
        
        $search = $request->get('search');
        
        $students = DB::table('students')
                        ->where('name', 'LIKE', '%'. $search .'%')
                        ->orWhere('phone_number', 'LIKE', $search .'%')
                        ->orWhere('roll_number', 'LIKE', $search .'%')
                        ->orWhere('email', 'LIKE', '%'. $search .'%')
                        ->orWhere('gender', 'LIKE', $search .'%')
                        ->orWhere('cast', 'LIKE', $search .'%')
                        ->orWhere('religion', 'LIKE', $search .'%')
                        ->orWhere('permanent_full_address', 'LIKE', '%'.$search .'%')
                        ->orWhere('current_full_address', 'LIKE', '%'.$search .'%')
                        ->orWhere('current_full_address', 'LIKE', '%'.$search .'%')
                        ->orWhere('passed_year', 'LIKE', $search)
                        ->orWhere('dob', 'LIKE', $search)
                        ->get();
        return view('admin.pages.student.index', compact('students'));
        
        
    }


   
    public function create()
    {   
        $users = DB::table('users')
                    ->join('model_has_roles', 'users.id', '=', 'model_has_roles.model_id')
                    ->join('roles', 'roles.id', '=', 'model_has_roles.role_id')
                    ->select('users.name', 'users.email')
                    ->where('roles.name', '=', 'Student')
                    ->get();

        return view('admin.pages.student.create', compact('users'));
    }

  
    public function store(StoreStudent $request)
    {
        $input = $request->all();
      
        $student = Student::create($input);
        return redirect()->route('students.index')
                ->with('success','New Student added successfully');
    }

    public function show($id)
    {   
        
        $student = Student::find($id);
        return view('admin.pages.student.show', compact('student'));
    }

   
    public function edit($id)
    {
        $student = Student::find($id);
        $users = DB::table('users')
                    ->join('model_has_roles', 'users.id', '=', 'model_has_roles.model_id')
                    ->join('roles', 'roles.id', '=', 'model_has_roles.role_id')
                    ->select('users.name', 'users.email')
                    ->where('roles.name', '=', 'Student')
                    ->get();
        // dd($users);
        return view('admin.pages.student.edit', compact(['student', 'users']));
    }


    public function update(StoreStudent $request, $id)
    {
        $input = $request->except(['email','_method','_token']);
        $student = Student::find($id);
        $student->update($input);
        return redirect()->route('students.index')
                ->with('success', 'The Student is Updated Successfully');
    }

    public function destroy($id)
    {
        Student::find($id)->delete();
        return redirect()->route('students.index')->with('success', 'Student Is Deleted Successfully');
    }

    public function studentPDF($id) 
    {
        $student = Student::find($id);
        PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);
        $pdf = PDF::loadView('admin.pages.student.student_pdf', compact('student'));
        
        return $pdf->download($student->name.'.pdf');

    }
}
