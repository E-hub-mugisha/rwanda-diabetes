<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Diabetes Awareness', 'slug' => 'diabetes-awareness'],
            ['name' => 'Education', 'slug' => 'education'],
            ['name' => 'Prevention', 'slug' => 'prevention'],
            ['name' => 'Nutrition', 'slug' => 'nutrition'],
            ['name' => 'Healthy Lifestyle', 'slug' => 'healthy-lifestyle'],
            ['name' => 'Family Support', 'slug' => 'family-support'],
            ['name' => 'Diabetes Stories', 'slug' => 'diabetes-stories'],
            ['name' => 'Programs & Services', 'slug' => 'programs-services'],
            ['name' => 'News & Updates', 'slug' => 'news-updates'],
            ['name' => 'Events', 'slug' => 'events'],
            ['name' => 'Type 1 Diabetes', 'slug' => 'type-1-diabetes'],
            ['name' => 'Type 2 Diabetes', 'slug' => 'type-2-diabetes'],
            ['name' => 'Gestational Diabetes', 'slug' => 'gestational-diabetes'],
            ['name' => 'Prevention', 'slug' => 'prevention'],
            ['name' => 'Nutrition', 'slug' => 'nutrition'],
            ['name' => 'Lifestyle', 'slug' => 'lifestyle'],
        ];

        foreach ($categories as $category) {
            Category::firstOrCreate(['slug' => $category['slug']], $category);
        }
    }
}
