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
        $user->firstname = 'Jean';
        $user->lastname = 'Machin';
        $user->email = 'jean@gmail.com';
        $user->address_id = 1;
        $user->password = Hash::make('password');
        $user->role_id = $role->id;
        $user->save();

        $role = Role::where('name', 'customer')->firstOrfail();

        $user = new User();
        $user->firstname = 'Marie';
        $user->lastname = 'Machine';
        $user->email = 'marie@gmail.com';
        $user->address_id = 2;
        $user->password = Hash::make('password');
        $user->role_id = $role->id;
        $user->save();
    }
}
