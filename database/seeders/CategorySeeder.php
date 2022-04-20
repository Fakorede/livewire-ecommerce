<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['title' => 'Brands', 'slug' => 'brands', 'parent_id' => null, 'created_at' => now(), 'updated_at' => null],
            ['title' => 'Seasons', 'slug' => 'seasons', 'parent_id' => null, 'created_at' => now(), 'updated_at' => null],
            ['title' => 'Nike', 'slug' => 'nike', 'parent_id' => 1, 'created_at' => now(), 'updated_at' => null],
            ['title' => 'Summer', 'slug' => 'summer', 'parent_id' => 2, 'created_at' => now(), 'updated_at' => null],
            ['title' => 'Winter', 'slug' => 'winter', 'parent_id' => 2, 'created_at' => now(), 'updated_at' => null],
        ]);
    }
}
