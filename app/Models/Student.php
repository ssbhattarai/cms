<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{



    protected $fillable = [
        'roll_number', 'name', 'dob', 'gender', 'religion', 'cast','permanent_full_address',
        'current_full_address', 'phone_number', 'email', 'admission_date',
        'passed_college_name', 'passed_year', 'marks_obtain'
    ];


}
