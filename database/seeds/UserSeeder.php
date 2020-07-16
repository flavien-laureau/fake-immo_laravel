<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::where('name', 'admin')->firstOrfail();

        $user = new User();
        $user->name = 'Jean';
        $user->email = 'jean@gmail.com';
        $user->password = Hash::make('password');
        $user->role_id = $role->id;
        $user->save();
    }
}
