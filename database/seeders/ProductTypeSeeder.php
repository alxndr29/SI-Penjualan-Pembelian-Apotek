<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ProductTypeSeeder
{
    public function run()
    {
        DB::table('product_types')->insert([
            'name' => 'Obat & Vitamin',
            'description' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('product_types')->insert([
            'name' => 'Perlengkapan Medis',
            'description' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
