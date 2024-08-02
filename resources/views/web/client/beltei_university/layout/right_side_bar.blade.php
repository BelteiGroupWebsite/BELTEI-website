{{-- <div class="sidebar min-width-250 max-width-300 position-sticky shadow-sm p-0 m-0 px-1 content-translate-font" > --}}
{{-- <div class="sidebar max-width-275 shadow-sm p-0 m-0 px-1 content-translate-font" > --}}
<div class="sidebar max-width-250 w-100 shadow-sm p-0 m-0 content-translate-font px-1">

    <ul class="list-group translate ul-none-style" style="background-color: #21ade3;">
        <h6 class="text-uppercase text-center py-2 bg-header-color gold title-translate-font">{{ __('school/app.translate') }}</h6>

        <li class="">
            <div class="d-flex justify-content-between">
                <a href="{{ route('set-locale', 'kh') }}" class="cursor-pointer">
                    <img src="{{ asset('asset/img/school/language/khmer.png') }}" alt="">
                    <p class="text-center Battambang-Regular">
                        ខ្មែរ
                        @if (str_replace('_', '-', app()->getLocale()) == 'kh')
                            <i class="fa fa-check"></i>
                        @endif
                    </p>
                </a>
                <a href="{{ route('set-locale', 'en') }}" class="cursor-pointer">
                    <img src="{{ asset('asset/img/school/language/english.png') }}" alt="">
                    <p class="text-center Battambang-Regular">
                        English
                        @if (str_replace('_', '-', app()->getLocale()) == 'en')
                            <i class="fa fa-check"></i>
                        @endif
                    </p>
                </a>

                <a href="{{ route('set-locale', 'ch') }}" class="cursor-pointer">
                    <img src="{{ asset('asset/img/school/language/chinese.png') }}" alt="">
                    <p class="text-center Battambang-Regular">
                        中文
                        @if (str_replace('_', '-', app()->getLocale()) == 'ch')
                            <i class="fa fa-check"></i>
                        @endif
                    </p>
                </a>
            </div>
        </li>
    </ul>

    <ul class="p-0 m-0">
        <div class="w-100 justify-content-center">
            <a href="/" class="cursor-pointer">
                <img  class="w-100" src="{{ asset('asset/img/university/campus/belgroupkh.png') }}" alt="">
            </a>
        </div>
    </ul>
</ul>

<ul class="text-capitalize list-group f14">
    <a href="{{ route('beltei_university.') }}">
        <h6  style="height: 60px; border:inset 3px ; border-radius: 15px ; font-family: KhmerOSMoul" class="text-uppercase text-center py-2 bg-header-color gold align-items-center">{{ __('beltei_university/app.LA') }}</h6>
    </a>
</ul>

