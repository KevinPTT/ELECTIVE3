<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJourneysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('journeys', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->string('origin'); // Column for origin of journey
            $table->string('destination'); // Column for destination of journey
            $table->date('date'); // Column for date of journey
            $table->time('time'); // Column for time of journey
            $table->string('vehicle_type'); // Column for type of vehicle (e.g., bus, van)
            $table->decimal('price', 10, 2); // Column for price of journey
            $table->integer('available_seats'); // Column for available seats in the vehicle
            $table->timestamps(); // Automatically adds created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('journeys');
    }
}
