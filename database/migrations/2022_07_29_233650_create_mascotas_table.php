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
        Schema::create('mascotas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',25);
            $table->unsignedBigInteger('categorias_id');
            $table->foreign('categorias_id')->references('id')->on('categorias')->onDelete('cascade')->onUpdate('cascade');
            $table->string('fotos',195);
            $table->unsignedBigInteger('generos_id');
            $table->foreign('generos_id')->references('id')->on('generos')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('razas_id');
            $table->foreign('razas_id')->references('id')->on('razas')->onDelete('cascade')->onUpdate('cascade');
            // $table->unsignedBigInteger('fotos_id');  
            // $table->foreign('fotos_id')->references('id')->on('fotos')->onDelete('cascade')->onUpdate('cascade');         
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
        Schema::dropIfExists('mascotas');
    }
};
