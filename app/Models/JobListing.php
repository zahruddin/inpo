<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobListing extends Model
{
    use HasFactory;
    // Menentukan tabel yang digunakan oleh model ini
    protected $table = 'job_listings';

    // Menentukan kolom yang dapat diisi (mass assignable)
    protected $fillable = [
        'user_id',
        'job_category_id',
        'job_type_id',
        'job_benefit',
        'job_requirement',
        'job_description',
        'job_title',
        'salary_range',
    ];

    // Relasi dengan model User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi dengan model JobCategory
    public function jobCategory()
    {
        return $this->belongsTo(JobCategory::class);
    }

    // Relasi dengan model JobType
    public function jobType()
    {
        return $this->belongsTo(JobType::class);
    }
    public function company()
    {
        return $this->belongsTo(Company::class , 'user_id', 'user_id');
    }
}
