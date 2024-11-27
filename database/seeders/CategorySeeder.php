<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Git' => [
                'name' => 'Git',
                'slug' => 'git',
                'description' => __('git.description'),
            ],
            'dev-environments' => [
                'name' => 'dev environments',
                'slug' => 'dev-environments',
                'description' => __('dev-environments.description'),
            ],
        ];
        foreach ($categories as $category) {
            DB::table('categories')->insert([
                'name' => $category['name'],
                'slug' => $category['slug'],
                'thumbnail' => 'https://picsum.photos/200/300',
                'description' => $category['description'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

    }
}
