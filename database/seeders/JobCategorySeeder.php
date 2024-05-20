<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\JobCategory;

class JobCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $jobCategories = [
            ['job_category_name' => 'Engineering'],
            ['job_category_name' => 'Marketing'],
            ['job_category_name' => 'Sales'],
            ['job_category_name' => 'Finance'],
            ['job_category_name' => 'Human Resources'],
            ['job_category_name' => 'Customer Service'],
            ['job_category_name' => 'IT'],
            ['job_category_name' => 'Administration'],
            ['job_category_name' => 'Healthcare'],
            ['job_category_name' => 'Education'],
            ['job_category_name' => 'Legal'],
            ['job_category_name' => 'Real Estate'],
            ['job_category_name' => 'Consulting'],
            ['job_category_name' => 'Construction'],
            ['job_category_name' => 'Hospitality'],
            ['job_category_name' => 'Transportation'],
            ['job_category_name' => 'Manufacturing'],
            ['job_category_name' => 'Retail'],
            ['job_category_name' => 'Food & Beverage'],
            ['job_category_name' => 'Arts & Entertainment'],
            ['job_category_name' => 'Non-Profit'],
            ['job_category_name' => 'Government'],
            ['job_category_name' => 'Utilities'],
            ['job_category_name' => 'Telecommunications'],
            ['job_category_name' => 'Agriculture'],
            ['job_category_name' => 'Aerospace'],
            ['job_category_name' => 'Automotive'],
            ['job_category_name' => 'Energy'],
            ['job_category_name' => 'Pharmaceuticals'],
        ];

        foreach ($jobCategories as $category) {
            JobCategory::create($category);
        }
    }
}
