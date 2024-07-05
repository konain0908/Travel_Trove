<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   
        public function run(): void
        {
            DB::table('roles')->insert([
                [
                    'id' => 1,
                    'name' => 'admin',
                    'created_at' => '2024-06-05 17:24:46',
                    'updated_at' => '2024-06-05 17:24:46',
                ],
                [
                    'id' => 2,
                    'name' => 'user',
                    'created_at' => '2024-06-05 17:27:14',
                    'updated_at' => '2024-06-05 17:27:14',
                ],
            ]);
        }
    
    }

