<div class="sidebar min-width-250 max-width-300 position-sticky shadow-sm p-0 m-0 px-1 content-translate-font" >

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


        {{-- <li class="list-group border">
            <div class="d-flex gap-2 align-items-center">
                <img src="{{ asset('asset/img/school/language/khmer.png') }}" alt="">
                <p class="Battambang-Regular">ភាសាខ្មែរ</p>
                <i class="fa fa-check"></i>
            </div>
        </li> --}}
        {{-- <li class="list-group border">
            <div class="d-flex gap-2 align-items-center">
                <img src="{{ asset('asset/img/school/language/english.png') }}" alt="">
                <p>English</p>
            </div>
        </li>
        <li class="list-group border">
            <div class="d-flex gap-2 align-items-center">
                <img src="{{ asset('asset/img/school/language/chinese.png') }}" alt="">
                <p>中文</p>
            </div>
        </li> --}}
    </ul>

    <ul class="p-0 m-0">
        <div class="w-100 justify-content-center">
            <a href="#" class="cursor-pointer">
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

            <ul class="list-group">
                <li class="list-group-item p-0">
                    <a href="https://moeys.gov.kh/kh" target="_blank"><img style="height: 70px" style="height: 70px" class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/MOEY1.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="#" target="_blank"><img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Acc2.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://opendevelopmentcambodia.net/km/tag/cambodian-higher-education-association-chea/#!/story=post-182453" target="_blank"><img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/CHEA3.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://consumer.huawei.com/kh/" target="_blank"><img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/HUAWEI4.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://koha-community.org" target="_blank"><img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/KOHA5.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://libraryhub-manila.blogspot.com/p/home.html" target="_blank"><img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/HUB6.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.wownow-kh.com" target="_blank"><img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/WOWNOW7.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.gfdexchange.com" target="_blank"><img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/GOLDEN-FORTUNE8.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://mrtrainingandjobscenter.com.kh" target="_blank"><img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/MR9.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="#" target="_blank"><img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/POSCAR10.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.firstcambodia.com.kh" target="_blank"><img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/FIRSTCAMBODIA11.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.sofitel-phnompenh-phokeethra.com" target="_blank"><img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/SOFITEL12.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://yourshumanly.org" target="_blank"><img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/HUMANLY13.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://yourshumanly.org" target="_blank"><img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/HYATT14.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.rosewoodhotels.com/en/phnom-penh" target="_blank"><img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/ROSEWOOD15.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.rosewoodhotels.com/en/phnom-penh" target="_blank"><img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Ministry_comere.png" alt=""></a>
                </li>


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

            <ul class="list-group">
                <li class="list-group-item p-0">
                    <a href="https://www.angelo.edu" target="_blank"><img style="height: 70px" style="height: 70px" class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/ASU-Final.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.cisco.com" target="_blank"><img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Cisco.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.highline.edu" target="_blank"><img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Highline-Final4.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://nau.edu" target="_blank"><img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/NAU-Final3.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://collegeofsanmateo.edu" target="_blank"><img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/San-mateo.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.edmonds.edu" target="_blank"><img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Edmonds.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.shoreline.edu" target="_blank"><img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/shoreline.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.ef.com/wwen/" target="_blank"><img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Education-First-Final1.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.mheducation.com.sg" target="_blank"><img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/mcgrawhill.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://seattlecentral.edu" target="_blank"><img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Seatle.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://uca.edu" target="_blank"><img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Central-Final5.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.ets.org" target="_blank"><img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/ets_cooperation.png" alt=""></a>
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
                   <br> ចក្រភពអង់គ្លេស
                </p>
            </a>

            <ul class="list-group">
                <li class="list-group-item p-0">
                    <a href="https://www.gre.ac.uk" target="_blank"><img style="height: 70px"  class="w-100 justify-content-center" src="https://beltei.edu.kh/biuk/images/homepics/Greenwich-Final2.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://ctc.ac.uk" target="_blank"><img style="height: 70px"  class="w-100 justify-content-center" src="https://beltei.edu.kh/biuk/images/homepics/ctc.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.springboard.com" target="_blank"><img style="height: 70px"  class="w-100 justify-content-center" src="https://beltei.edu.kh/biuk/images/homepics/Springboard1.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.yorksj.ac.uk" target="_blank"><img style="height: 70px"  class="w-100 justify-content-center" src="https://beltei.edu.kh/biuk/images/homepics/yorksaintjohn.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.regents.ac.uk" target="_blank"><img style="height: 70px"  class="w-100 justify-content-center" src="https://beltei.edu.kh/biuk/images/homepics/regents.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.gcs.ac.uk/cy/tags/coleg-gŵyr-abertawe" target="_blank"><img style="height: 70px"  class="w-100 justify-content-center" src="https://beltei.edu.kh/biuk/images/homepics/coleg4.png" alt=""></a>
                </li>


            </ul>

        </div>
    </li>

