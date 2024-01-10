<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('images')->insert([
            [
                'name' => '1.jpg',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => '2.jpg',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => '3.jpg',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => '4.jpg',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => '5.jpg',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => '6.jpg',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => '7.jpg',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => '8.jpg',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => '9.jpg',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => '10.jpg',
                'created_at' => Carbon::now(),
            ],
        ]);
    }
}
