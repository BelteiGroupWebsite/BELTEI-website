@extends('web.client.beltei_university.layout.app')

@section('content')
    <div>

        <h5 class="title-translate-font mb-4">សកលវិទ្យាល័យ ដែលបានចុះអនុស្សារណៈយោគយល់ (MOU) ក្នុងប្រទេស</h5>

        <table class="text-center align-middle table table-hover" style="border: 3px solid red;" width="100%" align="center">
            <tbody>
                <tr>
                    <td class="label" style="text-align: center; background-color:green;font-size: 120%;font-family: Koulen;"
                        colspan="3" width="70%"><img src="{{ asset('asset/img/university/mou/national/cambodia-flag.png') }}"
                            border="0" width="40" height="30" style="vertical-align:middle;"><span
                            style="color: yellow;"> ប្រទេសកម្ពុជា</span> <span
                            style="color: yellow;font-size: 120%;font-family: Algerian;">(Cambodia)</span><br></td>
                </tr>
                <tr>
                    <td width="10%">១</td>
                    <td width="50%"><a href="http://libraryhub.org/"
                            target="_blank"><img src="{{ asset('asset/img/university/mou/national/library-hub.png') }}"
                                border="0"></a></td>
                    <td style="text-align: center;"><a href="http://libraryhub.org/" target="_blank"><img
                                src="{{ asset('asset/img/university/mou/national/beltei-international-university-in-cambodia-library-hub.png') }}"
                                border="0"></a></td>
                </tr>
                <tr>
                    <td width="10%">២</td>
                    <td width="50%"><a
                            href="http://www.pachemdental.com/" target="_blank"><img
                                src="{{ asset('asset/img/university/mou/national/pachem-detal-clinic.png') }}" border="0"></a></td>
                    <td style="text-align: center;"><a href="http://www.pachemdental.com/" target="_blank"><img
                                src="{{ asset('asset/img/university/mou/national/beltei-international-university-in-cambodia-pachem-dental.png') }}"
                                border="0"></a></td>
                </tr>
            </tbody>
        </table>

    </div>
@endsection
