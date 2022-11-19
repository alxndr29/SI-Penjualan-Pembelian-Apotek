<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StockOpname extends Model
{
    protected $table = 'stock_opname';
    protected $fillable = ['no_opname','bulan','tanggal_mulai','tanggal_berakhir','operator','state'];

}
