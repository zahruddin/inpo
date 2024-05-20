<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobType extends Model
{
    use HasFactory;
    protected $table = 'job_types';

    // Menentukan kolom yang dapat diisi (mass assignable)
    protected $fillable = [
        'job_type_name',
    ];
}
