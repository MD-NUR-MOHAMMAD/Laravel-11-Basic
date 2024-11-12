<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB as FacadesDB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            $n = Str::random(10);
            FacadesDB::table('categories')->insert([

                'name' => $n,
                'slug' => $n,
                'description' => 'This is ' . $n . ' description',
                'image' => 'image.png',
                'status' => '1',
                'created_at' => now(),
            ]);
        }
    }
}
