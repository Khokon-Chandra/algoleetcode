<?php

namespace Database\Seeders;

use App\Models\DiscussionType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DiscussionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            ['name' => 'All Interview Questions'],
            ['name' => 'System Design'],
            ['name' => 'Operating System'],
            ['name' => 'Interview Experience'],
            ['name' => 'Compensation'],
            ['name' => 'Careeer'],
            ['name' => 'General Discussion'],
            ['name' => 'Study Guide'],
            ['name' => 'Support & Feedback'],
        ])->each(function ($item) {
            DiscussionType::create($item);
        });
    }
}
