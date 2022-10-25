<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignId('product_type_id')->constrained('product_types');
            $table->foreignId('product_category_id')->constrained('product_categories');
            $table->foreignId('product_uom_id')->constrained('product_uom');
            $table->string('nama');
            $table->double('min_stock');
            $table->double('diskon');
            $table->double('keuntungan');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
