<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DocSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = DB::table('categories')->pluck('id', 'name');

        foreach ($categories as $name => $categoryId) {
            for ($i = 1; $i <= 5; $i++) {
                DB::table('docs')->insert([
                    'name' => "Article $i pour $name",
                    'slug' => "article-$i-pour-$name",
                    'image' => 'https://picsum.photos/id/{$i}/200/300',
                    'description' => "Description pour l'article $i dans la catégorie $name",
                    'content' => "Contenu pour l'article $i dans la catégorie $name",
                    'category_id' => $categoryId,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
