<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $array = [
            [
                'name' => str_random(80),
                'name' => str_random(70).'@gmail.com',
                'name' => str_random(50),
            ],

            [
                'name' => str_random(80),
                'name' => str_random(70).'@gmail.com',
                'name' => str_random(50),
            ],

            [
                'name' => str_random(80),
                'name' => str_random(70).'@gmail.com',
                'name' => str_random(50),
            ],

            [
                'name' => str_random(80),
                'name' => str_random(70).'@gmail.com',
                'name' => str_random(50),
            ],

            ];

            DB::table('teachers')->insert();

    }
}
