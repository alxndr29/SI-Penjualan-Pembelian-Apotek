<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesOrderTable extends Migration
{
    public function up()
    {
        Schema::create('sales_order', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained('customers');
            $table->foreignId('employee_id')->constrained('users');
            $table->string('no_transaction',8);
            $table->dateTime('transaction_date');
            $table->enum('payment_method',['Cash','BPJS']);
            $table->string('no_bpjs');
            $table->double('total');
            $table->enum('state',['Lunas','Belum Lunas']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sales');
    }
}
