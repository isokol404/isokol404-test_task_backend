<?php

use App\Models\Country;
use App\Models\Document;
use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $countries = Country::all();
        $document = Document::all();

        $faker = Factory::create();

        foreach ($countries as $country) {
            $uniquePhoneNumber = $country->country_code . $faker->unique()->randomNumber(9);

            User::create([
                'name' => $faker->unique()->name,
                'phone_number' => $uniquePhoneNumber,
                'country_id' => $country->id,
                'document_id' => $document->random()->id
            ]);
        }
    }
}
