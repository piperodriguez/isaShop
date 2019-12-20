<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',255);//nombre producto
            $table->string('slug');//url
            $table->text('description');//descripcion producto
            $table->string('extract',300);//descripcion corta
            $table->decimal('price', 5, 2);//precio
            $table->string('image', 300);//imagen producto
            $table->boolean('visible');//disponiobilidad
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')
            ->references('id')->on('categories')
            ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
