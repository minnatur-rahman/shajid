<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Str;
use App\Models\Teacher;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Teacher::factory()->count(20)->create();
        // $array = [
        //     [
        //         'name' => Str::random(80),
        //         'name' => Str::random(70).'@gmail.com',
        //         'name' => Str::random(50),
        //     ],

        //     [
        //         'name' => Str::random(80),
        //         'name' => Str::random(70).'@gmail.com',
        //         'name' => Str::random(50),
        //     ],

        //     [
        //         'name' => Str::random(80),
        //         'name' => Str::random(70).'@gmail.com',
        //         'name' => Str::random(50),
        //     ],

        //     [
        //         'name' => Str::random(80),
        //         'name' => Str::random(70).'@gmail.com',
        //         'name' => Str::random(50),
        //     ],

        //     ];

        //     DB::table('teachers')->insert();

    }
}
