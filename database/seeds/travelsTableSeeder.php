<?php

use App\Viaggio;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;

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
            $viaggio->departure_date = date('Y-m-d');
            $viaggio->check_in_date = date('Y-m-d');
            $viaggio->accommodation = 'casa vacanza';
            $viaggio->price = 580.50 ;

            $viaggio->save();
    }
}
