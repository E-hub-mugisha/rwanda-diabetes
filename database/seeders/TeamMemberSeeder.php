<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TeamMemberSeeder extends Seeder
{
    public function run(): void
    {
        $members = [

            [
                'name' => 'Jonas Ruzirakuvuka',
                'slug' => Str::slug('Jonas Ruzirakuvuka'),
                'position' => 'Nutrition Expert',
                'role' => 'Diabetes Prevention & Management Specialist',
                'category' => 'Other',
                'photo' => null,
                'email' => null,
                'phone' => null,
                'bio' => "Jonas Ruzirakuvuka is a Nutrition Expert at the Rwanda Diabetes Association (RDA). He holds a Bachelor's degree in Human Nutrition and Dietetics and is pursuing a Master of Science in Human Nutrition.",
                'status' => 'active',
                'linkedin' => null,
                'twitter' => null,
                'instagram' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Aime Manzi',
                'slug' => Str::slug('Aime Manzi'),
                'position' => 'Clinical & Advocacy Program Director',
                'role' => 'Medical Doctor & Epidemiology Candidate',
                'category' => 'Leadership',
                'photo' => null,
                'email' => null,
                'phone' => null,
                'bio' => "Aime Manzi is a medical doctor and Epidemiology candidate at the University of Rwanda. He serves as Clinical and Advocacy Program Director at RDA.",
                'status' => 'active',
                'linkedin' => null,
                'twitter' => null,
                'instagram' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Niyonshuti Dusengimana Dieudonné',
                'slug' => Str::slug('Niyonshuti Dusengimana Dieudonné'),
                'position' => 'Responsible Pharmacist',
                'role' => 'Pharmaceutical Operations & QA',
                'category' => 'Other',
                'photo' => null,
                'email' => null,
                'phone' => null,
                'bio' => "Responsible Pharmacist at Rwanda Diabetes Association overseeing pharmaceutical coordination and compliance.",
                'status' => 'active',
                'linkedin' => null,
                'twitter' => null,
                'instagram' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Alivera Mukamazimpaka',
                'slug' => Str::slug('Alivera Mukamazimpaka'),
                'position' => 'Senior Nurse – Type 1 Diabetes Education',
                'role' => 'T1D Education & Patient Support',
                'category' => 'Other',
                'photo' => null,
                'email' => null,
                'phone' => null,
                'bio' => "Senior Nurse in charge of Type 1 Diabetes Education with 25 years of service at RDA.",
                'status' => 'active',
                'linkedin' => null,
                'twitter' => null,
                'instagram' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Etienne Uwingabire',
                'slug' => Str::slug('Etienne Uwingabire'),
                'position' => 'Executive Director',
                'role' => 'Public Health Advocate & NCD Leader',
                'category' => 'Leadership',
                'photo' => null,
                'email' => null,
                'phone' => null,
                'bio' => "Executive Director of Rwanda Diabetes Association leading national diabetes prevention and management initiatives.",
                'status' => 'active',
                'linkedin' => null,
                'twitter' => null,
                'instagram' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Claudine Mugiraneza',
                'slug' => Str::slug('Claudine Mugiraneza'),
                'position' => 'Executive Secretary',
                'role' => 'Administration & Program Coordination',
                'category' => 'Leadership',
                'photo' => null,
                'email' => null,
                'phone' => null,
                'bio' => "Executive Secretary at Rwanda Diabetes Association overseeing operations and program coordination.",
                'status' => 'active',
                'linkedin' => null,
                'twitter' => null,
                'instagram' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ];

        DB::table('team_members')->insert($members);
    }
}
