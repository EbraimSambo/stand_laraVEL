<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Descriptions;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Descriptions::create([
            'title'=> 'Carros Novos',
            'description'=> 'Compre carros novinhos em folhas de útima geração',
            'category'=> 'new car',
            'path_banner'=> 'images/car_blank.jpg'
        ]);

        Descriptions::create([
            'title'=> 'Carros Classícos',
            'description'=> 'Compre carros classícos que perduraram no tempo',
            'category'=> 'car classic',
            'path_banner'=> 'images/car_blue.jpg'
        ]);

        Descriptions::create([
            'title'=> 'Carros para alugar',
            'description'=> 'Alugue um carro, caso não estejas na tua cidade',
            'category'=> 'new aluguer',
            'path_banner'=> 'images/car_yellow.png'
        ]);

        Descriptions::create([
            'title'=> 'Carros Usados',
            'description'=> 'Compre carros usados há preços baixos',
            'category'=> 'car old',
            'path_banner'=> 'images/car_red.jpg'
        ]);


    }
}
