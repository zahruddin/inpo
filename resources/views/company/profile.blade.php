@extends('company.layouts.app')
@section('main')
    <!-- Page header -->
    <div class="page-header d-print-none">
      <div class="container-xl">
        <div class="row g-2 align-items-center">
          <div class="col">
            <h2 class="page-title">
              Profile
            </h2>
          </div>
        </div>
      </div>
    </div>
    <!-- Page body -->
    <div class="page-body">
      <div class="container-xl">
        <div class="card">
          <div class="col-lg-12">
            <div class="row row-cards">
              
              <div class="col-12">
                <form class="card" action="{{ route('company.updateprofile') }}" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="card-body">
                      <h3 class="card-title">Edit Profile</h3>
                          <div class="row row-cards">
                            <div class="col-auto">
                              <span class="avatar avatar-xl" style="background-image: url({{ asset('storage/company/logo/' . $company->company_logo) }})"></span>
                          </div>
                          <div class="col-auto">
                              <input type="file" name="company_logo" class="form-control">
                          </div>
                          <div class="col-md-12">
                              <div class="mb-3">
                                  <label class="form-label">Nama Perusahaan</label>
                                  <input type="text" name="company_name" class="form-control" placeholder="Company" value="{{ old('company_name', $company->company_name) }}">
                              </div>
                          </div>
                          <div class="col-sm-6 col-md-4">
                              <div class="mb-3">
                                  <label class="form-label">Email</label>
                                  <input type="email" name="company_email" class="form-control" placeholder="example@example.com" value="{{ old('company_email', $company->company_email) }}">
                              </div>
                          </div>
                          <div class="col-sm-6 col-md-4">
                              <div class="mb-3">
                                  <label class="form-label">Website Perusahaan</label>
                                  <input type="text" name="company_website" class="form-control" placeholder="example.com" value="{{ old('company_website', $company->company_website) }}">
                              </div>
                          </div>
                          <div class="col-sm-6 col-md-4">
                              <div class="mb-3">
                                  <label class="form-label">Telepon</label>
                                  <input type="text" name="company_phone" class="form-control" placeholder="+6289xxxxxx" value="{{ old('company_phone', $company->company_phone) }}">
                              </div>
                          </div>
                          <div class="col-sm-6 col-md-12">
                              <div class="mb-3">
                                  <label class="form-label">Alamat</label>
                                  <input type="text" name="company_address" class="form-control" placeholder="Lamongan Kampung" value="{{ old('company_address', $company->company_address) }}">
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="mb-3">
                                  <label class="form-label">Industri</label>
                                  <input type="text" name="industry" class="form-control" placeholder="Information Technology" value="{{ old('industry', $company->industry) }}">
                              </div>
                          </div>
                          <div class="col-sm-6 col-md-6">
                              <div class="mb-3">
                                  <label class="form-label">Company Size</label>
                                  <input type="text" name="company_size" class="form-control" placeholder="1000" value="{{ old('company_size', $company->company_size) }}">
                              </div>
                          </div>
                          <div class="col-md-12">
                              <div class="mb-3 mb-0">
                                  <label class="form-label">Tentang Perusahaan</label>
                                  <textarea rows="5" name="company_description" class="form-control" placeholder="Here can be your description">{{ old('company_description', $company->company_description) }}</textarea>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="card-footer text-end">
                      <button type="submit" class="btn btn-primary">Update Profile</button>
                  </div>
              </form>
              
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
@section('customjs')
    <script>

    </script>
@endsection
