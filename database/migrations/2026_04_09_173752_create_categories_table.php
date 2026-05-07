<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration
{
    public function up(): void
    {
        //cambio temporal el que es verdadero esta en el archivo perseptron.txt del escritorio
       Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name', 80)->unique(); 
            $table->string('description', 255)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};