</ul>

<ul class="p-0 m-0  list-group ">

    <li class="list-group-item d-flex justify-content-center">

        <div style="border:inset 7px ; border-radius: 15px ; border-color: #03b1a8" class="w-100 overflow-hidden border-blue">
            <a href="#" class="cursor-pointer justify-content-center">
                <p style="font-family: KhmerOSMoul ; text-align: center" class="bg-success text-white p-2">
                    <img  class="w-100 max-width-100 justify-content-center" src="{{ asset('asset/img/school/language/canada.png') }}" alt="">
                   <br> ប្រទេសកាណាដា
                </p>
            </a>

            <ul class="list-group">
                <li class="list-group-item p-0">
                    <a href="https://www.fdu.edu/campuses/vancouver-campus/" target="_blank"><img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/bire/images/homepics/ferileigmou.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.ucanwest.ca" target="_blank"><img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/bire/images/homepics/canadawestmou.png" alt=""></a>
                </li>

            </ul>

        </div>
    </li>

</ul>


<ul class="p-0 m-0  list-group ">

    <li class="list-group-item d-flex justify-content-center">

        <div style="border:inset 7px ; border-radius: 15px ; border-color: #1e01c7" class="w-100 overflow-hidden border-blue">
            <a href="#" class="cursor-pointer justify-content-center">
                <p style="font-family: KhmerOSMoul ; text-align: center" class="bg-success text-white p-2">
                    <img  class="w-100 max-width-100 justify-content-center" src="{{ asset('asset/img/school/language/australia.png') }}" alt="">
                   <br> ប្រទេសអូស្ដ្រាលី
                </p>
            </a>

            <ul class="list-group">
                <li class="list-group-item p-0">
                    <a href="https://sccm.edu.au/" target="_blank"><img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Sydney.png" alt=""> </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.deakin.edu.au/" target="_blank"><img style="height: 70px"  class="w-100 justify-contents-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Deakin-final.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://concordenglishcollege.vic.edu.au/" target="_blank"><img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Concord-final.png" alt=""></a>
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

            <ul class="list-group">
                <li class="list-group-item p-0">
                    <a href="https://www.unikl.edu.my" target="_blank"><img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/UniKL.png" alt=""> </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.taylors.edu.my" target="_blank"><img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/taylors.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.imaedu.com/index/0/33/" target="_blank"><img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/IMA-Final2.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://study.utar.edu.my" target="_blank"><img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/UTAR-Final1.png" alt=""> </a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://mahsa.edu.my" target="_blank"><img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/MAHSA-Final3.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://worldskills.com.my/about-us/" target="_blank"><img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/World-Skill-Final4.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.pbebank.com" target="_blank"><img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/pubBank01.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.cpbebank.com" target="_blank"><img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/pubBank02.png" alt=""></a>
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

            <ul class="list-group">
                <li class="list-group-item p-0">
                    <a href="https://english.gxufl.edu.cn" target="_blank"><img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/GUYL1.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.chinauniversityjobs.com" target="_blank"><img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/GUT2.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://en.whu.edu.cn" target="_blank"><img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/GUAT3.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="http://kq.gxmu.edu.cn/html/Home/" target="_blank"><img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/WUHAN4.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.ncku.edu.tw" target="_blank"><img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Medical5.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://gjc.gxmzu.edu.cn/info/1141/3171.htm" target="_blank"><img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/CHENGKUNG6.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="#" target="_blank"><img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/MINZU7.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.digiedupro.com/youjiang-medical-university-for-nationalities/" target="_blank"><img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/8FINAL.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="#" target="_blank"><img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/GIZHOU9.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.isacteach.com/university/guilin-tourism-university/" target="_blank"><img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/GUILIN10.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://gjc.nnnu.edu.cn/info/1003/1132.htm" target="_blank"><img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/11FINAL.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://en.bfsu.edu.cn" target="_blank"><img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/BFS.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="#" target="_blank"><img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/13FINAL.png" alt=""></a>
                </li>
            </ul>

        </div>
    </li>

