<?php

use App\Seccion;
use Illuminate\Database\Seeder;

class SeccionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Seccion::truncate();

        $dato = new Seccion;
        $dato->nombre = "Primaria";
        $dato->save();

        $dato = new Seccion;
        $dato->nombre = "Secundaria";
        $dato->save();

        $dato = new Seccion;
        $dato->nombre = "Bachillerato";
        $dato->save();

        $dato = new Seccion;
        $dato->nombre = "Prescolar";
        $dato->save();
    }
}
