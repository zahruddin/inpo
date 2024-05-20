<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\JobListing;

class JobListingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        JobListing::create([
            'user_id' => 2, // sesuaikan dengan user_id yang ada
            'job_category_id' => 1, // sesuaikan dengan job_category_id yang ada
            'job_type_id' => 1, // sesuaikan dengan job_type_id yang ada
            'job_benefit' => 'Health insurance, Paid time off, Retirement plan',
            'job_requirement' => 'Bachelor\'s degree in Computer Science, 2+ years of experience in software development',
            'job_description' => 'Develop and maintain web applications, Collaborate with cross-functional teams to define and design new features',
        ]);

        JobListing::create([
            'user_id' => 2, // sesuaikan dengan user_id yang ada
            'job_category_id' => 2, // sesuaikan dengan job_category_id yang ada
            'job_type_id' => 2, // sesuaikan dengan job_type_id yang ada
            'job_benefit' => 'Flexible working hours, Remote work options, Company-provided equipment',
            'job_requirement' => 'Proven work experience as a Project Manager, Excellent communication skills',
            'job_description' => 'Lead project planning sessions, Coordinate staff and internal resources, Manage project progress and adapt work as required',
        ]);

        JobListing::create([
            'user_id' => 2, // sesuaikan dengan user_id yang ada
            'job_category_id' => 3, // sesuaikan dengan job_category_id yang ada
            'job_type_id' => 3, // sesuaikan dengan job_type_id yang ada
            'job_benefit' => 'On-site gym, Free lunch, Annual bonuses',
            'job_requirement' => 'Experience with graphic design software, Strong portfolio showcasing previous work',
            'job_description' => 'Create visual aspects of marketing materials, websites, and other media, Work with a wide range of media and use graphic design software',
        ]);
    }
}
