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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('titolo');
            $table->string('autore');
            $table->string('casa_editrice');
            $table->year('anno_pubblicazione');
            $table->string('genere');
            $table->string('isbn')->unique();
            $table->integer('numero_pagine');
            $table->boolean('disponibile')->default(true);
            $table->enum('stato', ['nuovo', 'usato', 'danneggiato'])->default('nuovo');
            $table->string('prestato_a')->nullable();
            $table->text('note')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
