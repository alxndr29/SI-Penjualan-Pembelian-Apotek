<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class ProductUOM extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'product_uom';
    protected $fillable = ['name', 'description'];
}
