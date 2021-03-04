<?php

namespace Database\Factories;

use App\Models\Vinho;
use App\Models\User;
use App\Models\Armario;
use Illuminate\Database\Eloquent\Factories\Factory;

class VinhoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Vinho::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'marca' => $this->faker->company(),
            'nacionalidade' => $this->faker->country(),'vinhedo' => $this->faker->city(),
            'preco_venda' => $this->faker->randomFloat(2,100,400),'preco_compra' => $this->faker->randomFloat(2,100,400),
            'nota_degustacao' => $this->faker->randomFloat(2,0,10),
            'teor_alcoolico' => $this->faker->randomFloat(2,0,10),
            'ano' => $this->faker->year(), 
            'user_id' => User::inRandomOrder()->first()->id,
            'armario_id' => Armario::inRandomOrder()->first()->id,
        ];
    }
}
