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
        Schema::create('Student', function(Blueprint $table){
            $table->increments('IDS');
            $table->integer('Matricula')->unique();
            $table->string('CorrInst')->unique();
            $table->string('CorrPerr');
            $table->string('NameA');
            $table->string('LastName');
            $table->string('Class');
            $table->string('Classroom');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Student');
    }
};
