<?php

use App\Models\Country;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    public function run()
    {
        factory(Country::class, 20)->create()->each(function ($user) {});
    }
}

