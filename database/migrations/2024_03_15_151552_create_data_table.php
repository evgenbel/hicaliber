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
        Schema::create('data', function (Blueprint $table) {
            $table->id();
            $table->string('name', 20);
            $table->integer('price')->unsigned();
            $table->tinyInteger('bedrooms')->unsigned();
            $table->tinyInteger('bathrooms')->unsigned();
            $table->tinyInteger('storeys')->unsigned();
            $table->tinyInteger('garages')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data');
    }
};
