<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 50) as $index) {

            $propertyName = fakePropertyName($faker);
            $name = $propertyName['property'];
            $type = $propertyName['type'];

            $images = $type == 'building' ? randomImageUrls($faker, 5, 'building') : randomImageUrls($faker);
            $videos = $type == 'building' ? randomPexelsVideoUrls($faker, 5, 'building') : randomPexelsVideoUrls($faker);
            $features = json_encode(['features' => $faker->randomElements(['Biogas', 'Recreation center', 'Good road', 'Constant electricity', 'Water supply', 'Solar energy', 'Event arena', 'Perimeter fencing'], 5)]);

            DB::table('properties')->insert([
                'user_id' => $faker->numberBetween(1, 5),
                'images' => $images,
                'videos' => $videos,
                'name' => $name,
                'type' => $type,
                'bedroom' => $type == 'building' ? $faker->numberBetween(1, 4) : '',
                'bathroom' => $type == 'building' ? $faker->numberBetween(1,3) : '',
                'squarefoot' => $faker->numberBetween(1200, 2490),
                'description' => $faker->paragraphs(10, true),
                'transaction_info' => $faker->randomElement(['For sale', 'For lease', 'sold']),
                'payment_mode' => $faker->randomElement(['One off', 'installment']),
                'features' => $type == 'building' ? $features : '',
                'location' => $faker->address(),
                'country' => $faker->country(),
                'status' => $faker->numberBetween(0,1),
                'amount' => $faker->numberBetween(20000, 1000000),
                'date_listed' => $faker->dateTimeBetween('-1 week', '+1 week'),
                'created_at' => $faker->dateTime(),
                'updated_at' => $faker->dateTime(),
            ]);
        }
    }
}
