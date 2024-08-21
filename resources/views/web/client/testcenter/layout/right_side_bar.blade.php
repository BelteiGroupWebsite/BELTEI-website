<div class="sidebar max-width-250 w-100 shadow-sm p-0 m-0 content-translate-font px-1" >

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
            <a href="/" class="cursor-pointer">
                <img  class="w-100" src="{{ asset('asset/img/university/campus/belgroupkh.png') }}" alt="">
            </a>
        </div>
    </ul>

    {{-- <ul class="text-capitalize list-group f14">
        <a href="{{ route('school.') }}">
            <h6 class="text-uppercase text-center py-2 bg-header-color gold ">{{ __('school/app.A') }}</h6>
        </a>
        <a href="{{ route('school.about.welcome') }}" class="list-group-item text-white">{{ __('school/app.A1') }}</a>
        <a href="{{ route('school.about.purpose') }}" class="list-group-item text-white">{{ __('school/app.A2') }}</a>
        <a href="{{ route('school.about.vision') }}" class="list-group-item text-white">{{ __('school/app.A3') }}</a>
        <a href="{{ route('school.about.history') }}" class="list-group-item text-white">{{ __('school/app.A4') }}</a>
        <a href="{{ route('school.about.history') }}" class="list-group-item text-white">{{ __('school/app.A5') }}</a>
        <a href="{{ route('school.about.history') }}" class="list-group-item text-white">{{ __('school/app.A6') }}</a>
    </ul> --}}

    @include('web.client.share.visitor')
    
</div>
