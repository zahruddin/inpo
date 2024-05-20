<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\User;
use App\Models\JobCategory;
use App\Models\JobType;
use App\Models\JobListing;

class FrontController extends Controller
{
    //
    public function index()
    {
        // Ambil semua data job listings dari database
        $jobListings = JobListing::with('jobCategory', 'jobType', 'company')->get();

        // Kirim data job listings ke tampilan 'index'
        return view('index', compact('jobListings'));
    }
    public function showLokerDetail($id)
    {
        // Ambil job listing berdasarkan ID dengan relasi jobCategory, jobType, dan company
        $jobListing = JobListing::with('jobCategory', 'jobType', 'company')->findOrFail($id);

        // Kirim data job listing ke tampilan 'lokerdetail'
        return view('lokerdetail', compact('jobListing'));
    }
}
