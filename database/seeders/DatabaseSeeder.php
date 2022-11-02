<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Data1;
use App\Models\Weight;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Muhammad Ali Imron',
            'Username'=>'muhammadaliimron',
            'email'=>'muhammadaliimron97@gmail.com',
            'password'=>bcrypt('password') ,
            ]);

        Data1::create([
            'name'=>'Pantai Mirota',
            'c1'=>'0.25',
            'c2'=>'1',
            'c3'=>'0.25',
            'c4'=>'0.5',
            'c5'=>'1',
            ]);
        Data1::create([
            'name'=>'Pantai Melur',
            'c1'=>'0.25',
            'c2'=>'1',
            'c3'=>'0.25',
            'c4'=>'0.75',
            'c5'=>'1',
            ]);
        Data1::create([
            'name'=>'Pantai Tanjung Pinggir',
            'c1'=>'0.25',
            'c2'=>'0.25',
            'c3'=>'0.25',
            'c4'=>'0.25',
            'c5'=>'1',
            ]);
        Data1::create([
            'name'=>'Pantai Nongsa',
            'c1'=>'0.25',
            'c2'=>'0.75',
            'c3'=>'0.25',
            'c4'=>'0.5',
            'c5'=>'1',
            ]);
        Data1::create([
            'name'=>'Pantai Dangas',
            'c1'=>'0.25',
            'c2'=>'0.25',
            'c3'=>'0.25',
            'c4'=>'0.25',
            'c5'=>'1',
            ]);
        
        Weight::create([
            'wgh1'=>'1',
            'wgh2'=>'0.75',
            'wgh3'=>'0.5',
            'wgh4'=>'0.75',
            'wgh5'=>'0.25',
            ]);
    }
}
