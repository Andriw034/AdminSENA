<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComputerSeeder extends Seeder
{
    public function run()
    {
        DB::table('computers')->insert([
            ['name' => 'Computer 1', 'serial_number' => 'SN123456', 'status' => 'available'],
            ['name' => 'Computer 2', 'serial_number' => 'SN654321', 'status' => 'in_use'],
            ['name' => 'Computer 3', 'serial_number' => 'SN112233', 'status' => 'maintenance'],
        ]);
    }
}
