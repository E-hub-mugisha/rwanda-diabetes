<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\TeamMember;

class TeamMemberSeeder extends Seeder
{
    public function run()
    {
        $members = [
            [
                'name' => 'Dr. Jeanette Uwase',
                'position' => 'Executive Director',
                'role' => 'Leadership',
                'photo' => 'team/jeanette.jpg',
                'email' => 'jeanette@rdo.org',
                'phone' => '+250780000001',
                'bio' => 'Dr. Uwase leads the organization’s strategic direction and partnerships, with over 15 years of experience in diabetes care and public health.',
                'status' => 'active',
                'linkedin' => 'https://linkedin.com/in/jeanette',
                'twitter' => 'https://twitter.com/jeanette',
                'instagram' => null,
            ],
            [
                'name' => 'Dr. Paul Nkurikiyinka',
                'position' => 'Medical Programs Coordinator',
                'role' => 'Programs',
                'photo' => 'team/paul.jpg',
                'email' => 'paul@rdo.org',
                'phone' => '+250780000002',
                'bio' => 'Dr. Paul oversees clinical programs, screening campaigns, and training of healthcare professionals across Rwanda.',
                'status' => 'active',
                'linkedin' => null,
                'twitter' => 'https://twitter.com/drpaul',
                'instagram' => null,
            ],
            [
                'name' => 'Alice Mukamana',
                'position' => 'Community Outreach Manager',
                'role' => 'Community Engagement',
                'photo' => 'team/alice.jpg',
                'email' => 'alice@rdo.org',
                'phone' => '+250780000003',
                'bio' => 'Alice manages community education programs, school partnerships, and awareness campaigns.',
                'status' => 'active',
                'linkedin' => 'https://linkedin.com/in/alicem',
                'twitter' => null,
                'instagram' => 'https://instagram.com/alicem',
            ],
            [
                'name' => 'Mugisha Eric',
                'position' => 'Technology & Digital Systems Lead',
                'role' => 'Technology',
                'photo' => 'team/eric.jpg',
                'email' => 'eric@rdo.org',
                'phone' => '+250780000004',
                'bio' => 'Eric leads digital platforms, data systems, and technology solutions to support diabetes care and monitoring.',
                'status' => 'active',
                'linkedin' => 'https://linkedin.com/in/eric',
                'twitter' => null,
                'instagram' => 'https://instagram.com/eric',
            ],
            [
                'name' => 'Marie Claire Ndahiro',
                'position' => 'Nutrition Specialist',
                'role' => 'Health Education',
                'photo' => 'team/marie.jpg',
                'email' => 'marie@rdo.org',
                'phone' => '+250780000005',
                'bio' => 'Marie Claire provides nutrition guidance and develops diabetes-friendly meal plans for communities.',
                'status' => 'active',
                'linkedin' => null,
                'twitter' => null,
                'instagram' => 'https://instagram.com/marie',
            ],
            [
                'name' => 'John Bosco Habimana',
                'position' => 'Finance & Administration Officer',
                'role' => 'Finance',
                'photo' => 'team/john.jpg',
                'email' => 'john@rdo.org',
                'phone' => '+250780000006',
                'bio' => 'John oversees financial management, reporting, and administrative operations.',
                'status' => 'active',
                'linkedin' => 'https://linkedin.com/in/johnbosco',
                'twitter' => null,
                'instagram' => null,
            ],
        ];

        foreach ($members as $member) {
            TeamMember::create(array_merge($member, [
                'slug' => Str::slug($member['name']),
            ]));
        }
    }
}
