<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
           [
            'name' => 'ali ahmed',
            'email' => 'ali@gmail.com',
            'password' => bcrypt('123456789'),
            'phone' => '1234567890',
           ],
           [
            'name' => 'mostafa abdo',
            'email' => 'mostafa@gmail.com',
            'password' => bcrypt('123456789'),
            'phone' => '1234567890',
           ],
           [
            'name' => 'hussein abdo',
            'email' => 'hussein@gmail.com',
            'password' => bcrypt('123456789'),
            'phone' => '1234567890',
           ],
        ]);

        DB::table('flights')->insert([
            [
                'departure_city' => 'cairo',
                'arrival_city' => 'alex',
                'travel_date' => '2024-09-05',
                'flight_number' => '12345',
                'price' => '1000',
                'status' => '1',
            ],
            [
                'departure_city' => 'cairo',
                'arrival_city' => 'aswan',
                'travel_date' => '2024-09-10',
                'flight_number' => '54123',
                'price' => '1000',
                'status' => '1',
            ],
            [
                'departure_city' => 'aswan',
                'arrival_city' => 'cairo',
                'travel_date' => '2024-09-18',
                'flight_number' => '258963',
                'price' => '1000',
                'status' => '1',
            ],
            [
                'departure_city' => 'aswan',
                'arrival_city' => 'alex',
                'travel_date' => '2024-09-20',
                'flight_number' => '85236',
                'price' => '1000',
                'status' => '1',
            ],
            [
                'departure_city' => 'alex',
                'arrival_city' => 'cairo',
                'travel_date' => '2024-09-21',
                'flight_number' => '741258',
                'price' => '1000',
                'status' => '1',
            ],
        ]);
    }
}
