@extends('web.client.beltei_university.layout.app')

@section('content')
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
                    <td><a href="{{ route('beltei_university.graduated.doctor.detail') }}?id=SEO-GAB-WON" target="_blank">ស
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


        <div class="p-3">
            <h3 class="title-translate-font py-3">សញ្ញាបត្របណ្ឌិត</h3>
        </div>


        <table class="table table-bordered table-hover content-translate-font table-primary">
            <tbody>
            <tr>
            <td class="label" colspan="7" width="100"><strong>សូមចុចបើកមើលឈ្មោះ រូបថត និងសញ្ញាបត្រតាមជំនាន់នីមួយៗ<br></strong></td>
            </tr>
            <tr>
            <td rowspan="2"><strong>ជំនាន់</strong></td>
            <td rowspan="2"><strong>ឆ្នាំសិក្សា</strong></td>
            <td colspan="2"><strong>ចំនួននិស្សិត</strong></td>
            <td rowspan="2"><strong>លេខរៀងសញ្ញាបត្រ</strong></td>
            <td rowspan="2"><strong>បញ្ជីឈ្មោះ&amp;រូបថត</strong></td>
            <td rowspan="2"><strong>ឯកសារ</strong></td>
            </tr>
            <tr style="text-align: left;">
            <td><strong>សរុប</strong></td>
            <td><strong>ស្រី<br></strong></td>
            </tr>
            
            <tr style="text-align: left;">
            <td>៣</td>
            <td>២០២២-២០២៣<br></td>
            <td>០១</td>
            <td>០០<br></td>
            <td><a href="">០៧-០៧</a></td>
            <td><a href="">បើកមើល</a></td>
            <td><a href="">យោង</a></td>
            </tr>
            
            <tr style="text-align: left;">
            <td>២</td>
            <td>២០២២-២០២៣<br></td>
            <td>០២</td>
            <td>០០<br></td>
            <td><a href="">០៥-០៦</a></td>
            <td><a href="">បើកមើល</a></td>
            <td><a href="">យោង</a></td>
            </tr>
            
            <tr style="text-align: left;">
            <td>១</td>
            <td>២០២២-២០២៣<br></td>
            <td>០៤</td>
            <td>០០<br></td>
            <td><a href="">០១-០៤</a></td>
            <td><a href="">បើកមើល</a></td>
            <td><a href="">យោង</a></td>
            </tr>
            </tbody>
            </table>
        
        
    </div>
@endsection
