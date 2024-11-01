<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

         // Define the months and year range
         $startMonth = Carbon::create(2024, 1, 1); // January 2024
         $endMonth = Carbon::create(2024, 11, 30); // November 2024

        for ($month = $startMonth; $month <= $endMonth; $month->addMonth()) {
            // Generate at least 100 users for each month
            for ($i = 0; $i < 100; $i++) {
                // Generate a random date within the current month
                $randomDate = $faker->dateTimeBetween(
                    $month->startOfMonth()->toDateTimeString(), 
                    $month->endOfMonth()->toDateTimeString()
                );


                DB::table('customers')->insert([
                    'user_id' => $faker->numberBetween(1, 2),
                    'first_name' => $faker->firstName(),
                    'last_name' => $faker->lastName(),
                    'location' => $faker->city(),
                    'country' => $faker->country(),
                    'email' => $faker->unique()->safeEmail,
                    'phone_number' => $faker->phoneNumber,
                    'created_at' => $randomDate,
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
