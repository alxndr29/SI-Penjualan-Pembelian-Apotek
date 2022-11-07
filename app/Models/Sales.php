<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    protected $table = 'sales_order';
    protected $fillable = ['id','no_transaction','customer_id','employee_id','state','total','no_bpjs','payment_method','transaction_date'];

    public function Customer()
    {
        return $this->belongsTo(Customer::class);
    }

}
