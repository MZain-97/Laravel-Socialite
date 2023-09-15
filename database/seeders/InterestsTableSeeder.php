<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InterestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('interests')->insert([
            ['name' => 'Photography'],
            ['name' => 'Cooking'],
            ['name' => 'Travelling'],
            ['name' => 'VideoGames'],
            ['name' => 'Fitness'],
            ['name' => 'Music'],
            ['name' => 'Drinking'],
            ['name' => 'Shopping'],
            // Add more interests as needed
        ]);
    }
}
