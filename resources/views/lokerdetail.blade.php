@extends('layouts.app')

@section('main')
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <h2 class="page-title">
                    Job Details
                </h2>
            </div>
        </div>
    </div>
</div>
<!-- Page body -->
<div class="page-body">
    <div class="container-xl">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">{{ $jobListing->job_title }}</h3>
            </div>
            <div class="card-body">
                <div class="datagrid">
                    <div class="datagrid-item">
                        <div class="datagrid-title">Job Title</div>
                        <div class="datagrid-content">{{ $jobListing->job_title }}</div>
                    </div>
                    <div class="datagrid-item">
                        <div class="datagrid-title">Job Category</div>
                        <div class="datagrid-content">{{ $jobListing->jobCategory->job_category_name ?? 'N/A' }}</div>
                    </div>
                    <div class="datagrid-item">
                        <div class="datagrid-title">Job Type</div>
                        <div class="datagrid-content">{{ $jobListing->jobType->job_type_name ?? 'N/A' }}</div>
                    </div>
                    <div class="datagrid-item">
                        <div class="datagrid-title">Company</div>
                        <div class="datagrid-content">{{ $jobListing->company->company_name ?? 'N/A' }}</div>
                    </div>
                    <div class="datagrid-item">
                        <div class="datagrid-title">Job Benefit</div>
                        <div class="datagrid-content">{{ $jobListing->job_benefit }}</div>
                    </div>
                    <div class="datagrid-item">
                        <div class="datagrid-title">Job Requirement</div>
                        <div class="datagrid-content">{{ $jobListing->job_requirement }}</div>
                    </div>
                    <div class="datagrid-item">
                        <div class="datagrid-title">Job Description</div>
                        <div class="datagrid-content">{{ $jobListing->job_description }}</div>
                    </div>
                    <div class="datagrid-item">
                        <div class="datagrid-title">Salary Range</div>
                        <div class="datagrid-content">{{ $jobListing->salary_range }}</div>
                    </div>
                    <div class="datagrid-item">
                        <div class="datagrid-title">Created At</div>
                        <div class="datagrid-content">{{ $jobListing->created_at->format('d M Y') }}</div>
                    </div>
                    <div class="datagrid-item">
                        <div class="datagrid-title">Updated At</div>
                        <div class="datagrid-content">{{ $jobListing->updated_at->format('d M Y') }}</div>
                    </div>
                </div>
            </div>
            <div class="card-footer text-end">
              <a href="#" class="btn btn-outline-white">
                {{-- <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg> --}}
                Save
              </a>
              <a href="#" class="btn btn-primary">
                {{-- <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg> --}}
                Quick Apply
              </a>
          </div>
        </div>
    </div>
</div>
@endsection
