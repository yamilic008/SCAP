<?php

use App\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::truncate();
        Role::truncate();
        User::truncate();

            /* aqui se crean los roles  */
        $masterRole = Role::create(['name'=>'Super_Usuario']);   /* El Super usuario puede  administrar usuarios y ver todas las vistas */
        $AdminRole = Role::create(['name'=>'Admministrador']);  /* El administrador solo puede ver los proyectos de todos los supervisores y proyectistas*/
        $superRole = Role::create(['name'=>'Supervisor']);      /* El Supervisor solo puede ver los proyectos de los proyectistas*/
            $preRole = Role::create(['name'=>'Supervisor_Prescolar']);
            $primRole = Role::create(['name'=>'Supervisor_Primaria']);
            $secRole = Role::create(['name'=>'Supervisor_Secundaria']);
            $bachRole = Role::create(['name'=>'Supervisor_Bachillerato']);
            $cga = Role::create(['name'=>'Supervisor_CGA']);
            $cga = Role::create(['name'=>'Supervisor_FI']);
            $cga = Role::create(['name'=>'Supervisor_CyV']);
        $proyectRole = Role::create(['name'=>'Proyectista']);   /* el Proyectista solo puede editar y ver sus proyectos*/
        $editRole = Role::create(['name'=>'Editor']);           /* El editor solo puede editar las tablas de consulta para generar proyectos*/
        $SNRole = Role::create(['name'=>'SinAsignar']);           /* El editor solo puede editar las tablas de consulta para generar proyectos*/


            /* Aqui se designan los permisos para cada rol  que por ahora no se estan usando*/
      /*   $verTodosUsuarios = Permission::create(['name'=>'Ver Usuarios']);
        $crearTodosUsuarios = Permission::create(['name'=>'crear Usuarios']);
        $actualizarTodosUsuarios = Permission::create(['name'=>'actualizar Usuarios']);
        $eliminarTodosUsuarios = Permission::create(['name'=>'eliminar Usuarios']); */

        $admin = new User;
        $admin->name = 'Yamile Ibarra Ceniceros';
        $admin->email = 'yamilic008@gmail.com';
        $admin->password = bcrypt('melanie') ;
        $admin->save();

        $admin->assignRole($masterRole);


        $usuario = new User;
        $usuario->name = 'Jorge Gallegos';
        $usuario->email = 'jorge.a.gallegos@pereyra.edu.mx';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($editRole);

        $usuario = new User;
        $usuario->name = 'Jorge Gallegos';
        $usuario->email = 'jgallegos@me.com';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($AdminRole);

        $usuario = new User;
        $usuario->name = 'Eduardo Mejia';
        $usuario->email = 'eduardo.mejia@pereyra.edu.mx';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($proyectRole);

        $usuario = new User;
        $usuario->name = 'Eduardo Mejia';
        $usuario->email = 'emejiah_@hotmail.com';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($editRole);

        /*--------------------ususarios sin asignar--------------------------*/
        $usuario = new User;
        $usuario->name = 'Guadalupe Alba ';
        $usuario->email = 'guadalupe.alba@pereyra.edu.mx';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($SNRole);

        $usuario = new User;
        $usuario->name = 'Carmen Rosell';
        $usuario->email = 'carmen.rosell@pereyra.edu.mx';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($SNRole);

        $usuario = new User;
        $usuario->name = 'María Cristina Diaz de León Berdeja';
        $usuario->email = 'mariacristina.diaz@pereyra.edu.mx';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($SNRole);

        $usuario = new User;
        $usuario->name = 'Aurora Salas';
        $usuario->email = 'aurora.salas@pereyra.edu.mx';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($SNRole);

        $usuario = new User;
        $usuario->name = 'Magdalena Cerda';
        $usuario->email = 'magdalena.cerda@pereyra.edu.mx';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($SNRole);

        $usuario = new User;
        $usuario->name = 'Ruth Guzmán';
        $usuario->email = 'ruth.guzman@pereyra.edu.mx';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($SNRole);

        $usuario = new User;
        $usuario->name = 'Claudia González';
        $usuario->email = 'claudia.gonzalez@pereyra.edu.mx';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($SNRole);

        $usuario = new User;
        $usuario->name = 'Juana Ramírez';
        $usuario->email = 'juanamaria.ramirez@pereyra.edu.mx';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($SNRole);

        $usuario = new User;
        $usuario->name = 'Ileana González';
        $usuario->email = 'ileana.gonzalez@pereyra.edu.mx';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($SNRole);

        $usuario = new User;
        $usuario->name = 'Ignacio Frausto';
        $usuario->email = 'ignacio.frausto@pereyra.edu.mx';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($SNRole);

        $usuario = new User;
        $usuario->name = 'Laura Madero Rojas';
        $usuario->email = 'laura.madero@pereyra.edu.mx';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($SNRole);

        $usuario = new User;
        $usuario->name = 'Karla Belmonte';
        $usuario->email = 'karla.belmonte@pereyra.edu.mx';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($SNRole);

        $usuario = new User;
        $usuario->name = 'María Morales';
        $usuario->email = 'mariaeugenia.morales@pereyra.edu.mx';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($SNRole);

        $usuario = new User;
        $usuario->name = 'Claudia Muñoz';
        $usuario->email = 'c.munoz@pereyra.edu.mx';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($SNRole);

        $usuario = new User;
        $usuario->name = 'Nallely Cárdenas';
        $usuario->email = 'nallely.cardenas@pereyra.edu.mx';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($SNRole);

        $usuario = new User;
        $usuario->name = 'Rosa Ríos';
        $usuario->email = 'rosabertha.rios@pereyra.edu.mx';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($SNRole);

        $usuario = new User;
        $usuario->name = 'Lupita Salazar';
        $usuario->email = 'guadalupe.salazar@pereyra.edu.mx';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($SNRole);

        $usuario = new User;
        $usuario->name = 'Bertha Alicia Zivec De la Fuente';
        $usuario->email = 'berthaalicia.zivec@pereyra.edu.mx';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($SNRole);

        $usuario = new User;
        $usuario->name = 'Herminio Acevedo';
        $usuario->email = 'herminio.acevedo@pereyra.edu.mx';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($SNRole);

        $usuario = new User;
        $usuario->name = 'Roberta Cárdenas';
        $usuario->email = 'roberta.cardenas@pereyra.edu.mx';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($SNRole);

        $usuario = new User;
        $usuario->name = 'Ana Barba';
        $usuario->email = 'ana.barba@pereyra.edu.mx';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($SNRole);

        $usuario = new User;
        $usuario->name = 'Mónica Méndez';
        $usuario->email = 'monica.mendez@pereyra.edu.mx';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($SNRole);

        $usuario = new User;
        $usuario->name = 'Carlos Murillo';
        $usuario->email = 'carlos.murillo@pereyra.edu.mx';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($SNRole);

        $usuario = new User;
        $usuario->name = 'Miguel Carranza';
        $usuario->email = 'miguel.carranza@pereyra.edu.mx';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($SNRole);

        $usuario = new User;
        $usuario->name = 'Araceli Ramírez';
        $usuario->email = 'araceli.ramirez@pereyra.edu.mx';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($SNRole);

        $usuario = new User;
        $usuario->name = 'Martha Chávez';
        $usuario->email = 'martha.chavez@pereyra.edu.mx';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($SNRole);

        $usuario = new User;
        $usuario->name = 'Mario Cabrera';
        $usuario->email = 'mario.cabrera@pereyra.edu.mx';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($SNRole);

        $usuario = new User;
        $usuario->name = 'Paola Frigolet';
        $usuario->email = 'paola.frigolet@pereyra.edu.mx';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($SNRole);

        $usuario = new User;
        $usuario->name = 'Juan Martínez';
        $usuario->email = 'juanmanuel.martinez@pereyra.edu.mx';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($SNRole);

        $usuario = new User;
        $usuario->name = 'Mariana Anaya';
        $usuario->email = 'mariana.anaya@pereyra.edu.mx';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($SNRole);

        $usuario = new User;
        $usuario->name = 'Edna Reyes';
        $usuario->email = 'edna.reyes@pereyra.edu.mx';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($SNRole);

        $usuario = new User;
        $usuario->name = 'Imelda Herrera';
        $usuario->email = 'imelda.herrera@pereyra.edu.mx';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($SNRole);

        $usuario = new User;
        $usuario->name = 'Berenice Santos';
        $usuario->email = 'berenice.santos@pereyra.edu.mx';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($SNRole);

        $usuario = new User;
        $usuario->name = 'María Eugenia Córdova';
        $usuario->email = 'mariaeugenia.cordova@pereyra.edu.mx';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($SNRole);


        $usuario = new User;
        $usuario->name = 'Adriana Rodríguez';
        $usuario->email = 'adriana.rodriguez@pereyra.edu.mx';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($SNRole);

        $usuario = new User;
        $usuario->name = 'Beatriz Orozco';
        $usuario->email = 'beatriz.orozco@pereyra.edu.mx';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($SNRole);

        $usuario = new User;
        $usuario->name = 'Alejandra Alvarez Arambula';
        $usuario->email = 'alejandra.alvarez@pereyra.edu.mx';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($SNRole);

        $usuario = new User;
        $usuario->name = 'Concepción Salazar rodríguez';
        $usuario->email = 'concepcion.salazar@pereyra.edu.mx';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($SNRole);

        $usuario = new User;
        $usuario->name = 'Andrés Ramos';
        $usuario->email = 'jesusandres.ramos@pereyra.edu.mx';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($SNRole);

        $usuario = new User;
        $usuario->name = 'Marcela Muñoz';
        $usuario->email = 'marcela.munoz@pereyra.edu.mx';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($SNRole);

        $usuario = new User;
        $usuario->name = 'Ixcoatl González';
        $usuario->email = 'ixcoatl.gonzalez@pereyra.edu.mx';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($SNRole);

        $usuario = new User;
        $usuario->name = 'Alfadir Mireles';
        $usuario->email = 'alfadir.mireles@pereyra.edu.mx';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($SNRole);

        $usuario = new User;
        $usuario->name = 'Juan Matínez';
        $usuario->email = 'juanjose.martinez@pereyra.edu.mx';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($SNRole);

        $usuario = new User;
        $usuario->name = 'Jesús Loza';
        $usuario->email = 'jesus.loza@pereyra.edu.mx';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($SNRole);

        $usuario = new User;
        $usuario->name = 'Angela Prince Guerrero';
        $usuario->email = 'angela.prince@pereyra.edu.mx';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($SNRole);

        $usuario = new User;
        $usuario->name = 'Blanca Flores';
        $usuario->email = 'blanca.flores@pereyra.edu.mx';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($SNRole);

        $usuario = new User;
        $usuario->name = 'Ana Velázquez';
        $usuario->email = 'analaura.ramos@pereyra.edu.mx';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($SNRole);

        $usuario = new User;
        $usuario->name = 'Lucia Susana Urrutia Cavazos';
        $usuario->email = 'lucia.urrutia@pereyra.edu.mx';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($SNRole);

        $usuario = new User;
        $usuario->name = 'Juan Manuel Rodríguez Santos';
        $usuario->email = 'juanmanuel.rodriguez@pereyra.edu.mx';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($SNRole);

        $usuario = new User;
        $usuario->name = 'Victoria Dávila García';
        $usuario->email = 'victoria.davila@pereyra.edu.mx';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($SNRole);

        $usuario = new User;
        $usuario->name = 'Concepción Fernández';
        $usuario->email = 'concepcion.fernandez@pereyra.edu.mx';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($SNRole);

        $usuario = new User;
        $usuario->name = 'Ángeles De la Vega';
        $usuario->email = 'angeles.delavega@pereyra.edu.mx';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($SNRole);

        $usuario = new User;
        $usuario->name = 'Martha Cristina Velázquez Piña';
        $usuario->email = 'cristina.velazquez@pereyra.edu.mx';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($SNRole);

        $usuario = new User;
        $usuario->name = 'Jessica González Arrañaga';
        $usuario->email = 'jessica.gonzalez@pereyra.edu.mx';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($SNRole);

        $usuario = new User;
        $usuario->name = 'Marcela Ayala';
        $usuario->email = 'marcela.ayala@pereyra.edu.mx';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($SNRole);

        $usuario = new User;
        $usuario->name = 'Armando Mercado';
        $usuario->email = 'a.mercado@pereyra.edu.mx';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($SNRole);

        $usuario = new User;
        $usuario->name = 'María Esther Piña';
        $usuario->email = 'maesther.pina@pereyra.edu.mx';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($SNRole);

        $usuario = new User;
        $usuario->name = 'Laura Salas';
        $usuario->email = 'laura.salas@pereyra.edu.mx';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($SNRole);

        $usuario = new User;
        $usuario->name = 'Luis Manrique';
        $usuario->email = 'luis.manrique@pereyra.edu.mx';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($SNRole);

        $usuario = new User;
        $usuario->name = 'Roberto Padilla Obeso S. J.';
        $usuario->email = 'roberto.padilla@pereyra.edu.mx';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($SNRole);

        $usuario = new User;
        $usuario->name = 'P. Antonio Oseguera Maldonado';
        $usuario->email = 'antonio.oseguera@pereyra.edu.mx';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($SNRole);

        $usuario = new User;
        $usuario->name = 'Claudia García';
        $usuario->email = 'claudia.garcia@pereyra.edu.mx';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($SNRole);

        $usuario = new User;
        $usuario->name = 'Bertha Álvarez Tostado Mata';
        $usuario->email = 'bertha.alvarez@pereyra.edu.mx';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($SNRole);

        $usuario = new User;
        $usuario->name = 'Melba López';
        $usuario->email = 'melba.lopez@pereyra.edu.mx';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($SNRole);

        $usuario = new User;
        $usuario->name = 'Naty Reyes';
        $usuario->email = 'naty.reyes@pereyra.edu.mx';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($SNRole);

        $usuario = new User;
        $usuario->name = 'Lizeth Hernández';
        $usuario->email = 'lizeth.hernandez@pereyra.edu.mx';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($SNRole);

        $usuario = new User;
        $usuario->name = 'Martha Valdés';
        $usuario->email = 'martha.valdes@pereyra.edu.mx';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($SNRole);

        $usuario = new User;
        $usuario->name = 'Norma Bustos';
        $usuario->email = 'norma.bustos@pereyra.edu.mx';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($SNRole);

        $usuario = new User;
        $usuario->name = 'Jesús Morales';
        $usuario->email = 'jesus.morales@pereyra.edu.mx';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($SNRole);

        $usuario = new User;
        $usuario->name = 'Eduardo Alvarado';
        $usuario->email = 'eduardo.alvarado@pereyra.edu.mx';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($SNRole);

        $usuario = new User;
        $usuario->name = 'Miguel Valenzuela';
        $usuario->email = 'miguel.valenzuela@pereyra.edu.mx';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($SNRole);

        $usuario = new User;
        $usuario->name = 'Armando Canales';
        $usuario->email = 'armando.canales@pereyra.edu.mx';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($SNRole);

        $usuario = new User;
        $usuario->name = 'Saúl Ramos';
        $usuario->email = 'saul.ramos@pereyra.edu.mx';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($SNRole);

        $usuario = new User;
        $usuario->name = 'Susana Barrera';
        $usuario->email = 'susana.barrera@pereyra.edu.mx';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($SNRole);

        $usuario = new User;
        $usuario->name = 'Jacobo Aguilar Torres';
        $usuario->email = 'jacobo.aguilar@pereyra.edu.mx';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($SNRole);

        $usuario = new User;
        $usuario->name = 'Alberto Vidaña';
        $usuario->email = 'alberto.vidana@pereyra.edu.mx';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($SNRole);

        $usuario = new User;
        $usuario->name = 'Bertha Alicia Mijares Dávila';
        $usuario->email = 'bertha.mijares@pereyra.edu.mx';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($SNRole);


        $usuario = new User;
        $usuario->name = 'Luis Murra';
        $usuario->email = 'luis.murra@pereyra.edu.mx';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($SNRole);


        $usuario = new User;
        $usuario->name = 'Cecilia Salas';
        $usuario->email = 'cecilia.salas@pereyra.edu.mx';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($SNRole);


        $usuario = new User;
        $usuario->name = 'Maria Cabrero';
        $usuario->email = 'marialuz.cabrero@pereyra.edu.mx';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($SNRole);


        $usuario = new User;
        $usuario->name = 'Nydia Perrella Niño de Rivera';
        $usuario->email = 'nydia.perrella@pereyra.edu.mx';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($SNRole);


        $usuario = new User;
        $usuario->name = 'Patricia Nájera';
        $usuario->email = 'patricia.najera@pereyra.edu.mx';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($SNRole);


        $usuario = new User;
        $usuario->name = 'César Gurrola';
        $usuario->email = 'cesar.gurrola@pereyra.edu.mx';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($SNRole);

        $usuario = new User;
        $usuario->name = 'Socorro Zamarrón';
        $usuario->email = 'socorro.zamarron@pereyra.edu.mx';
        $usuario->password = bcrypt('Usu@rio5') ;
        $usuario->save();

        $usuario->assignRole($SNRole);

    }
}
