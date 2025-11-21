<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use Illuminate\Support\Str;
use Carbon\Carbon;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'title' => 'Understanding Type 1 and Type 2 Diabetes',
                'excerpt' => 'A clear explanation of the differences between Type 1 and Type 2 diabetes and how they affect the body.',
                'content' => 'Diabetes is a chronic condition that affects how your body processes blood sugar... (full article here)',
                'featured_image' => 'images/posts/diabetes-types.jpg',
                'author_id' => 1,
                'category_id' => 1,
                'tags' => ['diabetes', 'education', 'awareness'],
            ],
            [
                'title' => 'Healthy Eating Tips for Preventing Diabetes',
                'excerpt' => 'Simple nutrition habits to help reduce your risk of developing diabetes.',
                'content' => 'Good nutrition plays a crucial role in preventing diabetes... (full article here)',
                'featured_image' => 'images/posts/nutrition-tips.jpg',
                'author_id' => 1,
                'category_id' => 4,
                'tags' => ['nutrition', 'prevention', 'health'],
            ],
            [
                'title' => 'How to Support a Family Member Living With Diabetes',
                'excerpt' => 'Guide for families to provide emotional and practical support for loved ones with diabetes.',
                'content' => 'Family support is essential for diabetes management... (full article here)',
                'featured_image' => 'images/posts/family-support.jpg',
                'author_id' => 1,
                'category_id' => 5,
                'tags' => ['family', 'support', 'diabetes'],
            ],
            [
                'title' => 'Exercise Routines That Help Manage Blood Sugar',
                'excerpt' => 'Daily physical activities recommended for people living with diabetes.',
                'content' => 'Regular exercise helps improve insulin sensitivity... (full article here)',
                'featured_image' => 'images/posts/exercise.jpg',
                'author_id' => 1,
                'category_id' => 4,
                'tags' => ['exercise', 'lifestyle', 'blood-sugar'],
            ],
            [
                'title' => 'Community Screening Programs Launched Nationwide',
                'excerpt' => 'Our organization expands free diabetes screening to more districts.',
                'content' => 'The new screening program aims to identify undiagnosed cases early... (full article here)',
                'featured_image' => 'images/posts/screening.jpg',
                'author_id' => 1,
                'category_id' => 8,
                'tags' => ['screening', 'programs', 'community'],
            ],
            [
                'title' => 'Inspirational Story: Living Confidently With Diabetes',
                'excerpt' => 'A powerful personal story from a young adult managing diabetes with courage.',
                'content' => 'Living with diabetes requires resilience... (full article here)',
                'featured_image' => 'images/posts/story.jpg',
                'author_id' => 1,
                'category_id' => 7,
                'tags' => ['stories', 'motivation', 'diabetes'],
            ],
        ];

        foreach ($posts as $post) {
            Post::create([
                'title' => $post['title'],
                'slug' => Str::slug($post['title']),
                'excerpt' => $post['excerpt'],
                'content' => $post['content'],
                'featured_image' => $post['featured_image'],
                'author_id' => $post['author_id'],
                'category_id' => $post['category_id'],
                'tags' => json_encode($post['tags']),
                'status' => 'published',
                'published_at' => Carbon::now(),
            ]);
        }
    }
}
