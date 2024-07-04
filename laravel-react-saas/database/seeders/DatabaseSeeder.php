<?php

namespace Database\Seeders;

use App\Models\Feature;
use App\Models\Package;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Yashdeep',
            'email' => 'ydeep9073@gmail.com',
            'password' => bcrypt('Yash@9073'),
        ]);

        Feature::create([
            'image' => 'https://t4.ftcdn.net/jpg/05/55/67/69/360_F_555676957_6FCvG6xx7axtwOlBrjfYTkytNAUdAFUx.jpg', 
            'route_name' => 'feature1.index',
            'name' => 'Calculate Sum',
            'description' => 'Calculate sum of two numbers',
            'required_credits' => 1,
            'active' => true,
            
        ]);

        
        Feature::create([
            'route_name' => 'feature2.index',
            'image' => 'https://t4.ftcdn.net/jpg/05/55/67/69/360_F_555676957_6FCvG6xx7axtwOlBrjfYTkytNAUdAFUx.jpg', 
            'name' => 'Calculate Difference',
            'description' => 'Calculate difference of two numbers',
            'required_credits' => 3,
            'active' => true,
            
        ]);

        Package::create([
            'name' => 'Basic',
            'price' => 5,
            'credits' => 20,
        ]);

        Package::create([
            'name' => 'Silver',
            'price' => 20,
            'credits' => 100,
        ]);

        Package::create([
            'name' => 'Gold',
            'price' => 50,
            'credits' => 500,
        ]);
    }
}
