<?php

use App\Area;
use Illuminate\Database\Seeder;

class AreaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Area::truncate();

        /*-----------------primaria----------------*/

        $dato = new Area;
        $dato->nombre = "Educacion Artistica";
        $dato->gestion_id = "5";
        $dato->save();

        $dato = new Area;
        $dato->nombre = "test Area 1";
        $dato->gestion_id = "1";
        $dato->save();


/*---------------------- Dirección de Finanzas ------------------*/
        $dato = new Area;
        $dato->nombre = "Secretaria";
        $dato->gestion_id = "2";
        $dato->save();

        $dato = new Area;
        $dato->nombre = "Auxiliar de Contabilidad";
        $dato->gestion_id = "2";
        $dato->save();

        $dato = new Area;
        $dato->nombre = "Caja";
        $dato->gestion_id = "2";
        $dato->save();

        $dato = new Area;
        $dato->nombre = "Auxiliar de Cobranza";
        $dato->gestion_id = "2";
        $dato->save();

        $dato = new Area;
        $dato->nombre = "Auxiliar de contabilidad / Nomina";
        $dato->gestion_id = "2";
        $dato->save();

/*---------------------- Dirección Administrativa ------------------*/
        $dato = new Area;
        $dato->nombre = "Casa de Oración";
        $dato->gestion_id = "3";
        $dato->save();

        $dato = new Area;
        $dato->nombre = "Recursos Humanos";
        $dato->gestion_id = "3";
        $dato->save();

        $dato = new Area;
        $dato->nombre = "Colope";
        $dato->gestion_id = "3";
        $dato->save();

        $dato = new Area;
        $dato->nombre = "Sistemas y Mtto Equipo de Computo";
        $dato->gestion_id = "3";
        $dato->save();

        $dato = new Area;
        $dato->nombre = "Servicios Generales Preescolar y Primaria";
        $dato->gestion_id = "3";
        $dato->save();

        $dato = new Area;
        $dato->nombre = "Servicios Generales Secundaria y Bachillerato";
        $dato->gestion_id = "3";
        $dato->save();

        $dato = new Area;
        $dato->nombre = "Enfermeria";
        $dato->gestion_id = "3";
        $dato->save();

        $dato = new Area;
        $dato->nombre = "Almacen";
        $dato->gestion_id = "3";
        $dato->save();

        $dato = new Area;
        $dato->nombre = "Servicio Medico Secundaria y Bachillerato";
        $dato->gestion_id = "3";
        $dato->save();

        $dato = new Area;
        $dato->nombre = "Compras Institucionales";
        $dato->gestion_id = "3";
        $dato->save();


/*---------------------- Dirección Preescolar ------------------*/
        $dato = new Area;
        $dato->nombre = "Secretaria Recepcionista";
        $dato->gestion_id = "4";
        $dato->save();

        $dato = new Area;
        $dato->nombre = "Asistente de Direccion";
        $dato->gestion_id = "4";
        $dato->save();

        $dato = new Area;
        $dato->nombre = "Sistema de Control Escolar";
        $dato->gestion_id = "4";
        $dato->save();

        $dato = new Area;
        $dato->nombre = "Departamento Psicopedagogico";
        $dato->gestion_id = "4";
        $dato->save();

        $dato = new Area;
        $dato->nombre = "Engargado de Actividades Club Amigos";
        $dato->gestion_id = "4";
        $dato->save();

        $dato = new Area;
        $dato->nombre = "Coordinación de Formación Ignaciana";
        $dato->gestion_id = "4";
        $dato->save();

        $dato = new Area;
        $dato->nombre = "Coordinación de Cómputo";
        $dato->gestion_id = "4";
        $dato->save();

        $dato = new Area;
        $dato->nombre = "Coordinación de Educación Física";
        $dato->gestion_id = "4";
        $dato->save();

        $dato = new Area;
        $dato->nombre = "Coordinación Académica";
        $dato->gestion_id = "4";
        $dato->save();


