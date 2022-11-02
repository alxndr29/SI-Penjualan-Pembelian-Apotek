<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['nama','min_stock','diskon','keuntungan','product_type_id','product_uom_id','product_category_id'];

    public function Type()
    {
        return $this->belongsTo(ProductType::class,'product_type_id');
    }

    public function Category()
    {
        return $this->belongsTo(ProductCategory::class,'product_category_id');
    }

    public function UOM()
    {
        return $this->belongsTo(ProductUOM::class,'product_uom_id');
    }

    public function stock_in()
    {
        return $this->belongsTo(StockIN::class);
    }

    public function stock_out(){
        return $this->hasMany(StockOut::class);
    }
}