<ul class="p-0 m-0  list-group ">

    <li class="list-group-item d-flex justify-content-center">

        <div style="border:inset 7px ; border-radius: 15px ; border-color: #006cb8" class="w-100 overflow-hidden border-blue">
            <a href="#" class="cursor-pointer justify-content-center">
                <p style="font-family: KhmerOSMoul ; text-align: center" class="bg-success text-white p-2">
                    <img  class="w-100 max-width-100 justify-content-center" src="{{ asset('asset/img/school/language/khmer.png') }}" alt=""> <br>
                    ប្រទេសកម្ពុជា
                </p>
            </a>

            <ul class="list-group text-center right-bar-ul">
                <li class="list-group-item p-0">
                    <a href="https://moeys.gov.kh/kh" target="_blank">
                        <img style="max-height: 75px; width: 80% !important; object-fit: fill;" class="justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/cambodia/1.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://moeys.gov.kh/" target="_blank">
                        <img style="max-height: 75px; width: 80% !important; object-fit: fill;" class="justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/cambodia/2.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://opendevelopmentcambodia.net/tag/cambodian-higher-education-association-chea/" target="_blank">
                        <img style="max-height: 75px; width: 80% !important; object-fit: fill;" class="justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/cambodia/3.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://consumer.huawei.com/kh/" target="_blank">
                        <img style="max-height: 75px; width: 80% !important; object-fit: fill;" class="justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/cambodia/4.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="" target="_blank">
                        <img style="max-height: 75px; width: 80% !important; object-fit: fill;" class="justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/cambodia/5.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://libraryhub-manila.blogspot.com/p/home.html" target="_blank">
                        <img class="w-100 justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/cambodia/6.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.wownow-kh.com/" target="_blank">
                        <img style="max-height: 75px; width: 80% !important; object-fit: fill;" class="justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/cambodia/7.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.gfdexchange.com/" target="_blank">
                        <img style="max-height: 75px; width: 80% !important; object-fit: fill;" class="justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/cambodia/8.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://mrtrainingandjobscenter.com.kh/" target="_blank">
                        <img style="max-height: 75px; width: 80% !important; object-fit: fill;" class="justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/cambodia/9.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://poscardigital.com/" target="_blank">
                        <img style="max-height: 75px; width: 80% !important; object-fit: fill;" class="justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/cambodia/10.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.firstcambodia.com.kh/" target="_blank">
                        <img style="max-height: 75px; width: 80% !important; object-fit: fill;" class="justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/cambodia/11.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.sofitel-phnompenh-phokeethra.com/" target="_blank">
                        <img style="max-height: 75px; width: 80% !important; object-fit: fill;" class="justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/cambodia/12.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://yourshumanly.org/" target="_blank">
                        <img style="max-height: 75px; width: 80% !important; object-fit: fill;" class="justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/cambodia/13.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.hyatt.com/en-US/hotel/cambodia/hyatt-regency-phnom-penh/pnhrp/rooms" target="_blank">
                        <img style="max-height: 75px; width: 80% !important; object-fit: fill;" class="justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/cambodia/14.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.rosewoodhotels.com/en/phnom-penh" target="_blank">
                        <img style="max-height: 75px; width: 80% !important; object-fit: fill;" class="justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/cambodia/15.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.prudential.com.kh/" target="_blank">
                        <img class="w-100 justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/cambodia/16.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.pse.ong/" target="_blank">
                        <img class="w-100 justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/cambodia/17.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://mlmupc.gov.kh/" target="_blank">
                        <img class="w-100 justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/cambodia/18.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://mptc.gov.kh/en/" target="_blank">
                        <img class="w-100 justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/cambodia/19.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://mptc.gov.kh/en/" target="_blank">
                        <img class="w-100 justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/cambodia/20.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://mptc.gov.kh/en/" target="_blank">
                        <img style="max-height: 75px; width: 80% !important; object-fit: fill;" class="justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/cambodia/21.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://dmuc.edu.kh/" target="_blank">
                        <img style="max-height: 75px; width: 80% !important; object-fit: fill;" class="justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/cambodia/22.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="" target="_blank">
                        <img style="max-height: 75px; width: 80% !important; object-fit: fill;" class="justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/cambodia/23.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.marriott.com/en-us/hotels/pnhcy-courtyard-phnom-penh/overview/" target="_blank">
                        <img style="max-height: 75px; width: 80% !important; object-fit: fill;" class="justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/cambodia/24.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.himawarihotel.com/" target="_blank">
                        <img style="max-height: 75px; width: 80% !important; object-fit: fill;" class="justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/cambodia/25.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://experteducation.com/australia/" target="_blank">
                        <img class="w-100 justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/cambodia/26.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.mlvt.gov.kh/" target="_blank">
                        <img class="w-100 justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/cambodia/27.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://cdc.gov.kh/km/" target="_blank">
                        <img class="w-100 justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/cambodia/28.png') }}" alt="">
                    </a>
                </li>
            </ul>
            
            {{-- <ul class="list-group text-center right-bar-ul">
                <li class="list-group-item p-0">
                    <a href="https://moeys.gov.kh/kh" target="_blank"><img style="max-height: 75px; width: 80% !important; object-fit: fill;" class="justify-content-center" src="https://moeys.gov.kh/uploads/images/general-sitting/6686023ab18c5.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://consumer.huawei.com/kh/" target="_blank"><img style="max-height: 75px; width: 80% !important; object-fit: fill;"  class="justify-content-center" src="https://consumer.huawei.com/etc/designs/huawei-cbg-site/clientlib-campaign-v4/common-v4/images/logo.svg" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://koha-community.org" target="_blank"><img style="max-height: 75px; width: 80% !important; object-fit: fill;"  class="justify-content-center" src="https://koha-community.org/files/2013/09/cropped-kohabanner3.jpg" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.wownow-kh.com" target="_blank"><img style="max-height: 75px; width: 80% !important; object-fit: fill;"  class="justify-content-center" src="https://www.wownow-kh.com/images/wownow/logo/wownow-white-no-slogan.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.gfdexchange.com" target="_blank"><img style="max-height: 75px; width: 80% !important; object-fit: fill;"  class="justify-content-center" src="https://static.wixstatic.com/media/7951a7_4c40ab41165b4fb794336776ceffcbf8~mv2.png/v1/fill/w_356,h_88,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/gfde_logo.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://mrtrainingandjobscenter.com.kh" target="_blank"><img style="max-height: 75px; width: 80% !important; object-fit: fill;"  class="justify-content-center" src="http://mrtrainingandjobscenter.com.kh/wp-content/uploads/2023/03/LOGO-MR-UYFC-01.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.firstcambodia.com.kh" target="_blank"><img style="max-height: 75px; width: 80% !important; object-fit: fill;"  class="justify-content-center" src="https://www.firstcambodia.com.kh/assets/img/fc_logo_white.webp" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://poscardigital.com/" target="_blank"><img style="max-height: 75px; width: 80% !important; object-fit: fill;"  class="justify-content-center" src="https://bongsrey.sgp1.digitaloceanspaces.com/library/26272/images/622876d1e94c5.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.sofitel-phnompenh-phokeethra.com" target="_blank"><img style="max-height: 75px; width: 80% !important; object-fit: fill;"  class="justify-content-center" src="https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/90/2024/06/04075931/Sofitel__Phnom-Penh-Phokeethra_logo_White_2024.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.rosewoodhotels.com/en/phnom-penh" target="_blank"><img style="max-height: 75px; width: 80% !important; object-fit: fill;"  class="justify-content-center" src="https://www.rosewoodhotels.com/content/dam/rosewoodhotels/property/phnom-penh/en/logo/34_RW%20Phnom%20Penh%20English%20reverse%20FA.svg" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.hyatt.com/" target="_blank"><img style="max-height: 75px; width: 80% !important; object-fit: fill;"  class="justify-content-center" src="https://1000logos.net/wp-content/uploads/2019/11/Hyatt-Logo.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.information.gov.kh/" target="_blank"><img style="max-height: 75px; width: 80% !important; object-fit: fill;"  class="justify-content-center" src="https://www.information.gov.kh/_next/static/images/logo-website-e3c294f0d2594b180dd35793aee6dc1a.png" alt=""></a>
                </li>
            </ul> --}}

        </div>
    </li>