</ul>



<ul class="p-0 m-0  list-group ">

    <li class="list-group-item d-flex justify-content-center">

        <div style="border:inset 7px ; border-radius: 15px ; border-color: #1b8800" class="w-100 overflow-hidden border-blue">
            <a href="#" class="cursor-pointer justify-content-center">
                <p style="font-family: KhmerOSMoul ; text-align: center" class="bg-success text-white p-2">
                    <img  class="w-100 max-width-100 justify-content-center" src="{{ asset('asset/img/school/language/singapore.png') }}" alt="">
                   <br>ប្រទេសសិង្ហបុរី
                </p>
            </a>

            <ul class="list-group">
                <li class="list-group-item p-0">
                    <a href="https://www.eaim.edu.sg/en/" target="_blank"><img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/EASB.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.sim.edu.sg" target="_blank"><img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/SIM.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.jcu.edu.au" target="_blank"><img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Jamecook-final.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://ega.edu.sg" target="_blank"><img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Educare.png" alt=""></a>
                </li>

            </ul>

        </div>
    </li>
</ul>


<ul class="p-0 m-0  list-group ">

    <li class="list-group-item d-flex justify-content-center">

        <div style="border:inset 7px ; border-radius: 15px ; border-color: #5f8d53" class="w-100 overflow-hidden border-blue">
            <a href="#" class="cursor-pointer justify-content-center">
                <p style="font-family: KhmerOSMoul ; text-align: center" class="bg-success text-white p-2">
                    <img  class="w-100 max-width-100 justify-content-center" src="{{ asset('asset/img/school/language/south_korea.png') }}" alt="">
                   <br>សាធារណៈរដ្ធកូរ៉េ
                </p>
            </a>

            <ul class="list-group">
                <li class="list-group-item p-0">
                    <a href="https://www.smu.ac.kr/eng1/index.do" target="_blank"><img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/sangmyung.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.sunykorea.ac.kr/en/" target="_blank"><img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Suny.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://en.shinhan.ac.kr/en/index.do" target="_blank"><img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/SHIHAN-Final1.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://global.kduniv.ac.kr/global/index.php" target="_blank"><img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/KDU-Final3.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.iyf.org" target="_blank"><img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/iyf.png" alt=""></a>
                </li>

            </ul>

        </div>
    </li>
</ul>


<ul class="p-0 m-0  list-group ">

    <li class="list-group-item d-flex justify-content-center">

        <div style="border:inset 7px ; border-radius: 15px ; border-color: #ff2929" class="w-100 overflow-hidden border-blue">
            <a href="#" class="cursor-pointer justify-content-center">
                <p style="font-family: KhmerOSMoul ; text-align: center" class="bg-success text-white p-2">
                    <img  class="w-100 max-width-100 justify-content-center" src="{{ asset('asset/img/school/language/japan.png') }}" alt="">
                   <br>ប្រទេសជប៉ុន
                </p>
            </a>

            <ul class="list-group">
                <li class="list-group-item p-0">
                    <a href="https://www.hosei.ac.jp/english/" target="_blank"><img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Hosei-final.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.u-fukui.ac.jp/eng/" target="_blank"><img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/bire/images/homepics/university_fukui.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.u-hyogo.ac.jp/english/" target="_blank"><img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/UH-final.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://yanagigaura.ed.jp/en/" target="_blank"><img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Yana-final.png" alt=""></a>
                </li>

            </ul>

        </div>
    </li>
</ul>



