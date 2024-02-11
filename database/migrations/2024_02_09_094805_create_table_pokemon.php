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
        Schema::create('table_pokemon', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 20);
            $table->string('tipo');
            $table->integer('attacco');
            $table->integer('difesa');
            $table->integer('attacco_speciale');
            $table->string('evoluzione');
            $table->text('src');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_pokemon');
    }
};
