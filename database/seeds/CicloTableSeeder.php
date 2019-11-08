<?php

use App\Ciclo;
use Illuminate\Database\Seeder;

class CicloTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ciclo::truncate();

        $dato = new Ciclo;
        $dato->ciclo = "2018-2019";
        $dato->save();

        $dato = new Ciclo;
        $dato->ciclo = "2019-2020";
        $dato->save();
    }
}
