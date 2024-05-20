@extends('company.layouts.app')
@section('main')
    <!-- Page header -->
    <div class="page-header d-print-none">
      <div class="container-xl">
        <div class="row g-2 align-items-center">
          <div class="col">
            <h2 class="page-title">
              Account Settings
            </h2>
          </div>
        </div>
      </div>
    </div>
    <!-- Page body -->
    <div class="page-body">
      <div class="container-xl">
        <div class="card">
          <div class="row g-0">
            <form action="updateUser" method="post">
              @csrf
              <div class="col-12 col-md-12 d-flex flex-column">
                <div class="card-body">
                  <h3 class="card-title mt-4">Email</h3>
                  <p class="card-subtitle">This contact will be shown to others publicly, so choose it carefully.</p>
                  <div>
                    <div class="row g-2">
                      <div class="col-auto">
                        <input type="text" class="form-control w-auto" value="{{ old('email', $user->email) }}">
                      </div>
                      <div class="col-auto"><a href="#" class="btn">
                          Change
                        </a></div>
                    </div>
                  </div>
                  <h3 class="card-title mt-4">Password</h3>
                  <p class="card-subtitle">You can set a permanent password if you don't want to use temporary login codes.</p>
                  <div>
                    <a href="#" class="btn">
                      Set new password
                    </a>
                  </div>
                  {{-- <h3 class="card-title mt-4">Public profile</h3>
                  <p class="card-subtitle">Making your profile public means that anyone on the Dashkit network will be able to find
                    you.</p>
                  <div>
                    <label class="form-check form-switch form-switch-lg">
                      <input class="form-check-input" type="checkbox" >
                      <span class="form-check-label form-check-label-on">You're currently visible</span>
                      <span class="form-check-label form-check-label-off">You're
                        currently invisible</span>
                    </label>
                  </div> --}}
                </div>
                <div class="card-footer bg-transparent mt-auto">
                  <div class="btn-list justify-content-end">
                    <a href="{{ route('company.dashboard') }}" class="btn">
                      Cancel
                    </a>
                    <a href="#" class="btn btn-primary">
                      Submit
                    </a>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
@endsection
@section('customjs')
    <script>

    </script>
@endsection
