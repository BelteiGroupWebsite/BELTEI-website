@extends('web.admin.layouts.app')
@section('content-header', 'User')
@section('sub-header', 'User')

@section('head')
    <script src="{{ asset('assets/js/alert.js') }}"></script>
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
    </script>
@endsection


@section('setting-link')
    @if (Auth::user()->role_id < 4)
        <a class="dropdown-item" href="{{ route('admin.user.create') }}">Create User</a>
    @endif
    {{-- <a class="dropdown-item" href="javascript:;">Another action</a>
    <a class="dropdown-item" href="javascript:;">Something else here</a> --}}
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="javascript:;">Report</a>
@endsection


@section('content')

    <div class="card">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <h5 class="mb-0">Customer Details</h5>
                <form class="ms-auto position-relative">
                    <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-search"></i>
                    </div>
                    <input class="form-control ps-5" type="text" placeholder="search">
                </form>
            </div>
            <div class="table-responsive mt-3">
                <table class="table align-middle">
                    <thead class="table-secondary">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            @can('IsAdmin', Auth::user())
                                <th scope="col">email</th>
                            @endcan
                            <th scope="col">role</th>
                            <th scope="col">Permission</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($allUser as $user)
                            <tr class="@if ($user->id == Auth::user()->id) bg-info @endif">
                                <th scope="row">{{ $user->id }}</th>
                                <td>{{ $user->name }}</td>
                                @can('IsAdmin', $user)
                                    <td>{{ $user->email }}</td>
                                @endcan
                                <td>
                                    {{ $user->role->role }}

                                    {{-- do not delete this below code  --}}
                                    {{-- <form action="{{ url('admin/user' . '/' . $user->id) }}" method="post"
                                        id="permission_form_{{ $user->id }}">
                                        @method('PATCH')
                                        @csrf
                                        @foreach ($allRole as $role)
                                            @if ($role->role == $user->role->role)
                                                <div>
                                                    <input value="{{ $role->id }}" type="radio"
                                                        name="UserRole_{{ $user->id }}"
                                                        id="UserRole_{{ $user->id . '_' . $role->id }}" checked>
                                                    <label
                                                        for="UserRole_{{ $user->id . '_' . $role->id }}">{{ $role->role }}</label>
                                                </div>
                                            @else
                                                <div>
                                                    <input value="{{ $role->id }}" type="radio"
                                                        name="UserRole_{{ $user->id }}"
                                                        onclick="submitForm('permission_form_{{ $user->id }}', '{{ $user->name }}' , ' {{ $user->role->role }}' , '{{ $role->role }}')"
                                                        id="UserRole_{{ $user->id . '_' . $role->id }}">
                                                    @error('UserRole_{{ $user->id }}')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror

                                                    <label
                                                        for="UserRole_{{ $user->id . '_' . $role->id }}">{{ $role->role }}</label>
                                                </div>
                                            @endif
                                        @endforeach
                                    </form> --}}
                                    {{-- do not delete this above code  --}}
                                </td>
                                <td>

                                    @foreach ($user->userRoleCate as $roleCate)
                                        <small>{{ $roleCate->pageCategory->category }}</small>
                                        @if (!$loop->last)
                                            <small>,</small>
                                        @endif
                                    @endforeach


                                    {{-- do not delete this below code  --}}
                                    {{-- @foreach ($allPageCategory as $PageCategory)
                                        <div>
                                            <input type="checkbox" name="Permission[]" value="{{ $PageCategory->id }}"
                                                id="UserPage{{ $user->id . '_' . $PageCategory->id }}"
                                                {{ in_array($PageCategory->id, $user->userRoleCate->pluck('category_id')->toArray()) ? 'checked' : '' }}>
                                            <label
                                                for="UserPage{{ $user->id . '_' . $PageCategory->id }}">{{ $PageCategory->category }}</label>
                                        </div>
                                    @endforeach --}}
                                    {{-- do not delete this above code  --}}
                                </td>
                                <td>
                                    <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                        {{-- <a href="{{ route('admin.user.profile.show' , $user->id) }}" --}}
                                        <a href=""
                                            class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                            aria-label="Views"><i class="bi bi-eye-fill"></i></a>

                                        @can('IsAdmin', Auth::user())
                                            <a href="{{ url('admin/user/profile/' . $user->id . '/edit') }}"
                                                class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                                            <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip"
                                                data-bs-placement="bottom" aria-label="Delete"><i
                                                    class="bi bi-trash-fill"></i></a>
                                        @endcan
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
            {{-- {!! $allUser->links() !!} --}}
            {{-- {{ $allUser->links() }} --}}
            <div class="d-flex justify-content-end">
                {!! $allUser->links() !!}
            </div>
        </div>
    </div>
@endsection
