<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->char('roll_number', 6)->unique();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('gender');
            $table->string('dob');
            $table->string('religion');
            $table->string('cast');
            $table->string('permanent_full_address');
            $table->string('current_full_address');
            $table->string('phone_number', 10);
            $table->datetime('admission_date', 4)->default(carbon::now());
            $table->string('passed_college_name');
            $table->string('passed_year', 4);
            $table->decimal('marks_obtain', 4, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
