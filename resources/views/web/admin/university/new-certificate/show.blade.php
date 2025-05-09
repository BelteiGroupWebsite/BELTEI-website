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
    <livewire:admin.university.certificate-component :batch="$id" />

    {{-- <table class="table table-bordered " >
        <thead >
            <th>Student ID</th>
            <th>Khmer Name</th>
            <th>Latin Name</th>
            <th>Gender</th>
            <th>DOB</th>
            <th>Nationality</th>
            <th>Profile</th>
            <th>Certificate</th>
            <th>Moey</th>
        </thead>
        @foreach ($studentInfo as $student)
            <tr>
                <td>{{ $student->student_id }}</td>
                <td>{{ $student->khmer_name }}</td>
                <td>{{ $student->latin_name }}</td>
                <td>{{ $student->gender }}</td>
                <td>{{ $student->dob }}</td>
                <td>{{ $student->nationality }}</td>
                <td>
                    <img style="max-width: 50px" loading="lazy" src="{{ asset('storage/upload/certificate/university/'.$degreeId.'/'.$academicBatchId.'/profile/'.$student->profile_no.'.jpg') }}" alt="Profile Image">
                </td>
                <td>
                    <a href="{{ asset('storage/upload/certificate/university/'.$degreeId.'/'.$academicBatchId.'/beltei/'.$student->beltei_no.'.jpg') }}">
                        <img style="max-width: 50px" loading="lazy" src="{{ asset('storage/upload/certificate/university/'.$degreeId.'/'.$academicBatchId.'/beltei/'.$student->beltei_no.'.jpg') }}" alt="Beltei certificate">
                    </a>
                </td>
                <td>
                    <a href="{{ asset('storage/upload/certificate/university/'.$degreeId.'/'.$academicBatchId.'/moey/'.$student->moey_no.'.jpg') }}">
                        <img style="max-width: 50px" loading="lazy" src="{{ asset('storage/upload/certificate/university/'.$degreeId.'/'.$academicBatchId.'/moey/'.$student->moey_no.'.jpg') }}" alt="Moey certificate">
                    </a>
                </td>
            </tr>
        @endforeach
        
        
    </table> --}}
    {{-- {{ $studentInfo->links() }} --}}
</div>


@endsection