</ul>
<ul class="text-capitalize list-group f14">
    <a href="{{ route('beltei_university.') }}">
        <h6  style="height: 60px; border:inset 3px ; border-radius: 15px ; font-family: KhmerOSMoul" class="text-uppercase text-center py-2 bg-header-color gold align-items-center">{{ __('beltei_university/app.LB') }}</h6>
    </a>
</ul>

<ul class="p-0 m-0  list-group ">

    <li class="list-group-item d-flex justify-content-center">

        <div style="border:inset 7px ; border-radius: 15px ; border-color: #03a5c2" class="w-100 overflow-hidden border-blue">
            <a href="#" class="cursor-pointer justify-content-center">
                <p style="font-family: KhmerOSMoul ; text-align: center" class="bg-success text-white p-2">
                    <img  class="w-100 max-width-100 justify-content-center" src="{{ asset('asset/img/school/language/usa.png') }}" alt="">
                   <br> 
                   ចក្រភពអង់គ្លេស
                </p>
            </a>

            <ul class="list-group right-bar-ul">
                <li class="list-group-item p-0">
                    <a href="https://www.gre.ac.uk/" target="_blank">
                        <img class="w-100 justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/uk/1.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://ctc.ac.uk/" target="_blank">
                        <img class="w-100 justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/uk/2.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.yorksj.ac.uk/" target="_blank">
                        <img class="w-100 justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/uk/3.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.regents.ac.uk/" target="_blank">
                        <img class="w-100 justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/uk/4.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.gcs.ac.uk/cy/tags/coleg-g%C5%B5yr-abertawe" target="_blank">
                        <img class="w-100 justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/uk/5.png') }}" alt="">
                    </a>
                </li>
            </ul>
        </div>
    </li>

</ul>


