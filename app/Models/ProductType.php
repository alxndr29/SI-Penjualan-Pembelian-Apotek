<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    protected $fillable = [
        'name',
        'description'
    ];

    public function categories()
    {
        return $this->hasMany(ProductCategory::class);
    }
}
