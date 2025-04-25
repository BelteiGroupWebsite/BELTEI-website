@extends('web.admin.layouts.app')
@section('content-header', 'User')
@section('sub-header', 'User')

@section('head')

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


    <div>
        <table class="table table-bordered ">
            <thead>
                <th>Student ID</th>
                <th>Khmer Name</th>
                <th>Latin Name</th>
                <th>Gender</th>
                <th>DOB</th>
                <th>Profile</th>
                {{-- <th>Certificate</th>
                <th>Moey</th> --}}
            </thead>
            @foreach ($studentInfo as $student)

                @php
                    
                    $profileImage = base64_encode('school/' . $academicBatch->grade->program->id . '/' . $academicBatch->grade->id . '/' . $academicBatch->id . '/profile/' . $student->profile_no . '.jpg');
                    // $certiImage = base64_encode('school/' . $academicBatch->grade->program->id . '/' . $academicBatch->grade->id . '/' . $academicBatch->id . '/beltei/' . $student->beltei_no . '.jpg');
                    // $moeyImage = base64_encode('school/' . $academicBatch->grade->program->id . '/' . $academicBatch->grade->id . '/' . $academicBatch->id . '/moey/' . $student->moey_no . '.jpg');
                    
                @endphp

                <tr>
                    <td>{{ $student->student_id }}</td>
                    <td>{{ $student->khmer_name }}</td>
                    <td>{{ $student->latin_name }}</td>
                    <td>{{ $student->gender }}</td>
                    <td>{{ $student->dob }}</td>
                    <td>
                        <img style="max-width: 50px" loading="lazy"

                            src="{{ route('image.show' , ['filename'=> $profileImage]) }}"
                            alt="Profile image">
                    </td>
                    {{-- <td>
                        <img style="max-width: 50px" loading="lazy"

                            src="{{ route('admin.image.show' , ['filename'=> $certiImage]) }}"
                            alt="Certificate">
                    </td>
                    <td>
                        <img style="max-width: 50px" loading="lazy"

                            src="{{ route('admin.image.show' , ['filename'=> $moeyImage]) }}"
                            alt="Certificate">
                    </td> --}}
                </tr>
            @endforeach


        </table>
        <div class="d-flex justify-content-end">
            {{ $studentInfo->links() }}
        </div>
    </div>


@endsection
