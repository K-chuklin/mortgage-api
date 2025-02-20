<?php

namespace Database\Factories;

use App\Models\Mortgage;
use Illuminate\Database\Eloquent\Factories\Factory;

class MortgageFactory extends Factory
{
    protected $model = Mortgage::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'is_active' => $this->faker->boolean,
            'description' => $this->faker->paragraph,
            'percent' => $this->faker->numberBetween(1, 40),
            'min_first_payment' => $this->faker->numberBetween(1, 98),
            'max_price' => $this->faker->randomFloat(2, 100000, 1000000),
            'min_price' => $this->faker->randomFloat(2, 50000, 99999),
            'min_term' => $this->faker->numberBetween(1, 10),
            'max_term' => $this->faker->numberBetween(11, 30),
        ];
    }
}