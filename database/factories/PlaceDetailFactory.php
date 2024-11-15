<?php

namespace Database\Factories;

use App\Models\PlaceDetail;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlaceDetailFactory extends Factory
{
    protected $model = PlaceDetail::class;

    public function definition()
    {
        return [
            'place_id' => \App\Models\Place::factory(), // or a valid place ID
            'detail_name' => $this->faker->word,
            'detail_value' => $this->faker->sentence,
        ];
    }
}
