<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDesglocesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('desgloces', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('actividad_id');
            $table->unsignedInteger('ccontable_id');
            $table->decimal('cantidad', 8, 1);
            $table->string('recurso');
            $table->string('proveedor');
            $table->decimal('precio', 8, 2);
            $table->decimal('Total', 8, 2);


            $table->timestamps();


            $table->foreign('actividad_id')->references('id')->on('act_acads')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('ccontable_id')->references('id')->on('ccontables')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('desgloces');
    }
}
