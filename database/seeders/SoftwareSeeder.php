<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
use Faker\Factory as FakerFactory;
class SoftwareSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = FakerFactory::create();

        for ($i = 1; $i <= 200; $i++) {
            DB::table('softwares')->insert([
                'hostname' => 'host' . str_pad($i, 3, '0', STR_PAD_LEFT),
                'mac' => $faker->unique()->macAddress,
                'ip' => '192.168.30.' . $i,
                'purpose' => $faker->randomElement(['1棟用L2SW', '2棟用L2SW', '3棟用L2SW', '4棟用L2SW', '5棟用L2SW', '6棟用L2SW', '7棟用L2SW', '8棟用L2SW', '社員用PC', '××サーバー用', '〇〇サーバー用', '△△サーバー用']),
                // 他のカラムも同様に追加
            ]);
        }
    }
}
