@extends('web.client.school.layout.app')


@section('content')
    <div class="">

        {{-- <div class="d-flex gap-3 bg-header-color align-items-center  border border-3 position-relative overflow-hidden" style="border-radius: 1rem;">
            <img class="max-width-80 float-end" src="{{ asset('asset\img\school\app\G6.png') }}" alt="">
            <div class="title-translate-font w-100" style="color: gold">
                <h4>{{ $grades->grade_kh }}</h4>
                <h4 class="pt-2 text-uppercase">{{ $grades->grade_latin }}</h4>
            </div>
        </div> --}}


        <table
            class="table table-bordered table-hover table-responsive title-translate-font vertical-align-middle overflow-hidden shadow-sm"
            id="box-table-a" border="0" width="100%" align="center">
            <thead class="align-middle">
                <tr>
                    <td colspan="10" class="p-0">
                        <div class="d-flex gap-3 bg-header-color align-items-center position-relative overflow-hidden">
                            <img class="max-width-80 float-end"
                                src="{{ asset('asset/img/school/app/' . $grades->id . '.jpg') }}" alt="">

                            <div class="title-translate-font w-100" style="color: gold">
                                <h4>{{ $grades->grade_kh }}</h4>
                                <h4 class="pt-2 text-uppercase">{{ $grades->grade_latin }}</h4>
                            </div>
                        </div>
                    </td>
                </tr>
                {{-- <tr>
                    <td class="label bg-success text-white py-4" colspan="6" width="100">
                        <h5>{{ __('school/certificate/index.header') }}</h5>
                    </td>
                </tr> --}}
                <tr class="" style="background-color: lightblue">
                    {{-- {{ $program . ' ' . $arr }} --}}
                    {{-- @if (!in_array($program, $arr))
                        <td rowspan="2">{{ __('school/certificate/index.year') }}</td>
                    @endif --}}
                    {{-- <td rowspan="2">{{ __('school/certificate/index.year') }}</td> --}}
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
                @foreach ($grades->academicBatch as $academicBatch)
                    <tr>

                        {{-- <td>{{ $academicBatch->start_academic_year }}</td> --}}
                        {{-- @if (!in_array($program, $arr))
                            <td>{{ $academicBatch->start_academic_year . ' - ' . $academicBatch->start_academic_year + 1 }}
                            </td>
                        @endif --}}
                        <td>{{ $academicBatch->batch }}</td>
                        <td>{{ $academicBatch->studentInfo->count() }}</td>
                        <td>{{ $academicBatch->studentInfo->where('gender', 'F')->count() }}</td>
                        <td>{{ $academicBatch->studentInfo->min('student_id') }} -
                            {{ $academicBatch->studentInfo->max('student_id') }}</td>
                        <td>
                            <a style="text-decoration: underline;"
                                href="{{ route('school.certificate.detail', $academicBatch->id) }}">{{ __('school/certificate/index.open') }}</a>
                        </td>
                        <td>
                            <a style="text-decoration: underline;"
                                href="{{ asset('storage/' . $academicBatch->reference) }}">{{ __('school/certificate/index.reference') }}</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>

    </div>
@endsection
