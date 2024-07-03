@extends('web.client.beltei_university.layout.app')

@section('content')
    <table class="table table-bordered text-center table-hover title-translate-font vertical-align-middle" id="box-table-a"
        border="0" width="100%" align="center">
        <tbody>
            <tr>
                <td class="label bg-success text-white py-4" colspan="9" width="100">
                    <h5>{{ __('school/certificate/index.header') }}</h5>
                </td>
            </tr>

            <tr class="" style="background-color: lightblue">
                <td rowspan="2">{{ __('school/certificate/index.batch') }}</td>
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


            @foreach ($academicBatches as $batch)
                <tr>
                    <td>
                        {{ $batch->batch }}
                    </td>
                    <td>
                        {{ $batch->start_academic_year . ' - ' . ($batch->start_academic_year + 1) }}
                    </td>
                    <td>
                        {{ $batch->graduatedBIU->count() }}
                    </td>
                    <td>
                        {{ $batch->graduatedBIU->filter(function ($graduate) {
                                return $graduate->gender === 'F' || $graduate->gender === 'ស';
                            })->count() }}
                    </td>
                    <td>
                        {{ $batch->graduatedBIU->MIN('certi_no') . ' - ' . $batch->graduatedBIU->MAX('certi_no') }}
                    </td>
                    <td>
                        <a href="{{ route('beltei_university.certificate.detail' , ['degree' => $batch->degree_id , 'batch' => $batch->batch ]) }}">បើកមើល</a>
                    </td>
                    <td>
                        <a href="">បើកមើល</a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
