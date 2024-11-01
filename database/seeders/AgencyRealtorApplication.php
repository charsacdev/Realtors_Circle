<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AgencyRealtorApplication extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Define agency_id and the array of realtor_ids
        $agency_id = 2;
        $realtor_ids = [5,6,7,8,9,12,16,17,20,25,27,29,30,32,33,34,35,36,37,38,43,45,46,49,50];

        // Define the months and year range
        $startMonth = Carbon::create(2024, 1, 1); // January 2024
        $endMonth = Carbon::create(2024, 11, 30); // November 2024

        // Loop through the realtor_ids and assign them to the agency
        foreach ($realtor_ids as $realtor_id) {
            // Generate a random month within the range for the created_at field
            $randomMonth = $faker->dateTimeBetween(
                $startMonth->toDateTimeString(), 
                $endMonth->toDateTimeString()
            );

            // Insert the agency-realtor pair into the agency_realtors table
            DB::table('realtor_applications')->insert([
                'agency_id' => $agency_id,
                'realtor_id' => $realtor_id,
                'is_seen' => $faker->randomElement(['1', '0']),
                'created_at' => $randomMonth,
                'updated_at' => $randomMonth,
            ]);
        }
    }
}
