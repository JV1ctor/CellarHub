<?php

namespace Database\Factories;

use App\Models\Armario;
use App\Models\Corredor;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArmarioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Armario::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'quant_garrafa' => (50),
            'nomenclatura'=> $this->faker->numerify(1,50),

            'corredor_id' => Corredor::inRandomOrder()->first()->id,
        ];
    }
}
