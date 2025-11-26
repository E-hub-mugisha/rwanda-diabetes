<?php

namespace Database\Seeders;

use App\Models\ResearchCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ResearchCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            // Research categories
            ['name' => 'Publications', 'type' => 'research'],
            ['name' => 'Local Studies', 'type' => 'research'],
            ['name' => 'Global Recommendations', 'type' => 'research'],

            // Downloads categories
            ['name' => 'PDF Downloads', 'type' => 'download'],
            ['name' => 'Kinyarwanda Resources', 'type' => 'download'],
            ['name' => 'Toolkits & Training Downloads', 'type' => 'download'],
        ];

        foreach ($categories as $cat) {
            ResearchCategory::create([
                'name' => $cat['name'],
                'slug' => Str::slug($cat['name']),
                'type' => $cat['type'],
            ]);
        }
    }
}
