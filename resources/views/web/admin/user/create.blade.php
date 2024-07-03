@extends('web.admin.layouts.app')
@section('content-header', 'User')
@section('sub-header', 'Create User')

@section('head')
    {{-- <script src="{{ asset('assets/js/alert.js') }}"></script>
    <script>
        function submitForm(formId, UserName, currentRole, newRole) {

            Swal.fire({
                title: "Confirm Change",
                html: "Do you really want to change this user <b><i>" + UserName + "</i></b> role from <strong>" +
                    currentRole + "</strong> to <strong>" + newRole +
                    "</strong>?",
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

        function Lable(formId, UserName, currentRole, newRole) {
            newRole.parentNode.querySelector('input').checked = true;
            submitForm(formId, UserName, currentRole, newRole);
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
    </script> --}}
@endsection


@section('setting-link')
    {{-- <a class="dropdown-item" href="{{ route('admin.user.create') }}">Create User</a> --}}
    {{-- <a class="dropdown-item" href="javascript:;">Another action</a>
    <a class="dropdown-item" href="javascript:;">Something else here</a> --}}
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="javascript:;">Report</a>
@endsection


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <h6 class="mb-0 text-uppercase">Create User Form</h6>
                <hr>
                <div class="card">
                    <form id="myForm" action="{{ route('admin.user.store') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="border p-4 rounded">
                                <div class="card-title d-flex align-items-center">
                                    <h5 class="mb-0">User Registration</h5>
                                </div>
                                <hr>
                                <div class="row mb-3">
                                    <label for="inputEnterYourName" class="col-sm-3 col-form-label">Enter Stuff's ID <span
                                            style="color: red;">*</span></label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control @error('stuff_id') is-invalid @enderror"
                                            id="inputEnterYourName" name="stuff_id" placeholder="Enter Stuff's ID"
                                            value="{{ old('stuff_id') }}">
                                        @error('stuff_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEnterYourName" class="col-sm-3 col-form-label">Enter Stuff's
                                        Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control @error('stuff_name') is-invalid @enderror"
                                            id="inputEnterYourName" name="stuff_name" placeholder="Enter Stuff's Name"
                                            value="{{ old('stuff_name') }}">
                                        @error('stuff_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPhoneNo2" class="col-sm-3 col-form-label">Phone No <span
                                            style="color: red;">*</span></label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control @error('phone_no') is-invalid @enderror"
                                            id="inputPhoneNo2" name="phone_no" placeholder="Phone No"
                                            value="{{ old('phone_no') }}">
                                        @error('phone_no')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Email Address</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            id="inputEmailAddress2" name="email" placeholder="Email Address"
                                            value="{{ old('email') }}">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputChoosePassword2" class="col-sm-3 col-form-label">Choose
                                        Password</label>
                                    <div class="col-sm-9">
                                        <span class="invalid-feedback" role="alert">
                                            <strong>hi</strong>
                                        </span>
                                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                                            id="inputChoosePassword2" name="password" placeholder="Choose Password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputConfirmPassword2" class="col-sm-3 col-form-label">Confirm
                                        Password</label>
                                    <div class="col-sm-9">
                                        <input type="password"
                                            class="form-control @error('password_confirmation') is-invalid @enderror"
                                            id="inputConfirmPassword2" name="password_confirmation"
                                            placeholder="Confirm Password">
                                        @error('password_confirmation')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputConfirmPassword2" class="col-sm-3 col-form-label">Role</label>
                                    <div class="col-sm-9">
                                        @foreach ($allRole as $role)
                                            {{-- <div>
                                                <input type="radio" name="user_role" id="UserRole_{{ $role->id }}"
                                                    @if (old('user_role') == $role->id) checked @endif
                                                    @if ($role->id <= Auth::user()->role_id) disabled @endif
                                                    value="{{ $role->id }}">
                                                <label for="UserRole_{{ $role->id }}">{{ $role->role }}</label>
                                            </div> --}}
                                            @if ($role->id > Auth::user()->role_id)
                                                <div>
                                                    <input type="radio" name="user_role"
                                                        id="UserRole_{{ $role->id }}"
                                                        @if (old('user_role') == $role->id) checked @endif
                                                        value="{{ $role->id }}">
                                                    <label for="UserRole_{{ $role->id }}">{{ $role->role }}</label>
                                                </div>
                                            @endif
                                        @endforeach
                                        @error('user_role')
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputConfirmPassword2" class="col-sm-3 col-form-label">
                                        Permission</label>
                                    <div class="col-sm-9">
                                        @foreach ($allPageCategory as $PageCategory)
                                            @if (Auth::user()->userRoleCate->contains('category_id', $PageCategory->id))
                                                <div>
                                                    <input type="checkbox" name="permission[]"
                                                        value="{{ $PageCategory->id }}"
                                                        @if (in_array($PageCategory->id, old('permission', []))) checked @endif
                                                        id="UserPage{{ $PageCategory->id }}">
                                                    <label
                                                        for="UserPage{{ $PageCategory->id }}">{{ $PageCategory->category }}</label>
                                                </div>
                                            @endif
                                        @endforeach


                                        <p id="message" class="text-danger"></p>
                                        @error('permission')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-3 col-form-label"></label>
                                    <div class="col-sm-9">
                                        <button type="submit" class="btn btn-primary px-5">Create</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection


@section('js')
    <script>
        document.getElementById('myForm').addEventListener('submit', function(event) {
            var checkboxes = document.querySelectorAll('input[name="permission[]"]');
            var atLeastOneChecked = false;

            for (var i = 0; i < checkboxes.length; i++) {
                if (checkboxes[i].checked) {
                    atLeastOneChecked = true;
                    break;
                }
            }

            if (!atLeastOneChecked) {
                document.getElementById('message').innerHTML =
                    "Please select at least one <b>permission</b> before submitting this form.";
                event.preventDefault(); // Prevent the form from being submitted
            }
        });
    </script>
@endsection
