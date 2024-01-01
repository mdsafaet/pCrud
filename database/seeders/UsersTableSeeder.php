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
    public function run(): void
    {
        DB::table('users')->insert([
            [
                  'name' => 'Admin',
                  'username' => 'admin',
                   'email' => 'admin@gmail.com',
                   'phone' => '081234567890',
                    'address' => 'Jl. Raya No. 1',
                   'password' => Hash::make('111'),
                   'role' => 'admin',
                   'photo' => 'admin.png',

                                      
              ],    
              [
                'name' => 'Seller',
                'username' => 'seller',
                 'email' => 'seller@gmail.com',
                 'phone' => '081234567890',
                  'address' => 'Jl. Raya No 1',
                 'password' => Hash::make('111'),
                 'role' => 'seller',
                 'photo' => 'seller.png',

                                    
            ],   
            [
                'name' => 'User',
                'username' => 'user',
                'email' => 'user@gmail.com',
                'phone' => '081234567890',
                'address' => 'Jl. Raya  1',
                 'password' => Hash::make('111'),
                 'role' => 'user',
                 'photo' => 'user.png',
            
            ],
             
        ]);

    }
}
