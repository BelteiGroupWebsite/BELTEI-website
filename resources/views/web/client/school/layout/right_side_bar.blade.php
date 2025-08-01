<div class="sidebar max-width-250 w-100 shadow-sm p-0 m-0 content-translate-font px-1">

    <ul class="list-group translate ul-none-style" style="background-color: #21ade3;">
        <h6 class="text-uppercase text-center py-2 bg-header-color gold title-translate-font">
            {{ __('school/app.translate') }}</h6>

        <li class="">
            <div class="d-flex justify-content-between">
                <a href="{{ route('set-locale', 'kh') }}" class="cursor-pointer">
                    <img class="rounded" src="{{ asset('asset/img/school/language/khmer.png') }}" alt="">
                    <p class="text-center Battambang-Regular">
                        ខ្មែរ
                        @if (str_replace('_', '-', app()->getLocale()) == 'kh')
                            <i class="fa fa-check"></i>
                        @endif
                    </p>
                </a>
                <a href="{{ route('set-locale', 'en') }}" class="cursor-pointer">
                    <img class="rounded" src="{{ asset('asset/img/school/language/english.png') }}" alt="">
                    <p class="text-center Battambang-Regular">
                        English
                        @if (str_replace('_', '-', app()->getLocale()) == 'en')
                            <i class="fa fa-check"></i>
                        @endif
                    </p>
                </a>

                <a href="{{ route('set-locale', 'ch') }}" class="cursor-pointer">
                    <img class="rounded" src="{{ asset('asset/img/school/language/chinese.png') }}" alt="">
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
                <img class="w-100" src="{{ asset('asset/img/university/campus/belgroupkh.png') }}" alt="">
            </a>
        </div>
    </ul>
    <ul class="text-capitalize f14 ul-none-style w-100 p-0 m-0">
        <a class="w-100" href="/">
            <img class="w-100" src="{{ asset('asset/img/school/app/date_new_term.jpg') }}" alt="">
        </a>
    </ul>
    {{-- <ul class="text-capitalize f14 ul-none-style w-100 p-0 m-0">
        <a class="w-100" href="/">
            <img class="w-100" src="https://www.beltei.edu.kh/khm/images/homepics/hotnew_ay_2023.png" alt="">
        </a>
    </ul> --}}

    <ul class="text-capitalize f14 ul-none-style w-100 p-0 m-0 unhover-padding">
        <a href="{{ route('school.') }}">
            <h6 class="text-uppercase text-center py-2 bg-header-color gold ">{{ __('school/app.graduateStudent') }}
            </h6>
        </a>
        {{-- <h6 class="text-uppercase text-center py-2 gold list-group-item">សិស្សបញ្ចប់ការសិក្សា</h6> --}}
        <a class="list-group-item text-center gold font-bold">{{ __('school/app.generalProgram') }}</a>
        {{-- <a class="list-group-item" href="{{ route('school.certificate' , ['program'=>1 , 'grade' => 12]) }}" class="list-group-item text-danger font-bold text-center"> --}}
        <a class="list-group-item" href="{{ route('school.certificate', 1) }}"
            class="list-group-item text-danger font-bold text-center">
            <div class="d-flex align-items-center justify-content-between Red-color-border rounded "
                style="border:outset 3px ;">
                <img class="max-width-50 shadow-sm border-end Red-color-border"
                    src="{{ asset('asset/img/school/app/1.jpg') }}" alt="">
                <p class="text-white text-center Khmer-OS-Koulen px-2 w-100">
                    {{ __('school/app.highSchoolDiploma') }}
                </p>
            </div>
        </a>
        <a class="list-group-item" href="{{ route('school.certificate', 2) }}"
            class="list-group-item text-white font-bold text-center">
            <div class="d-flex align-items-center justify-content-between Red-color-border rounded "
                style="border:outset 3px ;">
                <img class="max-width-50 shadow-sm border-end Red-color-border"
                    src="{{ asset('asset/img/school/app/2.jpg') }}" alt="">
                <p class="text-white text-center Khmer-OS-Koulen px-2 w-100">
                    {{ __('school/app.juniorHighSchool') }}
                </p>
            </div>
        </a>
        <a class="list-group-item" href="{{ route('school.certificate', 3) }}"
            class="list-group-item text-white font-bold text-center">
            <div class="d-flex align-items-center justify-content-between Red-color-border rounded "
                style="border:outset 3px ;">
                <img class="max-width-50 shadow-sm border-end Red-color-border"
                    src="{{ asset('asset/img/school/app/3.jpg') }}" alt="">
                <p class="text-white text-center Khmer-OS-Koulen px-2 w-100">
                    {{ __('school/app.primaryCertificate') }}
                </p>
            </div>
        </a>

        <a class="list-group-item text-center gold font-bold">{{ __('school/app.ESLProgram') }}</a>
        <a class="list-group-item" href="{{ route('school.certificate', 4) }}"
            class="list-group-item text-white font-bold text-center">
            <div class="d-flex align-items-center justify-content-between Red-color-border rounded "
                style="border:outset 3px ;">
                <img class="max-width-50 shadow-sm border-end Red-color-border"
                    src="{{ asset('asset/img/school/app/4.jpg') }}" alt="">
                <p class="text-white text-center Khmer-OS-Koulen px-2 w-100">
                    {{ __('school/app.ESLDiploma') }}
                </p>
            </div>
        </a>
        <a class="list-group-item" href="{{ route('school.certificate', 5) }}"
            class="list-group-item text-white font-bold text-center">
            <div class="d-flex align-items-center justify-content-between Red-color-border rounded "
                style="border:outset 3px ;">
                <img class="max-width-50 shadow-sm border-end Red-color-border"
                    src="{{ asset('asset/img/school/app/5.jpg') }}" alt="">
                <p class="text-white text-center Khmer-OS-Koulen px-2 w-100">
                    {{ __('school/app.ESLlevel6') }}
                </p>
            </div>
        </a>
        <a class="list-group-item" href="{{ route('school.certificate', 6) }}"
            class="list-group-item text-white font-bold text-center">
            <div class="d-flex align-items-center justify-content-between Red-color-border rounded "
                style="border:outset 3px ;">
                <img class="max-width-50 shadow-sm border-end Red-color-border"
                    src="{{ asset('asset/img/school/app/6.jpg') }}" alt="">
                <p class="text-white text-center Khmer-OS-Koulen px-2 w-100">
                    Preschool 6
                </p>
            </div>
        </a>

        <a class="list-group-item text-center gold font-bold">{{ __('school/app.IMA') }}</a>
        <a class="list-group-item" href="{{ route('school.certificate', 7) }}"
            class="list-group-item text-white font-bold text-center">
            <div class="d-flex align-items-center justify-content-between Red-color-border rounded "
                style="border:outset 3px ;">
                <img class="max-width-50 shadow-sm border-end Red-color-border"
                    src="{{ asset('asset/img/school/app/7.jpg') }}" alt="">
                <p class="text-white text-center Khmer-OS-Koulen px-2 w-100">
                    {{ __('school/app.IMA11') }}
                </p>
            </div>
        </a>
        <a class="list-group-item" href="{{ route('school.certificate', 8) }}"
            class="list-group-item text-white font-bold text-center">
            <div class="d-flex align-items-center justify-content-between Red-color-border rounded "
                style="border:outset 3px ;">
                <img class="max-width-50 shadow-sm border-end Red-color-border"
                    src="{{ asset('asset/img/school/app/8.jpg') }}" alt="">
                <p class="text-white text-center Khmer-OS-Koulen px-2 w-100">
                    {{ __('school/app.IMA6') }}
                </p>
            </div>
        </a>
    </ul>



    <ul class="text-capitalize list-group f14 unhover-padding">
        <a href="{{ route('school.') }}">
            <h6 class="text-uppercase text-center py-2 bg-header-color gold ">{{ __('school/app.english-speaking') }}
            </h6>
        </a>
        <a href="{{ route('school.public-speaking', ['grade' => 3]) }}"
            class="list-group-item text-white text-center">
            {{ __('school/app.grade') }} {{ __('school/app.n12') }}
            <div class="d-flex justify-content-center ">
                <div
                    class="w-90 height-100 rounded position-relative d-flex justify-content-center align-items-center">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute"
                        width="20%" alt="">
                    <img class="w-100 h-100 shadow" src="{{ asset('asset/img/school/app/english-speaking/12.png') }}"
                        alt="">
                </div>
            </div>
        </a>
        <a href="{{ route('school.public-speaking', ['grade' => 6]) }}"
            class="list-group-item text-white text-center">
            {{ __('school/app.grade') }} {{ __('school/app.n9') }}
            <div class="d-flex justify-content-center ">
                <div
                    class="w-90 height-100 rounded position-relative d-flex justify-content-center align-items-center">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute"
                        width="20%" alt="">
                    <img class="w-100 h-100 shadow" src="{{ asset('asset/img/school/app/english-speaking/9.png') }}"
                        alt="">
                </div>
            </div>
        </a>
        <a href="{{ route('school.public-speaking', ['grade' => 7]) }}"
            class="list-group-item text-white text-center">
            {{ __('school/app.grade') }} {{ __('school/app.n6') }}
            <div class="d-flex justify-content-center ">
                <div
                    class="w-90 height-100 rounded position-relative d-flex justify-content-center align-items-center">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute"
                        width="20%" alt="">
                    <img class="w-100 h-100 shadow" src="{{ asset('asset/img/school/app/english-speaking/6.png') }}"
                        alt="">
                </div>
            </div>
        </a>
        <a href="{{ route('school.public-speaking', ['grade' => 8]) }}"
            class="list-group-item text-white text-center">
            {{ __('school/app.grade') }} {{ __('school/app.n3') }}
            <div class="d-flex justify-content-center ">
                <div
                    class="w-90 height-100 rounded position-relative d-flex justify-content-center align-items-center">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute"
                        width="20%" alt="">
                    <img class="w-100 h-100 shadow" src="{{ asset('asset/img/school/app/english-speaking/3.png') }}"
                        alt="">
                </div>
            </div>
        </a>
    </ul>




    <ul class="text-capitalize list-group f14 unhover-padding">
        <a href="{{ route('school.') }}">
            <h6 class="text-uppercase text-center py-2 bg-header-color gold ">{{ __('school/app.I') }}</h6>
        </a>
        <a href="{{ route('school.english-debate-12') }}" class="list-group-item text-white text-center">
            {{ __('school/app.grade') }} {{ __('school/app.n11') }}-{{ __('school/app.n12') }}
            <div class="d-flex justify-content-center ">
                <div
                    class="w-90 height-100 rounded position-relative d-flex justify-content-center align-items-center">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute"
                        width="20%" alt="">
                    <img class="w-100 h-100 shadow" src="{{ asset('asset/img/school/app/debate-english/12.png') }}"
                        alt="">
                </div>
            </div>
        </a>
        <a href="{{ route('school.english-debate-9') }}" class="list-group-item text-white text-center">
            {{ __('school/app.grade') }} {{ __('school/app.n9') }}-{{ __('school/app.n10') }}
            <div class="d-flex justify-content-center ">
                <div
                    class="w-90 height-100 rounded position-relative d-flex justify-content-center align-items-center">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute"
                        width="20%" alt="">
                    <img class="w-100 h-100 shadow" src="{{ asset('asset/img/school/app/debate-english/9.png') }}"
                        alt="">
                </div>
            </div>
        </a>
    </ul>

    <ul class="text-capitalize list-group f14 unhover-padding">
        <a href="{{ route('school.') }}">
            <h6 class="text-uppercase text-center py-2 bg-header-color gold ">{{ __('school/app.english-reading') }}
            </h6>
        </a>
        <a href="{{ route('school.competition', ['grade' => 9]) }}" class="list-group-item text-white text-center">
            {{ __('school/app.level') }} {{ __('school/app.n4') }}
            <div class="d-flex justify-content-center ">
                <div
                    class="w-90 height-100 rounded position-relative d-flex justify-content-center align-items-center">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute"
                        width="20%" alt="">
                    <img class="w-100 h-100 shadow" src="{{ asset('asset/img/school/app/english-reading/4.png') }}"
                        alt="">
                </div>
            </div>
        </a>
        <a href="{{ route('school.competition', ['grade' => 10]) }}" class="list-group-item text-white text-center">
            {{ __('school/app.level') }} {{ __('school/app.n2') }}
            <div class="d-flex justify-content-center ">
                <div
                    class="w-90 height-100 rounded position-relative d-flex justify-content-center align-items-center">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute"
                        width="20%" alt="">
                    <img class="w-100 h-100 shadow" src="{{ asset('asset/img/school/app/english-reading/2.png') }}"
                        alt="">
                </div>
            </div>
        </a>
        <a href="{{ route('school.competition', ['grade' => 11]) }}" class="list-group-item text-white text-center">
            {{ __('school/app.npre-6') }}
            <div class="d-flex justify-content-center ">
                <div
                    class="w-90 height-100 rounded position-relative d-flex justify-content-center align-items-center">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute"
                        width="20%" alt="">
                    <img class="w-100 h-100 shadow"
                        src="{{ asset('asset/img/school/app/english-reading/pre-6.png') }}" alt="">
                </div>
            </div>
        </a>
    </ul>



    @include('web.client.share.visitor')


</div>
