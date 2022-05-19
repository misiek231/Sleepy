<?php

namespace Database\Seeders;

use App\Models\Offer;
use App\Models\Room;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class UserSeeder extends Seeder
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
        User::truncate();
        Schema::enableForeignKeyConstraints();
        User::factory(10)->create();
    }
}
