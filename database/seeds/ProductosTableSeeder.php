<?php

use Illuminate\Database\Seeder;
use App\Producto;
use App\Categoria;

class ProductosTableSeeder extends Seeder
{
    public function run()
    {
        Producto::create([
            'nombre' => 'nombre1', 
            'marca' => 'marca1',
            'precio'=> '300',
            'tipo_id'=> '1',
            'qVentas'=> '40',
            'stock'=> '20',
            'oferta'=> '50',
            ]);

        Producto::create([
            'nombre' => 'nombre2', 
            'marca' => 'marca2',
            'precio'=> '350',
            'tipo_id'=> '2',
            'qVentas'=> '140',
            'stock'=> '120',
            // 'oferta'=> '60',
            ]);

        Producto::create([
            'nombre' => 'nombre3', 
            'marca' => 'marca3',
            'precio'=> '500',
            'tipo_id'=> '3',
            'qVentas'=> '20',
            'stock'=> '50',
            'oferta'=> '70',
            ]);

        Producto::create([
            'nombre' => 'nombre4', 
            'marca' => 'marca4',
            'precio'=> '1300',
            'tipo_id'=> '4',
            'qVentas'=> '10',
            'stock'=> '30',
            'oferta'=> '40',
            ]);

        Producto::create([
            'nombre' => 'nombre5', 
            'marca' => 'marca1',
            'precio'=> '600',
            'tipo_id'=> '5',
            'qVentas'=> '50',
            'stock'=> '10',
            'oferta'=> '60',
            ]);

        Producto::create([
            'nombre' => 'nombre6', 
            'marca' => 'marca2',
            'precio'=> '700',
            'tipo_id'=> '1',
            'qVentas'=> '70',
            'stock'=> '60',
            'oferta'=> '40',
            ]);

        Producto::create([
            'nombre' => 'nombre7', 
            'marca' => 'marca3',
            'precio'=> '1200',
            'tipo_id'=> '2',
            'qVentas'=> '20',
            'stock'=> '70',
            'oferta'=> '30',
            ]);

        Producto::create([
            'nombre' => 'nombre8', 
            'marca' => 'marca4',
            'precio'=> '350',
            'tipo_id'=> '3',
            'qVentas'=> '60',
            'stock'=> '10',
            'oferta'=> '50',
            ]);

        Producto::create([
            'nombre' => 'nombre9', 
            'marca' => 'marca1',
            'precio'=> '350',
            'tipo_id'=> '4',
            'qVentas'=> '70',
            'stock'=> '90',
            // 'oferta'=> '50',
            ]);

        Producto::create([
            'nombre' => 'nombre10', 
            'marca' => 'marca2',
            'precio'=> '440',
            'tipo_id'=> '5',
            'qVentas'=> '20',
            'stock'=> '20',
            // 'oferta'=> '50',
            ]);

        Producto::create([
            'nombre' => 'nombre11', 
            'marca' => 'marca3',
            'precio'=> '900',
            'tipo_id'=> '1',
            'qVentas'=> '10',
            'stock'=> '10',
            // 'oferta'=> '50',
            ]);

        Producto::create([
            'nombre' => 'nombre12', 
            'marca' => 'marca4',
            'precio'=> '1200',
            'tipo_id'=> '2',
            'qVentas'=> '80',
            'stock'=> '15',
            // 'oferta'=> '50',
            ]);   

        

    
    }
}
