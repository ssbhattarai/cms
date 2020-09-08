<?php

use Illuminate\Database\Seeder;
use App\Models\Student;
use App\User;
use Carbon\Carbon;
use Spatie\Permission\Models\Role;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $student = Student::create([
            'roll_number' => '123456',
            'dob' => Carbon::now(),
            'gender' => 'male',
            'religion' => 'hindu',
            'cast' => 'branmin',
            'permanent_full_address' => 'Manthali municipality -4 Ramechhap',
            'current_full_address' => 'Mahalaxmi municipality-1 Ramechhap',
            'phone_number' => '9843613596',
            'passed_college_name' => 'College Name full',
            'passed_year' => '2014',
            'marks_obtain' => '20'
        ]);

        
    }
}
