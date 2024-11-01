<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AgencyRealtorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Define agency_id and the array of realtor_ids
        $agency_id = 2;
        $realtor_ids = [
            51,52,53,54,55,56,57,58,62,63,67,68,70,72,73,76,79,81,82,87,88,92,93,94,97,99,100,106,107,108,109,110,115,116,118,123,124,
            127,129,134,140,141,142,143,144,145,148,151,152,153,159,160,161,163,164,165,168,169,170,174,176,178,179,182,187,188,191,192,193,
            194,196,197,198,200,202,204,208,209,210,211,212,215,216,217,223,224,225,226,227,230,231,232,233,235,236,237,238,239,240,241,242,
            244,245,250,251,254,259,260,262,263,264,265,266,268,273,275,276,278,281,284,287,290,291,292,299,300,302
        ];

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
            DB::table('agency_realtors')->insert([
                'agency_id' => $agency_id,
                'realtor_id' => $realtor_id,
                'created_at' => $randomMonth,
                'updated_at' => $randomMonth,
            ]);
        }
    }
}