<ul class="p-0 m-0  list-group ">

    <li class="list-group-item d-flex justify-content-center">

        <div style="border:inset 7px ; border-radius: 15px ; border-color: #0059ff" class="w-100 overflow-hidden border-blue">
            <a href="#" class="cursor-pointer justify-content-center">
                <p style="font-family: KhmerOSMoul ; text-align: center" class="bg-success text-white p-2">
                    <img  class="w-100 max-width-100 justify-content-center" src="{{ asset('asset/img/school/language/english.png') }}" alt="">
                   <br>
                   សហរដ្ឋអាមេរិក
                </p>
            </a>

            <ul class="list-group right-bar-ul">
                <li class="list-group-item p-0">
                    <a href="https://www.angelo.edu/" target="_blank">
                        <img class="w-100 justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/us/1.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.cisco.com/" target="_blank">
                        <img class="w-100 justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/us/2.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.highline.edu/" target="_blank">
                        <img class="w-100 justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/us/3.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://nau.edu/" target="_blank">
                        <img class="w-100 justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/us/4.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.smccd.edu/international/smcsv.php" target="_blank">
                        <img class="w-100 justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/us/5.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.edmonds.edu/" target="_blank">
                        <img class="w-100 justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/us/6.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.shoreline.edu/" target="_blank">
                        <img class="w-100 justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/us/7.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://uca.edu/" target="_blank">
                        <img class="w-100 justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/us/8.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.ef.com/wwen/" target="_blank">
                        <img class="w-100 justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/us/9.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.mheducation.com/" target="_blank">
                        <img class="w-100 justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/us/10.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.seattlecolleges.edu/" target="_blank">
                        <img class="w-100 justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/us/11.png') }}" alt="">
                    </a>
                </li>
            </ul>
            

        </div>
    </li>

</ul>

<ul class="p-0 m-0  list-group ">

    <li class="list-group-item d-flex justify-content-center">

        <div style="border:inset 7px ; border-radius: 15px ; border-color: #0059ff" class="w-100 overflow-hidden border-blue">
            <a href="#" class="cursor-pointer justify-content-center">
                <p style="font-family: KhmerOSMoul ; text-align: center" class="bg-success text-white p-2">
                    <img  class="w-100 max-width-100 justify-content-center" src="{{ asset('asset/img/school/language/canada.png') }}" alt="">
                   <br>
                   កូរ៉េខាងក្បូង
                </p>
            </a>

            <ul class="list-group right-bar-ul">
                <li class="list-group-item p-0">
                    <a href="https://www.smu.ac.kr/eng1/index.do" target="_blank">
                        <img class="w-100 justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/korea/1.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://en.shinhan.ac.kr/en/index.do" target="_blank">
                        <img class="w-100 justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/korea/2.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.sunykorea.ac.kr/en/" target="_blank">
                        <img class="w-100 justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/korea/3.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://global.kduniv.ac.kr/global/index.php" target="_blank">
                        <img class="w-100 justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/korea/4.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://en.sejong.ac.kr/eng/index.do" target="_blank">
                        <img class="w-100 justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/korea/5.png') }}" alt="">
                    </a>
                </li>
            </ul>
            

        </div>
    </li>

</ul>

<ul class="p-0 m-0  list-group ">

    <li class="list-group-item d-flex justify-content-center">

        <div style="border:inset 7px ; border-radius: 15px ; border-color: #0059ff" class="w-100 overflow-hidden border-blue">
            <a href="#" class="cursor-pointer justify-content-center">
                <p style="font-family: KhmerOSMoul ; text-align: center" class="bg-success text-white p-2">
                    <img  class="w-100 max-width-100 justify-content-center" src="{{ asset('asset/img/school/language/australia.png') }}" alt="">
                   <br>
                   នូវេលសេឡង់
                </p>
            </a>

            <ul class="list-group right-bar-ul">
                <li class="list-group-item p-0">
                    <a href="https://pihms.ac.nz/" target="_blank">
                        <img class="w-100 justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/newZealand/1.png') }}" alt="">
                    </a>
                </li>

            </ul>

        </div>
    </li>

</ul>

