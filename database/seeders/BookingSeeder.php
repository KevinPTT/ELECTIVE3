<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Booking;
use Database\Factories\BookingFactory;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create 10 mock bookings using the BookingFactory
        Booking::factory()->count(10)->create();
    }
}
