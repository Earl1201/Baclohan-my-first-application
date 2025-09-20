<?php
// Step 4: Add this content to your tags migration file
// Find: database/migrations/YYYY_MM_DD_XXXXXX_create_tags_table.php
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
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tags');
    }
};

// What this creates:
// - id: Primary key
// - name: Tag name (e.g., "PHP", "JavaScript", "Remote", "Full-time")
// - timestamps: created_at and updated_at
