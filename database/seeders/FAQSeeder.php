<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Faq;

class FAQSeeder extends Seeder
{
    public function run()
    {
        $faqs = [
            [
                'question' => 'What is diabetes?',
                'answer'   => 'Diabetes is a chronic condition that affects how your body turns food into energy. It occurs when the pancreas does not produce enough insulin or when the body cannot effectively use the insulin it produces.',
            ],
            [
                'question' => 'What are the common symptoms of diabetes?',
                'answer'   => 'Frequent urination, increased thirst, unexplained weight loss, fatigue, blurred vision, slow healing wounds, and tingling in hands or feet.',
            ],
            [
                'question' => 'How can diabetes be prevented?',
                'answer'   => 'Maintain a healthy weight, exercise regularly, eat a balanced diet, avoid smoking, limit sugary drinks, and go for regular check-ups.',
            ],
            [
                'question' => 'What is the difference between Type 1 and Type 2 diabetes?',
                'answer'   => 'Type 1 diabetes is an autoimmune condition where the body attacks insulin-producing cells. Type 2 diabetes occurs when the body becomes resistant to insulin or does not produce enough.',
            ],
            [
                'question' => 'Is diabetes curable?',
                'answer'   => 'There is no cure for diabetes, but it can be effectively managed through medication, healthy eating, physical activity, and regular monitoring.',
            ],
        ];

        foreach ($faqs as $faq) {
            Faq::create($faq);
        }
    }
}
