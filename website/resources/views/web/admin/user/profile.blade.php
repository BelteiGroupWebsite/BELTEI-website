@extends('web.admin.layouts.app')
@section('content-header', 'User')
@section('sub-header', 'Profile')

@section('head')
    <style>
        .gradient-custom {
            /* fallback for old browsers */
            background: #f6d365;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1))
        }
    </style>
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
    @if (Auth::user()->id == $user->id)
        {{-- <a class="dropdown-item" href="{{ route('admin.user.profile.reset') }}">Change Password</a> --}}
        <a class="dropdown-item" href="">Change Password</a>
    @endif
    {{-- <a class="dropdown-item" href="javascript:;">Another action</a>
    <a class="dropdown-item" href="javascript:;">Something else here</a> --}}
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="javascript:;">Report</a>
@endsection

@section('content')
    <div class="container">
        <div class="col-12 col-lg-6 mx-auto">
            <div class="card shadow-sm border-0 overflow-hidden">
                <div class="card-body">
                    <div class="profile-avatar text-center">
                        <img src="{{ asset('assets/images/avatars/avatar-1.png') }}" class="rounded-circle shadow"
                            width="120" height="120" alt="">
                    </div>
                    <div class="text-center mt-4">
                        <h4 class="mb-1">{{ $user->name }}</h4>
                        <p class="mb-0 text-secondary">{{ $user->email }}</p>
                        <div class="mt-4"></div>
                        <h6 class="mb-1">Role : {{ $user->role->role }}</h6>
                        <p class="mb-0 text-secondary">BELTEI International University</p>
                    </div>
                    <hr>
                    <div class="text-start">
                        <h5 class="">About</h5>
                        <p class="mb-0">It is a long established fact that a reader will be distracted by the readable
                            content of a page when looking at its layout. The point of using Lorem.
                        </p>
                    </div>
                </div>
                <form action="{{ url('admin/user/profile/' . $user->id) }}" id="UserProfile{{ $user->id }}"
                    method="POST">
                    @method('PATCH')
                    @csrf
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item bg-transparent border-top">
                            <h5 class="pb-2">Role</h5>
                            <div>
                                @foreach ($allRole as $role)
                                    @if ($role->id > Auth::user()->role_id || Auth::user()->id == $user->id)
                                        <div>
                                            <input type="radio" name="user_role" id="UserRole_{{ $role->id }}"
                                                @if ($role->role == $user->role->role) checked @endif
                                                @if (old('user_role') == $role->id) checked @endif
                                                value="{{ $role->id }}">
                                            <label for="UserRole_{{ $role->id }}">{{ $role->role }}</label>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </li>
                        <li class="list-group-item bg-transparent">
                            <h5 class="pb-2">Permission Page</h5>
                            <div>
                                @foreach ($allPageCategory as $PageCategory)
                                    @if (Auth::user()->userRoleCate->contains('category_id', $PageCategory->id))
                                        <div>
                                            <input type="checkbox" name="Permission[]" value="{{ $PageCategory->id }}"
                                                id="UserPage{{ $user->id . '_' . $PageCategory->id }}"
                                                {{ in_array($PageCategory->id, $user->userRoleCate->pluck('category_id')->toArray()) ? 'checked' : '' }}>
                                            <label
                                                for="UserPage{{ $user->id . '_' . $PageCategory->id }}">{{ $PageCategory->category }}</label>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </li>

                        @if (Auth::user()->role_id < $user->role_id)
                            <li class="list-group-item bg-transparent py-3">
                                <button onclick="submitForm('UserProfile{{ $user->id }}', '{{ $user->name }}')"
                                    type="button" class="btn btn-primary px-4 float-end">Save Changes</button>
                            </li>
                        @endif

                    </ul>
                </form>

            </div>
        </div>
    </div>

    {{-- <section class="" style="background-color: #f4f5f7;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-lg-6 mb-4 mb-lg-0">
                    <div class="card mb-3" style="border-radius: .5rem;">
                        <div class="row g-0">
                            <div class="col-md-4 gradient-custom text-center text-white"
                                style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                                    alt="Avatar" class="img-fluid my-5" style="width: 80px;" />
                                <h5>Marie Horwitz</h5>
                                <p>Web Designer</p>
                                <i class="far fa-edit mb-5"></i>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body p-4">
                                    <h6>Information</h6>
                                    <hr class="mt-0 mb-4">
                                    <div class="row pt-1">
                                        <div class="col-6 mb-3">
                                            <h6>Email</h6>
                                            <p class="text-muted">info@example.com</p>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <h6>Phone</h6>
                                            <p class="text-muted">123 456 789</p>
                                        </div>
                                    </div>
                                    <h6>Projects</h6>
                                    <hr class="mt-0 mb-4">
                                    <div class="row pt-1">
                                        <div class="col-6 mb-3">
                                            <h6>Recent</h6>
                                            <p class="text-muted">Lorem ipsum</p>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <h6>Most Viewed</h6>
                                            <p class="text-muted">Dolor sit amet</p>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-start">
                                        <a href="#!"><i class="fab fa-facebook-f fa-lg me-3"></i></a>
                                        <a href="#!"><i class="fab fa-twitter fa-lg me-3"></i></a>
                                        <a href="#!"><i class="fab fa-instagram fa-lg"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
@endsection
