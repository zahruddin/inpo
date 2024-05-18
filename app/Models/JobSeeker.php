<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobSeeker extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'resume',
        'job_title',
        'summary',
        'location',
        'website',
        'linkedin',
        'github',
        'education',
        'work_experience',
        'skills',
        'certifications',
    ];

    /**
     * Get the user that owns the job seeker.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
