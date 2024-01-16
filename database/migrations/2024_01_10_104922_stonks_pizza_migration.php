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
            Schema::create('bestelling', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('status');
        });
            Schema::create('klant', function (Blueprint $table){
                $table->id();
                $table->string('name');
                $table->string('email');
                $table->string('telefoonnummer');
                $table->string('woonplaats');
                $table->string('adres');
            });
            Schema::create('ingredient', function (Blueprint $table){
                $table->id();
                $table->string('name');
                $table->integer('cost');
            });
            Schema::create('pizza', function (Blueprint $table){
                $table->id();
                $table->string('name');
            });
            Schema::create('cart', function (Blueprint $table){
                $table->id();
                $table->string('name');
                $table->integer('price');
                $table->integer('quantity');
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu');
        Schema::dropIfExists('people');
    }
};
