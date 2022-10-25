<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductUOM extends Model
{
    protected $table = 'product_uom';
    protected $fillable = ['name', 'description'];
}
