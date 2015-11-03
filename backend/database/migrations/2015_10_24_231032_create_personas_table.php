<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Schema::dropIfExists('personas');
        Schema::create('personas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('paterno');
            $table->string('materno');
            $table->string('email')->unique();
            $table->SoftDeletes();
            $table->timestamps();
            //$table->string('name', 50)->change(); ==para cambiar el tamaño de un atribut
            //$table->string('name', 50)->nullable()->change(); ==cambiar el atributo a aceptar nulos
            //$table->renameColumn('from', 'to'); ==para renombrar columnas
            //$table->dropColumn('votes');  ==para eliminar omlumna
            // $table->dropColumn(['votes', 'avatar', 'location']); ==para eliminar conjunto de columnas
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('personas');
    }
}
