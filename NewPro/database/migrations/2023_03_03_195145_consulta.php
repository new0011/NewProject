<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('Consultas', function(Blueprint $table){
            $table->increments('IDCal');
            $table->double('Calificacion');
            $table->string('Materia');
            $table->time('Horario');
            $table->double('PromGeneral');
            $table->integer('IDS')->unsigned();
            $table->timestamps();

            $table->foreign('IDS')->references('IDS')->on('Student')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Consultas');
    }
};
