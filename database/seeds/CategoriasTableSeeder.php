<?php

use Illuminate\Database\Seeder;
use App\Categoria;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::create([
            'nombre' => 'Urban',
            ]);

        Categoria::create([
            'nombre' => 'Sporty',
            ]);
            
        Categoria::create([
            'nombre' => 'Tech',
            ]);    



    }
}
