<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class ProductCategory extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = ['product_type_id','name','description'];

    public function Type()
    {
        return $this->belongsTo(ProductType::class,'product_type_id');
    }
}
