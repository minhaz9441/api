<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;
use App\Profile;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::create([
            'title' => 'customer',
            'description' => 'customer Roles'
        ]);
        $role = Role::create([
            'title' => 'admin',
            'description' => 'Admin Roles'
        ]);
        
        $user = User::create([
            'name' => 'minhaj',
            'email' => 'minhaz.ccna@gmail.com',
            'phone' => '6305636756',
            'password' => Hash::make('123456')
        ]);

        $user = User::create([
            'role_id' => 2,
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'phone' => '9347111393',
            'password' => Hash::make('123456')
        ]);

        $profile = Profile::create([
            'user_id' => 1,
            'phone' => '6305636756',
            'firstname' => 'shaik',
            'lastname' => 'minhaj',
        ]);
        $profile = Profile::create([
            'user_id' => 2,
            'phone' => '9347111393'
        ]);
    }
}
