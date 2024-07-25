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
            <div class="d-flex justify-content-center ">
                <div class="w-100 rounded position-relative d-flex justify-content-center align-items-center">
                    <img class="w-100 h-100 shadow"
                        src="{{ asset('asset/img/construction/sidebar/photo_2024-06-28_10-42-18.jpg') }}" alt="">
                    </div>
                </div>
            </a>
            <a href="{{ route('school.english-speaking-9') }}" class="list-group-item text-white text-center">
                <div class="d-flex justify-content-center ">
                    <div class="w-100 rounded position-relative d-flex justify-content-center align-items-center">
                        <img class="w-100 h-100 shadow"
                        src="{{ asset('asset/img/construction/sidebar/photo_2024-06-28_10-42-18.jpg') }}" alt="">
                </div>
            </div>
        </a>
    </ul>

    @include('web.client.share.visitor')
    
</div>
