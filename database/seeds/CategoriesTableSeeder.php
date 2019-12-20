<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Mascotas',
            'slug' => 'mascotas',
            'description' => 'Consiente a tu mascota por todo el amor que te brinda',
            'color' => '#8bb7df'
        ]);
        Category::create([
            'name' => 'Hogar',
            'slug' => 'hogar',
            'description' => 'Brinda un toque especial a tu hogar con nuestros productos',
            'color' => '#e0c072'
        ]);
    }
}
