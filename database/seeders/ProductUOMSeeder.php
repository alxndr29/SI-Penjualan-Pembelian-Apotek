<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ProductUOMSeeder
{
    public function run()
    {
        DB::table('product_uoms')->insert([
            'name' => 'TABLET',
            'description' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('product_uoms')->insert([
            'name' => 'TUBE',
            'description' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('product_uoms')->insert([
            'name' => 'BOTOL',
            'description' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('product_uoms')->insert([
            'name' => 'KAPSUL',
            'description' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('product_uoms')->insert([
            'name' => 'STRIP',
            'description' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('product_uoms')->insert([
            'name' => 'PCS',
            'description' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('product_uoms')->insert([
            'name' => 'KAPSUL',
            'description' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
