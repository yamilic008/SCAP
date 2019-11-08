<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActAcadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('act_acads', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('ciclo_id');
            $table->string('nombre');
            $table->unsignedInteger('seccions_id');
                
            $table->unsignedInteger('linea_accion_id');
               
            $table->unsignedInteger('area_id');
            $table->text('descripcion');
            $table->text('objetivo');
            $table->datetime('fechainicio');
            $table->datetime('fechafin');
            
            $table->decimal('total', 8, 2);
            $table->string('estado');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('area_id')->references('id')->on('areas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('seccions_id')->references('id')->on('seccions')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('linea_accion_id')->references('id')->on('linea_accions')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('ciclo_id')->references('id')->on('ciclos')->onDelete('cascade')->onUpdate('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('act_acads');
    }
}
