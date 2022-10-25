<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StockIN extends Model
{
    protected $table = 'stock_in';
    protected $fillable = ['purchase_order_id','product_id','expired_date','jumlah','harga'];
    public function purchase_order()
    {
        return $this->belongsTo(Purchase::class,'purchase_order_id');
    }
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

}
