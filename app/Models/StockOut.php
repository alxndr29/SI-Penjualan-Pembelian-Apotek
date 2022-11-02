<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
class StockOut extends Model
{
    protected $table = 'stock_out';
    protected $fillable = ['sales_order_id','product_id','jumlah','keuntungan','diskon','harga'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function sales_order()
    {
        return $this->belongsTo(Sales::class);
    }

}