<ul class="p-0 m-0  list-group ">

    <li class="list-group-item d-flex justify-content-center">


        <div style="border:inset 7px ; border-radius: 15px ; border-color: #009113" class="w-100 overflow-hidden border-blue">
            <a href="#" class="cursor-pointer justify-content-center">
                <p style="font-family: KhmerOSMoul ; text-align: center" class="bg-success text-white p-2">
                    <img  class="w-100 max-width-100 justify-content-center" src="{{ asset('asset/img/school/language/malaysia.png') }}" alt="">
                   <br> ស្វីស
                </p>
            </a>

            <ul class="list-group right-bar-ul">
                <li class="list-group-item p-0">
                    <a href="https://pihms.ac.nz/" target="_blank">
                        <img class="w-100 justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/switzealand/1.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.bhms.ch/" target="_blank">
                        <img class="w-100 justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/switzealand/2.png') }}" alt="">
                    </a>
                </li>

            </ul>
        </div>
    </li>

</ul>
<ul class="p-0 m-0  list-group ">

    <li class="list-group-item d-flex justify-content-center">

        <div style="border:inset 7px ; border-radius: 15px ; border-color: #6603e7" class="w-100 overflow-hidden border-blue">
            <a href="#" class="cursor-pointer justify-content-center">
                <p style="font-family: KhmerOSMoul ; text-align: center" class="bg-success text-white p-2">
                    <img  class="w-100 max-width-100 justify-content-center" src="{{ asset('asset/img/school/language/chinese.png') }}" alt="">
                   <br>ម៉ាឡេស៊ី
                </p>
            </a>

            <ul class="list-group right-bar-ul">
                <li class="list-group-item p-0">
                    <a href="https://pihms.ac.nz/" target="_blank">
                        <img class="w-100 justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/malaysia/1.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.unikl.edu.my/" target="_blank">
                        <img class="w-100 justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/malaysia/2.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="" target="_blank">
                        <img class="w-100 justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/malaysia/3.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://study.utar.edu.my/" target="_blank">
                        <img class="w-100 justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/malaysia/4.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://mahsa.edu.my/" target="_blank">
                        <img class="w-100 justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/malaysia/5.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://worldskills.com.my/about-us/" target="_blank">
                        <img class="w-100 justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/malaysia/6.png') }}" alt="">
                    </a>
                </li>
            </ul>
            
        </div>
    </li>

</ul>



<ul class="p-0 m-0  list-group ">

    <li class="list-group-item d-flex justify-content-center">

        <div style="border:inset 7px ; border-radius: 15px ; border-color: #6603e7" class="w-100 overflow-hidden border-blue">
            <a href="#" class="cursor-pointer justify-content-center">
                <p style="font-family: KhmerOSMoul ; text-align: center" class="bg-success text-white p-2">
                    <img  class="w-100 max-width-100 justify-content-center" src="{{ asset('asset/img/school/language/singapore.png') }}" alt="">
                   <br>អូស្រ្តាលី
                </p>
            </a>
            <ul class="list-group right-bar-ul">
                <li class="list-group-item p-0">
                    <a href="https://pihms.ac.nz/" target="_blank">
                        <img class="w-100 justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/australia/1.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.deakin.edu.au/" target="_blank">
                        <img class="w-100 justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/australia/2.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://concordenglishcollege.vic.edu.au/" target="_blank">
                        <img class="w-100 justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/australia/3.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://sccm.edu.au/" target="_blank">
                        <img class="w-100 justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/australia/4.png') }}" alt="">
                    </a>
                </li>
            </ul>            
        </div>
    </li>

</ul>


<ul class="p-0 m-0  list-group ">

    <li class="list-group-item d-flex justify-content-center">

        <div style="border:inset 7px ; border-radius: 15px ; border-color: #6603e7" class="w-100 overflow-hidden border-blue">
            <a href="#" class="cursor-pointer justify-content-center">
                <p style="font-family: KhmerOSMoul ; text-align: center" class="bg-success text-white p-2">
                    <img  class="w-100 max-width-100 justify-content-center" src="{{ asset('asset/img/school/language/south_korea.png') }}" alt="">
                   <br>កាណាដា
                </p>
            </a>

            <ul class="list-group right-bar-ul">
                <li class="list-group-item p-0">
                    <a href="https://pihms.ac.nz/" target="_blank">
                        <img class="w-100 justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/canada/1.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.ucanwest.ca/" target="_blank">
                        <img class="w-100 justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/canada/2.png') }}" alt="">
                    </a>
                </li>
            </ul>
            


        </div>
    </li>

</ul>


