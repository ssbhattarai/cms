<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::truncate();

        // DB::table('role_user')->truncate();

        $adminRole = Role::where('name', 'admin')->first();
        $managerRole = Role::where('name', 'manager')->first();
        $teacherRole = Role::where('name', 'teacher')->first();
        $studentRole = Role::where('name', 'student')->first();
        $viewerRole = Role::where('name', 'viewer')->first();


        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('iamshyam'),
        ]);


        $manager = User::create([
            'name' => 'Manager User',
            'email' => 'manager@example.com',
            'password' => Hash::make('iamshyam'),
        ]);

        $teacher = User::create([
            'name' => 'Teacher User',
            'email' => 'teacher@example.com',
            'password' => Hash::make('iamshyam'),
        ]);

        $student = User::create([
            'name' => 'Student User',
            'email' => 'student@example.com',
            'password' => Hash::make('iamshyam'),
        ]);


        $viewer = User::create([
            'name' => 'Viewer User',
            'email' => 'viewer@example.com',
            'password' => Hash::make('iamshyam'),
        ]);

        $admin->roles()->attach($adminRole);
        $manager->roles()->attach($managerRole);
        $teacher->roles()->attach($teacherRole);
        $student->roles()->attach($studentRole);
        $viewer->roles()->attach($viewerRole);


    }
}
