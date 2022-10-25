<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('detail_stock_opname', function (Blueprint $table) {
            $table->id();
            $table->foreignId('stock_opname_id')->constrained('stock_opname');
            $table->foreignId('product_id')->constrained('products');
            $table->dateTime('stock_computer');
            $table->integer('stock_aktual');
            $table->integer('stock_selisih');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('detail_stock_opname');
    }
};
