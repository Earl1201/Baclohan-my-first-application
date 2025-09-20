<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create some employers first
        $employers = \App\Models\Employer::factory(5)->create();

        // Create tags
        $tags = \App\Models\Tag::factory(10)->create();

        // Create jobs and attach random employers and tags
        \App\Models\Job::factory(20)->create()->each(function($job) use ($tags) {
            $job->tags()->attach($tags->random(2));
        });
    }
}
