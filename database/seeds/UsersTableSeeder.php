<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        User::create([
            'name' => 'Juan', 
            'email' => 'juan@hotmail.com', 
            'password'=> hash::make('12345678'),
            'role' => 'admin',    
            ]);

        User::create([
            'name' => 'Pedro', 
            'email' => 'pedro@hotmail.com', 
            'password'=> hash::make('12345678'),
            'role' => 'user',    
            ]);

        User::create([
            'name' => 'Pablo', 
            'email' => 'pablo@hotmail.com', 
            'password'=> hash::make('12345678'),
            'role' => 'user',    
            ]);

        User::create([
            'name' => 'Ana', 
            'email' => 'ana@hotmail.com', 
            'password'=> hash::make('12345678'),
            'role' => 'user',    
            ]);

        User::create([
            'name' => 'Maria', 
            'email' => 'maria@hotmail.com', 
            'password'=> hash::make('12345678'),
            'role' => 'user',    
            ]);
           
    }
}
