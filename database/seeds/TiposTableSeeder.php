<?php

use Illuminate\Database\Seeder;
use App\Tipo;

class TiposTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tipo::create([
            'nombre' => 'Gorro',    
            ]);
        Tipo::create([
            'nombre' => 'Reloj',    
            ]);
        Tipo::create([
            'nombre' => 'Billetera',    
            ]);
        Tipo::create([
            'nombre' => 'Cover',    
            ]);
        Tipo::create([
            'nombre' => 'WebCam',    
            ]);
    }
}
