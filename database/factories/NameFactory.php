<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Name>
 */
class NameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'ganame'=>$this->faker->sentence(2, true),
            'ip'=>'127.0.0.'.$this->faker->numberBetween(1,255)
        ];
    }
}
