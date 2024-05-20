<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\JobType;

class JobTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $jobTypes = [
            ['job_type_name' => 'Full-Time'],
            ['job_type_name' => 'Part-Time'],
            ['job_type_name' => 'Contract'],
            ['job_type_name' => 'Temporary'],
            ['job_type_name' => 'Internship'],
            ['job_type_name' => 'Freelance'],
            ['job_type_name' => 'Remote'],
            ['job_type_name' => 'On-Site'],
            ['job_type_name' => 'Seasonal'],
            ['job_type_name' => 'Volunteer'],
        ];

        foreach ($jobTypes as $type) {
            JobType::create($type);
        }
    }
}
