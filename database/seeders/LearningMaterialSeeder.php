<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\LearningMaterial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LearningMaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $materials = [
            [
                'title' => 'Introduction to Type 1 Diabetes',
                'slug' => 'introduction-type-1-diabetes',
                'excerpt' => 'Learn about the causes and management of Type 1 Diabetes.',
                'content' => 'Type 1 diabetes is an autoimmune condition where...',
                'material_type' => 'article',
                'status' => 'published',
                'category_id' => Category::where('slug', 'type-1-diabetes')->first()->id ?? null,
                'author_id' => 1
            ],
            [
                'title' => 'Managing Type 2 Diabetes Effectively',
                'slug' => 'managing-type-2-diabetes',
                'excerpt' => 'Tips and strategies for living with Type 2 Diabetes.',
                'content' => 'Type 2 diabetes occurs when your body becomes resistant...',
                'material_type' => 'article',
                'status' => 'published',
                'category_id' => Category::where('slug', 'type-2-diabetes')->first()->id ?? null,
                'author_id' => 1
            ],
            [
                'title' => 'Gestational Diabetes Awareness',
                'slug' => 'gestational-diabetes-awareness',
                'excerpt' => 'Understanding diabetes during pregnancy.',
                'content' => 'Gestational diabetes develops during pregnancy and...',
                'material_type' => 'article',
                'status' => 'published',
                'category_id' => Category::where('slug', 'gestational-diabetes')->first()->id ?? null,
                'author_id' => 1
            ],
            [
                'title' => 'Preventing Diabetes with Lifestyle Changes',
                'slug' => 'preventing-diabetes-lifestyle',
                'excerpt' => 'Simple steps to reduce your diabetes risk.',
                'content' => 'Healthy lifestyle habits such as diet and exercise...',
                'material_type' => 'article',
                'status' => 'published',
                'category_id' => Category::where('slug', 'prevention')->first()->id ?? null,
                'author_id' => 1
            ],
            [
                'title' => 'Nutrition Tips for Diabetes',
                'slug' => 'nutrition-tips-diabetes',
                'excerpt' => 'Dietary guidelines for managing blood sugar.',
                'content' => 'A balanced diet with low sugar and high fiber...',
                'material_type' => 'article',
                'status' => 'published',
                'category_id' => Category::where('slug', 'nutrition')->first()->id ?? null,
                'author_id' => 1
            ],
            [
                'title' => 'Exercise and Diabetes',
                'slug' => 'exercise-and-diabetes',
                'excerpt' => 'The importance of physical activity for diabetes management.',
                'content' => 'Regular exercise helps control blood sugar levels...',
                'material_type' => 'article',
                'status' => 'published',
                'category_id' => Category::where('slug', 'lifestyle')->first()->id ?? null,
                'author_id' => 1
            ],
        ];

        foreach ($materials as $material) {
            LearningMaterial::create($material);
        }
    }
}
