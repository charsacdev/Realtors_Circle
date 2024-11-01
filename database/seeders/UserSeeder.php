<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Faker\Factory as Faker;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
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

        // Loop through each month and generate at least 20 users
        for ($month = $startMonth; $month <= $endMonth; $month->addMonth()) {
            // Generate at least 50 users for each month
            for ($i = 0; $i < 50; $i++) {
                // Generate a random date within the current month
                $randomDate = $faker->dateTimeBetween(
                    $month->startOfMonth()->toDateTimeString(), 
                    $month->endOfMonth()->toDateTimeString()
                );

                // Generate a unique slug based on the user's name
                $firstName = $faker->firstName;
                $lastName = $faker->lastName;
                $username = strtolower($firstName . $lastName . Str::random(3));

                $role = $faker->randomElement(['agency', 'realtor']);

                // Insert the user into the database
                DB::table('users')->insert([
                    'slug' => Str::slug($firstName . ' ' . $lastName . '-' . Str::random(5)),
                    'profile_image' => $faker->imageUrl(),
                    'username' => $username,
                    'first_name' => $firstName,
                    'last_name' => $lastName,
                    'company_name' => $role == "agency" ? $faker->unique()->company : null,
                    'email' => $faker->unique()->safeEmail,
                    'phone_number' => $faker->unique()->phoneNumber,
                    'role' => $role,
                    'bio' => $faker->paragraph,
                    'city' => $faker->city,
                    'state' => $faker->state,
                    'facebook_link' => $faker->url,
                    'instagram_link' => $faker->url,
                    'whatsapp_link' => $faker->url,
                    'email_verified_at' => $faker->optional()->dateTimeThisYear,
                    'password' => bcrypt('11111111'), // Use a secure password logic
                    'remember_token' => Str::random(10),
                    'created_at' => $randomDate,
                    'updated_at' => $randomDate,
                ]);
            }
        }
    
    }
}
