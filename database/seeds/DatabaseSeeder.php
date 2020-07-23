<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);
        $this->call(UserAddressSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(EstateSeeder::class);
        $this->call(PermissionSeeder::class);
    }
}
