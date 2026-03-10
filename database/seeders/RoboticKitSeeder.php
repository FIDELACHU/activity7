<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoboticKitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('robotic_kits')->insert([
            ['type'=>'StarterKit'],
            ['type'=>'Educational Robotics Kit'],
            ['type'=>'Kit5'],
        ]);
    }
}