<ul class="p-0 m-0  list-group ">

    <li class="list-group-item d-flex justify-content-center">

        <div style="border:inset 7px ; border-radius: 15px ; border-color: #6603e7" class="w-100 overflow-hidden border-blue">
            <a href="#" class="cursor-pointer justify-content-center">
                <p style="font-family: KhmerOSMoul ; text-align: center" class="bg-success text-white p-2">
                    <img  class="w-100 max-width-100 justify-content-center" src="{{ asset('asset/img/school/language/japan.png') }}" alt="">
                   <br>សឹង្ហបុរី
                </p>
            </a>

            <ul class="list-group right-bar-ul">
                <li class="list-group-item p-0">
                    <a href="https://pihms.ac.nz/" target="_blank">
                        <img class="w-100 justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/singapore/1.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.eaim.edu.sg/en/" target="_blank">
                        <img class="w-100 justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/singapore/2.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.sim.edu.sg/" target="_blank">
                        <img class="w-100 justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/singapore/3.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.jcu.edu.au/" target="_blank">
                        <img class="w-100 justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/singapore/4.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://ega.edu.sg/" target="_blank">
                        <img class="w-100 justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/singapore/5.png') }}" alt="">
                    </a>
                </li>
            </ul>
            


        </div>
    </li>

</ul>


<ul class="p-0 m-0  list-group ">

    <li class="list-group-item d-flex justify-content-center">

        <div style="border:inset 7px ; border-radius: 15px ; border-color: #6603e7" class="w-100 overflow-hidden border-blue">
            <a href="#" class="cursor-pointer justify-content-center">
                <p style="font-family: KhmerOSMoul ; text-align: center" class="bg-success text-white p-2">
                    <img  class="w-100 max-width-100 justify-content-center" src="{{ asset('asset/img/school/language/thailand.png') }}" alt="">
                   <br>ជប៉ុន
                </p>
            </a>



            <ul class="list-group right-bar-ul">
                <li class="list-group-item p-0">
                    <a href="https://pihms.ac.nz/" target="_blank">
                        <img class="w-100 justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/japan/1.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.hosei.ac.jp/" target="_blank">
                        <img class="w-100 justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/japan/2.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.u-fukui.ac.jp/eng/" target="_blank">
                        <img class="w-100 justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/japan/3.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.u-hyogo.ac.jp/english/" target="_blank">
                        <img class="w-100 justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/japan/4.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://yanagigaura.ed.jp/en/" target="_blank">
                        <img class="w-100 justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/japan/5.png') }}" alt="">
                    </a>
                </li>
            </ul>
            


        </div>
    </li>

</ul>


<ul class="p-0 m-0  list-group ">

    <li class="list-group-item d-flex justify-content-center">

        <div style="border:inset 7px ; border-radius: 15px ; border-color: #6603e7" class="w-100 overflow-hidden border-blue">
            <a href="#" class="cursor-pointer justify-content-center">
                <p style="font-family: KhmerOSMoul ; text-align: center" class="bg-success text-white p-2">
                    <img  class="w-100 max-width-100 justify-content-center" src="{{ asset('asset/img/school/language/newzealand.png') }}" alt="">
                   <br>ថៃ
                </p>
            </a>

            <ul class="list-group right-bar-ul">
                <li class="list-group-item p-0">
                    <a href="https://www.au.edu/" target="_blank">
                        <img class="w-100 justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/thai/1.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.bu.ac.th/en/international-programs" target="_blank">
                        <img class="w-100 justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/thai/2.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://ism.utcc.ac.th/" target="_blank">
                        <img class="w-100 justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/thai/3.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.eng.rmutt.ac.th/" target="_blank">
                        <img class="w-100 justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/thai/4.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.aihm.education/" target="_blank">
                        <img class="w-100 justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/thai/5.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.pim.ac.th/" target="_blank">
                        <img class="w-100 justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/thai/6.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://asaihl.stou.ac.th/" target="_blank">
                        <img class="w-100 justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/thai/7.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.thebritishcollege.edu.np/" target="_blank">
                        <img class="w-100 justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/thai/8.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://dtc.ac.th/en/home/" target="_blank">
                        <img class="w-100 justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/thai/9.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://nurturehighered.com/" target="_blank">
                        <img class="w-100 justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/thai/10.png') }}" alt="">
                    </a>
                </li>
            </ul>
            


        </div>
    </li>

