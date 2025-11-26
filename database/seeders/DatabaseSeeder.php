<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Role::create(['name' => 'admin']);
        Role::create(['name' => 'staff']);
        Role::create(['name' => 'volunteer']);

        $this->call([
            CategorySeeder::class,
            PostSeeder::class,
            ArticleSeeder::class,
            StorySeeder::class,
            TeamMemberSeeder::class,
            ProgramsTableSeeder::class,
            LearningMaterialSeeder::class,
            ResearchCategoriesSeeder::class
        ]);
    }
}
