@extends('web.admin.layouts.app')
@section('content-header', 'User')
@section('sub-header', 'Profile')

@section('head')
    <script src="{{ asset('assets/js/alert.js') }}"></script>
    <script>
        function submitForm(formId, UserName) {

            Swal.fire({
                title: "Confirm Change",
                html: "Do you really want to change <b><i>" + UserName + "</i></b> Information?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#d33",
                cancelButtonColor: "#3085d6",
                confirmButtonText: "Yes, change it!",
                cancelButtonText: "Cancel"
            }).then((result) => {
                if (result.isConfirmed) {
                    // The user clicked the "Yes, delete it!" button, proceed with form  submission
                    document.getElementById(formId).submit();
                }
            });
            return false; // Prevent default form submission

        }

        function confirmDelete(UserName, formId) {
            Swal.fire({
                title: "Confirm Delete",
                html: "Do you really want to delete this user <b>" + UserName + "</b>?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#d33",
                cancelButtonColor: "#3085d6",
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "Cancel"
            }).then((result) => {
                if (result.isConfirmed) {
                    // The user clicked the "Yes, delete it!" button, proceed with form submission
                    document.getElementById(formId).submit();
                }
            });
            return false; // Prevent default form submission
        }
    </script>
@endsection

@section('setting-link')
    @if (Auth::user()->id )
        <a class="dropdown-item" href="">Change Password</a>
    @endif
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="javascript:;">Report</a>
@endsection
@section('content')

    <div class="container">
        <div class="card shadow rounded-0 overflow-hidden">
            <div class="row g-0">
                <div class="col-lg-6 d-flex align-items-center justify-content-center border-end">
                    <img src="{{ asset('assets/images/error/forgot-password-frent-img.jpg') }}" class="img-fluid"
                        alt="">
                </div>
                <div class="col-lg-6">
                    <div class="card-body p-4 p-sm-5">
                        <h5 class="card-title">Genrate New Password</h5>
                        <p class="card-text mb-5">We received your reset password request. Please enter your new
                            password!</p>
                        <form method="POST" action="{{ route('admin.user.prfile.change-password') }}" class="form-body">
                            @csrf
                            {{-- <input type="hidden" name="token" value="{{ $token }}"> --}}
                            <div class="row g-3">
                                <div class="col-12">
                                    <label for="oldPassword" class="form-label">Current Password</label>
                                    <div class="ms-auto position-relative">
                                        <div
                                            class="position-absolute top-50 translate-middle-y search-icon px-3">
                                            <i class="bi bi-person-circle"></i>
                                        </div>
                                        <input id="oldPassword" type="password"
                                            placeholder="Enter Current Password"
                                            class="form-control radius-30 ps-5 @error('oldPassword') is-invalid @enderror"
                                            name="oldPassword" required
                                            autocomplete="oldPassword" autofocus>
        
                                        @error('oldPassword')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="inputNewPassword" class="form-label">New Password</label>
                                    <div class="ms-auto position-relative">
                                        <div
                                            class="position-absolute top-50 translate-middle-y search-icon px-3">
                                            <i class="bi bi-lock-fill"></i>
                                        </div>
                                        <input id="password" type="password"
                                            class="form-control radius-30 ps-5 @error('password') is-invalid @enderror"
                                            name="password" required autocomplete="new-password"
                                            placeholder="Enter New Password">
        
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="inputConfirmPassword" class="form-label">Confirm
                                        Password</label>
                                    <div class="ms-auto position-relative">
                                        <div
                                            class="position-absolute top-50 translate-middle-y search-icon px-3">
                                            <i class="bi bi-lock-fill"></i>
                                        </div>
                                        <input id="password-confirm" type="password"
                                            placeholder="Confirm Password"
                                            class="form-control radius-30 ps-5" name="password_confirmation"
                                            required autocomplete="new-password">
        
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="d-grid gap-3">
                                        <button type="submit" class="btn btn-primary radius-30">Change
                                            Password</button>

                                        <a href="{{ route('password.request') }}" class="btn btn-light radius-30">Forgot Password</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection