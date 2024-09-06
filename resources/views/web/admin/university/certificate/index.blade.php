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

                        <tr class="" style="background-color: lightblue">

                            <td rowspan="2">Degree</td>
                            <td rowspan="2">{{ __('school/certificate/index.batch') }}</td>
                            {{-- <td rowspan="2">Grade</td> --}}
                            <td rowspan="2">{{ __('school/certificate/index.year') }}</td>
                            <td colspan="2">{{ __('school/certificate/index.amout_sts') }}</td>
                            <td rowspan="2">{{ __('school/certificate/index.certi_no') }}</td>
                            <td rowspan="2">{{ __('school/certificate/index.name') }} <br></td>
                            <td rowspan="2">{{ __('school/certificate/index.document') }}</td>
                        </tr>
                        <tr class="" style="background-color: lightblue">
                            <td>{{ __('school/certificate/index.total') }}</td>
                            <td>{{ __('school/certificate/index.female') }}</td>
                        </tr>

                        @foreach ($degrees as $degree)

                            @foreach ($degree->academicBatch as $academicBatch)
                                <tr>
                                    <td>
                                        {{ $degree->degree_kh }}
                                    </td>
                                    <td>
                                        {{ $academicBatch->batch }}
                                    </td>
                                    <td>
                                        {{ $academicBatch->start_academic_year }}
                                    </td>
                                    <td>
                                        {{ $academicBatch->graduatedBIU->count() }}
                                    </td>
                                    <td>
                                        {{ $academicBatch->graduatedBIU->filter(function ($graduate) {
                                            return $graduate->gender === 'F' || $graduate->gender === 'ស';
                                        })->count() }}
                                    </td>
                                    <td>
                                        {{ $academicBatch->graduatedBIU->MIN('certi_no') . " - " . $academicBatch->graduatedBIU->MAX('certi_no')}}
                                    </td>
                                    <td>
                                        <a href="{{ route('beltei_university.certificate.detail' , ['degree' => $academicBatch->degree_id , 'batch' => $academicBatch->batch ]) }}">បើកមើល</a>
                                    </td>
                                    <td>
                                        <a href="">បើកមើល</a>
                                    </td>
                                </tr>
                            @endforeach
                        @endforeach




                    </tbody>
                </table>


            </div>
        </div>
    </div>


@endsection
