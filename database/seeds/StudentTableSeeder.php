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

       
        
        $count = 105;
        factory(Student::class, $count)->create();


        
    }
}
