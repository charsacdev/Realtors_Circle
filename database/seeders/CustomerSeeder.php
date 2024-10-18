<?php

namespace Database\Seeders;

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

        foreach (range(1, 50) as $index) {
            DB::table('customers')->insert([
                'user_id' => $faker->numberBetween(1, 5),
                'first_name' => $faker->firstName(),
                'last_name' => $faker->lastName(),
                'location' => $faker->city(),
                'country' => $faker->country(),
                'email' => $faker->safeEmail,
                'phone_number' => $faker->phoneNumber,
                'created_at' => $faker->dateTime(),
                'updated_at' => $faker->dateTime(),
            ]);
        }
    }
}
