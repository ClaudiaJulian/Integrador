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

        $productos=Producto::All();
        $cat=rand(1,3);       
        foreach($productos as $produc){
            $produc->categoria()->sync($cat);     
    }        


    }
}