<ul class="p-0 m-0  list-group ">

    <li class="list-group-item d-flex justify-content-center">

        <div style="border:inset 7px ; border-radius: 15px ; border-color: #00f7cd" class="w-100 overflow-hidden border-blue">
            <a href="#" class="cursor-pointer justify-content-center">
                <p style="font-family: KhmerOSMoul ; text-align: center" class="bg-success text-white p-2">
                    <img  class="w-100 max-width-100 justify-content-center" src="{{ asset('asset/img/school/language/thailand.png') }}" alt="">
                   <br>ព្រះរាជាណាចក្រថៃ
                </p>
            </a>

            <ul class="list-group">
                <li class="list-group-item p-0">
                    <a href="https://www.au.edu" target="_blank"><img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/assumption_university.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.bu.ac.th/th" target="_blank"><img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/bire/images/homepics/bangkoruniversity.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.utcc.ac.th/admission/" target="_blank"><img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/utccuniversity.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.eng.rmutt.ac.th" target="_blank"><img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/RMUTT1.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.aihm.education" target="_blank"><img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/AIHM-Final1.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.pim.ac.th" target="_blank"><img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/PIM-Final2.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.thebritishcollege.edu.np" target="_blank"><img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/British-college.png" alt=""></a>
                </li>


            </ul>

        </div>
    </li>
</ul>



<ul class="p-0 m-0  list-group ">

    <li class="list-group-item d-flex justify-content-center">

        <div style="border:inset 7px ; border-radius: 15px ; border-color: #f78400" class="w-100 overflow-hidden border-blue">
            <a href="#" class="cursor-pointer justify-content-center">
                <p style="font-family: KhmerOSMoul ; text-align: center" class="bg-success text-white p-2">
                    <img  class="w-100 max-width-100 justify-content-center" src="{{ asset('asset/img/school/language/newzealand.png') }}" alt="">
                   <br>ប្រទេសនូវែលហ្សេឡង់
                </p>
            </a>

            <ul class="list-group">
                <li class="list-group-item p-0">
                    <a href="https://pihms.ac.nz" target="_blank"><img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/PIHMS.png" alt=""></a>
                </li>
            </ul>

        </div>
    </li>
</ul>



<ul class="p-0 m-0  list-group ">

    <li class="list-group-item d-flex justify-content-center">

        <div style="border:inset 7px ; border-radius: 15px ; border-color: #def700" class="w-100 overflow-hidden border-blue">
            <a href="#" class="cursor-pointer justify-content-center">
                <p style="font-family: KhmerOSMoul ; text-align: center" class="bg-success text-white p-2">
                    <img  class="w-100 max-width-100 justify-content-center" src="{{ asset('asset/img/school/language/vietnam.png') }}" alt="">
                   <br>ប្រទេសរៀតណាម
                </p>
            </a>

            <ul class="list-group">
                <li class="list-group-item p-0">
                    <a href="https://vlu.edu.vn/en" target="_blank"><img style="height: 70px" style="height: 70px" class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Vanlang1.png" alt=""></a>
                </li>
            </ul>

        </div>
    </li>
</ul>



<ul class="p-0 m-0  list-group ">

    <li class="list-group-item d-flex justify-content-center">

        <div style="border:inset 7px ; border-radius: 15px ; border-color: #f7ca00" class="w-100 overflow-hidden border-blue">
            <a href="#" class="cursor-pointer justify-content-center">
                <p style="font-family: KhmerOSMoul ; text-align: center" class="bg-success text-white p-2">
                    <img  class="w-100 max-width-100 justify-content-center" src="{{ asset('asset/img/school/language/switzerland.png') }}" alt="">
                   <br>ប្រទេសស្វីស
                </p>
            </a>

            <ul class="list-group">
                <li class="list-group-item p-0">
                    <a href="https://htmi.ch" target="_blank"><img style="height: 70px" style="height: 70px" class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/HTM.png" alt=""></a>
                </li>
                <li class="list-group-item p-0">
                    <a href="https://www.bhms.ch" target="_blank"><img style="height: 70px" style="height: 70px" class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/BHMS.png" alt=""></a>
                </li>
            </ul>

        </div>
    </li>
</ul>



