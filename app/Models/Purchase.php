<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $table = 'purchase_order';
    protected $fillable = ['supplier_id','employe_id','no_transaction','transaction_date','payment_method','total','state'];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    public function employee()
    {
        return $this->belongsTo(User::class);
    }

    public function stock_in()
    {
        return $this->hasMany(StockIN::class);
    }
}
