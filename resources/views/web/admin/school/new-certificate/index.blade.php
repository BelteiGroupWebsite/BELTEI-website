@extends('web.admin.layouts.app')
@section('content-header', 'User')
@section('sub-header', 'User')

@section('head')
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
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


<div class="">
    <table class="table table-bordered text-center table-hover title-translate-font vertical-align-middle"
    id="box-table-a" border="0" width="100%" align="center">

        {{-- <thead class="">
            <th>Program</th>
            <th>Grade</th>
            <th>Academic Year</th>
            <th>Batch</th>
            <th>Student</th>
            <th>Female</th>
            <th colspan="2" class="text-center">Certificate N<sup>o</sup></th>
            <th>Certificate</th>
            <th>Reference</th>
        </thead> --}}

        <thead style="">
            <tr>
                <td class="label bg-success text-white py-4" colspan="9" width="100">
                    <h5>{{ __('school/certificate/index.header') }}</h5>
                </td>
            </tr>
    
            <tr class="" style="background-color: lightblue">
    
                <td rowspan="2">កម្មវិធីសិក្សា</td>
                <td rowspan="2">ថ្នាក់សិក្សា</td>
                <td rowspan="2">{{ __('school/certificate/index.year') }}</td>
                <td colspan="2">{{ __('school/certificate/index.amout_sts') }}</td>
                <td rowspan="2">{{ __('school/certificate/index.certi_no') }}</td>
                <td rowspan="2">{{ __('school/certificate/index.name') }} <br></td>
                <td rowspan="2">{{ __('school/certificate/index.document') }}</td>
                <td rowspan="2">Action</td>
            </tr>
            <tr class="" style="background-color: lightblue">
                <td>{{ __('school/certificate/index.total') }}</td>
                <td>{{ __('school/certificate/index.female') }}</td>
            </tr>

        </thead>
        
        
        @foreach ($programs as $program)
            @foreach ($program->grade as $grade)
                @foreach ($grade->academicBatch as $academicBatch)
                    <tr>
                        <td>{{ $academicBatch->grade->program->program_name }}</td> 
                        <td>{{ $academicBatch->grade->grade }}</td>
                        <td>{{ $academicBatch->start_academic_year }} {{ $academicBatch->batch }}</td>
                        {{-- <td>{{ $academicBatch->batch }}</td> --}}
                        <td>{{ $academicBatch->studentInfo->count() }}</td>
                        <td>{{ $academicBatch->studentInfo->whereIn('gender', ['F', 'f'])->count() }}</td>
                        <td>{{ $academicBatch->studentInfo->min('student_id') }} - {{ $academicBatch->studentInfo->max('student_id') }}</td>
                        <td>
                            <a style="text-decoration: underline;" href="{{ route('admin.school.certificate-new.show' , $academicBatch->id) }}">បើកមើល</a>
                        </td>
                        <td>
                            <a style="text-decoration: underline;" href="{{ asset('storage/'.$academicBatch->reference) }}">បើកមើល</a>
                        </td>
                        <td class="">
                            <a href="{{ route('admin.school.certificate-new.edit', $academicBatch->id) }}" class="btn btn-warning bi bi-pencil-square"></a>
                            <form id="delete-form-{{ $academicBatch->id }}" action="{{ route('admin.school.certificate-new.destroy', $academicBatch->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-outline-danger bi bi-trash" onclick="confirmDelete({{ $academicBatch->id }})"></button>
                            </form>                         
                        </td>
                    </tr>
                @endforeach
            @endforeach
        @endforeach
    </table>
</div>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function confirmDelete(id) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('delete-form-' + id).submit();
            }
        });
    }
    </script>

@endsection


