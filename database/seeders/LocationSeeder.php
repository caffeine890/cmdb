<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
use Faker\Factory as FakerFactory;
class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = FakerFactory::create();

        for ($i = 1; $i <= 200; $i++) {
                DB::table('locations')->insert([
                'ridge' => $faker->numberBetween(1, 8),
                'floor' => $faker->numberBetween(1, 4),
                'area' => 'D' . str_pad($i, 3, '0', STR_PAD_LEFT),
                // 他のカラムも同様に追加
            ]);
        }
    }
}
