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
        Schema::create('producto', function (Blueprint $table) {
            $table->id();
            $table->string('producto_nombre');
            $table->string('producto_descripcion');
            $table->string('producto_imagen');
            $table->float('producto_precio');
            $table->unsignedBigInteger('categoria_id'); 
            $table->timestamps();  
            $table->foreign('categoria_id')->references('id')->on('categoria');

        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("producto");
    }
};
