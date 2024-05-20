<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// models
use App\Models\Company;
use App\Models\User;
use App\Models\JobCategory;
use App\Models\JobType;
use App\Models\JobListing;

class CompanyController extends Controller
{
    //SHOW
    public function showDashboard()
    {
        // Ambil perusahaan berdasarkan user_id dari pengguna yang sedang login
        $company = Company::where('user_id', Auth::id())->first();
        $user = User::where('id', Auth::id())->firstOrFail();

        // Jika tidak ada data perusahaan, buat data default atau biarkan sebagai null
        if (!$company) {
            $company = new Company(); // Atau Anda bisa membuat data default
            $company->user_id = Auth::id();
            $company->company_name = 'Company';
            $company->company_logo = 'Company';
            // Set properti lainnya sesuai kebutuhan
        }

        // Kirim data perusahaan ke tampilan 'company.profile'
        return view('company.dashboard', compact('company', 'user'));
    }
    public function showProfile()
    {
        // Ambil perusahaan berdasarkan user_id dari pengguna yang sedang login
        $company = Company::where('user_id', Auth::id())->first();
        $user = User::where('id', Auth::id())->firstOrFail();
        if (!$company) {
            $company = new Company(); // Atau Anda bisa membuat data default
            $company->user_id = Auth::id();
            $company->company_name = 'Company';
            $company->company_logo = 'Company';
            // Set properti lainnya sesuai kebutuhan
        }
        // Kirim data perusahaan ke tampilan 'company.profile'
        return view('company.profile', compact('company', 'user'));
    }
    public function showLamaranMasuk()
    {
        // Ambil perusahaan berdasarkan user_id dari pengguna yang sedang login
        $company = Company::where('user_id', Auth::id())->first();
        $user = User::where('id', Auth::id())->firstOrFail();
        if (!$company) {
            $company = new Company(); // Atau Anda bisa membuat data default
            $company->user_id = Auth::id();
            $company->company_name = 'Company';
            $company->company_logo = 'Company';
            // Set properti lainnya sesuai kebutuhan
        }
        // Kirim data perusahaan ke tampilan 'company.profile'
        return view('company.lamaranmasuk', compact('company', 'user'));
    }
    public function showListLowongan()
    {
        // Ambil perusahaan berdasarkan user_id dari pengguna yang sedang login
        $company = Company::where('user_id', Auth::id())->first();
        $user = User::where('id', Auth::id())->firstOrFail();
        if (!$company) {
            $company = new Company(); // Atau Anda bisa membuat data default
            $company->user_id = Auth::id();
            $company->company_name = 'Company';
            $company->company_logo = 'Company';
            // Set properti lainnya sesuai kebutuhan
        }
        $jobListings = JobListing::where('user_id', Auth::id())->get();

        // Kirim data perusahaan ke tampilan 'company.profile'
        return view('company.listlowongan', compact('company', 'user', 'jobListings'));
    }
    public function showtambahlowongan()
    {
        // Ambil perusahaan berdasarkan user_id dari pengguna yang sedang login
        $company = Company::where('user_id', Auth::id())->first();
        $user = User::where('id', Auth::id())->firstOrFail();
        if (!$company) {
            $company = new Company(); // Atau Anda bisa membuat data default
            $company->user_id = Auth::id();
            $company->company_name = 'Company';
            $company->company_logo = 'Company';
            // Set properti lainnya sesuai kebutuhan
        }
        $jobCategories = JobCategory::all();
        $jobTypes = JobType::all();

        // Kirim data perusahaan ke tampilan 'company.profile'
        return view('company.tambahlowongan', compact('company', 'user', 'jobCategories', 'jobTypes'));
    }
    public function showSetting()
    {
        // Ambil perusahaan berdasarkan user_id dari pengguna yang sedang login
        $company = Company::where('user_id', Auth::id())->first();
        $user = User::where('id', Auth::id())->firstOrFail();
        if (!$company) {
            $company = new Company(); // Atau Anda bisa membuat data default
            $company->user_id = Auth::id();
            $company->company_name = 'Company';
            $company->company_logo = 'Company';
            // Set properti lainnya sesuai kebutuhan
        }
        // Kirim data perusahaan ke tampilan 'company.profile'
        return view('company.setting', compact('company', 'user'));
    }

    // Create
    public function tambahlowongan(Request $request)
    {
        // Validasi data yang diterima dari form
        $request->validate([
            'job_category_id' => 'required|exists:job_categorys,id',
            'job_type_id' => 'required|exists:job_types,id',
            'job_benefit' => 'nullable|string',
            'job_requirement' => 'nullable|string',
            'job_description' => 'nullable|string',
            'job_title' => 'nullable|string',
            'salary_range' => 'nullable|string',
        ]);

        // Simpan data ke database
        $jobListing = new JobListing();
        $jobListing->user_id = Auth::id();
        $jobListing->job_category_id = $request->input('job_category_id');
        $jobListing->job_type_id = $request->input('job_type_id');
        $jobListing->job_benefit = $request->input('job_benefit');
        $jobListing->job_requirement = $request->input('job_requirement');
        $jobListing->job_description = $request->input('job_description');
        $jobListing->job_title = $request->input('job_title');
        $jobListing->salary_range = $request->input('salary_range');
        $jobListing->save();

        // Redirect kembali ke halaman form dengan pesan sukses
        return redirect()->route('company.listlowongan')->with('success', 'Job listing created successfully.');
    }


    // UPADTE
    public function updateProfile(Request $request)
    {
        // Validasi data yang diterima dari form
        $request->validate([
            'company_name' => 'required|string|max:255',
            'company_address' => 'nullable|string',
            'company_website' => 'nullable|string',
            'company_email' => 'nullable|email',
            'company_phone' => 'nullable|string',
            'company_description' => 'nullable|string',
            'industry' => 'nullable|string',
            'company_size' => 'nullable|string',
            'founded' => 'nullable|string',
            'company_logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validasi untuk file logo
        ]);

        // Ambil perusahaan berdasarkan user_id dari pengguna yang sedang login
        $company = Company::where('user_id', Auth::id())->firstOrFail();

        // Cek jika ada file logo yang di-upload
        if ($request->hasFile('company_logo')) {
            // Simpan file logo ke storage di dalam folder company/logo/
            $gambar = $request->file('company_logo');
            $gambar->storeAs('public/company/logo', $gambar->hashName());

            // Hapus file logo yang lama
            if ($company->company_logo) {
                Storage::delete('public/company/logo/' . $company->company_logo);
            }

            // Perbarui nama file logo di database
            $company->update(['company_logo' => $gambar->hashName()]);
        }

        // Perbarui data perusahaan
        $company->update($request->except('company_logo'));

        // Redirect kembali ke halaman profil dengan pesan sukses
        return redirect()->route('company.profile')->with('success', 'Profile updated successfully.');
    }
}
