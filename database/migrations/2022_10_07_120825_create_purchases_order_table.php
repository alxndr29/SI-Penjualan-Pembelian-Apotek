<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasesOrderTable extends Migration
{
    public function up()
    {
        Schema::create('purchase_order', function (Blueprint $table) {
            $table->id();
            $table->foreignId('supplier_id')->constrained('suppliers');
            $table->foreignId('employe_id')->constrained('users');
            $table->string('no_transaction',8);
            $table->dateTime('transaction_date');
            $table->enum('payment_method',['Tunai','Kredit']);
            $table->dateTime('tanggal_jatuh_tempo');
            $table->dateTime('tanggal_pelunasan');
            $table->double('total');
            $table->enum('state',['Lunas','Belum Lunas','Draft']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('purchases_order');
    }
}
