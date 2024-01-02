<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Restaurant;

class RestaurantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            Restaurant::create([
                
                'restaurant_name' => '〇屋',
                'postal_code' => '東京都',
                'address' => '111-1111',
                'phone' => '111-1111-1111',
                'opening_hour' => '0~24',
                'regular_holiday' => '月火',
                'category_id' => '1'
                
            ]);
    
    }
}
