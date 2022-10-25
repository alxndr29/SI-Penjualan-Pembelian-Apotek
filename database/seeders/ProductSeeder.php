<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ProductSeeder
{
    public function run()
    {
        DB::table('products')->insert([
            'product_type_id' => 1,
            'product_category_id' => 2,
            'product_uom_id' => 1,
            'nama' => 'ACYCLOVIR 400 MG ',
            'diskon' => 5,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
