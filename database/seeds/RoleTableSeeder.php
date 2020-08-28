<?php

use Illuminate\Database\Seeder;
use App\Models\Role;


class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superadmin = new Role();
        $superadmin->name = 'SUPER_ADMIN';
        $superadmin->save();

        $admin = new Role();
        $admin->name = 'ADMIN';
        $admin->save();

        $student = new Role();
        $student->name = 'STUDENT';
        $student->save();

        $teacher = new Role();
        $teacher->name = 'TEACHER';
        $teacher->save();

        $viewer = new Role();
        $viewer->name = 'VIEWER';
        $viewer->save();
    }
}
