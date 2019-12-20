<?php

use Illuminate\Database\Seeder;
use App\Product;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Chaleco Navidad',
            'slug' => 'chaleco-navidad',
            'description' => 'Chaleco para que tu perrito luzca con un estilo increible y pueda cargar sus juguetes',
            'extract' => 'Prenda Mascota',
            'price' => 60.900,
            'image' => 'https://ae01.alicdn.com/kf/Hed5b540043ad48f989d074b73b1d7722V/Mascota-gato-perro-Navidad-chaleco-su-ter-invierno-ropa-de-abrigo-ropa-de-vestir-para-perros.jpg_q50.jpg',
            'visible' => 1,
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
            'category_id' => 1
        ]);
        Product::create([
            'name' => 'Sueter',
            'slug' => 'sueter_dog',
            'description' => 'Sueter para tu amigo de tamaño grande y mediano',
            'extract' => 'Prenda Mascota',
            'price' => 60.900,
            'image' => 'https://images-na.ssl-images-amazon.com/images/I/518PhLUQU8L._SY355_.jpg',
            'visible' => 1,
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
            'category_id' => 1
        ]);
        Product::create([
            'name' => 'Buso Con Capota',
            'slug' => 'buso-capota',
            'description' => 'Tu mascota sera la mas cool con este sueter',
            'extract' => 'Prenda Mascota',
            'price' => 60.900,
            'image' => 'https://www.dhresource.com/0x0/f2/albu/g6/M00/1E/14/rBVaR1u9cz6Af7fyAAHMHhA09PY539.jpg',
            'visible' => 1,
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
            'category_id' => 1
        ]);
    }
}
