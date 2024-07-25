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
                    <img  class="w-100 max-width-100 justify-content-center" src="{{ asset('asset/img/school/language/khmer.png') }}" alt="">
                    ប្រទេសកម្ពុជា
                </p>
            </a>

            <ul class="list-group text-center right-bar-ul">
                <li class="list-group-item p-0">
                    <a href="https://moeys.gov.kh/kh" target="_blank"><img style="max-height: 75px; width: 80% !important; object-fit: fill;" class="justify-content-center" src="https://moeys.gov.kh/uploads/images/general-sitting/6686023ab18c5.png" alt=""></a>
                </li>
                {{-- <li class="list-group-item p-0">
                    <a href="#" target="_blank"><img style="max-height: 75px; width: 80% !important; object-fit: fill;"  class="justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Acc2.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://opendevelopmentcambodia.net/km/tag/cambodian-higher-education-association-chea/#!/story=post-182453" target="_blank"><img style="max-height: 75px; width: 80% !important; object-fit: fill;"  class="justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/CHEA3.png" alt=""></a>
                </li> --}}
                <li class="list-group-item p-0">
                    <a href="https://consumer.huawei.com/kh/" target="_blank"><img style="max-height: 75px; width: 80% !important; object-fit: fill;"  class="justify-content-center" src="https://consumer.huawei.com/etc/designs/huawei-cbg-site/clientlib-campaign-v4/common-v4/images/logo.svg" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://koha-community.org" target="_blank"><img style="max-height: 75px; width: 80% !important; object-fit: fill;"  class="justify-content-center" src="https://koha-community.org/files/2013/09/cropped-kohabanner3.jpg" alt=""></a>
                </li>
                {{-- <li class="list-group-item p-0">
                    <a href="https://libraryhub-manila.blogspot.com/p/home.html" target="_blank"><img style="max-height: 75px; width: 80% !important; object-fit: fill;"  class="justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/HUB6.png" alt=""></a>
                </li> --}}
                <li class="list-group-item p-0">
                    <a href="https://www.wownow-kh.com" target="_blank"><img style="max-height: 75px; width: 80% !important; object-fit: fill;"  class="justify-content-center" src="https://www.wownow-kh.com/images/wownow/logo/wownow-white-no-slogan.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.gfdexchange.com" target="_blank"><img style="max-height: 75px; width: 80% !important; object-fit: fill;"  class="justify-content-center" src="https://static.wixstatic.com/media/7951a7_4c40ab41165b4fb794336776ceffcbf8~mv2.png/v1/fill/w_356,h_88,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/gfde_logo.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://mrtrainingandjobscenter.com.kh" target="_blank"><img style="max-height: 75px; width: 80% !important; object-fit: fill;"  class="justify-content-center" src="http://mrtrainingandjobscenter.com.kh/wp-content/uploads/2023/03/LOGO-MR-UYFC-01.png" alt=""></a>
                </li>
                {{-- <li class="list-group-item p-0">
                    <a href="#" target="_blank"><img style="max-height: 75px; width: 80% !important; object-fit: fill;"  class="justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/POSCAR10.png" alt=""></a>
                </li> --}}
                <li class="list-group-item p-0">
                    <a href="https://www.firstcambodia.com.kh" target="_blank"><img style="max-height: 75px; width: 80% !important; object-fit: fill;"  class="justify-content-center" src="https://www.firstcambodia.com.kh/assets/img/fc_logo_white.webp" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://poscardigital.com/" target="_blank"><img style="max-height: 75px; width: 80% !important; object-fit: fill;"  class="justify-content-center" src="https://bongsrey.sgp1.digitaloceanspaces.com/library/26272/images/622876d1e94c5.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.sofitel-phnompenh-phokeethra.com" target="_blank"><img style="max-height: 75px; width: 80% !important; object-fit: fill;"  class="justify-content-center" src="https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/90/2024/06/04075931/Sofitel__Phnom-Penh-Phokeethra_logo_White_2024.png" alt=""></a>
                </li>
                {{-- <li class="list-group-item p-0">
                    <a href="https://yourshumanly.org" target="_blank"><img style="max-height: 75px; width: 80% !important; object-fit: fill;"  class="justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/HUMANLY13.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://yourshumanly.org" target="_blank"><img style="max-height: 75px; width: 80% !important; object-fit: fill;"  class="justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/HYATT14.png" alt=""></a>
                </li> --}}
                <li class="list-group-item p-0">
                    <a href="https://www.rosewoodhotels.com/en/phnom-penh" target="_blank"><img style="max-height: 75px; width: 80% !important; object-fit: fill;"  class="justify-content-center" src="https://www.rosewoodhotels.com/content/dam/rosewoodhotels/property/phnom-penh/en/logo/34_RW%20Phnom%20Penh%20English%20reverse%20FA.svg" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.hyatt.com/" target="_blank"><img style="max-height: 75px; width: 80% !important; object-fit: fill;"  class="justify-content-center" src="https://1000logos.net/wp-content/uploads/2019/11/Hyatt-Logo.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.information.gov.kh/" target="_blank"><img style="max-height: 75px; width: 80% !important; object-fit: fill;"  class="justify-content-center" src="https://www.information.gov.kh/_next/static/images/logo-website-e3c294f0d2594b180dd35793aee6dc1a.png" alt=""></a>
                </li>
                {{-- <li class="list-group-item p-0">
                    <a href="https://www.rosewoodhotels.com/en/phnom-penh" target="_blank"><img style="max-height: 75px; width: 80% !important; object-fit: fill;"  class="justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Ministry_comere.png" alt=""></a>
                </li> --}}

            </ul>

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
                   <br> សហរដ្ធអាមេរិក
                </p>
            </a>

            <ul class="list-group right-bar-ul">
                <li class="list-group-item p-0">
                    <a href="https://www.angelo.edu" target="_blank"><img class="w-100 justify-content-center" src="https://www.angelo.edu/live/resource/image/_i/themes/global/assets/images/asu-logo-white-gold.rev.1600281398.svg" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.cisco.com" target="_blank"><img  class="w-100 justify-content-center" src="https://pnghq.com/wp-content/uploads/cisco-logo-png-transparent-svg-vector-logo-cisco-png-1.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.highline.edu" target="_blank"><img  class="w-100 justify-content-center" src="https://www.highline.edu/wp-content/uploads/2016/07/logo-normal.png?x26492" alt=""></a>
                </li>
                {{-- <li class="list-group-item p-0">
                    <a href="https://nau.edu" target="_blank"><img  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/NAU-Final3.png" alt=""></a>
                </li> --}}
                <li class="list-group-item p-0">
                    <a href="https://collegeofsanmateo.edu" target="_blank"><img  class="w-100 justify-content-center" src="https://collegeofsanmateo.edu/images/logo/csm_signature_white.svg" alt=""></a>
                </li>
                {{-- <li class="list-group-item p-0">
                    <a href="https://www.edmonds.edu" target="_blank"><img  class="w-100 justify-content-center" src="https://www.edmonds.edu/_resources/images/edmonds-college-logo.svg" alt=""></a>
                </li> --}}
                {{-- <li class="list-group-item p-0">
                    <a href="https://www.shoreline.edu" target="_blank"><img  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/shoreline.png" alt=""></a>
                </li> --}}
                {{-- <li class="list-group-item p-0">
                    <a href="https://www.ef.com/wwen/" target="_blank"><img  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Education-First-Final1.png" alt=""></a>
                </li> --}}
                {{-- <li class="list-group-item p-0">
                    <a href="https://www.mheducation.com.sg" target="_blank"><img  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/mcgrawhill.png" alt=""></a>
                </li> --}}
                {{-- <li class="list-group-item p-0">
                    <a href="https://seattlecentral.edu" target="_blank"><img  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Seatle.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://uca.edu" target="_blank"><img  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Central-Final5.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.ets.org" target="_blank"><img  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/ets_cooperation.png" alt=""></a>
                </li> --}}
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
                   <br> ចក្រភពអង់គ្លេស
                </p>
            </a>

            <ul class="list-group right-bar-ul">
                <li class="list-group-item p-0">
                    <a href="https://www.gre.ac.uk" target="_blank"><img  class="w-100 justify-content-center" src="https://governorsforschools.org.uk/app/uploads/2020/12/University-of-Greenwich.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://ctc.ac.uk" target="_blank"><img  class="w-100 justify-content-center" src="https://ctc.ac.uk/wp-content/uploads/2023/07/logo-200x99.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.springboard.com" target="_blank"><img  class="w-100 justify-content-center" src="https://www.springboard.com/blog/wp-content/uploads/2023/04/full-mark-dark2x.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.yorksj.ac.uk" target="_blank"><img  class="w-100 justify-content-center" src="https://www.yorksj.ac.uk/media/content-assets/safe-images/brand-guidelines/downloads/YSJ-Logo---Blk-text---transparent.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.regents.ac.uk" target="_blank"><img  class="w-100 justify-content-center" src="https://cdn.ahzassociates.co.uk/wp-content/uploads/sites/23/2022/07/17133549/Regents-University-London.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.gcs.ac.uk/cy/tags/coleg-gŵyr-abertawe" target="_blank"><img  class="w-100 justify-content-center" src="https://www.gcs.ac.uk/sites/default/files/gcs-logo-web.png" alt=""></a>
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
                   <br>ប្រទេកាណាដា
                </p>
            </a>

            <ul class="list-group right-bar-ul">
                <li class="list-group-item p-0">
                    <a href="https://www.fdu.edu/campuses/vancouver-campus/" target="_blank"><img  class="w-100 justify-content-center" src="https://www.fdu.edu/wp-content/themes/fairleigh-dickinson/dist/assets/images/fdu-logo-plain-2c-update23.svg" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.ucanwest.ca" target="_blank"><img  class="w-100 justify-content-center" src="https://www.ucanwest.ca/wp-content/uploads/2022/12/UCW-logo-outline.webp" alt=""></a>
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
                   <br>ប្រទេសអូស្ដ្រាលី
                </p>
            </a>

            <ul class="list-group right-bar-ul">
                <li class="list-group-item p-0">
                    <a href="https://sccm.edu.au/" target="_blank"><img  class="w-100 justify-content-center" src="https://sccm.edu.au/wp-content/themes/sccm_m/assets/images/logo-white.svg" alt=""> </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.deakin.edu.au/" target="_blank"><img  class="w-100 justify-contents-center" src="https://www.deakin.edu.au/__data/assets/image/0007/1146985/logo_deakin-rebrand-stacked.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://concordenglishcollege.vic.edu.au/" target="_blank"><img  class="w-100 justify-content-center" src="https://concordenglishcollege.vic.edu.au/wp-content/uploads/2024/01/cropped-CEC-Logo-blue-purple-orange-01-243x92.png" alt=""></a>
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
                   <br> ប្រទេសម៉ាឡេស៊ី
                </p>
            </a>

            <ul class="list-group right-bar-ul">
                <li class="list-group-item p-0">
                    <a href="https://www.unikl.edu.my" target="_blank"><img  class="w-100 justify-content-center" src="https://th.bing.com/th/id/R.48de0d4704c0ee34b1916926a3a8fa7a?rik=AsICYiH7QNiW0Q&pid=ImgRaw&r=0" alt=""> </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.taylors.edu.my" target="_blank"><img  class="w-100 justify-content-center" src="https://www.taylors.edu.my/assets/img/logo-white.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.imaedu.com/index/0/33/" target="_blank"><img  class="w-100 justify-content-center" src="https://www.imaedu.com/upload_file/7345077474croppng444.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://study.utar.edu.my" target="_blank"><img  class="w-100 justify-content-center" src="https://study.utar.edu.my/LOGO.png?a4c3c00d4ccd1e234993c77d11405c67" alt=""> </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://mahsa.edu.my" target="_blank"><img  class="w-100 justify-content-center" src="https://mahsa.edu.my/images/logo.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://worldskills.com.my/about-us/" target="_blank"><img  class="w-100 justify-content-center" src="https://iconape.com/wp-content/png_logo_vector/worldskills-logo.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.pbebank.com" target="_blank"><img  class="w-100 justify-content-center" src="https://www.pbebank.com/media/2kwovkhx/pbb.svg" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.cpbebank.com" target="_blank"><img  class="w-100 justify-content-center" src="https://apply.pbebank.com.kh/campucards/media/logos/pb_logo.png" alt=""></a>
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
                   <br>សាធារណៈរដ្ធប្រជាមានិតចិន
                </p>
            </a>

            <ul class="list-group right-bar-ul">
                <li class="list-group-item p-0">
                    <a href="https://english.gxufl.edu.cn" target="_blank"><img  class="w-100 justify-content-center" src="https://english.gxufl.edu.cn/ui/assets/img/logo/logo.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.chinauniversityjobs.com" target="_blank"><img  class="w-100 justify-content-center" src="https://www.chinauniversityjobs.com/wp-content/uploads/2021/07/cuj-logo-official.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://en.whu.edu.cn" target="_blank"><img  class="w-100 justify-content-center" src="https://en.whu.edu.cn/2023/images/logo.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="http://kq.gxmu.edu.cn/html/Home/" target="_blank"><img  class="w-100 justify-content-center" src="http://kq.gxmu.edu.cn/Tp/PC/Skin1/kqyy_English/images/gxmukqyy_logo.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.ncku.edu.tw" target="_blank"><img  class="w-100 justify-content-center" src="https://th.bing.com/th/id/OIP.-zOPD3s8nAGjV_TpEDcz7wHaCJ?rs=1&pid=ImgDetMain" alt=""></a>
                </li>
                {{-- <li class="list-group-item p-0">
                    <a href="https://gjc.gxmzu.edu.cn/info/1141/3171.htm" target="_blank"><img  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/CHENGKUNG6.png" alt=""></a>
                </li> --}}
                {{-- <li class="list-group-item p-0">
                    <a href="#" target="_blank"><img  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/MINZU7.png" alt=""></a>
                </li> --}}
                <li class="list-group-item p-0">
                    <a href="https://www.digiedupro.com/youjiang-medical-university-for-nationalities/" target="_blank"><img  class="w-100 justify-content-center" src="https://www.shanghairanking.com/_uni/logo/31095838.png" alt=""></a>
                </li>
                {{-- <li class="list-group-item p-0">
                    <a href="#" target="_blank"><img  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/GIZHOU9.png" alt=""></a>
                </li> --}}
                <li class="list-group-item p-0">
                    <a href="https://www.isacteach.com/university/guilin-tourism-university/" target="_blank"><img  class="w-100 justify-content-center" src="https://th.bing.com/th/id/R.c845f8d87824cc4c3684f72d288b53f0?rik=PsneqQGD2ukMtw&riu=http%3a%2f%2fbridge.chinese.cn%2fonline%2fcamp%2fstorage%2fform%2fimage%2f16ba9271-0ea2-456b-a30a-52969d4fb58d.png&ehk=8MAsE8Wm4%2beo3kN4yb3zWFX%2bnlieyeMMZId0KbrPIDU%3d&risl=&pid=ImgRaw&r=0" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://gjc.nnnu.edu.cn/info/1003/1132.htm" target="_blank"><img  class="w-100 justify-content-center" src="https://th.bing.com/th/id/R.ac9ff15c088d0ab3a4936b652aff2e77?rik=5X586uCD9%2be8FQ&riu=http%3a%2f%2fbridge.chinese.cn%2fonline%2fcamp%2fstorage%2fform%2fimage%2f2c8b96dc-5938-4d11-b358-6714f7096d7a.png&ehk=oW5AoIpL9IZiipy%2fhnvzaI7BRD%2bZbYKSRoByqhEUuIk%3d&risl=&pid=ImgRaw&r=0" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://en.bfsu.edu.cn" target="_blank"><img  class="w-100 justify-content-center" src="https://www.at0086.com/images/university/logo/Beijing_Foreign_Studies_University.png" alt=""></a>
                </li>
                {{-- <li class="list-group-item p-0">
                    <a href="#" target="_blank"><img  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/13FINAL.png" alt=""></a>
                </li> --}}
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
                   <br>ប្រទេសសិង្ហបុរី
                </p>
            </a>
            <ul class="list-group right-bar-ul">
                <li class="list-group-item p-0">
                    <a href="https://www.eaim.edu.sg/en/" target="_blank"><img  class="w-100 justify-content-center" src="https://www.eaim.edu.sg/images/EAIM_logo.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.sim.edu.sg" target="_blank"><img  class="w-100 justify-content-center" src="https://onesim-production.s3.ap-southeast-1.amazonaws.com/onesim/media/sim-homepage/header%20logos/sim-logo-2023.svg?ext=.svg" alt=""></a>
                </li>
                {{-- <li class="list-group-item p-0">
                    <a href="https://www.jcu.edu.au" target="_blank"><img  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Jamecook-final.png" alt=""></a>
                </li> --}}
                <li class="list-group-item p-0">
                    <a href="https://ega.edu.sg" target="_blank"><img  class="w-100 justify-content-center" src="https://ega.edu.sg/wp-content/uploads/2022/10/Logo-2-2048x646.png" alt=""></a>
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
                   <br>សាធារណៈកូរ៉េ
                </p>
            </a>

            <ul class="list-group right-bar-ul">
                <li class="list-group-item p-0">
                    <a href="https://www.smu.ac.kr/eng1/index.do" target="_blank"><img  class="w-100 justify-content-center" src="https://th.bing.com/th/id/R.f3f78fa9f8f88db027dfa3864a870d63?rik=%2bjX%2b59tdtfvY%2fA&pid=ImgRaw&r=0" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.sunykorea.ac.kr/en/" target="_blank"><img  class="w-100 justify-content-center" src="https://th.bing.com/th/id/R.e477a662c97736cc9c0b2b777995326b?rik=0pLLniwgblxNvQ&riu=http%3a%2f%2fsunykorea.ac.kr%2fsearch%2fimages%2fcommon%2flogo.png&ehk=VPe3ihMzLv%2fbKPzb%2fs%2f6fEl%2fEjJ2aCGXI7dTgyNOSbs%3d&risl=&pid=ImgRaw&r=0" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://en.shinhan.ac.kr/en/index.do" target="_blank"><img  class="w-100 justify-content-center" src="https://en.shinhan.ac.kr/sites/en/images/logo.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://global.kduniv.ac.kr/global/index.php" target="_blank"><img  class="w-100 justify-content-center" src="https://www.sgaesports.gg/views/res/imgs/page/partner/logo_kyungdong.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.iyf.org" target="_blank"><img  class="w-100 justify-content-center" src="https://www.iyf.org/images/main/logo_iyf.png" alt=""></a>
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
                   <br>ប្រទេសជប៉ុន
                </p>
            </a>

            <ul class="list-group right-bar-ul">
                <li class="list-group-item p-0">
                    <a href="https://www.hosei.ac.jp/english/" target="_blank"><img  class="w-100 justify-content-center" src="https://www.hosei.ac.jp/common/img/logo_01_en.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.u-fukui.ac.jp/eng/" target="_blank"><img  class="w-100 justify-content-center" src="https://www.u-fukui.ac.jp/wp/wp-content/themes/fukui_news/eng/images/sitetitle.svg" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.u-hyogo.ac.jp/english/" target="_blank"><img  class="w-100 justify-content-center" src="https://www.u-hyogo.ac.jp/english/img/common/logo.svg" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://yanagigaura.ed.jp/en/" target="_blank"><img  class="w-100 justify-content-center" src="https://yanagigaura.ed.jp/en/files/libs/1663/202004241041283486.png?1594090863" alt=""></a>
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
                   <br>ព្រះរាជាណាចក្រថៃ
                </p>
            </a>



            <ul class="list-group right-bar-ul">
                {{-- <li class="list-group-item p-0">
                    <a href="https://www.au.edu" target="_blank"><img  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/assumption_university.png" alt=""></a>
                </li> --}}
                <li class="list-group-item p-0">
                    <a href="https://www.bu.ac.th/th" target="_blank"><img  class="w-100 justify-content-center" src="https://www.bu.ac.th/dist/images/bu_logo.svg?id=fe297612ed50604160bdb404bdf44861" alt=""></a>
                </li>
                {{-- <li class="list-group-item p-0">
                    <a href="https://www.utcc.ac.th/admission/" target="_blank"><img  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/utccuniversity.png" alt=""></a>
                </li> --}}
                <li class="list-group-item p-0">
                    <a href="https://www.eng.rmutt.ac.th" target="_blank"><img  class="w-100 justify-content-center" src="https://www.eng.rmutt.ac.th/wp-content/uploads/2017/10/Logo-RMUTT-eng.gif" alt=""></a>
                </li>
                {{-- <li class="list-group-item p-0">
                    <a href="https://www.aihm.edASucation" target="_blank"><img  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/AIHM-Final1.png" alt=""></a>
                </li> --}}
                <li class="list-group-item p-0">
                    <a href="https://www.pim.ac.th" target="_blank"><img  class="w-100 justify-content-center" src="https://keystoneacademic-res.cloudinary.com/image/upload/element/16/160363_Logo-PIM-on-Website-01-1024x287.jpg" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.thebritishcollege.edu.np" target="_blank"><img  class="w-100 justify-content-center" src="https://summerschool.thebritishcollege.edu.np/assets/images/tbc.png" alt=""></a>
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
                   <br>នូវែលហ្សេឡង់
                </p>
            </a>

            <ul class="list-group right-bar-ul">
                <li class="list-group-item p-0">
                    <a href="https://pihms.ac.nz" target="_blank"><img  class="w-100 justify-content-center" src="https://pihms.ac.nz/images/pihms-logo1.svg" alt=""></a>
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
                   <br>ប្រទេសវៀតណាម
                </p>
            </a>


            <ul class="list-group right-bar-ul">
                <li class="list-group-item p-0">
                    <a href="https://vlu.edu.vn/en" target="_blank"><img class="w-100 justify-content-center" src="https://www.vlu.edu.vn/_next/static/media/logo.8e5334db.svg" alt=""></a>
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
                   <br>ស្វីស
                </p>
            </a>

            <ul class="list-group right-bar-ul">
                <li class="list-group-item p-0">
                    <a href="https://htmi.ch" target="_blank"><img class="w-100 justify-content-center" src="https://crown.edu.mm/wp-content/uploads/2021/06/HTMiLogo-Image.png.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.bhms.ch" target="_blank"><img class="w-100 justify-content-center" src="https://www.bhms.ch/_assets/f7fdfcf83d7df2028e45ea3a8e09be0b/Images/Logos/Partners/switzerlandtourism.png" alt=""></a>
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
                    <a href="https://binus.ac.id" target="_blank"><img class="w-100 justify-content-center" src="https://binus.ac.id/wp-content/uploads/2022/08/logo-binus.svg" alt=""></a>
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

@include('web.client.share.visitor')




































</div>
