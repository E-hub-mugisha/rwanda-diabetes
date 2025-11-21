<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Story;
use Illuminate\Support\Str;

class StorySeeder extends Seeder
{
    public function run(): void
    {
        $stories = [
            [
                'title' => 'Living With Type 1 Diabetes in Rwanda: Anna’s Journey',
                'author_name' => 'Anna Uwase',
                'location' => 'Kigali',
                'excerpt' => 'Anna shares her inspiring journey of managing diabetes from childhood.',
                'content' => 'I was diagnosed at age 8. At first, it was difficult...',
                'type' => 'story',
                'status' => 'published',
            ],
            [
                'title' => 'How Early Diagnosis Changed My Life',
                'author_name' => 'Jean Bosco',
                'location' => 'Huye',
                'excerpt' => 'Jean tells how screening saved him from severe complications.',
                'content' => 'I thought constant thirst was normal until...',
                'type' => 'testimony',
                'status' => 'published',
            ],
            [
                'title' => 'A Mother’s Story: Supporting a Child With Diabetes',
                'author_name' => 'Claudine Mukamana',
                'location' => 'Rubavu',
                'excerpt' => 'Claudine talks about caring for her diabetic son.',
                'content' => 'When my son fainted at school, I rushed him to...',
                'type' => 'story',
                'status' => 'published',
            ]
        ];

        foreach ($stories as $s) {
            Story::create([
                'title' => $s['title'],
                'slug' => Str::slug($s['title']),
                'author_name' => $s['author_name'],
                'location' => $s['location'],
                'excerpt' => $s['excerpt'],
                'content' => $s['content'],
                'type' => $s['type'],
                'status' => $s['status'],
                'published_at' => now(),
                'created_by' => 1,
            ]);
        }
    }
}
