<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $fillable = ['product_type_id','name','description'];

    public function Type()
    {
        return $this->belongsTo(ProductType::class,'product_type_id');
    }
}
