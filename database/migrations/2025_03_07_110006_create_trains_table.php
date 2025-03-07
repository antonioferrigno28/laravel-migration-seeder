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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('train_departure_station');
            $table->string('train_arrival_station');
            $table->dateTime('train_departure_time');
            $table->dateTime('train_arrival_time');
            $table->string('train_code')->unique();
            $table->integer('number_of_wagon');
            $table->boolean('is_on_time');
            $table->boolean('is_cancelled');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
