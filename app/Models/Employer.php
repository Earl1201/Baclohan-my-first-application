<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employer extends Model
{
    use HasFactory;

    // PART 1: Define the hasMany relationship (Employer has many Jobs)
    public function jobs()
    {
        return $this->hasMany(\App\Models\Job::class, 'employer_id');
    }
}