<ul class="p-0 m-0  list-group ">

    <li class="list-group-item d-flex justify-content-center">

        <div style="border:inset 7px ; border-radius: 15px ; border-color: #029286" class="w-100 overflow-hidden border-blue">
            <a href="#" class="cursor-pointer justify-content-center">
                <p style="font-family: KhmerOSMoul ; text-align: center" class="bg-success text-white p-2">
                    <img  class="w-100 max-width-100 justify-content-center" src="{{ asset('asset/img/school/language/indonesia.png') }}" alt="">
                   <br>ប្រទេសឥណ្ឌូនេស៊ី
                </p>
            </a>

            <ul class="list-group">
                <li class="list-group-item p-0">
                    <a href="https://binus.ac.id" target="_blank"><img style="height: 70px" style="height: 70px" class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/BINUS.png" alt=""></a>
                </li>
            </ul>

        </div>
    </li>
</ul>



<ul class="p-0 m-0  list-group ">

    <li class="list-group-item d-flex justify-content-center">

        <div style="border:inset 7px ; border-radius: 15px ; border-color: #ff9100" class="w-100 overflow-hidden border-blue">
            <a href="#" class="cursor-pointer justify-content-center">
                <p style="font-family: KhmerOSMoul ; text-align: center" class="bg-success text-white p-2">
                    <img  class="w-100 max-width-100 justify-content-center" src="{{ asset('asset/img/school/language/france.png') }}" alt="">
                   <br>ប្រទេសបារាំង
                </p>
            </a>

            <ul class="list-group">
                <li class="list-group-item p-0">
                    <a href="https://www.accessmba.com" target="_blank"><img style="height: 70px" style="height: 70px" class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/MBA.png" alt=""></a>
                </li>
            </ul>

        </div>
    </li>
</ul>


<ul class="p-0 m-0  list-group ">

    <li class="list-group-item d-flex justify-content-center">

        <div style="border:inset 7px ; border-radius: 15px ; border-color: #009118" class="w-100 overflow-hidden border-blue">
            <a href="#" class="cursor-pointer justify-content-center">
                <p style="font-family: KhmerOSMoul ; text-align: center" class="bg-success text-white p-2">
                    <img  class="w-100 max-width-100 justify-content-center" src="{{ asset('asset/img/school/language/poland.png') }}" alt="">
                   <br>ប្រទេសប៉ូឡូញ
                </p>
            </a>

            <ul class="list-group">
                <li class="list-group-item p-0">
                    <a href="https://en.uitm.edu.eu" target="_blank"><img style="height: 70px" style="height: 70px" class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/poland1.png" alt=""></a>
                </li>
            </ul>

        </div>
    </li>
</ul>



<ul class="p-0 m-0  list-group ">

    <li class="list-group-item d-flex justify-content-center">

        <div style="border:inset 7px ; border-radius: 15px ; border-color: #2600ff" class="w-100 overflow-hidden border-blue">
            <a href="#" class="cursor-pointer justify-content-center">
                <p style="font-family: KhmerOSMoul ; text-align: center" class="bg-success text-white p-2">
                    <img  class="w-100 max-width-100 justify-content-center" src="{{ asset('asset/img/school/language/bangladesh.png') }}" alt="">
                   <br>ប្រទេសបង់ក្លាដែស
                </p>
            </a>

            <ul class="list-group">
                <li class="list-group-item p-0">
                    <a href="https://www.oneeducation.org.uk" target="_blank"><img style="height: 70px" style="height: 70px" class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/oneeducation.png" alt=""></a>
                </li>
            </ul>

        </div>
    </li>
</ul>



<ul class="p-0 m-0  list-group ">

    <li class="list-group-item d-flex justify-content-center">

        <div style="border:inset 7px ; border-radius: 15px ; border-color: #2600ff" class="w-100 overflow-hidden border-blue">
            <a href="#" class="cursor-pointer justify-content-center">
                <p style="font-family: KhmerOSMoul ; text-align: center" class="bg-success text-white p-2">
                    <img  class="w-75 max-width-50 justify-content-center" src="{{ asset('asset/img/school/language/australia.png') }}" alt="">
                    <img  class="w-75 max-width-50 justify-content-center" src="{{ asset('asset/img/school/language/australia.png') }}" alt="">
                   <br>មជ្ឈមណ្ឌល់ប្រឡងតេស្សអន្តរជាតិ
                </p>
            </a>

            <ul class="list-group">
                <li class="list-group-item p-0">
                    <a href="#" target="_blank"><img style="height: 70px" style="height: 70px" class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Sydney.png" alt=""></a>
                </li>
            </ul>

        </div>
    </li>
</ul>

</div>
