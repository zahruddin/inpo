<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'company_name',
        'company_address',
        'company_website',
        'company_email',
        'company_phone',
        'company_description',
        'industry',
        'company_size',
        'founded',
        'company_logo',
    ];

    /**
     * Get the user that owns the company.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function jobListings()
    {
        return $this->hasMany(JobListing::class);
    }
}
