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
        <a class="dropdown-item" href="{{ route('admin.school.certificate.create') }}">Create Certificate</a>
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
                <table>

                </table>


                <table class="table table-bordered text-center table-hover title-translate-font vertical-align-middle"
                    id="box-table-a" border="0" width="100%" align="center">
                    <tbody>
                        <tr>
                            <td class="label bg-success text-white py-4" colspan="9" width="100">
                                <h5>{{ __('school/certificate/index.header') }}</h5>
                            </td>
                        </tr>

                        <tr class="" style="background-color: lightblue">

                            <td rowspan="2">Program</td>
                            <td rowspan="2">Grade</td>
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
                        {{-- @foreach ($returnData as $data)
                            @foreach ($data['batchYears'] as $identify_user => $batchYear)
                                <tr>
                                    <td>{{ $data['program'] }}</td>
                                    <td>{{ $data['grade'] }}</td>
                                    @if ($data['program'] == 1)
                                        <td>{{ $batchYear . ' - ' . $batchYear + 1 }}<br></td>
                                    @else
                                        <td>{{ $batchYear }}<br></td>
                                    @endif
                                    <td>{{ $data['studentsPerYear'][$batchYear] ?? 0 }}</td>
                                    <td>{{ $data['femaleStudentPerYear'][$batchYear] }}<br></td>
                                    <td><a
                                            href="{{ route('school.certificate.year', ['program' => $data['program'], 'grade' => $data['grade'], 'year' => $batchYear]) }}">{{ $data['certificateNoStartToEndPerYear'][0] . ' - ' . $data['certificateNoStartToEndPerYear'][0] + $data['studentsPerYear'][$batchYear] - 1 }}</a>
                                    </td>
                                    <td><a class="underline"
                                            href="{{ route('school.certificate.year', ['program' => $data['program'], 'grade' => $data['grade'], 'year' => $batchYear]) }}">{{ __('school/certificate/index.open') }}</a>
                                    </td>
                                    <td><a class="underline" target="blank"
                                            href="{{ url('certificate/' . $data['program'] . '/' . $data['grade'] . '/' . $batchYear . '/' . $identify_user . '/reference/reference.pdf') }}">{{ __('school/certificate/index.reference') }}</a>
                                    </td>
                                </tr>
                            @endforeach
                        @endforeach --}}

                        @foreach ($programs as $program)
                            @foreach ($program->academicBatch as $academicBatch)
                            <tr>
                                <td>
                                    {{ $program->program_kh }}
                                </td>
                                <td>
                                    {{ $academicBatch->grade }}
                                </td>
                                <td>
                                    {{ $academicBatch->batch_startYear }}
                                </td>
                                <td>
                                    {{ $academicBatch->certificate->count() }}
                                </td>
                                <td>
                                    {{ $academicBatch->certificate->filter(function ($graduate) {
                                        return $graduate->gender[0] === 'F' || $graduate->gender[0] === 'ស';
                                    })->count() }}
                                </td>
                                <td>
                                    {{ $academicBatch->certificate->MIN('certi_no') . " - " . $academicBatch->certificate->MAX('certi_no')}}
                                </td>
                                <td>
                                    <a href="{{ route('school.certificate.detail' , ['program' => $academicBatch->program_id , 'grade' => $academicBatch->grade  , 'year' => $academicBatch->batch_startYear ]) }}">បើកមើល</a>
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
