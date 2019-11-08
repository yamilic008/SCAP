<?php

use App\Gestion;
use Illuminate\Database\Seeder;

class GestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //esto es para que limpie la tabla antes de insertar los registros
        Gestion::truncate();

        $gestion = new Gestion;
        $gestion->nombre = "Rectoría";
        $gestion->save();

        $gestion = new Gestion;
        $gestion->nombre = "Dirección de Finanzas";
        $gestion->save();

        $gestion = new Gestion;
        $gestion->nombre = "Dirección Administrativa";
        $gestion->save();

        $gestion = new Gestion;
        $gestion->nombre = "Dirección Preescolar";
        $gestion->save();

        $gestion = new Gestion;
        $gestion->nombre = "Dirección Primaria";
        $gestion->save();

        $gestion = new Gestion;
        $gestion->nombre = "Dirección Secundaria";
        $gestion->save();

        $gestion = new Gestion;
        $gestion->nombre = "Dirección Bachillerato";
        $gestion->save();

        $gestion = new Gestion;
        $gestion->nombre = "Dirección Formación Ignaciana";
        $gestion->save();

        $gestion = new Gestion;
        $gestion->nombre = "Coordinación General Académica";
        $gestion->save();

        $gestion = new Gestion;
        $gestion->nombre = "Coordinación de Deportes";
        $gestion->save();

        $gestion = new Gestion;
        $gestion->nombre = "Coordinación de Comunicación";
        $gestion->save();

        $gestion = new Gestion;
        $gestion->nombre = "Coordinación de Idiomas";
        $gestion->save();
    }
}
