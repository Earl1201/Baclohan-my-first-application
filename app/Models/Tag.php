<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tag extends Model
{
    use HasFactory;

    // PART 3: Define the belongsToMany relationship (Tag belongs to many Jobs)
    // Note: Using 'job_listing_tag' as pivot table and 'job_listing_id' as related key
    public function jobs()
    {
        return $this->belongsToMany(\App\Models\Job::class, 'job_listing_tag', 'tag_id', 'job_listing_id');
    }
}
