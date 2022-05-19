<?php

namespace Database\Seeders;

use App\Models\Offer;
use App\Models\Room;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class OfferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Schema::disableForeignKeyConstraints();
        Room::truncate();
        Offer::truncate();
        Schema::enableForeignKeyConstraints();
        Offer::factory(50)->create();
    }
}
