<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ProgramsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // First, get existing category IDs
        $categories = DB::table('categories')->pluck('id', 'name')->toArray();

        $programs = [
            [
                'title' => 'Diabetes Basics',
                'slug' => Str::slug('Diabetes Basics'),
                'image' => 'programs/diabetes_basics.jpg',
                'short_description' => 'Learn the fundamentals of diabetes management.',
                'content' => 'Full content about Diabetes Basics goes here.',
                'status' => 'published',
                'category_id' => $categories['Awareness & Education'] ?? null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Prevention & Early Detection',
                'slug' => Str::slug('Prevention & Early Detection'),
                'image' => 'programs/prevention_detection.jpg',
                'short_description' => 'Strategies for preventing diabetes and early detection.',
                'content' => 'Full content about Prevention & Early Detection goes here.',
                'status' => 'published',
                'category_id' => $categories['Awareness & Education'] ?? null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Nutrition & Lifestyle',
                'slug' => Str::slug('Nutrition & Lifestyle'),
                'image' => 'programs/nutrition_lifestyle.jpg',
                'short_description' => 'Guidelines on healthy nutrition and lifestyle choices.',
                'content' => 'Full content about Nutrition & Lifestyle goes here.',
                'status' => 'published',
                'category_id' => $categories['Awareness & Education'] ?? null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Clinics & Screening',
                'slug' => Str::slug('Clinics & Screening'),
                'image' => 'programs/clinics_screening.jpg',
                'short_description' => 'Access information about clinics and screening programs.',
                'content' => 'Full content about Clinics & Screening goes here.',
                'status' => 'published',
                'category_id' => $categories['Medical Services'] ?? null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Youth Programs',
                'slug' => Str::slug('Youth Programs'),
                'image' => 'programs/youth_programs.jpg',
                'short_description' => 'Programs specifically designed for youth engagement.',
                'content' => 'Full content about Youth Programs goes here.',
                'status' => 'published',
                'category_id' => $categories['Youth & Communities'] ?? null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Community Screening Events',
                'slug' => Str::slug('Community Screening Events'),
                'image' => 'programs/community_screening.jpg',
                'short_description' => 'Organized community events for health screening.',
                'content' => 'Full content about Community Screening Events goes here.',
                'status' => 'published',
                'category_id' => $categories['Initiatives'] ?? null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('programs')->insert($programs);
    }
}
