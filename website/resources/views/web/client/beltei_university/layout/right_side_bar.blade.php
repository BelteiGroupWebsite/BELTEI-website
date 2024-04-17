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
                    <img style="height: 70px" style="height: 70px" class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/MOEY1.png" alt="">
                </li>
                <li class="list-group-item p-0">
                    <img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Acc2.png" alt="">
                </li>
                <li class="list-group-item p-0">
                    <img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/CHEA3.png" alt="">
                </li>
                <li class="list-group-item p-0">
                    <img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/HUAWEI4.png" alt="">
                </li>
                <li class="list-group-item p-0">
                    <img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/KOHA5.png" alt="">
                </li>
                <li class="list-group-item p-0">
                    <img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/WOWNOW7.png" alt="">
                </li>
                <li class="list-group-item p-0">
                    <img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/GOLDEN-FORTUNE8.png" alt="">
                </li>
                <li class="list-group-item p-0">
                    <img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/MR9.png" alt="">
                </li>
                <li class="list-group-item p-0">
                    <img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/POSCAR10.png" alt="">
                </li>
                <li class="list-group-item p-0">
                    <img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/FIRSTCAMBODIA11.png" alt="">
                </li>
                <li class="list-group-item p-0">
                    <img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/SOFITEL12.png" alt="">
                </li>
                <li class="list-group-item p-0">
                    <img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/HUMANLY13.png" alt="">
                </li>
                <li class="list-group-item p-0">
                    <img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/HYATT14.png" alt="">
                </li>
                <li class="list-group-item p-0">
                    <img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/ROSEWOOD15.png" alt="">
                </li>
                <li class="list-group-item p-0">
                    <img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Ministry_comere.png" alt="">
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
                    <img style="height: 70px" style="height: 70px" class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/ASU-Final.png" alt="">
                </li>
                <li class="list-group-item p-0">
                    <img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Cisco.png" alt="">
                </li>
                <li class="list-group-item p-0">
                    <img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Highline-Final4.png" alt="">
                </li>
                <li class="list-group-item p-0">
                    <img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/NAU-Final3.png" alt="">
                </li>
                <li class="list-group-item p-0">
                    <img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/San-mateo.png" alt="">
                </li>
                <li class="list-group-item p-0">
                    <img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Edmonds.png" alt="">
                </li>
                <li class="list-group-item p-0">
                    <img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/shoreline.png" alt="">
                </li>
                <li class="list-group-item p-0">
                    <img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Education-First-Final1.png" alt="">
                </li>
                <li class="list-group-item p-0">
                    <img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/mcgrawhill.png" alt="">
                </li>
                <li class="list-group-item p-0">
                    <img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Seatle.png" alt="">
                </li>
                <li class="list-group-item p-0">
                    <img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Central-Final5.png" alt="">
                </li>
                <li class="list-group-item p-0">
                    <img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/ets_cooperation.png" alt="">
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
                    <img style="height: 70px" style="height: 70px" class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/ASU-Final.png" alt="">
                </li>
                <li class="list-group-item p-0">
                    <img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Cisco.png" alt="">
                </li>
                <li class="list-group-item p-0">
                    <img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Highline-Final4.png" alt="">
                </li>
                <li class="list-group-item p-0">
                    <img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/NAU-Final3.png" alt="">
                </li>
                <li class="list-group-item p-0">
                    <img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/San-mateo.png" alt="">
                </li>
                <li class="list-group-item p-0">
                    <img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Edmonds.png" alt="">
                </li>
                <li class="list-group-item p-0">
                    <img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/shoreline.png" alt="">
                </li>
                <li class="list-group-item p-0">
                    <img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Education-First-Final1.png" alt="">
                </li>
                <li class="list-group-item p-0">
                    <img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/mcgrawhill.png" alt="">
                </li>
                <li class="list-group-item p-0">
                    <img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Seatle.png" alt="">
                </li>
                <li class="list-group-item p-0">
                    <img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Central-Final5.png" alt="">
                </li>
                <li class="list-group-item p-0">
                    <img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/ets_cooperation.png" alt="">
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
                    <img style="height: 70px" style="height: 70px" class="w-100 justify-content-center" src="https://www.beltei.edu.kh/bire/images/homepics/ferileigmou.png" alt="">
                </li>
                <li class="list-group-item p-0">
                    <img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/bire/images/homepics/canadawestmou.png" alt="">
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
                    <img style="height: 70px" style="height: 70px" class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Sydney.png" alt="">
                </li>
                <li class="list-group-item p-0">
                    <img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Deakin-final.png" alt="">
                </li>
                <li class="list-group-item p-0">
                    <img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Concord-final.png" alt="">
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
                    <img  class="w-100 max-width-100 justify-content-center" src="{{ asset('asset/img/school/language/australia.png') }}" alt="">
                   <br> ប្រទេសម៉ាឡេស៊ី
                </p>
            </a>

            <ul class="list-group">
                <li class="list-group-item p-0">
                    <img style="height: 70px" style="height: 70px" class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Sydney.png" alt="">
                </li>
                <li class="list-group-item p-0">
                    <img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Deakin-final.png" alt="">
                </li>
                <li class="list-group-item p-0">
                    <img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Concord-final.png" alt="">
                </li>
                <li class="list-group-item p-0">
                    <img style="height: 70px" style="height: 70px" class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Sydney.png" alt="">
                </li>
                <li class="list-group-item p-0">
                    <img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Deakin-final.png" alt="">
                </li>
                <li class="list-group-item p-0">
                    <img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Concord-final.png" alt="">
                </li>
                <li class="list-group-item p-0">
                    <img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Deakin-final.png" alt="">
                </li>
                <li class="list-group-item p-0">
                    <img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Concord-final.png" alt="">
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
                    <img  class="w-100 max-width-100 justify-content-center" src="{{ asset('asset/img/school/language/australia.png') }}" alt="">
                   <br>សាធារណៈរដ្ធប្រជាមានិតចិន
                </p>
            </a>

            <ul class="list-group">
                <li class="list-group-item p-0">
                    <img style="height: 70px" style="height: 70px" class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Sydney.png" alt="">
                </li>
                <li class="list-group-item p-0">
                    <img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Deakin-final.png" alt="">
                </li>
                <li class="list-group-item p-0">
                    <img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Concord-final.png" alt="">
                </li>
                <li class="list-group-item p-0">
                    <img style="height: 70px" style="height: 70px" class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Sydney.png" alt="">
                </li>
                <li class="list-group-item p-0">
                    <img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Deakin-final.png" alt="">
                </li>
                <li class="list-group-item p-0">
                    <img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Concord-final.png" alt="">
                </li>
                <li class="list-group-item p-0">
                    <img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Deakin-final.png" alt="">
                </li>
                <li class="list-group-item p-0">
                    <img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Concord-final.png" alt="">
                </li>
                <li class="list-group-item p-0">
                    <img style="height: 70px" style="height: 70px" class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Sydney.png" alt="">
                </li>
                <li class="list-group-item p-0">
                    <img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Deakin-final.png" alt="">
                </li>
                <li class="list-group-item p-0">
                    <img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Concord-final.png" alt="">
                </li>
                <li class="list-group-item p-0">
                    <img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Deakin-final.png" alt="">
                </li>
                <li class="list-group-item p-0">
                    <img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Concord-final.png" alt="">
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
                    <img  class="w-100 max-width-100 justify-content-center" src="{{ asset('asset/img/school/language/australia.png') }}" alt="">
                   <br>ប្រទេសសិង្ហបុរី
                </p>
            </a>

            <ul class="list-group">
                <li class="list-group-item p-0">
                    <img style="height: 70px" style="height: 70px" class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Sydney.png" alt="">
                </li>
                <li class="list-group-item p-0">
                    <img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Deakin-final.png" alt="">
                </li>
                <li class="list-group-item p-0">
                    <img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Concord-final.png" alt="">
                </li>
                <li class="list-group-item p-0">
                    <img style="height: 70px" style="height: 70px" class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Sydney.png" alt="">
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
                    <img  class="w-100 max-width-100 justify-content-center" src="{{ asset('asset/img/school/language/australia.png') }}" alt="">
                   <br>សាធារណៈរដ្ធកូរ៉េ
                </p>
            </a>

            <ul class="list-group">
                <li class="list-group-item p-0">
                    <img style="height: 70px" style="height: 70px" class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Sydney.png" alt="">
                </li>
                <li class="list-group-item p-0">
                    <img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Deakin-final.png" alt="">
                </li>
                <li class="list-group-item p-0">
                    <img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Concord-final.png" alt="">
                </li>
                <li class="list-group-item p-0">
                    <img style="height: 70px" style="height: 70px" class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Sydney.png" alt="">
                </li>
                <li class="list-group-item p-0">
                    <img style="height: 70px" style="height: 70px" class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Sydney.png" alt="">
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
                    <img  class="w-100 max-width-100 justify-content-center" src="{{ asset('asset/img/school/language/australia.png') }}" alt="">
                   <br>ប្រទេសជប៉ុន
                </p>
            </a>

            <ul class="list-group">
                <li class="list-group-item p-0">
                    <img style="height: 70px" style="height: 70px" class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Sydney.png" alt="">
                </li>
                <li class="list-group-item p-0">
                    <img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Deakin-final.png" alt="">
                </li>
                <li class="list-group-item p-0">
                    <img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Concord-final.png" alt="">
                </li>
                <li class="list-group-item p-0">
                    <img style="height: 70px" style="height: 70px" class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Sydney.png" alt="">
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
                    <img  class="w-100 max-width-100 justify-content-center" src="{{ asset('asset/img/school/language/australia.png') }}" alt="">
                   <br>ព្រះរាជាណាចក្រថៃ
                </p>
            </a>

            <ul class="list-group">
                <li class="list-group-item p-0">
                    <img style="height: 70px" style="height: 70px" class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Sydney.png" alt="">
                </li>
                <li class="list-group-item p-0">
                    <img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Deakin-final.png" alt="">
                </li>
                <li class="list-group-item p-0">
                    <img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Concord-final.png" alt="">
                </li>
                <li class="list-group-item p-0">
                    <img style="height: 70px" style="height: 70px" class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Sydney.png" alt="">
                </li>
                <li class="list-group-item p-0">
                    <img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Deakin-final.png" alt="">
                </li>
                <li class="list-group-item p-0">
                    <img style="height: 70px"  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Concord-final.png" alt="">
                </li>
                <li class="list-group-item p-0">
                    <img style="height: 70px" style="height: 70px" class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Sydney.png" alt="">
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
                    <img  class="w-100 max-width-100 justify-content-center" src="{{ asset('asset/img/school/language/australia.png') }}" alt="">
                   <br>ប្រទេសនូវែលហ្សេឡង់
                </p>
            </a>

            <ul class="list-group">
                <li class="list-group-item p-0">
                    <img style="height: 70px" style="height: 70px" class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Sydney.png" alt="">
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
                    <img  class="w-100 max-width-100 justify-content-center" src="{{ asset('asset/img/school/language/australia.png') }}" alt="">
                   <br>ប្រទេសរៀតណាម
                </p>
            </a>

            <ul class="list-group">
                <li class="list-group-item p-0">
                    <img style="height: 70px" style="height: 70px" class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Sydney.png" alt="">
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
                    <img  class="w-100 max-width-100 justify-content-center" src="{{ asset('asset/img/school/language/australia.png') }}" alt="">
                   <br>ប្រទេសស្វីស
                </p>
            </a>

            <ul class="list-group">
                <li class="list-group-item p-0">
                    <img style="height: 70px" style="height: 70px" class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Sydney.png" alt="">
                </li>
                <li class="list-group-item p-0">
                    <img style="height: 70px" style="height: 70px" class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Sydney.png" alt="">
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
                    <img  class="w-100 max-width-100 justify-content-center" src="{{ asset('asset/img/school/language/australia.png') }}" alt="">
                   <br>ប្រទេសឥណ្ឌូនេស៊ី
                </p>
            </a>

            <ul class="list-group">
                <li class="list-group-item p-0">
                    <img style="height: 70px" style="height: 70px" class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Sydney.png" alt="">
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
                    <img  class="w-100 max-width-100 justify-content-center" src="{{ asset('asset/img/school/language/australia.png') }}" alt="">
                   <br>ប្រទេសបារាំង
                </p>
            </a>

            <ul class="list-group">
                <li class="list-group-item p-0">
                    <img style="height: 70px" style="height: 70px" class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Sydney.png" alt="">
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
                    <img  class="w-100 max-width-100 justify-content-center" src="{{ asset('asset/img/school/language/australia.png') }}" alt="">
                   <br>ប្រទេសប៉ូឡូញ
                </p>
            </a>

            <ul class="list-group">
                <li class="list-group-item p-0">
                    <img style="height: 70px" style="height: 70px" class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Sydney.png" alt="">
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
                    <img  class="w-100 max-width-100 justify-content-center" src="{{ asset('asset/img/school/language/australia.png') }}" alt="">
                   <br>ប្រទេសបង់ក្លាដែស
                </p>
            </a>

            <ul class="list-group">
                <li class="list-group-item p-0">
                    <img style="height: 70px" style="height: 70px" class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Sydney.png" alt="">
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
                    <img style="height: 70px" style="height: 70px" class="w-100 justify-content-center" src="https://www.beltei.edu.kh/biuk/images/homepics/Sydney.png" alt="">
                </li>
            </ul>

        </div>
    </li>
</ul>

</div>
