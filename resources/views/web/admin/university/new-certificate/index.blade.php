@extends('web.admin.layouts.app')
@section('content-header', 'User')
@section('sub-header', 'User')



@section('setting-link')
    @if (Auth::user()->role_id < 4)
        <a class="dropdown-item" href="{{ route('admin.university.certificate.create') }}">Create Certificate</a>
    @endif
    {{-- <a class="dropdown-item" href="javascript:;">Another action</a>
    <a class="dropdown-item" href="javascript:;">Something else here</a> --}}
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="javascript:;">Report</a>
@endsection


@section('content')


    <div class="container-fluid">
        <div class="card">
            <div class="card-header pt-3">
                <h4>Student Certificate</h4>
            </div>
            <div class="card-body">

                <table class="table table-bordered text-center table-hover title-translate-font vertical-align-middle"
                    id="box-table-a" border="0" width="100%" align="center">
                    <tbody>

                        <tr>
                            <td class="label bg-success text-white py-4" colspan="9" width="100">
                                <h5>{{ __('school/certificate/index.header') }}</h5>
                            </td>
                        </tr>
                        <tr class="" style="background-color: lightblue">

                            <td rowspan="2">កម្រិតសិក្សា</td>
                            <td rowspan="2">{{ __('school/certificate/index.batch') }}</td>
                            {{-- <td rowspan="2">Grade</td> --}}
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

                        @foreach ($degrees as $degree)
                            @foreach ($degree->degreeAcademicbatch as $degreeAcademicbatch)
                                <tr>
                                    <td>{{ $degree->degree_kh }}</td>
                                    <td>{{ $degreeAcademicbatch->batch }}</td>
                                    <td>{{ $degreeAcademicbatch->academic_year }}</td>
                                    <td>{{ $degreeAcademicbatch->studentInfo->count() }}</td>
                                    <td>{{ $degreeAcademicbatch->studentInfo->whereIn('gender', ['F', 'f'])->count() }}</td>
                                    <td>{{ $degreeAcademicbatch->studentInfo->min('student_id') }} - {{ $degreeAcademicbatch->studentInfo->max('student_id') }}</td>
                                    <td>
                                        <a href="{{ route('admin.university.certificate-new.show' , $degreeAcademicbatch->id) }}">
                                            បើកមើល
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ asset('storage/'.$degreeAcademicbatch->reference) }}">
                                            បើកមើល
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.university.certificate-new.edit', $degreeAcademicbatch->id) }}" class="btn btn-warning bi bi-pencil-square"></a>

                                    </td>
                                </tr>
                                {{-- {{ $degreeAcademicbatch->studentInfo }} --}}
                            @endforeach
                            {{-- {{ $degree->degreeAcademicbatch }} --}}
                        @endforeach

                    </tbody>
                </table>


            </div>
        </div>
    </div>


@endsection
