<?php

use App\Viaggio;
use Illuminate\Database\Seeder;

class travelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $viaggio = new Viaggio();

            $viaggio->destination = 'Malta';
            $viaggio->departure = 'Roma Fiumicino';
            $viaggio->period = 'alta stagione';
            $viaggio->stay_length = '10 giorni' ;
            $viaggio->departure_date = '2022-20-08';
            $viaggio->ceck_in_date = '2022-10-08';
            $viaggio->accommodation = 'casa vacanza';
            $viaggio->price = 580.50 ;

            $viaggio->save();
    }
}
