<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('categoria');
		Schema::create('categoria', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
			$table->timestamp('fecha_creacion')->nullable($value = true);
			$table->timestamp('fecha_actualizacion')->nullable($value = true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categoria');
    }
}
