<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Place;
use App\Models\User; // To reference the 'suggested_by' user

class PlaceFactory extends Factory
{
    protected $model = Place::class;

    public function definition()
    {
        return [
            'place_id' => $this->faker->unique()->uuid(),
            'name' => $this->faker->word(),
            'description' => $this->faker->paragraph(),
            'category' => $this->faker->word(),
            'location' => $this->faker->url(),
            'district' => $this->faker->city(),
            'suggested_by' => User::factory(), // Assumes a User factory exists
            'status' => $this->faker->randomElement(['accepted', 'rejected', 'pending']),
        ];
    }
}
