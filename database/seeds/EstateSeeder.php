<?php

use App\User;
use App\Estate;
use Illuminate\Database\Seeder;

class EstateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $estate = new Estate();
        $estate->title = "Petite maison";
        $estate->description = "Description" . " de " . $estate->title;
        $estate->type = "house";
        $estate->image = "imgMaison1.jpg";
        $estate->rooms = 7;
        $estate->square_meters = 120;
        $estate->price = 180000;
        $estate->admin_id = User::where('firstname', 'Jean')->firstOrfail()->id;
        $estate->save();

        $estate = new Estate();
        $estate->title = "Grand appartement";
        $estate->description = "Description" . " de " . $estate->title;
        $estate->type = "apartment";
        $estate->image = "imgMaison2.jpg";
        $estate->rooms = 6;
        $estate->square_meters = 100;
        $estate->price = 100000;
        $estate->admin_id = User::where('firstname', 'Jean')->firstOrfail()->id;
        $estate->save();

        $estate = new Estate();
        $estate->title = "Belle maison avec grand terrain";
        $estate->description = "Description" . " de " . $estate->title;
        $estate->type = "apartment";
        $estate->image = "imgMaison3.jpg";
        $estate->rooms = 4;
        $estate->square_meters = 95;
        $estate->price = 100000;
        $estate->admin_id = User::where('firstname', 'Jean')->firstOrfail()->id;
        $estate->save();
    }
}
