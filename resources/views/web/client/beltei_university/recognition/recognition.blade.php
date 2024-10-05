@extends('web.client.beltei_university.layout.app')

@section('content')
    <div>
        <h3 class="title-translate-font mt-2 mb-3">ការទទួលស្គាល់ក្នុងប្រទេស</h3>
        <table class="table table-bordered table-hover content-translate-font vertical-align-middle" id="box-table-a"
            border="0" width="100%" align="center">
            <tbody>

                <tr>
                    <td>១</td>
                    <td><a href="{{ route('beltei_university.recognition.recognitiondetail') }}?id=13">វិញ្ញាបនបត្រទទួលស្គាល់ស្តង់ដារជាតិ
                            (ISO 9001:2015) លើ ប្រព័ន្ធគ្រប់គ្រងគុណភាព (Quality Management System) ពីវិទ្យាស្ថាន
                            ស្តង់ដារកម្ពុជា (ISC) នៃព្រះរាជាណាចក្រកម្ពុជា លេខ No. QMS 006/24 D/DER-ISC</a></td>
                    <td><a href="{{ route('beltei_university.recognition.recognitiondetail') }}?id=1"><img
                                src="{{ asset('asset/img/school/recognition/ISO9001_2015.png') }}" border="0"></a></td>
                </tr>
                <tr>
                    <td>២</td>
                    <td><a href="{{ route('beltei_university.recognition.recognitiondetail') }}?id=1">វិញ្ញាបនបត្រទទួលស្គាល់គុណភាពអប់រំពេញសិទ្ធិ
                            របស់ ACC លេខ គ.ទ.ក ០១១២០៧២១ FA ចុះថ្ងៃទី២៩ ខែមិថុនា ឆ្នាំ២០២២</a></td>
                    <td><a href="{{ route('beltei_university.recognition.recognitiondetail') }}?id=1"><img
                                src="{{ asset('asset/img/university/recognition/acc.jpg') }}" border="0"></a></td>
                </tr>
                <tr>
                    <td>៣</td>
                    <td><a href="{{ route('beltei_university.recognition.recognitiondetail') }}?id=2">ប្រកាសស្តីពី
                            ការទទួលស្គាល់រចនាសម្ព័ន្ធមហាវិទ្យាល័យ ដេប៉ាតឺម៉ង់ និងមុខជំនាញ ថ្នាក់បរិញ្ញាបត្រ និងបរិញ្ញាបត្ររង
                            លេខ ១៣៩.អយក.ប្រក ថ្ងៃទី២៧ ខែមករា ឆ្នាំ២០២២។</a></td>
                    <td><a href="{{ route('beltei_university.recognition.recognitiondetail') }}?id=2"><img
                                src="{{ asset('asset/img/school/recognition/01.png') }}" border="0"></a></td>
                </tr>
                <tr>
                    <td>៤</td>
                    <td><a href="{{ route('beltei_university.recognition.recognitiondetail') }}?id=3">ប្រកាសស្តីពី
                            ការបើកបណ្តុះបណ្តាលថ្នាក់បរិញ្ញាបត្រជាន់ខ្ពស់ លេខ ១១៨៦.អយក.ប្រក ថ្ងៃទី១៥ ខែធ្នូ ឆ្នាំ២០២១។</a>
                    </td>
                    <td><a href="{{ route('beltei_university.recognition.recognitiondetail') }}?id=3"><img
                                src="{{ asset('asset/img/school/recognition/01.png') }}" border="0"></a></td>
                </tr>
                <tr>
                    <td>៥</td>
                    <td><a href="{{ route('beltei_university.recognition.recognitiondetail') }}?id=4">ប្រកាសស្តីពី
                            ការបើកបណ្តុះបណ្តាលថ្នាក់បណ្ឌិត លេខ ១១៨៧.អយក.ប្រក ថ្ងៃទី១៥ ខែធ្នូ ឆ្នាំ២០២១។</a></td>
                    <td><a href="{{ route('beltei_university.recognition.recognitiondetail') }}?id=4"><img
                                src="{{ asset('asset/img/school/recognition/01.png') }}" border="0"></a></td>
                </tr>
                <tr>
                    <td>៦</td>
                    <td><a href="{{ route('beltei_university.recognition.recognitiondetail') }}?id=5">ប៊ែលធី គ្រុប
                            ទទួលបានពានរង្វាន់ជាអង្គភាពឆ្នើមពីអាស៊ាន</a></td>
                    <td><a href="{{ route('beltei_university.recognition.recognitiondetail') }}?id=5"><img
                                src="{{ asset('asset/img/school/recognition/layer4.png') }}" border="0"></a></td>
                </tr>
                <tr>
                    <td>៧</td>
                    <td><a href="{{ route('beltei_university.recognition.recognitiondetail') }}?id=6">វិញ្ញាបនបត្រទទួលស្គាល់ប្រព័ន្ធគ្រប់គ្រងគុណភាពថ្នាក់អន្តរជាតិ
                            (ISO9001:2008)</a></td>
                    <td><a href="{{ route('beltei_university.recognition.recognitiondetail') }}?id=6"><img
                                src="{{ asset('asset/img/school/recognition/layer9.png') }}" border="0"></a></td>
                </tr>
                <tr>
                    <td>៨</td>
                    <td><a href="{{ route('beltei_university.recognition.recognitiondetail') }}?id=7">
                            វិញ្ញាបនបត្របញ្ចាក់ប្រព័ន្ធគ្រប់គ្រងគុណភាពថ្នាក់ជាតិ​ លេខ QMS 006/12 CCD-ISC ថ្ងៃទី១៧ កញ្ញា
                            ២០១២</a></td>
                    <td><a href="{{ route('beltei_university.recognition.recognitiondetail') }}?id=7"><img
                                src="{{ asset('asset/img/university/recognition/iso.png') }}" border="0"></a></td>
                </tr>
                <tr>
                    <td>៩</td>
                    <td><a href="{{ route('beltei_university.recognition.recognitiondetail') }}?id=8">អនុក្រឹត្យ៖ការទទួលស្គាល់ការប្រែក្លាយពី
                            វិទ្យាស្ថានប៊ែលធីអន្តរជាតិ ទៅជា សកលវិទ្យាល័យប៊ែលធីអន្តរជាតិ លេខៈ១៣៨.អនក្រ.បក ថ្ងៃទី០៦ ខែកញ្ញា
                            ឆ្នាំ២០១២</a></td>
                    <td><a href="{{ route('beltei_university.recognition.recognitiondetail') }}?id=8"><img
                                src="{{ asset('asset/img/university/recognition/acc.jpg') }}" border="0"></a></td>
                </tr>
                <tr>
                    <td>១០</td>
                    <td><a href="{{ route('beltei_university.recognition.recognitiondetail') }}?id=9">វិញ្ញាបនបត្រទទួលស្គាល់គុណភាពអប់រំពេញសិទ្ធិ
                            របស់ ACC លេខៈ គ.ទ.ក ០២៤៦១១១២ ចុះថ្ងៃទី១៩ ខែកញ្ញា ឆ្នាំ២០១១ ចុះហត្ថលេខាដោយ ឯកឧត្តម សាម មន្តិយ៉ា
                        </a></td>
                    <td><a href="{{ route('beltei_university.recognition.recognitiondetail') }}?id=9"><img
                                src="{{ asset('asset/img/school/recognition/01.png') }}" border="0"></a></td>
                </tr>

                <tr>
                    <td>១១</td>
                    <td><a href="{{ route('beltei_university.recognition.recognitiondetail') }}?id=10">វិញ្ញាបនបត្រទទួលស្គាល់គុណភាពអប់រំពេញសិទ្ធិ
                            របស់ ACC លេខៈ គ.ទ.ក ០២៤៦០៨៣២ ចុះថ្ងៃទី២២ ខែតុលា ឆ្នាំ២០០៨ ចុះហត្ថលេខាដោយ ឯកឧត្តម សុខ អាន </a>
                    </td>
                    <td><a href="{{ route('beltei_university.recognition.recognitiondetail') }}?id=10"><img
                                src="{{ asset('asset/img/school/recognition/01.png') }}" border="0"></a></td>
                </tr>
                <tr>
                    <td>១២</td>
                    <td><a href="{{ route('beltei_university.recognition.recognitiondetail') }}?id=11">ប្រកាស៖
                            លេខៈ១៤២៦.អយក.ប្រក ថ្ងៃទី៣១ ខែសីហា​ឆ្នាំ២០០៦ ការ ទទួល ស្គាល់ ដេប៉ា ដឺម៉ងថ្នាក់ឆ្នាំសិក្សាមូលដ្ឋាន
                        </a></td>
                    <td><a href="{{ route('beltei_university.recognition.recognitiondetail') }}?id=11"><img
                                src="{{ asset('asset/img/school/recognition/01.png') }}" border="0"></a></td>
                </tr>
                <tr>
                    <td>១៣</td>
                    <td><a href="{{ route('beltei_university.recognition.recognitiondetail') }}?id=12">អនុក្រឹត្យ៖ប្តូរឈ្មោះពី
                            វិទ្យាស្ថានអាស៊ីប៉ាស៊ីភិច ទៅជា វិទ្យាស្ថានប៊ែលធីអន្តរជាតិ លេខៈ៩៧ ថ្ងៃទី០៤ ខែសីហា ឆ្នាំ២០០៥ </a>
                    </td>
                    <td><a href="{{ route('beltei_university.recognition.recognitiondetail') }}?id=12"><img
                                src="{{ asset('asset/img/school/recognition/01.png') }}" border="0"></a></td>
                </tr>
                <tr>

            </tbody>
        </table>
    </div>
@endsection
