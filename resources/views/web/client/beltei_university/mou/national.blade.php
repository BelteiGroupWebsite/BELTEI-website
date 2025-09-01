@extends('web.client.beltei_university.layout.app')

@section('content')
    <div>

        <h5 class="title-translate-font mb-4">សកលវិទ្យាល័យ ដែលបានចុះអនុស្សារណៈយោគយល់ (MOU) ក្នុងប្រទេស</h5>

        {{-- <table class="text-center align-middle table table-hover" style="border: 3px solid red;" width="100%" align="center">
            <tbody>
                <tr>
                    <td class="label" style="text-align: center; background-color:green;font-size: 120%;font-family: Koulen;"
                        colspan="3" width="70%"><img src="{{ asset('asset/img/university/mou/national/cambodia-flag.png') }}"
                            border="0" width="40" height="30" style="vertical-align:middle;"><span
                            style="color: yellow;"> ប្រទេសកម្ពុជា</span> <span
                            style="color: yellow;font-size: 120%;font-family: Algerian;">(Cambodia)</span><br></td>
                </tr>
                <tr>
                    <td width="10%">1</td>
                    <td width="50%"><a href="http://libraryhub.org/"
                            target="_blank"><img src="{{ asset('asset/img/university/mou/national/library-hub.png') }}"
                                border="0"></a></td>
                    <td style="text-align: center;"><a href="http://libraryhub.org/" target="_blank"><img
                                src="{{ asset('asset/img/university/mou/national/beltei-international-university-in-cambodia-library-hub.png') }}"
                                border="0"></a></td>
                </tr>[]
                <tr>
                    <td width="10%">2</td>
                    <td width="50%"><a
                            href="http://www.pachemdental.com/" target="_blank"><img
                                src="{{ asset('asset/img/university/mou/national/pachem-detal-clinic.png') }}" border="0"></a></td>
                    <td style="text-align: center;"><a href="http://www.pachemdental.com/" target="_blank"><img
                                src="{{ asset('asset/img/university/mou/national/beltei-international-university-in-cambodia-pachem-dental.png') }}"
                                border="0"></a></td>
                </tr>
            </tbody>
        </table> --}}

        <table class="table table-hover table-bordered text-center vertical-align-middle">
            <tr class="title-translate-font bg-success text-white">
                <td colspan="3">
                    <img style="max-height: 50px;" src="{{ asset('asset/img/school/language/khmer.png') }}" alt="">
                    ប្រទេសកម្ពុជា​ (CAMBODIA)
                </td>
            </tr>




            @php
                $linkArr = [
                    'https://moeys.gov.kh/kh',
                    'N/A',
                    'N/A',
                    'https://www.information.gov.kh/',
                    'https://mlmupc.gov.kh/',
                    'https://mptc.gov.kh/',
                    'https://www.mlvt.gov.kh/',
                    'https://tourism.gov.kh/',
                    'https://cdc.gov.kh/',
                    'https://www.bakc.org.kh/index.php/km/',
                    'https://www.eccc.gov.kh/',
                    'https://cambodia4point0.org/kh',
                    'https://www.sofitel-phnompenh-phokeethra.com/',
                    'https://www.hyatt.com/',
                    'https://www.rosewoodhotels.com/en/phnom-penh',
                    'https://www.marriott.com/en-us/hotels/pnhfi-fairfield-phnom-penh/overview/',
                    'https://www.marriott.com/en-us/hotels/pnhcy-courtyard-phnom-penh/overview/',
                    'https://sokhahotels.com.kh/',
                    'https://www.himawarihotel.com/',
                    'https://ehmcambodia.com/',
                    'https://www.aircambodia.com/en/',
                    'https://www.chiefbank.com.kh/',
                    'https://www.ppcbank.com.kh/',
                    'https://www.prudential.com.kh/km/',
                    'https://yourshumanly.org/',
                    'https://www.pse.ong/',
                    'https://koha-community.org/',
                    'N/A',
                    'https://consumer.huawei.com/kh/',
                    'https://www.wownow-kh.com/',
                    'https://www.gfdexchange.com/',
                    'N/A',
                    'https://poscardigital.com/',
                    'https://firstcambodia.com.kh/',
                    'https://experteducation.com/global/',
                    'https://www.vireakbunthamgroup.com/',
                    'https://www.chinesetest.cn/CLTC',
                    'https://dmuc.edu.kh/',
                    'N/A',
                    'https://www.ocic.com.kh/'
                ];
            @endphp

            @for ($i = 1; $i <= 40; $i++)
                <tr>
                    <td>{{ $i }}</td>
                    <td>
                        @if ($linkArr[$i - 1] !== 'N/A')
                            <a href="{{ $linkArr[$i - 1] }}" target="_blank">
                                <img style="max-height:80px;" src="{{ asset("asset/img/university/mou/national/logo/{$i}.png") }}" alt="Logo {{ $i }}">
                            </a>
                        @else
                            <img style="max-height:80px;" src="{{ asset("asset/img/university/mou/national/logo/{$i}.png") }}" alt="Logo {{ $i }}">
                        @endif
                    </td>
                    <td>
                        <img src="{{ asset("asset/img/university/mou/national/image/{$i}.jpg") }}" alt="Image {{ $i }}" style="max-height:80px;">
                    </td>
                </tr>
            @endfor



        </table>



    </div>
@endsection



