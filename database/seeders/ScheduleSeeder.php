<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 50) as $index) {
            DB::table('schedules')->insert([
                'user_id' => $faker->numberBetween(1, 5),
                'first_name' => $faker->firstName(),
                'last_name' => $faker->lastName(),
                'email' => $faker->safeEmail,
                'phone_number' => $faker->phoneNumber,
                'date_booked' => $faker->dateTimeBetween('-1 week', '+1 week'),
                'reason' => $faker->sentence(10),
                'created_at' => $faker->dateTime(),
                'updated_at' => $faker->dateTime(),
            ]);
        }
    }
}
