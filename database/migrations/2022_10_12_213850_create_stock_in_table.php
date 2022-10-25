<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('stock_in', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignId('purchase_order_id')->constrained('purchase_order');
            $table->foreignId('product_id')->constrained('products');
            $table->dateTime('expired_date');
            $table->integer('jumlah');
            $table->integer('diskon');
            $table->integer('harga');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('stock_in');
    }
};
