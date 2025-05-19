<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    public function run()
    {
        DB::table('courses')->insert([
            ['name' => 'Course 1', 'description' => 'Description for Course 1'],
            ['name' => 'Course 2', 'description' => 'Description for Course 2'],
            ['name' => 'Course 3', 'description' => 'Description for Course 3'],
        ]);
    }
}
