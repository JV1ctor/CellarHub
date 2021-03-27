<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dados = [
            'name' => 'guiga',
            'email' => 'admin@mail.com',
            'password' => bcrypt('123456') // bcrypt serve para encriptar
        ];
        
        if(User::where('email','=', $dados['email']) -> count()){ // verifica se email de $dados esta em uso ja
            $usuario = User::where('email','=', $dados['email']) -> first();
            $usuario -> update($dados);
            echo "Usuario atualizado";
        }else{ // se não..... cria ué
            User::create($dados);
            echo "Usuario criado";
        }
    }
}
