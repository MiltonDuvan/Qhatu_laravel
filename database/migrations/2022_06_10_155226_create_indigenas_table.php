<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indigenas', function (Blueprint $table) {
            $table->id();
            $table->string('nombres',60);
            $table->string('correo',60);
            $table->string('contraseña',60);
            $table->integer('telefono')->length(10);
            $table->string('certificado',191);
            $table->integer('edad')->length(3);
            $table->text('descripcion');
            $table->integer('calificacion')->length(3);
            $table->unsignedBigInteger('etnias_id');
            $table->foreign('etnias_id')->references('id')->on('etnias')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('indigenas');
    }
};
