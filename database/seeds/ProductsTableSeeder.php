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
            'name' => 'Chaleco Militar',
            'slug' => 'chaleco-militar',
            'description' => 'Chaleco para que tu perrito luzca con un estilo increible y pueda cargar sus juguetes',
            'extract' => 'Prenda Mascota',
            'price' => 60.900,
            'image' => 'https://ae01.alicdn.com/kf/Hed5b540043ad48f989d074b73b1d7722V/Mascota-gato-perro-Navidad-chaleco-su-ter-invierno-ropa-de-abrigo-ropa-de-vestir-para-perros.jpg_q50.jpg',
            'visible' => 1,
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
            'category_id' => 1
        ]);
    }
}
