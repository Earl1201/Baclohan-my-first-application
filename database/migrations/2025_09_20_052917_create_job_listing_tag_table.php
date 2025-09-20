<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Create the job_listing_tag pivot table (as per tutorial)
        Schema::create('job_listing_tag', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Job::class, 'job_listing_id')->constrained('job_listings')->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\Tag::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_listing_tag');
    }
};

// What this creates:
// - job_listing_id: References job_listings.id (not jobs.id)
// - tag_id: References tags.id
// - cascadeOnDelete(): If job or tag is deleted, remove the connection
