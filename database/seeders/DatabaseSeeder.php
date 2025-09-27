<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Job;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Create a test user with the correct field name
        User::factory()->create([
            'name' => 'John Doe',
            'email' => 'test@example.com',
        ]);

        // Create 10 tags
        $tags = Tag::factory(10)->create();

        // Create 20 jobs and attach random tags to each
        Job::factory(20)->create()->each(function($job) use ($tags) {
            $job->tags()->attach($tags->random(2));
        });
    }
}
