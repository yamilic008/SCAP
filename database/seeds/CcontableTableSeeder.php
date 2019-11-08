<?php

use App\Ccontable;
use Illuminate\Database\Seeder;

class CcontableTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ccontable::truncate();

        /*-----------------primaria----------------*/

        $dato = new Ccontable;
        $dato->CuentaContable = "500.1.19";
        $dato->seccions_id = "1";
        $dato->cuentas_id = "1";
        $dato->save();

        $dato = new Ccontable;
        $dato->CuentaContable = "500.1.20";
        $dato->seccions_id = "1";
        $dato->cuentas_id = "2";
        $dato->save();

        $dato = new Ccontable;
        $dato->CuentaContable = "500.1.22";
        $dato->seccions_id = "1";
        $dato->cuentas_id = "3";
        $dato->save();

        $dato = new Ccontable;
        $dato->CuentaContable = "500.1.40";
        $dato->seccions_id = "1";
        $dato->cuentas_id = "4";
        $dato->save();

        $dato = new Ccontable;
        $dato->CuentaContable = "500.1.41";
        $dato->seccions_id = "1";
        $dato->cuentas_id = "5";
        $dato->save();

        $dato = new Ccontable;
        $dato->CuentaContable = "500.1.45";
        $dato->seccions_id = "1";
        $dato->cuentas_id = "6";
        $dato->save();

        $dato = new Ccontable;
        $dato->CuentaContable = "500.1.46";
        $dato->seccions_id = "1";
        $dato->cuentas_id = "7";
        $dato->save();

        $dato = new Ccontable;
        $dato->CuentaContable = "500.1.47";
        $dato->seccions_id = "1";
        $dato->cuentas_id = "8";
        $dato->save();

        $dato = new Ccontable;
        $dato->CuentaContable = "500.1.48";
        $dato->seccions_id = "1";
        $dato->cuentas_id = "9";
        $dato->save();

        $dato = new Ccontable;
        $dato->CuentaContable = "500.1.55";
        $dato->seccions_id = "1";
        $dato->cuentas_id = "10";
        $dato->save();

        $dato = new Ccontable;
        $dato->CuentaContable = "500.1.73";
        $dato->seccions_id = "1";
        $dato->cuentas_id = "11";
        $dato->save();

        $dato = new Ccontable;
        $dato->CuentaContable = "500.1.74";
        $dato->seccions_id = "1";
        $dato->cuentas_id = "12";
        $dato->save();

        $dato = new Ccontable;
        $dato->CuentaContable = "500.1.90";
        $dato->seccions_id = "1";
        $dato->cuentas_id = "13";
        $dato->save();

        $dato = new Ccontable;
        $dato->CuentaContable = "500.1.94";
        $dato->seccions_id = "1";
        $dato->cuentas_id = "14";
        $dato->save();

        /*-----------------secundaria----------------*/

        $dato = new Ccontable;
        $dato->CuentaContable = "500.2.19";
        $dato->seccions_id = "2";
        $dato->cuentas_id = "1";
        $dato->save();

        $dato = new Ccontable;
        $dato->CuentaContable = "500.2.20";
        $dato->seccions_id = "2";
        $dato->cuentas_id = "2";
        $dato->save();

        $dato = new Ccontable;
        $dato->CuentaContable = "500.2.22";
        $dato->seccions_id = "2";
        $dato->cuentas_id = "3";
        $dato->save();

        $dato = new Ccontable;
        $dato->CuentaContable = "500.2.40";
        $dato->seccions_id = "2";
        $dato->cuentas_id = "4";
        $dato->save();

        $dato = new Ccontable;
        $dato->CuentaContable = "500.2.41";
        $dato->seccions_id = "2";
        $dato->cuentas_id = "5";
        $dato->save();

        $dato = new Ccontable;
        $dato->CuentaContable = "500.2.45";
        $dato->seccions_id = "2";
        $dato->cuentas_id = "6";
        $dato->save();

        $dato = new Ccontable;
        $dato->CuentaContable = "500.2.46";
        $dato->seccions_id = "2";
        $dato->cuentas_id = "7";
        $dato->save();

        $dato = new Ccontable;
        $dato->CuentaContable = "500.2.47";
        $dato->seccions_id = "2";
        $dato->cuentas_id = "8";
        $dato->save();

        $dato = new Ccontable;
        $dato->CuentaContable = "500.2.48";
        $dato->seccions_id = "2";
        $dato->cuentas_id = "9";
        $dato->save();

        $dato = new Ccontable;
        $dato->CuentaContable = "500.2.55";
        $dato->seccions_id = "2";
        $dato->cuentas_id = "10";
        $dato->save();

        $dato = new Ccontable;
        $dato->CuentaContable = "500.2.73";
        $dato->seccions_id = "2";
        $dato->cuentas_id = "11";
        $dato->save();

        $dato = new Ccontable;
        $dato->CuentaContable = "500.2.74";
        $dato->seccions_id = "2";
        $dato->cuentas_id = "12";
        $dato->save();

        $dato = new Ccontable;
        $dato->CuentaContable = "500.2.90";
        $dato->seccions_id = "2";
        $dato->cuentas_id = "13";
        $dato->save();

 /*-----------------BACHILLERATO----------------*/

        $dato = new Ccontable;
        $dato->CuentaContable = "500.3.19";
        $dato->seccions_id = "3";
        $dato->cuentas_id = "1";
        $dato->save();

        $dato = new Ccontable;
        $dato->CuentaContable = "500.3.20";
        $dato->seccions_id = "3";
        $dato->cuentas_id = "2";
        $dato->save();

        $dato = new Ccontable;
        $dato->CuentaContable = "500.3.22";
        $dato->seccions_id = "3";
        $dato->cuentas_id = "3";
        $dato->save();

        $dato = new Ccontable;
        $dato->CuentaContable = "500.3.40";
        $dato->seccions_id = "3";
        $dato->cuentas_id = "4";
        $dato->save();

        $dato = new Ccontable;
        $dato->CuentaContable = "500.3.41";
        $dato->seccions_id = "3";
        $dato->cuentas_id = "5";
        $dato->save();

        $dato = new Ccontable;
        $dato->CuentaContable = "500.3.45";
        $dato->seccions_id = "3";
        $dato->cuentas_id = "6";
        $dato->save();

        $dato = new Ccontable;
        $dato->CuentaContable = "500.3.46";
        $dato->seccions_id = "3";
        $dato->cuentas_id = "7";
        $dato->save();

        $dato = new Ccontable;
        $dato->CuentaContable = "500.3.47";
        $dato->seccions_id = "3";
        $dato->cuentas_id = "8";
        $dato->save();

        $dato = new Ccontable;
        $dato->CuentaContable = "500.3.48";
        $dato->seccions_id = "3";
        $dato->cuentas_id = "9";
        $dato->save();

        $dato = new Ccontable;
        $dato->CuentaContable = "500.3.55";
        $dato->seccions_id = "3";
        $dato->cuentas_id = "10";
        $dato->save();

        $dato = new Ccontable;
        $dato->CuentaContable = "500.3.73";
        $dato->seccions_id = "3";
        $dato->cuentas_id = "11";
        $dato->save();

        $dato = new Ccontable;
        $dato->CuentaContable = "500.3.74";
        $dato->seccions_id = "3";
        $dato->cuentas_id = "12";
        $dato->save();

        $dato = new Ccontable;
        $dato->CuentaContable = "500.3.90";
        $dato->seccions_id = "3";
        $dato->cuentas_id = "13";
        $dato->save();

         /*-----------------PREESCOLAR----------------*/

        $dato = new Ccontable;
        $dato->CuentaContable = "500.4.19";
        $dato->seccions_id = "4";
        $dato->cuentas_id = "1";
        $dato->save();

        $dato = new Ccontable;
        $dato->CuentaContable = "500.4.20";
        $dato->seccions_id = "4";
        $dato->cuentas_id = "2";
        $dato->save();

        $dato = new Ccontable;
        $dato->CuentaContable = "500.4.22";
        $dato->seccions_id = "4";
        $dato->cuentas_id = "3";
        $dato->save();

        $dato = new Ccontable;
        $dato->CuentaContable = "500.4.40";
        $dato->seccions_id = "4";
        $dato->cuentas_id = "4";
        $dato->save();

        $dato = new Ccontable;
        $dato->CuentaContable = "500.4.41";
        $dato->seccions_id = "4";
        $dato->cuentas_id = "5";
        $dato->save();

        $dato = new Ccontable;
        $dato->CuentaContable = "500.4.45";
        $dato->seccions_id = "4";
        $dato->cuentas_id = "6";
        $dato->save();

        $dato = new Ccontable;
        $dato->CuentaContable = "500.4.46";
        $dato->seccions_id = "4";
        $dato->cuentas_id = "7";
        $dato->save();

        $dato = new Ccontable;
        $dato->CuentaContable = "500.4.47";
        $dato->seccions_id = "4";
        $dato->cuentas_id = "8";
        $dato->save();

        $dato = new Ccontable;
        $dato->CuentaContable = "500.4.48";
        $dato->seccions_id = "4";
        $dato->cuentas_id = "9";
        $dato->save();

        $dato = new Ccontable;
        $dato->CuentaContable = "500.4.55";
        $dato->seccions_id = "4";
        $dato->cuentas_id = "10";
        $dato->save();

        $dato = new Ccontable;
        $dato->CuentaContable = "500.4.73";
        $dato->seccions_id = "4";
        $dato->cuentas_id = "11";
        $dato->save();

        $dato = new Ccontable;
        $dato->CuentaContable = "500.4.74";
        $dato->seccions_id = "4";
        $dato->cuentas_id = "12";
        $dato->save();

        $dato = new Ccontable;
        $dato->CuentaContable = "500.4.90";
        $dato->seccions_id = "4";
        $dato->cuentas_id = "13";
        $dato->save();
        

    }
}
