@extends('layouts.app')
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
                <form class="card">
                  <div class="card-body">
                    {{-- <h3 class="card-title">Edit Profile</h3> --}}
                    <div class="row row-cards">
                      <div class="col-md-5">
                        <div class="mb-3">
                          <label class="form-label">Job Seeker</label>
                          <input type="text" class="form-control" disabled="" placeholder="Job Seeker"
                       value="Creative Code Inc.">
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-3">
                        <div class="mb-3">
                          <label class="form-label">Username</label>
                          <input type="text" class="form-control" placeholder="Username" value="michael23">
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-4">
                        <div class="mb-3">
                          <label class="form-label">Email address</label>
                          <input type="email" class="form-control" placeholder="Email">
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-6">
                        <div class="mb-3">
                          <label class="form-label">First Name</label>
                          <input type="text" class="form-control" placeholder="Company" value="Chet">
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-6">
                        <div class="mb-3">
                          <label class="form-label">Last Name</label>
                          <input type="text" class="form-control" placeholder="Last Name" value="Faker">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="mb-3">
                          <label class="form-label">Address</label>
                          <input type="text" class="form-control" placeholder="Home Address"
                       value="Melbourne, Australia">
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-4">
                        <div class="mb-3">
                          <label class="form-label">City</label>
                          <input type="text" class="form-control" placeholder="City" value="Melbourne">
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-3">
                        <div class="mb-3">
                          <label class="form-label">Postal Code</label>
                          <input type="test" class="form-control" placeholder="ZIP Code">
                        </div>
                      </div>
                      <div class="col-md-5">
                        <div class="mb-3">
                          <label class="form-label">Country</label>
                          <select class="form-control form-select">
                            <option value="">Germany</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="mb-3 mb-0">
                          <label class="form-label">About Me</label>
                          <textarea rows="5" class="form-control" placeholder="Here can be your description"
                          value="Mike">Oh so, your weak rhyme
You doubt I'll bother, reading into it
I'll probably won't, left to my own devices
But that's the difference in our opinions.</textarea>
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
