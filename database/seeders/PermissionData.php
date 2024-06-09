<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Permission;

class PermissionData extends Seeder
{
    /**
     * Run the database seeds.
     */
  
        public function run(): void
        {
            $permissions = [
                ['name' => 'Dashboard', 'slug' => 'dashboard', 'groupby' => 0],
                
                ['name' => 'User', 'slug' => 'User', 'groupby' => 1],
               
            
                ['name' => 'Role', 'slug' => 'Role', 'groupby' => 2],
                ['name' => 'Add Role', 'slug' => 'Add Role', 'groupby' => 2],
            
                ['name' => 'Destination', 'slug' => 'Destination', 'groupby' => 3],
                ['name' => 'Add Destination', 'slug' => 'Add Destination', 'groupby' => 3],
                ['name' => 'Edit Destination', 'slug' => 'Edit Destination', 'groupby' => 3],
                ['name' => 'Delete Destination', 'slug' => 'Delete Destination', 'groupby' => 3],
            
                ['name' => 'Book Ticket', 'slug' => 'book_ticket', 'groupby' => 4],
              
                ['name' => ' Show Offer', 'slug' => 'Show Offer', 'groupby' => 5],
                ['name' => 'Offer', 'slug' => 'Offer', 'groupby' => 5],
                ['name' => 'Add Offer', 'slug' => 'Add Offer', 'groupby' => 5],
                ['name' => 'Edit Offer', 'slug' => 'Edit Offer', 'groupby' => 5],
                ['name' => 'Delete Offer', 'slug' => 'Delete Offer', 'groupby' => 5],
                ['name' => ' Show Offer', 'slug' => 'Show Offer', 'groupby' => 5],
                
                ['name' => 'Edit Role', 'slug' => 'Edit Role', 'groupby' => 2],
                ['name' => 'Delete Role', 'slug' => 'Delete Role', 'groupby' => 2],
            ];
            foreach ($permissions as $permission) {
                Permission::create($permission);
            }
            
        }
    }

