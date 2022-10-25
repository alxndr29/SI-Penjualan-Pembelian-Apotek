<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class SupplierSeeder
{
    public function run()
    {
        DB::table('supplier')->insert([
            'name' => 'PT A',
            'address' => 'JL. A',
            'telephone' => 1,
            'bank_address' => '12412421',
            'description' => '',
            'status' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
