<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ResearchItem;
use App\Models\ResearchCategory;
use Illuminate\Support\Str;

class ResearchItemSeeder extends Seeder
{
    public function run()
    {
        $data = [
            // --- RESEARCH CATEGORIES ---
            'Publications' => [
                [
                    'title' => 'Diabetes Burden in Rwanda: A 2024 Review',
                    'summary' => 'A national-level publication analysing diabetes prevalence, risk factors, and interventions in Rwanda.',
                    'content' => 'This publication explores the diabetes burden in Rwanda based on recent studies...',
                    'external_link' => 'https://example.com/publication1.pdf',
                ],
                [
                    'title' => 'Impact of Community Screening Programs',
                    'summary' => 'Evaluating the effectiveness of community-based diabetes screening across rural districts.',
                    'content' => 'Community screenings have played a key role in early detection...',
                    'external_link' => 'https://example.com/publication2.pdf',
                ],
            ],

            'Local Studies' => [
                [
                    'title' => 'Glycemic Control Among Youth in Kigali',
                    'summary' => 'A study assessing glycemic control among adolescents living with diabetes.',
                    'content' => 'This study evaluates HbA1c levels in youth...',
                ],
                [
                    'title' => 'Knowledge of Diabetes in Rural Communities',
                    'summary' => 'Survey-based research to measure awareness levels in rural Rwanda.',
                    'content' => 'Awareness remains a major challenge...',
                ],
            ],

            'Global Recommendations' => [
                [
                    'title' => 'WHO Diabetes Guidelines 2024',
                    'summary' => 'The latest WHO global recommendations on diabetes care and management.',
                    'external_link' => 'https://who.int/diabetes-guidelines',
                    'content' => 'These WHO guidelines outline new standards...',
                ],
                [
                    'title' => 'IDF Global Diabetes Report',
                    'summary' => 'International Diabetes Federation 2024 global report.',
                    'external_link' => 'https://idf.org/global-report',
                    'content' => 'The IDF report highlights global diabetes trends...',
                ],
            ],

            // --- DOWNLOAD CATEGORIES ---
            'PDF Downloads' => [
                [
                    'title' => 'Diabetes Care Handbook (PDF)',
                    'summary' => 'A practical handbook covering daily diabetes management tips.',
                    'file' => 'downloads/diabetes-care-handbook.pdf',
                    'content' => 'This handbook helps people living with diabetes...',
                ],
                [
                    'title' => 'Healthy Eating Guide (PDF)',
                    'summary' => 'Basic nutrition guidelines for individuals with diabetes.',
                    'file' => 'downloads/healthy-eating-guide.pdf',
                    'content' => 'This PDF explains balanced diets...',
                ],
            ],

            'Kinyarwanda Resources' => [
                [
                    'title' => 'Ibyerekeye Diyabete mu Kinyarwanda',
                    'summary' => 'Igitabo gito gisobanura diyabete mu mvugo yoroshye.',
                    'file' => 'downloads/diabetes-kinyarwanda.pdf',
                    'content' => 'Iyi nyandiko isobanura diyabete...',
                ],
                [
                    'title' => 'Indyo nziza ku bafite Diyabete',
                    'summary' => 'Amabwiriza y’indyo nziza mu Kinyarwanda.',
                    'file' => 'downloads/indyo-nziza.pdf',
                    'content' => 'Amabwiriza arambuye ku ndyo iboneye...',
                ],
            ],

            'Toolkits & Training Downloads' => [
                [
                    'title' => 'Health Worker Diabetes Training Toolkit',
                    'summary' => 'Essential materials for training community health workers.',
                    'file' => 'downloads/health-worker-toolkit.zip',
                    'content' => 'This toolkit contains slides, checklists...',
                ],
                [
                    'title' => 'School Diabetes Education Toolkit',
                    'summary' => 'Toolkit for delivering diabetes awareness in schools.',
                    'file' => 'downloads/school-diabetes-toolkit.zip',
                    'content' => 'Includes posters, lesson plans...',
                ],
            ],
        ];

        foreach ($data as $categoryName => $items) {
            $category = ResearchCategory::where('name', $categoryName)->first();

            if (!$category) continue;

            foreach ($items as $item) {
                ResearchItem::create([
                    'category_id' => $category->id,
                    'title'       => $item['title'],
                    'slug'        => Str::slug($item['title']),
                    'summary'     => $item['summary'] ?? null,
                    'content'     => $item['content'] ?? null,
                    'file'        => $item['file'] ?? null,
                    'external_link' => $item['external_link'] ?? null,
                    'status'      => 'published',
                ]);
            }
        }
    }
}
