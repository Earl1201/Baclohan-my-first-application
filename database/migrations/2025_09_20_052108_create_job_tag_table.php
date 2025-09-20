<?php
// Step 2: Add this content to your job_tag migration file
// Find: database/migrations/YYYY_MM_DD_XXXXXX_create_job_tag_table.php
// Replace the up() method with this:

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
        // Create the pivot table connecting jobs and tags
        Schema::create('job_tag', function (Blueprint $table) {
            $table->id();
            $table->foreignId('job_listing_id')->constrained('job_listings')->onDelete('cascade');
            $table->foreignId('tag_id')->constrained('tags')->onDelete('cascade');
            $table->timestamps();

            // Prevent duplicate entries
            $table->unique(['job_listing_id', 'tag_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_tag');
    }
};

// What this creates:
// - job_listing_id: Links to job_listings table
// - tag_id: Links to tags table
// - unique constraint: Prevents duplicate job-tag combinations
// - cascade deletes: If job or tag is deleted, remove the connection
