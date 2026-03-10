<?php

namespace Database\Factories;

use App\Models\RoboticKit;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoboticKitFactory extends Factory
{
    protected $model = RoboticKit::class;

    public function definition(): array
    {
        return [
            'type' => $this->faker->randomElement([
                'StarterKit',
                'Educational Robotics Kit',
                'Kit5'
            ]),
        ];
    }
}
