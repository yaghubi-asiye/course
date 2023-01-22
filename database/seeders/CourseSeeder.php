<?php

namespace Database\Seeders;

use CourseApp\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Course::create([

            'name' => 'CourseTest',

            'unit' => '3',

            'capacity' => 1,

        ]);
    }
}
