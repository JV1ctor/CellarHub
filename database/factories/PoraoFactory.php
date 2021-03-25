<?php

namespace Database\Factories;

use App\Models\Porao;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PoraoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Porao::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nomenclatura'=> $this->faker->state(),
            'user_id' => User::inRandomOrder()->first()->id,
        ];
    }
}
