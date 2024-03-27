<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'owner_id' => User::pluck('id')->random(),
            'name' => $this->faker->randomElement([
                'Audi A4',
                'Wolgswagen Golf',
                'Fiat Punto',
            ]),
        ];
    }
}
