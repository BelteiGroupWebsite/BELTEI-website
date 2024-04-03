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


    <div class="container">
        <div class="card">
            <div class="card-header pt-3">
                <h4>Student Certificate</h4>
            </div>
            <div class="card-body">
                <div class="my-3">
                    {{-- @livewire('school.certificate-search') --}}
                    <livewire:school.certificate-search :grade="" ,:year="" , :program ="" />
                </div>

                {{-- <div>
                    <table class="table table-hover table-bordered w-100 f14" style="vertical-align: middle">
                        <tr>
                            <th>No</th>
                            @if (str_replace('_', '-', app()->getLocale()) == 'kh')
                                <th>Khmer</th>
                            @else
                                <th>Latin</th>
                            @endif
                            <th>Nation</th>
                            <th>Gender</th>
                            <th>DOB</th>
                            <th>Campus</th>
                            <th>Profile</th>
                            <th>Beltei Certificate</th>
                            <th>Moey Certificate</th>
                        </tr>
                        
                        @foreach ($certificate as $student)
                            <tr>
                                <td>{{ $student->certi_no }}</td>
                                @if (str_replace('_', '-', app()->getLocale()) == 'kh')
                                    <td class="Battambang-Regular">{{ $student->name_kh }}</td>
                                @else
                                    <td>{{ $student->name_eng }}</td>
                                @endif
                                <td>{{ $student->nation }}</td>
                                <td>{{ $student->gender }}</td>
                                <td>{{ $student->dob }}</td>
                                <td>{{ $student->campus }}</td>
                                <td>
                                    <a href="{{ url('certificate/'.$student->grade.'/'.$student->batch.'/'.$student->identify_user.'/profile/'.$student->certi_no.'.jpg') }}">
                                        <img loading="lazy" class="w-100" style="max-width: 100px" src="{{ asset('certificate/'.$student->grade.'/'.$student->batch.'/'.$student->identify_user.'/beltei/'.$student->certi_no.'.jpg') }}" alt="">
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ url('certificate/'.$student->grade.'/'.$student->batch.'/'.$student->identify_user.'/beltei/'.$student->certi_no.'.jpg') }}">
                                        <img loading="lazy" class="w-100" style="max-width: 100px" src="{{ asset('certificate/'.$student->grade.'/'.$student->batch.'/'.$student->identify_user.'/beltei/'.$student->certi_no.'.jpg') }}" alt="">
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ url('certificate/'.$student->grade.'/'.$student->batch.'/'.$student->identify_user.'/moey/'.$student->moey_id.'.jpg') }}">
                                        <img loading="lazy" class="w-100" style="max-width: 100px" src="{{ asset('certificate/'.$student->grade.'/'.$student->batch.'/'.$student->identify_user.'/moey/'.$student->moey_id.'.jpg') }}" alt="">
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </table>

                    {{ $certificate->links() }}
                </div> --}}
                
            </div>
        </div>
    </div>


@endsection
