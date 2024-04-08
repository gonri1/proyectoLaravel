<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   //Establece migracion

    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();//esta por defecto
            $table->string('name');
            $table->text('description');
            $table->decimal('price', 8, 2);//8 es el la longitud del numero y 2 los decimales que aguanta
            $table->timestamps();//esta por defecto
        });
    }

   
    //destruye migracion
    
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
