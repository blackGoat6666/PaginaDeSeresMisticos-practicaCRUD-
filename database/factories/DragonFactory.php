<?php

namespace Database\Factories;

use App\Models\Dragon;
use App\Enums\TipoDragon;
use App\Enums\ColorDragon;
use Illuminate\Database\Eloquent\Factories\Factory;

class DragonFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Dragon::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tipo' => fake()->randomElement(TipoDragon::getValues()),
            'color' => fake()->randomElement(ColorDragon::getValues()),
            'nombre' => fake()->name(),
            'foto' => fake()->imageUrl(),
            'alas' => fake()->boolean(),
            'peso' => fake()->randomFloat(2, 2, 5000),
        ];
    }
}
