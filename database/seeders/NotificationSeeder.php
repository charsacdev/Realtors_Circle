<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NotificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 20) as $index) {
            $title = $faker->randomElement(['Realtor application', 'Booking', 'Customer contact']);
            if($title == 'Realtor application'){
                $type = 'realtor-application';
            }elseif($title == 'Booking'){
                $type = 'booking';
            }elseif($title == 'Customer contact'){
                $type = 'new-customer';
            }else{
                $type = 'new-user';
            }


            DB::table('notifications')->insert([
                'user_id' => $faker->numberBetween(1, 5),
                'route_id' => $faker->numberBetween(1,3),
                'title' => $title,
                'message' => $faker->sentence(),
                'type' => $type,
                'is_read' => $faker->randomElement(['1', '0']),
                'created_at' => $faker->dateTime(),
                'updated_at' => $faker->dateTime(),
            ]);
        }
    }
}
