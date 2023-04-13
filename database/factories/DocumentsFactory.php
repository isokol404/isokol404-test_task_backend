<?php

use App\Models\Document;
use Faker\Generator as Faker;

$factory->define(Document::class, function (Faker $faker) {
    return [
        'passport_number' => $this->faker->regexify('[A-Z0-9]{8}'),
        'issued_by' => $this->faker->company,
        'date_of_issue' => $this->faker->date(),
        'passport_id' => $this->faker->regexify('[A-Z0-9]{8}'),
    ];
});
