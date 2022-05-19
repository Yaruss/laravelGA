<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Error>
 */
class ErrorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id1'=>$this->faker->numberBetween(1,255),
            'id2'=>$this->faker->numberBetween(1,255),
            'id3'=>$this->faker->numberBetween(1,255)
        ];
    }
}
