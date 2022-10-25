<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('stock_out', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignId('sales_order_id')->constrained('sales_order');
            $table->foreignId('product_id')->constrained('products');
            $table->integer('jumlah');
            $table->integer('keuntungan');
            $table->integer('diskon');
            $table->integer('harga');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('stock_out');
    }
};
