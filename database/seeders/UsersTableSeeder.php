<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin12'),
                'role_id' => 1,
                'created_at' => '2024-06-01 14:21:25',
                'updated_at' => '2024-06-01 14:21:25'
            ],
            [
                'name' => 'konain',
                'email' => 'konain@gmail.com',
               'password' => Hash::make('konain12'),
                'role_id' => 2,
                'created_at' => '2024-06-02 17:20:27',
                'updated_at' => '2024-06-02 17:20:27'
            ],
           
       
          
        ]);
    }
}
    
    

