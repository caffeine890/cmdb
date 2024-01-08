<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
use Faker\Factory as FakerFactory;
class DeviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = FakerFactory::create();

        for ($i = 1; $i <= 200; $i++) {
            DB::table('devices')->insert([
                'soft_id' => $i,
                'loca_id' => $i,
                'dev_type' => $faker->randomElement(['Surface', 'Lets note', 'LAVIE', 'FMV', 'Cisco1500', 'Cisco2500', 'Cisco3500', 'fortigate60E', 'fortigate60F']),
                'CPU' => $faker->randomElement(['Corei3', 'Corei5', 'Corei7']),
                'RAM' => $faker->randomElement([4, 8, 16, 32]),
                'HDD' => $faker->randomElement([200, 500, 700]),
                // 他のカラムも同様に追加
            ]);
        }
    }
}