</ul>


<ul class="p-0 m-0  list-group ">

    <li class="list-group-item d-flex justify-content-center">

        <div style="border:inset 7px ; border-radius: 15px ; border-color: #6603e7" class="w-100 overflow-hidden border-blue">
            <a href="#" class="cursor-pointer justify-content-center">
                <p style="font-family: KhmerOSMoul ; text-align: center" class="bg-success text-white p-2">
                    <img  class="w-100 max-width-100 justify-content-center" src="{{ asset('asset/img/school/language/vietnam.png') }}" alt="">
                   <br>ចិន
                </p>
            </a>


            <ul class="list-group right-bar-ul">
                <li class="list-group-item p-0">
                    <a href="https://pihms.ac.nz/" target="_blank">
                        <img class="w-100 justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/china/1.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://english.gxufl.edu.cn/" target="_blank">
                        <img class="w-100 justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/china/2.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.chinauniversityjobs.com/employer/guilin-university-of-technology/" target="_blank">
                        <img class="w-100 justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/china/3.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://en.whu.edu.cn/" target="_blank">
                        <img class="w-100 justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/china/4.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="http://kq.gxmu.edu.cn/html/Home/" target="_blank">
                        <img class="w-100 justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/china/5.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.ncku.edu.tw/" target="_blank">
                        <img class="w-100 justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/china/6.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://gjc.gxmzu.edu.cn/info/1141/3171.htm" target="_blank">
                        <img class="w-100 justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/china/7.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.digiedupro.com/youjiang-medical-university-for-nationalities/" target="_blank">
                        <img class="w-100 justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/china/8.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://english.gmc.edu.cn/" target="_blank">
                        <img class="w-100 justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/china/9.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.isacteach.com/university/guilin-tourism-university/" target="_blank">
                        <img class="w-100 justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/china/10.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://gjc.nnnu.edu.cn/info/1003/1132.htm" target="_blank">
                        <img class="w-100 justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/china/11.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="http://en.bfsu.edu.cn/" target="_blank">
                        <img class="w-100 justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/china/12.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="http://www.hbsdtech.com/index/index.html?l=en-us" target="_blank">
                        <img class="w-100 justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/china/13.png') }}" alt="">
                    </a>
                </li>
            </ul>
            


        </div>
    </li>

</ul>

<ul class="p-0 m-0  list-group ">

    <li class="list-group-item d-flex justify-content-center">

        <div style="border:inset 7px ; border-radius: 15px ; border-color: #6603e7" class="w-100 overflow-hidden border-blue">
            <a href="#" class="cursor-pointer justify-content-center">
                <p style="font-family: KhmerOSMoul ; text-align: center" class="bg-success text-white p-2">
                    <img  class="w-100 max-width-100 justify-content-center" src="{{ asset('asset/img/school/language/indonesia.png') }}" alt="">
                   <br>ប្រទេសឥណ្ឌូនេស៊ី
                </p>
            </a>

            <ul class="list-group right-bar-ul">
                <li class="list-group-item p-0">
                    <a href="https://binus.ac.id" target="_blank"><img class="w-100 justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/indo/1.png') }}" alt=""></a>
                </li>
            </ul>

        </div>
    </li>

</ul>   

<ul class="p-0 m-0  list-group ">

    <li class="list-group-item d-flex justify-content-center">

        <div style="border:inset 7px ; border-radius: 15px ; border-color: #6603e7" class="w-100 overflow-hidden border-blue">
            <a href="#" class="cursor-pointer justify-content-center">
                <p style="font-family: KhmerOSMoul ; text-align: center" class="bg-success text-white p-2">
                    <img  class="w-100 max-width-100 justify-content-center" src="{{ asset('asset/img/school/language/switzerland.png') }}" alt="">
                   <br>មជ្ឈមណ្ឌលតេស្តអន្តរជាតិ
                </p>
            </a>

            <ul class="list-group right-bar-ul">
                <li class="list-group-item p-0">
                    <a href="https://pihms.ac.nz/" target="_blank">
                        <img class="w-100 justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/testcenter/1.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.ets.org/toefl.html" target="_blank">
                        <img class="w-100 justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/testcenter/2.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.ets.org/gre.html" target="_blank">
                        <img class="w-100 justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/testcenter/3.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://takeielts.britishcouncil.org/" target="_blank">
                        <img class="w-100 justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/testcenter/4.png') }}" alt="">
                    </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://skillsforenglish.com/" target="_blank">
                        <img class="w-100 justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/testcenter/5.png') }}" alt="">
                    </a>
                </li>
            </ul>
            

        </div>
    </li>

