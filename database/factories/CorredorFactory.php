<?php

namespace Database\Factories;

use App\Models\Corredor;
use App\Models\Porao;
use Illuminate\Database\Eloquent\Factories\Factory;

class CorredorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Corredor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nomenclatura' => $this->faker->randomLetter(),

            'porao_id' => Porao::inRandomOrder()->first()->id,
        ];
    }
}
