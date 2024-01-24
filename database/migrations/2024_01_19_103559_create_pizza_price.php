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
        Schema::create('pizza_prices', function (Blueprint $table) {
            $table->bigInteger('pizza_id')->unsigned();
            $table->float('price_small' , 8, 2);
            $table->float('price_medium' , 8, 2);
            $table->float('price_large', 8, 2);
            $table->timestamps();
            $table->foreign('pizza_id')->references('id')->on('pizzas');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pizza_prices');
    }
};
