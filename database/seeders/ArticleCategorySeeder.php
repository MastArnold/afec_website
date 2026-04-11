<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('blog_categories')->insert([
            ['id' => 1, 'name' => 'Projet', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'name' => 'Evènement', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
