<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('languages')->insert([
            ['code' => 'En', 'name' => 'English'],
            ['code' => 'Fr', 'name' => 'French'],
            ['code' => 'Jp', 'name' => 'Japnees'],
        ]);
    }
}
