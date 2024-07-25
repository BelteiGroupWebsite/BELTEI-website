<div class="sidebar min-width-250 max-width-300 position-sticky shadow-sm p-0 m-0 px-1 content-translate-font">

    <ul class="list-group translate ul-none-style" style="background-color: #21ade3;">
        <h6 class="text-uppercase text-center py-2 bg-header-color gold title-translate-font">
            {{ __('school/app.translate') }}</h6>

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

    <ul class="text-capitalize list-group f14 unhover-padding">
        <a href="{{ route('school.') }}">
            <h6 class="text-uppercase text-center py-2 bg-header-color gold ">{{ __('school/app.english-speaking') }}
            </h6>
        </a>
        <a href="{{ route('school.english-speaking-12') }}" class="list-group-item text-white text-center">
            {{-- {{ __('school/app.grade') }} {{ __('school/app.n12') }} --}}
            <div class="d-flex justify-content-center ">
                <div class="w-100 rounded position-relative d-flex justify-content-center align-items-center">
                    <img class="w-100 h-100 shadow"
                        src="https://www.belteitour.com.kh/btk/images/bt-home/beltei_domestic_tour.png" alt="">
                </div>
            </div>
        </a>
        <a href="{{ route('school.english-speaking-9') }}" class="list-group-item text-white text-center">
            {{-- {{ __('school/app.grade') }} {{ __('school/app.n9') }} --}}
            <div class="d-flex justify-content-center ">
                <div class="w-100 rounded position-relative d-flex justify-content-center align-items-center">
                    <img class="w-100 h-100 shadow"
                        src="https://www.belteitour.com.kh/btk/images/bt-home/beltei_outbound_tour.png" alt="">
                </div>
            </div>
        </a>
        <a href="{{ route('school.english-speaking-6') }}" class="list-group-item text-white text-center">
            {{-- {{ __('school/app.grade') }} {{ __('school/app.n6') }} --}}
            <div class="d-flex justify-content-center ">
                <div class="w-100 rounded position-relative d-flex justify-content-center align-items-center">
                    <img class="w-100 h-100 shadow"
                        src="https://www.belteitour.com.kh/btk/images/bt-home/beltei_inboud_tour.png" alt="">
                </div>
            </div>
        </a>
    </ul>
    <ul class="text-capitalize list-group f14 unhover-padding">
        <a href="{{ route('school.') }}">
            <h6 class="text-uppercase text-center py-2 bg-header-color gold ">
                កិច្ចសហការក្នុងប្រទេស
            </h6>
        </a>

        <a class="list-group-item text-center gold font-bold">រាជធានីភ្នំពេញ</a>
        
        <a href="{{ route('school.english-speaking-12') }}" class=" text-white text-center">
            <img class="shadow" src="https://www.belteitour.com.kh/btk/images/bt-home/raffles_hotel.png" alt="">
        </a>
        <a href="{{ route('school.english-speaking-12') }}" class=" text-white text-center">
            <img class="shadow" src="https://www.belteitour.com.kh/btk/images/bt-home/inter_continental.png" alt="">
        </a>
        <a href="{{ route('school.english-speaking-12') }}" class=" text-white text-center">
            <img class="shadow" src="https://www.belteitour.com.kh/btk/images/bt-home/sunway.png" alt="">
        </a>
        <a href="{{ route('school.english-speaking-12') }}" class=" text-white text-center">
            <img class="shadow" src="https://www.belteitour.com.kh/btk/images/bt-home/phnom_penh_hotel.png" alt="">
        </a>
        <a href="{{ route('school.english-speaking-12') }}" class=" text-white text-center">
            <img class="shadow" src="https://www.belteitour.com.kh/btk/images/bt-home/juliana's_hotel.png" alt="">
        </a>
    </ul>
    <ul class="text-capitalize list-group f14 unhover-padding">
        {{-- <a href="{{ route('school.') }}">
            <h6 class="text-uppercase text-center py-2 bg-header-color gold ">
                ក្រុងសៀមរាប
            </h6>
        </a> --}}
        <a class="list-group-item text-center gold font-bold">ក្រុងសៀមរាប</a>
        <a href="{{ route('school.english-speaking-12') }}" class=" text-white text-center">
            <img class="shadow" src="https://www.belteitour.com.kh/btk/images/bt-home/sokha_hotel.png" alt="">
        </a>
        <a href="{{ route('school.english-speaking-12') }}" class=" text-white text-center">
            <img class="shadow" src="https://www.belteitour.com.kh/btk/images/bt-home/royal_angkor_resort.png" alt="">
        </a>
        <a href="{{ route('school.english-speaking-12') }}" class=" text-white text-center">
            <img class="shadow" src="https://www.belteitour.com.kh/btk/images/bt-home/angkor-paradise-hotel.png" alt="">
        </a>
        <a href="{{ route('school.english-speaking-12') }}" class=" text-white text-center">
            <img class="shadow" src="https://www.belteitour.com.kh/btk/images/bt-home/angkor_holiday_hotel.png" alt="">
        </a>
        <a href="{{ route('school.english-speaking-12') }}" class=" text-white text-center">
            <img class="shadow" src="https://www.belteitour.com.kh/btk/images/bt-home/darareangsey_holel.png" alt="">
        </a>
    </ul>
    <ul class="text-capitalize list-group f14 unhover-padding">
        {{-- <a href="{{ route('school.') }}">
            <h6 class="text-uppercase text-center py-2 bg-header-color gold ">
                ក្រុងព្រះសីហនុ
            </h6>
        </a> --}}
        <a class="list-group-item text-center gold font-bold">ក្រុងព្រះសីហនុ</a>
        <a href="{{ route('school.english-speaking-12') }}" class=" text-white text-center">
            <img class="shadow" src="https://www.belteitour.com.kh/btk/images/bt-home/sokhasv_hotel.png" alt="">
        </a>
        <a href="{{ route('school.english-speaking-12') }}" class=" text-white text-center">
            <img class="shadow" src="https://www.belteitour.com.kh/btk/images/bt-home/goldensan_hotel.png" alt="">
        </a>
        <a href="{{ route('school.english-speaking-12') }}" class=" text-white text-center">
            <img class="shadow" src="https://www.belteitour.com.kh/btk/images/bt-home/newbeach_hotel.png" alt="">
        </a>
    </ul>
    <ul class="text-capitalize list-group f14 unhover-padding">
        {{-- <a href="{{ route('school.') }}">
            <h6 class="text-uppercase text-center py-2 bg-header-color gold ">
                ក្រុងកំពត
            </h6>
        </a> --}}
        <a class="list-group-item text-center gold font-bold">ក្រុងកំពត</a>
        <a href="{{ route('school.english-speaking-12') }}" class=" text-white text-center">
            <img class="shadow" src="https://www.belteitour.com.kh/btk/images/bt-home/thansurbokor_hotel.png" alt="">
        </a>
        <a href="{{ route('school.english-speaking-12') }}" class=" text-white text-center">
            <img class="shadow" src="https://www.belteitour.com.kh/btk/images/bt-home/nataya_resort.png" alt="">
        </a>
    </ul>
    <ul class="text-capitalize list-group f14 unhover-padding">
        <a href="{{ route('school.') }}">
            <h6 class="text-uppercase text-center py-2 bg-header-color gold ">
                ការិយាល័យទំនាក់ទំនង
            </h6>
        </a>
        <a href="{{ route('school.english-speaking-12') }}" class=" text-white text-center">
            <img class="shadow" src="https://www.belteitour.com.kh/btk/images/beltei_pic/belteitour_building.png" alt="">
        </a>
        <a href="{{ route('school.english-speaking-12') }}" class=" text-white text-center">
            <img class="shadow" src="https://www.belteitour.com.kh/btk/images/bt-home/headoffice.png" alt="">
        </a>
    </ul>
    
    
    @include('web.client.share.visitor')
</div>
