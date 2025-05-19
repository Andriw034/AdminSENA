<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeacherSeeder extends Seeder
{
    public function run()
    {
        DB::table('teachers')->insert([
            ['name' => 'Teacher 1', 'email' => 'teacher1@example.com', 'phone' => '1234567890'],
            ['name' => 'Teacher 2', 'email' => 'teacher2@example.com', 'phone' => '0987654321'],
            ['name' => 'Teacher 3', 'email' => 'teacher3@example.com', 'phone' => '1122334455'],
        ]);
    }
}
