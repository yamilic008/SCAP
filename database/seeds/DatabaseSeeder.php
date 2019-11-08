<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* Esto es para que no nos verifique las llaves foraneas */
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        /*aqui agregamos los seeder´s que queremos ejecutar */
         $this->call(UsersTableSeeder::class);
         $this->call(GestionSeeder::class);
         $this->call(PrioridadsTableSeeder::class);
         $this->call(LineaAccionSeeder::class);
         $this->call(SeccionTableSeeder::class);
         $this->call(CuentaTableSeeder::class);
         $this->call(CcontableTableSeeder::class);
         $this->call(ConceptoTableSeeder::class);
         $this->call(AreaTableSeeder::class);
         $this->call(CicloTableSeeder::class);

         

        /* aqui se vuelve a habilitar la llave foranea */
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    }
}
