<?php

use Illuminate\Database\Seeder;
use App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Carbon\Carbon;


class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('iamshyam'),
            'dob' => Carbon::now('Asia/Kathmandu'),
            'mobile_number' => '9843613596',
            'date_of_join' => Carbon::now('Asia/Kathmandu'),
            'status' => 1
        ]);
        $role = Role::create(['name' => 'Admin','guard_name' => 'web']);
        $permissions = Permission::pluck('id','id')->all();
        $role->syncPermissions($permissions);
        $user->assignRole([$role->id]);

        
    }
}
