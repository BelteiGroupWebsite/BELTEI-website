@extends('web.client.beltei_university.layout.app')

@section('content')
    @if (session('sorry'))
        <div id="alert-box" class="alert alert-warning alert-dismissible fade show" role="alert">
            <p>{{ session('sorry') }}</p>
        </div>
    @endif

    @if ($degree->id == 1)
        <div>
            <div class="p-3">
                <h6 class="content-translate-font pb-4">
                    បញ្ជីឈ្មោះ រូបថត និងសញ្ញាបត្ររបស់និស្សិតបញ្ចប់
                    ថ្នាក់បណ្ឌិតកិត្តិយស និងថ្នាក់បណ្ឌិត
                </h6>
                <h3 class="title-translate-font py-2">សញ្ញាបត្របណ្ឌិតកិត្តិយស</h3>
            </div>

            <table class="table table-bordered table-hover content-translate-font table-primary">
                <tbody>
                    <tr>
                        <td><strong>ល.រ</strong></td>
                        <td><strong>គោត្តនាម-នាម</strong></td>
                        <td><strong>ឡារតាំង</strong></td>
                        <td><strong>ភេទ</strong></td>
                        <td><strong>ជនជាតិ</strong></td>
                        <td><strong>ប្រទេស</strong></td>
                        <td><strong>ថ្ងៃទទួលសញ្ញាបត្រ</strong></td>
                    </tr>
                    <tr style="text-align: left;">
                        <td><a href="{{ route('beltei_university.graduated.doctor.detail') }}?id=JOSE-RAMOS-HORTA"
                                target="_blank">០០៣</a></td>
                        <td><a href="{{ route('beltei_university.graduated.doctor.detail') }}?id=JOSE-RAMOS-HORTA"
                                target="_blank">ចូសេ រ៉ាម៉ូស ហូតា</a></td>
                        <td><a href="{{ route('beltei_university.graduated.doctor.detail') }}?id=JOSE-RAMOS-HORTA"
                                target="_blank">JOSE RAMOS-HORTA</a></td>
                        <td><a href="{{ route('beltei_university.graduated.doctor.detail') }}?id=JOSE-RAMOS-HORTA"
                                target="_blank">ប</a></td>
                        <td><a href="{{ route('beltei_university.graduated.doctor.detail') }}?id=JOSE-RAMOS-HORTA"
                                target="_blank">ទីម័រ</a></td>
                        <td><a href="{{ route('beltei_university.graduated.doctor.detail') }}?id=JOSE-RAMOS-HORTA"
                                target="_blank">ទីម័រខាងកើត</a></td>
                        <td><a href="{{ route('beltei_university.graduated.doctor.detail') }}?id=JOSE-RAMOS-HORTA"
                                target="_blank">២១ តុលា ២០២២</a></td>
                    </tr>
                    <tr style="text-align: left;">
                        <td><a href="{{ route('beltei_university.graduated.doctor.detail') }}?id=OCK-SOO-PARK"
                                target="_blank">០០២</a></td>
                        <td><a href="{{ route('beltei_university.graduated.doctor.detail') }}?id=OCK-SOO-PARK"
                                target="_blank">បាក់ អុកស៊ូ</a></td>
                        <td><a href="{{ route('beltei_university.graduated.doctor.detail') }}?id=OCK-SOO-PARK"
                                target="_blank">OCK SOO PARK</a></td>
                        <td><a href="{{ route('beltei_university.graduated.doctor.detail') }}?id=OCK-SOO-PARK"
                                target="_blank">ប</a></td>
                        <td><a href="{{ route('beltei_university.graduated.doctor.detail') }}?id=OCK-SOO-PARK"
                                target="_blank">កូរ៉េ</a></td>
                        <td><a href="{{ route('beltei_university.graduated.doctor.detail') }}?id=OCK-SOO-PARK"
                                target="_blank">កូរ៉េខាងត្បូង</a></td>
                        <td><a href="{{ route('beltei_university.graduated.doctor.detail') }}?id=OCK-SOO-PARK"
                                target="_blank">២១ កញ្ញា ២០២២</a></td>
                    </tr>
                    <tr style="text-align: left;">
                        <td><a href="{{ route('beltei_university.graduated.doctor.detail') }}?id=SEO-GAB-WON"
                                target="_blank">០០១</a></td>
                        <td><a href="{{ route('beltei_university.graduated.doctor.detail') }}?id=SEO-GAB-WON"
                                target="_blank">ស
                                កាប់វុន</a></td>
                        <td><a href="{{ route('beltei_university.graduated.doctor.detail') }}?id=SEO-GAB-WON"
                                target="_blank">SEO GAB-WON</a></td>
                        <td><a href="{{ route('beltei_university.graduated.doctor.detail') }}?id=SEO-GAB-WON"
                                target="_blank">ប</a></td>
                        <td><a href="{{ route('beltei_university.graduated.doctor.detail') }}?id=SEO-GAB-WON"
                                target="_blank">កូរ៉េ</a></td>
                        <td><a href="{{ route('beltei_university.graduated.doctor.detail') }}?id=SEO-GAB-WON"
                                target="_blank">កូរ៉េខាងត្បូង</a></td>
                        <td><a href="{{ route('beltei_university.graduated.doctor.detail') }}?id=SEO-GAB-WON"
                                target="_blank">២០ កុម្ភៈ ២០១៩</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    @endif


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


            @foreach ($degree->degreeAcademicbatch as $degreeAcademicbatch)
                <tr>
                    <td>
                        {{ $degreeAcademicbatch->batch }}
                    </td>
                    <td>
                        {{ $degreeAcademicbatch->academic_year . ' - ' . ($degreeAcademicbatch->academic_year + 1) }}
                    </td>
                    <td>
                        {{ $degreeAcademicbatch->studentInfo->count() }}
                    </td>
                    <td>
                        {{ $degreeAcademicbatch->studentInfo->filter(function ($graduate) {
                                return $graduate->gender === 'F' || $graduate->gender === 'ស';
                            })->count() }}
                    </td>
                    <td>
                        {{ $degreeAcademicbatch->studentInfo->MIN('certi_no') . ' - ' . $degreeAcademicbatch->studentInfo->MAX('certi_no') }}
                    </td>
                    <td>
                        <a
                            href="{{ route('beltei_university.certificate.detail', ['degree' => $degreeAcademicbatch->degree_id, 'batch' => $degreeAcademicbatch->id]) }}">{{ __('school/certificate/index.open') }}</a>
                    </td>
                    <td>
                        <a
                            href="{{ asset('storage/' . $degreeAcademicbatch->reference) }}">{{ __('school/certificate/index.reference') }}</a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
