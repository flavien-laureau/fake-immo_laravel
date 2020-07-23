<?php

use App\UserAddress;
use Illuminate\Database\Seeder;

class UserAddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $address = new UserAddress();
        $address->user_id = 1;
        $address->line = '7 rue du bidule';
        $address->city = 'Dijon';
        $address->postal_code = 21000;
        $address->country = 'France';
        $address->save();

        $address = new UserAddress();
        $address->user_id = 2;
        $address->line = '11 rue de la lib';
        $address->city = 'Auxonne';
        $address->postal_code = 21130;
        $address->country = 'France';
        $address->save();

        $address = new UserAddress();
        $address->user_id = 3;
        $address->line = '1 longue avenue';
        $address->city = 'Paris';
        $address->postal_code = 75000;
        $address->country = 'France';
        $address->save();
    }
}
