<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ProductCategorySeeder
{
    public function run()
    {
        DB::table('product_categories')->insert([
            'product_type_id' => 1,
            'name' => 'Vitamin dan Suplemen',
            'description' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('product_categories')->insert([
            'product_type_id' => 1,
            'name' => 'Batuk Dan Flu',
            'description' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('product_categories')->insert([
            'product_type_id' => 1,
            'name' => 'Anti Virus',
            'description' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