/*---------------------- Dirección Primaria ------------------*/

        $dato = new Area;
        $dato->nombre = "Secretaria Recepcionista";
        $dato->gestion_id = "5";
        $dato->save();

        $dato = new Area;
        $dato->nombre = "Secretaria de Dirección";
        $dato->gestion_id = "5";
        $dato->save();

        $dato = new Area;
        $dato->nombre = "Sistema de Control Escolar";
        $dato->gestion_id = "5";
        $dato->save();

        $dato = new Area;
        $dato->nombre = "SDepartamento Psicopedagógico";
        $dato->gestion_id = "5";
        $dato->save();

        $dato = new Area;
        $dato->nombre = "Coordinación de Nivel Primaria Alta";
        $dato->gestion_id = "5";
        $dato->save();

        $dato = new Area;
        $dato->nombre = "Coordinación de Nivel Primaria Baja";
        $dato->gestion_id = "5";
        $dato->save();

        $dato = new Area;
        $dato->nombre = "Coordinación de Formación Ignaciana";
        $dato->gestion_id = "5";
        $dato->save();

        $dato = new Area;
        $dato->nombre = "Coordinación de Cómputo";
        $dato->gestion_id = "5";
        $dato->save();

        $dato = new Area;
        $dato->nombre = "Coordinación de Educación Física";
        $dato->gestion_id = "5";
        $dato->save();

        $dato = new Area;
        $dato->nombre = "Coordinación Académica";
        $dato->gestion_id = "5";
        $dato->save();

/*---------------------- Dirección Secundaria ------------------*/
        $dato = new Area;
        $dato->nombre = "Secretaria Recepcionista";
        $dato->gestion_id = "6";
        $dato->save();

        $dato = new Area;
        $dato->nombre = "Secretaria de Direccion";
        $dato->gestion_id = "6";
        $dato->save();

        $dato = new Area;
        $dato->nombre = "Sistema de Control Escolar";
        $dato->gestion_id = "6";
        $dato->save();

        $dato = new Area;
        $dato->nombre = "Departamento Psicopedagógico";
        $dato->gestion_id = "6";
        $dato->save();

        $dato = new Area;
        $dato->nombre = "Coordinación de Formación Ignaciana";
        $dato->gestion_id = "6";
        $dato->save();

        $dato = new Area;
        $dato->nombre = "Coordinación de Español";
        $dato->gestion_id = "6";
        $dato->save();

        $dato = new Area;
        $dato->nombre = "Coordinación de Físico Matemátoco";
        $dato->gestion_id = "6";
        $dato->save();

        $dato = new Area;
        $dato->nombre = "Coordinación de Educación Física";
        $dato->gestion_id = "6";
        $dato->save();

        $dato = new Area;
        $dato->nombre = "Coordinación de Cómputo";
        $dato->gestion_id = "6";
        $dato->save();

        $dato = new Area;
        $dato->nombre = "Coordinación de Nivel 1°";
        $dato->gestion_id = "6";
        $dato->save();

        $dato = new Area;
        $dato->nombre = "Coordinación de Nivel 2°";
        $dato->gestion_id = "6";
        $dato->save();

        $dato = new Area;
        $dato->nombre = "Coordinación de Nivel 3°";
        $dato->gestion_id = "6";
        $dato->save();

        $dato = new Area;
        $dato->nombre = "Coordinación de Químico Biológicas";
        $dato->gestion_id = "6";
        $dato->save();

        $dato = new Area;
        $dato->nombre = "Laboratorios de Ciencias";
        $dato->gestion_id = "6";
        $dato->save();

        $dato = new Area;
        $dato->nombre = "Coordinación de Ciencias Sociales";
        $dato->gestion_id = "6";
        $dato->save();





