@extends('web.client.school.layout.app')


@section('content')
    <div class="container">

        <table class="table table-bordered table-hover title-translate-font vertical-align-middle" id="box-table-a"
            border="0" width="100%" align="center">
            <thead>
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
            </thead>
            <tbody>
                {{-- @foreach ($grades->academicBatch as $academicBatch)
                    <tr>

                        <td>{{ $academicBatch->batch }}</td>
                        <td>{{ $academicBatch->studentInfo->count() }}</td>
                        <td>{{ $academicBatch->studentInfo->where('gender', 'F')->count() }}</td>
                        <td>{{ $academicBatch->studentInfo->min('student_id') }} - {{ $academicBatch->studentInfo->max('student_id') }}</td>
                        <td>
                            <a style="text-decoration: underline;" href="{{ route('school.certificate.detail' , $academicBatch->id) }}">{{ __('school/certificate/index.open') }}</a>
                        </td>
                        <td>
                            <a style="text-decoration: underline;" href="{{ asset('storage/'.$academicBatch->reference) }}">{{ __('school/certificate/index.reference') }}</a>
                        </td>
                    </tr>
                @endforeach --}}
            </tbody>
        </table>

    </div>
@endsection
