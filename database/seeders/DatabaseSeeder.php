<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Admin::create([
            'name' => 'Mr. Admin',
            'email' => 'admin@admin.com',
            'password' => 'password',
        ]);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        User::factory(100)->create();

        $this->call([
            TopicSeeder::class,
            TagSeeder::class,
            CompanySeeder::class,
            ProblemSeeder::class,
            DiscussionTypeSeeder::class,
            DiscussionSeeder::class,
        ]);
    }
}
