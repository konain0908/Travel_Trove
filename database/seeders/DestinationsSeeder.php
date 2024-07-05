<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DestinationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
            DB::table('popular_destinations')->insert([
                [
                    'dsestination_name' => 'Tower of Pisa',
                    'image' => '1717439718.jpg',
                    'country' => 'Italy',
                    'city' => 'Pisa',
                    'created_at' => '2024-06-03 14:15:39',
                    'updated_at' => '2024-06-05 08:24:16',
                ],
                [
                    'dsestination_name' => ' eiffel tower',
                    'image' => '1717425047.jpg',
                    'country' => 'France',
                    'city' => 'Paris',
                    'created_at' => '2024-06-03 14:30:47',
                    'updated_at' => '2024-06-03 14:30:47',
                ],
                [
                    'dsestination_name' => 'Koh Yao Noi',
                    'image' => '1717784793.jpg',
                    'country' => 'Thailand',
                    'city' => 'Phuket',
                    'created_at' => '2024-06-07 18:26:33',
                    'updated_at' => '2024-06-07 18:26:33',
                ],
                [
                    'dsestination_name' => 'Dolmabahce Palace',
                    'image' => '1717785280.jpg',
                    'country' => 'Turkey',
                    'city' => 'Istanbul',
                    'created_at' => '2024-06-07 18:34:40',
                    'updated_at' => '2024-06-07 18:34:40',
                ],
                [
                    'dsestination_name' => 'Tower of Pisa',
                    'image' => '1717850034.jpg',
                    'country' => 'Turkey',
                    'city' => 'chicago', 
                    'created_at' => '2024-06-08 12:33:54',
                    'updated_at' => '2024-06-08 12:33:54',
                ],
              
            ]);
        }
    }

