<?php

use App\Concepto;
use Illuminate\Database\Seeder;

class ConceptoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	/*--------GASTOS DE VIAJE-----------*/
        $dato = new Concepto;
        $dato->concepto = "Inter";
        $dato->cuenta_id = "1";
        $dato->save();

        $dato = new Concepto;
        $dato->concepto = "Homologos";
        $dato->cuenta_id = "1";
        $dato->save();

        $dato = new Concepto;
        $dato->concepto = "Gastos Conferencistas";
        $dato->cuenta_id = "1";
        $dato->save();

        $dato = new Concepto;
        $dato->concepto = "Hotel";
        $dato->cuenta_id = "1";
        $dato->save();

        $dato = new Concepto;
        $dato->concepto = "Camion";
        $dato->cuenta_id = "1";
        $dato->save();

        $dato = new Concepto;
        $dato->concepto = "Avion";
        $dato->cuenta_id = "1";
        $dato->save();

        $dato = new Concepto;
        $dato->concepto = "Comidas";
        $dato->cuenta_id = "1";
        $dato->save();

        $dato = new Concepto;
        $dato->concepto = "Casetas";
        $dato->cuenta_id = "1";
        $dato->save();

        $dato = new Concepto;
        $dato->concepto = "Gasolina";
        $dato->cuenta_id = "1";
        $dato->save();

/*--------CURSOS A MAESTROS-----------*/

        $dato = new Concepto;
        $dato->concepto = "Diplomados";
        $dato->cuenta_id = "2";
        $dato->save();

        $dato = new Concepto;
        $dato->concepto = "Maestrias";
        $dato->cuenta_id = "2";
        $dato->save();

        $dato = new Concepto;
        $dato->concepto = "Doctorados";
        $dato->cuenta_id = "2";
        $dato->save();

        $dato = new Concepto;
        $dato->concepto = "Ejercicios Espirituales";
        $dato->cuenta_id = "2";
        $dato->save();

        $dato = new Concepto;
        $dato->concepto = "Capacitaciones";
        $dato->cuenta_id = "2";
        $dato->save();

 /*--------Atencion al personal-----------*/
        $dato = new Concepto;
        $dato->concepto = "Galletas";
        $dato->cuenta_id = "3";
        $dato->save();

        $dato = new Concepto;
        $dato->concepto = "Cafe";
        $dato->cuenta_id = "3";
        $dato->save();

        $dato = new Concepto;
        $dato->concepto = "Botana";
        $dato->cuenta_id = "3";
        $dato->save();

        $dato = new Concepto;
        $dato->concepto = "Refrescos";
        $dato->cuenta_id = "3";
        $dato->save();

        $dato = new Concepto;
        $dato->concepto = "Agua";
        $dato->cuenta_id = "3";
        $dato->save();

        $dato = new Concepto;
        $dato->concepto = "Comidas";
        $dato->cuenta_id = "3";
        $dato->save();

        $dato = new Concepto;
        $dato->concepto = "Arreglos florales por defuncion";
        $dato->cuenta_id = "3";
        $dato->save();

/*--------Material Computacional-----------*/
        $dato = new Concepto;
        $dato->concepto = "Tintas";
        $dato->cuenta_id = "4";
        $dato->save();

        $dato = new Concepto;
        $dato->concepto = "Cartuchos";
        $dato->cuenta_id = "4";
        $dato->save();

        $dato = new Concepto;
        $dato->concepto = "Toner";
        $dato->cuenta_id = "4";
        $dato->save();

/*--------Material Didactico-----------*/
        $dato = new Concepto;
        $dato->concepto = "Libros Maestros";
        $dato->cuenta_id = "5";
        $dato->save();

        $dato = new Concepto;
        $dato->concepto = "Juegos de Mesa";
        $dato->cuenta_id = "5";
        $dato->save();

        $dato = new Concepto;
        $dato->concepto = "Posters";
        $dato->cuenta_id = "5";
        $dato->save();

/*--------Papeleria-----------*/

        $dato = new Concepto;
        $dato->concepto = "Materiales personal Inicio de Ciclo";
        $dato->cuenta_id = "6";
        $dato->save();

        $dato = new Concepto;
        $dato->concepto = "Boletas Calificaciones";
        $dato->cuenta_id = "6";
        $dato->save();

        $dato = new Concepto;
        $dato->concepto = "Ordenes de Compra";
        $dato->cuenta_id = "6";
        $dato->save();

        $dato = new Concepto;
        $dato->concepto = "Papeleria diversa";
        $dato->cuenta_id = "6";
        $dato->save();

        $dato = new Concepto;
        $dato->concepto = "Hojas y sobres membretados";
        $dato->cuenta_id = "6";
        $dato->save();

        $dato = new Concepto;
        $dato->concepto = "Servicio de copias (renta)";
        $dato->cuenta_id = "6";
        $dato->save();

        $dato = new Concepto;
        $dato->concepto = "Formato inscrip y reinscrip";
        $dato->cuenta_id = "6";
        $dato->save();

        $dato = new Concepto;
        $dato->concepto = "Formatos becas";
        $dato->cuenta_id = "6";
        $dato->save();

        $dato = new Concepto;
        $dato->concepto = "Timbres fiscales";
        $dato->cuenta_id = "6";
        $dato->save();

/*--------Eventos Escolares-----------*/
        $dato = new Concepto;
        $dato->concepto = "Conferencias";
        $dato->cuenta_id = "7";
        $dato->save();

        $dato = new Concepto;
        $dato->concepto = "Bellas Artes";
        $dato->cuenta_id = "7";
        $dato->save();

        $dato = new Concepto;
        $dato->concepto = "Semana Ignaciana";
        $dato->cuenta_id = "7";
        $dato->save();

        $dato = new Concepto;
        $dato->concepto = "Inauguraciones";
        $dato->cuenta_id = "7";
        $dato->save();

/*--------No  Deducibles-----------*/
        $dato = new Concepto;
        $dato->concepto = "Gastos que no reunen los requisitos fiscales";
        $dato->cuenta_id = "10";
        $dato->save();

        $dato = new Concepto;
        $dato->concepto = "Se dividen en: nodeducibles CON comprobante";
        $dato->cuenta_id = "10";
        $dato->save();

        $dato = new Concepto;
        $dato->concepto = "No deducibles ISN comprobante";
        $dato->cuenta_id = "10";
        $dato->save();

/*--------Junta academica-----------*/
		$dato = new Concepto;
        $dato->concepto = "Comida posada";
        $dato->cuenta_id = "12";
        $dato->save();

        $dato = new Concepto;
        $dato->concepto = "Homólogos Academicos";
        $dato->cuenta_id = "12";
        $dato->save();

/*--------Encuentros - Retiros-----------*/
		$dato = new Concepto;
        $dato->concepto = "Encuentros alumnos Secundaria";
        $dato->cuenta_id = "13";
        $dato->save();

        $dato = new Concepto;
        $dato->concepto = "Retiros bachillerato";
        $dato->cuenta_id = "13";
        $dato->save();

        $dato = new Concepto;
        $dato->concepto = "Retiros del personal";
        $dato->cuenta_id = "13";
        $dato->save();

/*--------Encuentros - Retiros-----------*/
		$dato = new Concepto;
        $dato->concepto = "Libros Alumnos Inicio de Cliclo";
        $dato->cuenta_id = "14";
        $dato->save();

        $dato = new Concepto;
        $dato->concepto = "Materiales Alumnos Inicio Ciclo";
        $dato->cuenta_id = "14";
        $dato->save();
    
    }
}
