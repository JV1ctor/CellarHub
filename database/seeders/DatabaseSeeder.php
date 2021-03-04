<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(4)->create();
        \App\Models\Porao::factory(2)->create();
        \App\Models\Corredor::factory(4)->create();
        \App\Models\Armario::factory(10)->create();
        \App\Models\Vinho::factory(25)->create();
    }
}
