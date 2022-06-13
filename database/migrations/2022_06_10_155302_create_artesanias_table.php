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
        Schema::create('artesanias', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',60);
            $table->float('precio',100);
            $table->integer('cantidad')->length(10);
            $table->text('descripcion');
            $table->text('descripcion2');
            $table->unsignedBigInteger('indigenas_id');
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
        Schema::dropIfExists('artesanias');
    }
};
