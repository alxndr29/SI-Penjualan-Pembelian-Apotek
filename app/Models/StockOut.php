<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
class StockOut extends Model
{
    protected $table = 'stock_out';
    protected $fillable = ['sales_order_id','product_id','jumlah','keuntungan','diskon','harga','tanggal_pelunasan'];

    public function Product()
    {
        return $this->belongsTo(Product::class);
    }

    public function SalesOrder()
    {
        return $this->belongsTo(Sales::class);
    }


}
