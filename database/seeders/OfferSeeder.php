<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OfferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('offers')->insert([
            [
                'image' => '1717924452.jpg',
                'date' => '2024-06-30',
                'country' => 'Turkey',
                'price' => 150.75,
                'created_at' => '2024-06-09 09:14:12',
                'updated_at' => '2024-06-09 09:14:12',
            ],
            [
                'image' => '1717784076.jpg',
                'date' => '2024-07-10',
                'country' => 'China',
                'price' => 1000,
                'created_at' => '2024-06-07 18:14:36',
                'updated_at' => '2024-06-07 18:14:36',
            ],
            [
                'image' => '1717784304.jpg',
                'date' => '2024-08-02',
                'country' => 'Thailand',
                'price' => 200.89,
                'created_at' => '2024-06-07 18:18:24',
                'updated_at' => '2024-06-07 18:18:24',
            ],
          
        ]);
    }
    }

