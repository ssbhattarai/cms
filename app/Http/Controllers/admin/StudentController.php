<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use PDF;
use DB;
use App\user;


class StudentController extends Controller
{
    public function __contruct()
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
        $students = Student::all();
        return view('admin.pages.student.index', compact('students'));

    }

    public function searchStudentData($query, $q)
    {
        if($q == null) return $query;
        return $query
                    ->where('name', 'LIKE', "%{$q}%")
                    ->orWhere('email', 'LIKE', "%{$q}%")
                    ->orWhere('phone_number', 'LIKE', "%{$q}%")
                    ->orWhere('roll_number', 'LIKE', "%{$q}%");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'roll_number' => 'required',
            'name' => 'required',
            'email' => 'required|unique:students',
            'phone_number' => 'required|size:10',
            'dob' => 'required',
            'gender' => 'required',
            'religion' => 'required',
            'cast' => 'required',
            'permanent_full_address' => 'required|min:6',
            'current_full_address' => 'required|min:6',
            'passed_college_name' => 'required|min:8',
            'passed_year' => 'required|size:4',
            'marks_obtain' => 'required'
        ]);
        $input = $request->all();
        // dd($input);
        // dd($input['name']);
        $student = Student::create($input);
        return redirect()->route('students.index')
                ->with('success','New Student added successfully');
        // dd($input);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::find($id);
        return view('admin.pages.student.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }

    public function studentPDF($id) 
    {
        $student = Student::find($id);
        PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);
        $pdf = PDF::loadView('admin.pages.student.student_pdf', compact('student'));
        
        return $pdf->download($student->name.'.pdf');

    }
}
