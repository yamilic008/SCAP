<?php

use App\LineaAccion;
use Illuminate\Database\Seeder;

class LineaAccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LineaAccion::truncate();

        $gestion = new LineaAccion;
        $gestion->clave = "LA1";
        $gestion->nombre = "PADRES DE FAMILIA Y FORMACIÓN PARA ADULTOS";
        $gestion->prioridad_id = "1";
        $gestion->save();

        $gestion = new LineaAccion;
        $gestion->clave = "LA2";
        $gestion->nombre = "MODELO EDUCATIVO IGNACIANO (LIDERAZGO Y ESPIRITUALIDAD IGNACIANA)";
        $gestion->prioridad_id = "1";
        $gestion->save();

        $gestion = new LineaAccion;
        $gestion->clave = "LA3";
        $gestion->nombre = "DEPORTES, ARTE Y CULTURA";
        $gestion->prioridad_id = "1";
        $gestion->save();

        $gestion = new LineaAccion;
        $gestion->clave = "LA4";
        $gestion->nombre = "DIMENSIÓN GLOBAL";
        $gestion->prioridad_id = "1";
        $gestion->save();
/*              --------------------- 2 ----------------------    */
        $gestion = new LineaAccion;
        $gestion->clave = "LA1";
        $gestion->nombre = "IDIOMA";
        $gestion->prioridad_id = "2";
        $gestion->save();

        $gestion = new LineaAccion;
        $gestion->clave = "LA2";
        $gestion->nombre = "RETENCIÓN DE ALUMNOS";
        $gestion->prioridad_id = "2";
        $gestion->save();

        $gestion = new LineaAccion;
        $gestion->clave = "LA3";
        $gestion->nombre = "INNOVACIÓN EDUCATIVA";
        $gestion->prioridad_id = "2";
        $gestion->save();

        $gestion = new LineaAccion;
        $gestion->clave = "LA4";
        $gestion->nombre = "CAPACITACIÓN Y FORMACIÓN AL PERSONAL";
        $gestion->prioridad_id = "2";
        $gestion->save();

        $gestion = new LineaAccion;
        $gestion->clave = "LA5";
        $gestion->nombre = "TECNOLOGÍA EDUCATIVA";
        $gestion->prioridad_id = "2";
        $gestion->save();
/*              --------------------- 3 ----------------------    */
        $gestion = new LineaAccion;
        $gestion->clave = "LA1";
        $gestion->nombre = "SISTEMA DE CALIDAD";
        $gestion->prioridad_id = "3";
        $gestion->save();

        $gestion = new LineaAccion;
        $gestion->clave = "LA2";
        $gestion->nombre = "ACTUALIZACIÓN NORMATIVA Y DE PROCESOS";
        $gestion->prioridad_id = "3";
        $gestion->save();

        $gestion = new LineaAccion;
        $gestion->clave = "LA3";
        $gestion->nombre = "PLANEACIÓN INSTITUCIONAL";
        $gestion->prioridad_id = "3";
        $gestion->save();

        $gestion = new LineaAccion;
        $gestion->clave = "LA4";
        $gestion->nombre = "RESPONSABILIDAD SOCIAL";
        $gestion->prioridad_id = "3";
        $gestion->save();
/*              --------------------- 4 ----------------------    */
        $gestion = new LineaAccion;
        $gestion->clave = "LA1";
        $gestion->nombre = "COMUNICACIÓN INSTITUCIONAL";
        $gestion->prioridad_id = "4";
        $gestion->save();

        $gestion = new LineaAccion;
        $gestion->clave = "LA2";
        $gestion->nombre = "MERCADOTECNIA";
        $gestion->prioridad_id = "4";
        $gestion->save();

        $gestion = new LineaAccion;
        $gestion->clave = "LA3";
        $gestion->nombre = "EXALUMNOS";
        $gestion->prioridad_id = "4";
        $gestion->save();
/*              --------------------- 5 ----------------------    */
        $gestion = new LineaAccion;
        $gestion->clave = "LA1";
        $gestion->nombre = "ADMINISTRACIÓN INSTITUCIONAL";
        $gestion->prioridad_id = "5";
        $gestion->save();

        $gestion = new LineaAccion;
        $gestion->clave = "LA2";
        $gestion->nombre = "INFRAESTRUCTURA Y PLANTA FÍSICA";
        $gestion->prioridad_id = "5";
        $gestion->save();

        $gestion = new LineaAccion;
        $gestion->clave = "LA3";
        $gestion->nombre = "GESTIÓN DE RECURSOS HUMANOS";
        $gestion->prioridad_id = "5";
        $gestion->save();

        $gestion = new LineaAccion;
        $gestion->clave = "LA4";
        $gestion->nombre = "FUENTES ALTERNAS / DIVERSAS DE INGRESO";
        $gestion->prioridad_id = "5";
        $gestion->save();

    }
}