/*---------------------- Dirección bachillerato ------------------*/

        $dato = new Area;
        $dato->nombre = "Secretaria Recepcionista";
        $dato->gestion_id = "7";
        $dato->save();

        $dato = new Area;
        $dato->nombre = "Secretaria de Dirección";
        $dato->gestion_id = "7";
        $dato->save();

        $dato = new Area;
        $dato->nombre = "Sistema de Control Escolar";
        $dato->gestion_id = "7";
        $dato->save();

        $dato = new Area;
        $dato->nombre = "Departamento Psicopedagógico";
        $dato->gestion_id = "7";
        $dato->save();

        $dato = new Area;
        $dato->nombre = "Coordinación de Español";
        $dato->gestion_id = "7";
        $dato->save();

        $dato = new Area;
        $dato->nombre = "Coordinación Física Matemátoco";
        $dato->gestion_id = "7";
        $dato->save();

        $dato = new Area;
        $dato->nombre = "Coordinación Químico Biológicas";
        $dato->gestion_id = "7";
        $dato->save();

        $dato = new Area;
        $dato->nombre = "Laboratorios de Ciencias";
        $dato->gestion_id = "7";
        $dato->save();

        $dato = new Area;
        $dato->nombre = "Coordinación de Cómputo";
        $dato->gestion_id = "7";
        $dato->save();

        $dato = new Area;
        $dato->nombre = "Coordinación de Ciencias Sociales";
        $dato->gestion_id = "7";
        $dato->save();

        $dato = new Area;
        $dato->nombre = "Coordinación de Nivel 4°";
        $dato->gestion_id = "7";
        $dato->save();

        $dato = new Area;
        $dato->nombre = "Coordinación de Nivel 5°";
        $dato->gestion_id = "7";
        $dato->save();

        $dato = new Area;
        $dato->nombre = "Coordinación de Nivel 6°";
        $dato->gestion_id = "7";
        $dato->save();

/*---------------------- Dirección Formación Ignaciana ------------------*/

        $dato = new Area;
        $dato->nombre = "Formación para Adultos";
        $dato->gestion_id = "8";
        $dato->save();

        $dato = new Area;
        $dato->nombre = "Coordinador Primaria / Preescolar";
        $dato->gestion_id = "8";
        $dato->save();

        $dato = new Area;
        $dato->nombre = "Coordinador Secundaria";
        $dato->gestion_id = "8";
        $dato->save();

        $dato = new Area;
        $dato->nombre = "Coordinador Bachillerato";
        $dato->gestion_id = "8";
        $dato->save();

/*---------------------- Coordinación General Academica ------------------*/

        $dato = new Area;
        $dato->nombre = "Coordinación General de Inglés";
        $dato->gestion_id = "9";
        $dato->save();

        $dato = new Area;
        $dato->nombre = "Coordinación de TIC y Apoyo Académico";
        $dato->gestion_id = "9";
        $dato->save();

        $dato = new Area;
        $dato->nombre = "Biblioteca";
        $dato->gestion_id = "9";
        $dato->save();

/*---------------------- Coordinación de Deportes ------------------*/
        $dato = new Area;
        $dato->nombre = "Futbol";
        $dato->gestion_id = "10";
        $dato->save();

        $dato = new Area;
        $dato->nombre = "Basquetbol";
        $dato->gestion_id = "10";
        $dato->save();

        $dato = new Area;
        $dato->nombre = "Voleibol";
        $dato->gestion_id = "10";
        $dato->save();

        $dato = new Area;
        $dato->nombre = "Atletismo";
        $dato->gestion_id = "10";
        $dato->save();

        $dato = new Area;
        $dato->nombre = "Gpo. Animacion";
        $dato->gestion_id = "10";
        $dato->save();


/*---------------------- Coordinación de Comunicación ------------------*/
        $dato = new Area;
        $dato->nombre = "Diseño y Comunicación";
        $dato->gestion_id = "11";
        $dato->save();

        $dato = new Area;
        $dato->nombre = "Comunicación Institucional";
        $dato->gestion_id = "11";
        $dato->save();

/*---------------------- Coordinación de Comunicación ------------------*/
        $dato = new Area;
        $dato->nombre = "test Area 12";
        $dato->gestion_id = "12";
        $dato->save();
    }
}
