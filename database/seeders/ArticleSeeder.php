<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        $author = User::first(); // fallback
        $category = Category::first(); // fallback
        
        $articles = [
            [
                'title' => 'Understanding Type 1 and Type 2 Diabetes',
                'excerpt' => 'Learn the key differences between Type 1 and Type 2 diabetes and how each condition affects the body.',
                'content' => 'Diabetes is a chronic condition characterized by elevated blood sugar levels...',
                'featured_image' => null,
                'category_id' => $category?->id,
                'tags' => ['diabetes', 'education', 'health'],
                'status' => 'published',
            ],
            [
                'title' => 'Healthy Eating Tips for Better Blood Sugar Control',
                'excerpt' => 'Simple nutrition strategies anyone living with diabetes can follow.',
                'content' => 'A balanced diet is essential for proper blood sugar management...',
                'featured_image' => null,
                'category_id' => $category?->id,
                'tags' => ['nutrition', 'lifestyle'],
                'status' => 'published',
            ],
            [
                'title' => 'Early Symptoms of Diabetes You Should Never Ignore',
                'excerpt' => 'Recognizing early signs of diabetes can save lives.',
                'content' => 'Common early symptoms include increased thirst, frequent urination...',
                'featured_image' => null,
                'category_id' => $category?->id,
                'tags' => ['awareness', 'prevention'],
                'status' => 'published',
            ],
            [
                'title' => 'Managing Diabetes in Children: What Parents Need to Know',
                'excerpt' => 'Caring for a child with diabetes requires knowledge and support.',
                'content' => 'Children diagnosed with diabetes may need help adjusting to new routines...',
                'featured_image' => null,
                'category_id' => $category?->id,
                'tags' => ['children', 'family', 'support'],
                'status' => 'published',
            ],
            [
                'title' => 'Physical Activity Guidelines for People Living With Diabetes',
                'excerpt' => 'Daily movement can significantly improve diabetes management.',
                'content' => 'Regular exercise helps lower blood sugar and improves insulin sensitivity...',
                'featured_image' => null,
                'category_id' => $category?->id,
                'tags' => ['exercise', 'lifestyle'],
                'status' => 'published',
            ],
            [
                'title' => 'Preventing Diabetes Complications Through Early Screening',
                'excerpt' => 'Screening is one of the most powerful tools in preventing complications.',
                'content' => 'Early screening helps detect risks before complications develop...',
                'featured_image' => null,
                'category_id' => $category?->id,
                'tags' => ['screening', 'prevention', 'healthcare'],
                'status' => 'published',
            ],
        ];

        foreach ($articles as $data) {
            Article::create([
                'title' => $data['title'],
                'slug' => Str::slug($data['title']),
                'excerpt' => $data['excerpt'],
                'content' => $data['content'],
                'featured_image' => $data['featured_image'],
                'category_id' => $data['category_id'],
                'tags' => $data['tags'],
                'status' => $data['status'],
                'author_id' => $author?->id,
                'published_at' => $data['status'] === 'published' ? now() : null,
            ]);
        }
    }
}
