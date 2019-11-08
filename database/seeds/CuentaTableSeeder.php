<?php


use App\Cuenta;
use Illuminate\Database\Seeder;

class CuentaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cuenta::truncate();

        $dato = new Cuenta;
        $dato->nombre = "Gastos de Viaje";
        $dato->descripcion = "Inter -- Homólogos -- Gtos. Conferencistas -- Hotel -- Camion -- Avión -- Comidas -- Casetas -- Gasolina";
        $dato->save();

        $dato = new Cuenta;
        $dato->nombre = "Cursos a Maestros";
        $dato->descripcion = "Diplomados -- Maestrias -- Doctorados -- Ejercicios Espirituales --Capacitaciones";
        $dato->save();

        $dato = new Cuenta;
        $dato->nombre = "AT'N a Personal";
        $dato->descripcion = "Galletas -- Café -- Botana -- Refrescos -- Agua -- Comidas -- Arreglos florales por defunción";
        $dato->save();

        $dato = new Cuenta;
        $dato->nombre = "Material Computacional";
        $dato->descripcion = "Tintas -- Cartuchos -- Tóner";
        $dato->save();

        $dato = new Cuenta;
        $dato->nombre = "Material Didactico";
        $dato->descripcion = "Libros Maestros -- Juegos Mesa -- Posters";
        $dato->save();

        $dato = new Cuenta;
        $dato->nombre = "Papeleria";
        $dato->descripcion = "Material Personal Inicio de Ciclo -- Boletas Calificaciones -- Ordenes de Compra -- Papeleria Diversa -- Hojas y Sobres Membretados -- Servicio de Copias (renta) -- Formatos Iscripciones y Reeinscripciones -- Formatos Becas -- Timbres Fiscales";
        $dato->save();

        $dato = new Cuenta;
        $dato->nombre = "Eventos Escolares";
        $dato->descripcion = "Conferencias -- Bellas Artes -- Semana Ignaciana -- Inauguraciones";
        $dato->save();

        $dato = new Cuenta;
        $dato->nombre = "Eventos Culturales";
        $dato->descripcion = "Visitas a museos -- Munio -- Interculturales";
        $dato->save();

        $dato = new Cuenta;
        $dato->nombre = "Deportes";
        $dato->descripcion = "Día Pereyra -- Camión inter -- Hotel inter (alumnos) -- Arbitrajes -- Balones -- Inscrip. Torneos/Conadeip -- Redes -- Tableros -- Serv. Paramédicos";
        $dato->save();

        $dato = new Cuenta;
        $dato->nombre = "No Deducibles";
        $dato->descripcion = "Gastos que no Reunen los Requisitos Fiscales -- Se Dividen en: No Deducibles Con Comprobante -- No Deducibles Sin Comprobante";
        $dato->save();

        $dato = new Cuenta;
        $dato->nombre = "Juntas Administrativas";
        $dato->descripcion = "Homólogos  Administradores";
        $dato->save();

        $dato = new Cuenta;
        $dato->nombre = "Juntas Academicas";
        $dato->descripcion = "Comida Posada -- Homólogos´Académicos";
        $dato->save();

        $dato = new Cuenta;
        $dato->nombre = "Encuentros/Retiros";
        $dato->descripcion = "Encuentros Alumnos Secundaria -- Retiros Bachillerato -- Retiros del Personal";
        $dato->save();

        $dato = new Cuenta;
        $dato->nombre = "Material Pre-Prim Alumnos";
        $dato->descripcion = "Libros Alumnos Inicio de Ciclo -- Materiales Alumnos Inicio de Ciclo";
        $dato->save();

        $dato = new Cuenta;
        $dato->nombre = "Publicidad y Propaganda";
        $dato->descripcion = "";
        $dato->save();

        $dato = new Cuenta;
        $dato->nombre = "Cuotas y Suscripciones";
        $dato->descripcion = "";
        $dato->save();
    }
}
