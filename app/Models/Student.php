<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Student extends Model
{

    use LogsActivity;



    protected static $logOnlyDirty = true;
    protected static $logAttributes = ['name','email', 'dob', 'gender','religion', 'cast' ];
    protected static $logName = 'student';

    protected $fillable = [
        'roll_number', 'name', 'dob', 'gender', 'religion', 'cast','permanent_full_address',
        'current_full_address', 'phone_number', 'email', 'admission_date',
        'passed_college_name', 'passed_year', 'marks_obtain'
    ];


    public function user()
    {
        return $this->belongsTo('App\User', 'email');
    }
}
