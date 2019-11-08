<?php

use App\Prioridad;
use Illuminate\Database\Seeder;

class PrioridadsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Prioridad::truncate();

        $prioridad = new Prioridad;
        $prioridad->clave = "PE1";
        $prioridad->nombre = "FORMACIÓN INTEGRAL";
        $prioridad->descripcion = "Líneas de Acción:
1.1.- Padres de Familia y Formación para Adultos: Programa ampliado que le aporte mayores herramientas a los padres de familia para el acompañamiento de sus hijos.

1.2.- Modelo Educativo Ignaciano (Liderazgo y ESpiritualidad): Constante formación de la comunidad educativa que favorezca la apropiación del Modelo Educativo Ignaciano.

1.3.- Deportes, Arte y Cultura: Integración de las acciones de deporte, arte y cultura como un eje transversal en la formación integral de los alumnos.

1.4.- Dimensión Global: Refiere al desarrollo de competencias que forman a la persona para hacerlo competitivo como ciudadano del mundo, responsable y activo, capaz de aprovechar los avances tecnológicos y las múltiples posibilidades que permite la globalidad.";
        $prioridad->save();

        $prioridad = new Prioridad;
        $prioridad->clave = "PE2";
        $prioridad->nombre = "CALIDAD HUMANA, PROFESIONAL Y ACADÉMICA";
        $prioridad->descripcion = "Líneas de Acción:
2.1.- Idioma: Fortalecimiento del área a partir de la implementación de mecanismos certificadores nacionales e internacionales, así como el mejoramiento de la infraestructura propia.

2.2.- Retención de Alumnos: Mecanismos de seguimiento académico y retención de alumnos para disminuir el índice de deserción.

2.3.- Innovación Educativa: Desarrollo de estrategias innovadoras que fortalezcan el proceso de enseñanza-aprendizaje bajo el sustento del modelo educativo.

2.4.- Capacitación y Formación al Personal: Programa de formación que permita el desarrollo humano y profesional del personal directivo, académico, administrativo y de servicios.

2.5.- Tecnología Educativa (TIC's): Desarrollo de metodologías y aplicaciones tecnológicas que faciliten la actualización del proceso de enseñanza-aprendizaje.";
        $prioridad->save();

		$prioridad = new Prioridad;
        $prioridad->clave = "PE3";
        $prioridad->nombre = "FORTALECIMIENTO INSTITUCIONAL";
        $prioridad->descripcion = "Líneas de Acción:
3.1.- Sistema de Calidad: Mecanismo que permite la medición de las acciones operativas del colegio con base en sistemas de calidad nacionales e internacionales.

3.2.- Actualización normativa y de procesos: Elaboración y documentación de todos los procedimientos operativos, administrativos y académicos del colegio.

3.3.- Planeación Institucional: Mecanismos institucionales que permiten la gestión y operación del colegio, a través de indicadores para el seguimiento de los objetivos de las diferentes áreas.

3.4.- Responsabilidad Social: Emprender un modelo de gestión basado en las normas nacionales de responsabilidad social para las organizaciones, haciendo énfasis en la ética organizacional, la vinculación con los sectores estratégicos, la calidad de vida de nuestros colaboradores y el cuidado de nuestro medio ambiente.";
        $prioridad->save();

        $prioridad = new Prioridad;
        $prioridad->clave = "PE4";
        $prioridad->nombre = "COMUNICACIÓN Y PROMOCIÓN";
        $prioridad->descripcion = "Líneas de acción:
4.1.- Comunicación Institucional: Estrategias que permitan al interior tener una comunidad educativa más informada y hacia el exterior, la difusión de las actividades sustantivas que dan posicionamiento al colegio en la región.

4.2.- Mercadotecnia: Plan de promoción y publicidad que permita el aumento en la captación de alumnos.

4.3.- Exalumnos: Estrategias que permitan tener estrecha comunicación con los exalumnos del colegio";
        $prioridad->save();

        $prioridad = new Prioridad;
        $prioridad->clave = "PE5";
        $prioridad->nombre = "GESTIÓN ADMINISTRATIVA";
        $prioridad->descripcion = "Líneas de Acción:
5.1.- Administración de la Institución: Capacidad de asegurar el ingeso de los recursos financieros estables y suficientes en el corto y largo plazo y distribuirlos en tiempo y forma apropiada para cubrir los costos totales  del mantenimiento y conservación de la institución.

5.2.- Infraestructura y planta física: Desarrollo y equipamiento de espacios necesarios para llevar a cabo las actividades académicas, educativas y administrativas con calidad.

5.3.- Gestión de Recursos Humanos: Procedimientos que permitan la retención del talento y la óptima selección de candidatos con el objetivo de crear un clima organizacional positivo y elevar el sentido de pertenencia.

5.4.- Fuentes Alternas de Ingreso: Mecanismos que permitan la diversificación en la captación de los ingresos.";
        $prioridad->save();

    }
}