</ul>

<ul class="p-0 m-0  list-group ">

    <li class="list-group-item d-flex justify-content-center">

        <div style="border:inset 7px ; border-radius: 15px ; border-color: #6603e7" class="w-100 overflow-hidden border-blue">
            <a href="#" class="cursor-pointer justify-content-center">
                <p style="font-family: KhmerOSMoul ; text-align: center" class="bg-success text-white p-2">
                    <img  class="w-100 max-width-100 justify-content-center" src="{{ asset('asset/img/school/language/bangladesh.png') }}" alt="">
                   <br>ប្រទេសបង់ក្លាដែស
                </p>
            </a>

            <ul class="list-group right-bar-ul">
                <li class="list-group-item p-0">
                    <a href="https://www.oneeducation.org.uk" target="_blank"><img class="w-100 justify-content-center" src="https://www.oneeducation.org.uk/wp-content/uploads/2021/09/Group-9515-1.png" alt=""></a>
                </li>
            </ul>
        </div>
    </li>

</ul>

<ul class="p-0 m-0  list-group ">

    <li class="list-group-item d-flex justify-content-center">

        <div style="border:inset 7px ; border-radius: 15px ; border-color: #6603e7" class="w-100 overflow-hidden border-blue">
            <a href="#" class="cursor-pointer justify-content-center">
                <p style="font-family: KhmerOSMoul ; text-align: center" class="bg-success text-white p-2">
                    <img  class="w-100 max-width-100 justify-content-center" src="{{ asset('asset/img/school/language/france.png') }}" alt="">
                   <br>ប្រទេសបារាំង
                </p>
            </a>

            <ul class="list-group right-bar-ul">
                <li class="list-group-item p-0">
                    <a href="https://www.accessmba.com" target="_blank"><img class="w-100 justify-content-center" src="https://euagenda.eu/upload/organisers/0ab22933df34552af8d811a2f8708d15.png" alt=""></a>
                </li>
            </ul>
        </div>
    </li>

</ul>
<ul class="p-0 m-0  list-group ">

    <li class="list-group-item d-flex justify-content-center">

        <div style="border:inset 7px ; border-radius: 15px ; border-color: #6603e7" class="w-100 overflow-hidden border-blue">
            <a href="#" class="cursor-pointer justify-content-center">
                <p style="font-family: KhmerOSMoul ; text-align: center" class="bg-success text-white p-2">
                    <img  class="w-100 max-width-100 justify-content-center" src="{{ asset('asset/img/school/language/poland.png') }}" alt="">
                   <br>ប្រទេសប៉ូឡូញ
                </p>
            </a>



            <ul class="list-group right-bar-ul">
                <li class="list-group-item p-0">
                    <a href="https://en.uitm.edu.eu" target="_blank"><img class="w-100 justify-content-center" src="https://en.uitm.edu.eu/wp-content/uploads/2021/03/logo_SVG_portalENG_mono_main-1.svg" alt=""></a>
                </li>
            </ul>
        </div>
    </li>

</ul>
<ul class="p-0 m-0  list-group ">

    <li class="list-group-item d-flex justify-content-center">

        <div style="border:inset 7px ; border-radius: 15px ; border-color: #6603e7" class="w-100 overflow-hidden border-blue">
            <a href="#" class="cursor-pointer justify-content-center">
                <p style="font-family: KhmerOSMoul ; text-align: center" class="bg-success text-white p-2">
                    <img  class="w-100 max-width-100 justify-content-center" src="{{ asset('asset/img/school/language/poland.png') }}" alt="">
                   <br>វៀតណាម
                </p>
            </a>



            <ul class="list-group right-bar-ul">
                <li class="list-group-item p-0">
                    <a href="https://vlu.edu.vn/en" target="_blank"><img class="w-100 justify-content-center" src="{{ asset('asset/img/university/app/rightsidebar/vietnam/១.png') }}" alt=""></a>
                </li>
            </ul>
        </div>
    </li>

</ul>


@include('web.client.share.visitor')




































</div>
