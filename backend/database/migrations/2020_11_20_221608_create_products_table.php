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
            $table->id();
            $table->foreignId('sub_category_id')->constrained()->onDelete('cascade');
            $table->integer('plu');
            $table->string('name');
            $table->string('description');
            $table->boolean('on_stock');
            $table->float('price');
            $table->float('size');
            $table->string('avatar')->default('no-image.png');
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
