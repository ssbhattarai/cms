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

        $student = new Role();
        $student->name = 'STUDENT';
        $student->save();

    }
}
