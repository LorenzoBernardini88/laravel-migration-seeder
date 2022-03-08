<?php

use App\travel;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
class DataTravels extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<10; $i++ ){
            
            $table = new travel();
            $table->destinazione = $faker->word();
            $table->Nazione = $faker->word();
            $table->distanza_km = $faker->randomNumber();
            $table->mezzo_trasporto = $faker-> word();
            $table->prezzo = $faker->randomNumber(); 

            $table->save();
        }
    }
}
