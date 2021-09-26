<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\Permission;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();


        $adminRole = Role::create([

            'name' => 'admin',
            'display_name' => 'User Administrator', // optional
            'description' => 'role is allowed to any thing', // optional

        ]);

        $admin = User::create([
            'name' => 'admin',
            'password' => bcrypt('123'),
            'email' => 'admin@admin.com'
        ]);

        $admin->attachRole($adminRole);

        ///////////////////////////////////////////////////////////////////////////

        $userRole = Role::create([

            'name' => 'user',
            'display_name' => 'User', // optional
            'description' => 'role is allowed to create , update , delete , comment to Articles', // optional

        ]);


        $user = User::create([
            'name' => 'user',
            'password' => bcrypt('123'),
            'email' => 'user@user.com'
        ]);

        $user->attachRole($userRole);

    }
}
