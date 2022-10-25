<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('stock_opname', function (Blueprint $table) {
            $table->id();
            $table->string('no_opname');
            $table->integer('bulan');
            $table->date('tanggal_mulai');
            $table->date('tanggal_berakhir');
            $table->string('operator');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('stock_opnames');
    }
};
