<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortafolioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portafolio', function (Blueprint $table) {
            $table->increments('id');
            $table->string('estado');
            $table->string('titulo');
            $table->string('slug');
            $table->string('imagen_preview');
            $table->string('imagen_modal');
            $table->string('descripcion_preview');
            $table->text('descripcion_modal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
