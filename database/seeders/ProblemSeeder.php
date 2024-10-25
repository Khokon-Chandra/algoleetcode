<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Problem;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class ProblemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $problems = Problem::factory(300)->create();

        $tags = Tag::all();

        $company = Company::all();

        foreach ($problems as $problem) {
            $problem->tags()->attach(
                $tags->random(rand(1, 50))->pluck('id')->toArray()
            );

            $problem->companies()->attach(
                $company->random(rand(1, 100))->pluck('id')->toArray()
            );
        }
    }
}
