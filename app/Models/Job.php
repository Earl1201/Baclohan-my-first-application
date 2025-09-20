<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model
{
    use HasFactory;

    // Tell Laravel to use 'job_listings' table instead of 'jobs'
    protected $table = 'job_listings';

    // PART 1: Define the belongsTo relationship (Job belongs to one Employer)
    public function employer()
    {
        return $this->belongsTo(\App\Models\Employer::class);
    }

    // PART 3: Define the belongsToMany relationship (Job has many Tags)
    // Note: Using 'job_listing_tag' as pivot table and 'job_listing_id' as foreign key
    public function tags()
    {
        return $this->belongsToMany(\App\Models\Tag::class, 'job_listing_tag', 'job_listing_id');
    }
}
