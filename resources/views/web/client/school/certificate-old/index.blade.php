@extends('web.client.school.layout.app')


@section('content')
    <div class="container">

        <table class="table table-bordered table-hover title-translate-font vertical-align-middle" id="box-table-a"
            border="0" width="100%" align="center">
            <tbody>
                <tr>
                    <td class="label bg-success text-white py-4" colspan="6" width="100">
                        <h5>{{ __('school/certificate/index.header') }}</h5>
                    </td>
                </tr>
                <tr class="" style="background-color: lightblue">

                    {{-- @if ($program == 1)
                        <td rowspan="2">{{ __('school/certificate/index.year') }}</td>
                    @else
                        <td rowspan="2">{{ __('school/certificate/index.batch') }}</td>
                        @endif --}}
                    <td rowspan="2">{{ __('school/certificate/index.batch') }}</td>

                    <td colspan="2">{{ __('school/certificate/index.amout_sts') }}</td>
                    <td rowspan="2">{{ __('school/certificate/index.certi_no') }}</td>
                    <td rowspan="2">{{ __('school/certificate/index.name') }} <br></td>
                    <td rowspan="2">{{ __('school/certificate/index.document') }}</td>
                </tr>
                <tr class="" style="background-color: lightblue">
                    <td>{{ __('school/certificate/index.total') }}</td>
                    <td>{{ __('school/certificate/index.female') }}</td>
                </tr>



                @foreach ($programs as $academicBatch)
                <tr>
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

                {{-- @foreach ($programs as $program)
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
                @endforeach --}}
                

                {{-- @foreach ($batchYears as $identify_user => $batchYear)
                    <tr>
                        @if ($program == 1)
                            <td>{{ $batchYear . ' - ' . $batchYear + 1 }}<br></td>
                        @else
                            <td>{{ $batchYear }}<br></td>
                        @endif
                        <td>{{ $studentsPerYear[$batchYear] ?? 0 }}</td>
                        <td>{{ $femaleStudentPerYear[$batchYear] }}<br></td>
                        <td><a 
                                href="{{ route('school.certificate.year', ['program' => $program, 'grade' => $grade, 'year' => $batchYear]) }}">{{ $certificateNoStartToEndPerYear[0] . ' - ' . $certificateNoStartToEndPerYear[0] + $studentsPerYear[$batchYear] - 1 }}</a>
                        </td>
                        <td><a class="underline"
                                href="{{ route('school.certificate.year', ['program' => $program, 'grade' => $grade, 'year' => $batchYear]) }}">{{ __('school/certificate/index.open') }}</a>
                        </td>
                        <td><a class="underline" target="blank"
                                href="{{ url('certificate/' . $program . '/' . $grade . '/' . $batchYear . '/' . $identify_user . '/reference/reference.pdf') }}">{{ __('school/certificate/index.reference') }}</a>
                        </td>
                    </tr>
                @endforeach --}}

            </tbody>
        </table>

    </div>
@endsection
