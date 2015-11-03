<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_persona')->unsigned()->index();

            $table->string('titulo');
            $table->text('descripcion');
            $table->text('contenido');
            $table->SoftDeletes();
            $table->timestamps();

            $table->foreign('id_persona')
                  ->references('id')
                  ->on('personas')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('posts');
    }
}
