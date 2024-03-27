<?php

namespace Database\Factories;

use App\Models\Car;
use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'car_id' => Car::pluck('id')->random(),
            'service_id' => Service::pluck('id')->random(),
            'deadline_at' => $this->faker->dateTimeBetween('now', '+1 month'),
        ];
    }
}
