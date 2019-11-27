<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticuloTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('articulo');
		Schema::create('articulo', function (Blueprint $table) {
            $table->increments('id');
            $table->string('numero_registro');
			$table->string('nombre');
			$table->integer('cantidad');
			$table->timestamp('fecha_creacion')->nullable($value = true);
			$table->integer('categoria_id')->unsigned();            
			$table->foreign('categoria_id')->references('id')->on('categoria');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articulo');
    }
}
