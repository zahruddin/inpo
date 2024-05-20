<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobCategory extends Model
{
    use HasFactory;
    // Menentukan tabel yang digunakan oleh model ini
    protected $table = 'job_categorys';

    // Menentukan kolom yang dapat diisi (mass assignable)
    protected $fillable = [
        'job_category_name',
    ];

}
