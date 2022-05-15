<?php

namespace Database\Seeders;

use App\Models\Offer;
use App\Models\Room;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Room::truncate();
        Room::upsert(
            [
                [
                    'name' => 'Pokój 1',
                    'description' => 'Pokój z wieloma udogodnieniamu dla niepełnosprawnych, aneks kuchenny i komputerowy z wyświetlaczem, prywatna łazienka oraz sauna',
                    'price' => '1500', 'beds_amount' => '3', 'offer_id' => '1',
                ],
                [
                    'name' => 'Pokój 2',
                    'description' => 'Pokój pracowniczy z salką konferencyjną, prywatna łazienka oraz sauna, wyposażony w komputer z wyświetlaczem, aneks kuchenny',
                    'price' => '2000', 'beds_amount' => '2', 'offer_id' => '1',
                ],
            ],
            'name'
        );
    }
}
