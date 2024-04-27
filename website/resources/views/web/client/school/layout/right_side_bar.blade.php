<div class="sidebar min-width-250 max-width-300 position-sticky shadow-sm p-0 m-0 px-1 content-translate-font" >

    <ul class="list-group translate ul-none-style" style="background-color: #21ade3;">
        <h6 class="text-uppercase text-center py-2 bg-header-color gold title-translate-font">{{ __('school/app.translate') }}</h6>

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


    {{-- <ul class="text-capitalize f14 ul-none-style w-100 p-0 m-0">
        <a class="w-100" href="/">
            <h6 class="text-uppercase text-center py-2 bg-header-color gold w-100">Return to BELTEI GROUP</h6>
        </a>
    </ul> --}}
    <ul class="text-capitalize f14 ul-none-style w-100 p-0 m-0">
        <a class="w-100" href="/">
            <img class="w-100" src="https://www.beltei.edu.kh/khm/images/beltei_pic/belgroupkh.png" alt="">
        </a>
    </ul>
    <ul class="text-capitalize f14 ul-none-style w-100 p-0 m-0">
        <a class="w-100" href="/">
            <img class="w-100" src="https://www.beltei.edu.kh/khm/images/homepics/hotnew_ay_2023.png" alt="">
        </a>
    </ul>

    <ul class="text-capitalize f14 ul-none-style w-100 p-0 m-0 unhover-padding" >
        <a href="{{ route('school.') }}">
            <h6 class="text-uppercase text-center py-2 bg-header-color gold ">{{ __('school/app.graduateStudent') }}</h6>
        </a>
        {{-- <h6 class="text-uppercase text-center py-2 gold list-group-item">សិស្សបញ្ចប់ការសិក្សា</h6> --}}
        <a class="list-group-item text-center gold font-bold">{{ __('school/app.generalProgram') }}</a>
        <a class="d-flex align-items-center justify-content-center px-3 py-2 border border-2 gap-1" href="{{ route('school.certificate' , ['program'=>1 , 'grade' => 12]) }}" class="list-group-item text-white text-center">
            <img class="max-width-50 rounded shadow-sm" src="https://beltei.edu.kh/khm/images/specialevents/graduation_g9_2023_g3/14.jpg" alt="">
            <p class="text-white text-center">
                
                {{ __('school/app.highSchoolDiploma') }}
            </p>
        </a>
        <a class="d-flex align-items-center justify-content-center px-3 py-2 border border-2 gap-1" href="{{ route('school.certificate' , ['program'=>1 , 'grade' => 9]) }}" class="list-group-item text-white text-center">
            <img class="max-width-50 rounded shadow-sm" src="https://beltei.edu.kh/khm/images/specialevents/graduation_g9_2023_g3/13.jpg" alt="">
            <p class="text-white text-center">
                {{ __('school/app.juniorHighSchool') }}
                
            </p>
        </a>
        <a class="d-flex align-items-center justify-content-center px-3 py-2 border border-2 gap-1" href="{{ route('school.certificate' , ['program'=>1 , 'grade' => 6]) }}" class="list-group-item text-white text-center">
            <img class="max-width-50 rounded shadow-sm" src="https://beltei.edu.kh/khm/images/specialevents/graduation_g9_2023_g3/14.jpg" alt="">
            <p class="text-white text-center">
                {{ __('school/app.primaryCertificate') }}
            </p>
        </a>
        {{-- <a href="{{ route('school.certificate' , ['program'=>1 , 'grade' => 9]) }}" class="list-group-item text-white text-center">សញ្ញាបត្រមធ្យមសិក្សាបឋមភូមិប៊ែលធី</a>
        <a href="{{ route('school.certificate' , ['program'=>1 , 'grade' => 6]) }}" class="list-group-item text-white text-center">សញ្ញាបត្រមធ្យមសិក្សាបឋមសិក្សាប៊ែលធី</a> --}}
        <a class="list-group-item text-center gold font-bold">{{ __('school/app.ESLProgram') }}</a>
        <a href="{{ route('school.certificate' , ['program'=>2 , 'grade' => 12]) }}" class="list-group-item text-white text-center">{{ __('school/app.ESLDiploma') }}</a>
        <a href="{{ route('school.certificate' , ['program'=>2 , 'grade' => 9]) }}" class="list-group-item text-white text-center">{{ __('school/app.ESLlevel6') }}</a>
        <a href="{{ route('school.certificate' , ['program'=>2 , 'grade' => 6]) }}" class="list-group-item text-white text-center">PRESCHOOL 6</a>
    </ul>



    <ul class="text-capitalize list-group f14 unhover-padding">
        <a href="{{ route('school.') }}">
            <h6 class="text-uppercase text-center py-2 bg-header-color gold ">{{ __('school/app.english-speaking') }}</h6>
        </a>
        <a href="{{ route('school.english-speaking-12') }}" class="list-group-item text-white text-center">
            {{ __('school/app.grade') }} {{ __('school/app.n12') }}
             <div class="d-flex justify-content-center ">
                <div style="background-color: gainsboro;" class="w-100 height-100 rounded">
                    
                </div>
             </div>
        </a>
        <a href="{{ route('school.english-speaking-9') }}" class="list-group-item text-white text-center">
            {{ __('school/app.grade') }} {{ __('school/app.n9') }}
             <div class="d-flex justify-content-center ">
                <div style="background-color: gainsboro;" class="w-100 height-100 rounded">
                    
                </div>
             </div>
        </a>
        <a href="{{ route('school.english-speaking-6') }}" class="list-group-item text-white text-center">
            {{ __('school/app.grade') }} {{ __('school/app.n6') }}
             <div class="d-flex justify-content-center ">
                <div style="background-color: gainsboro;" class="w-100 height-100 rounded">
                    
                </div>
             </div>
        </a>
        <a href="{{ route('school.english-speaking-3') }}" class="list-group-item text-white text-center">
            {{ __('school/app.grade') }} {{ __('school/app.n3') }}
             <div class="d-flex justify-content-center ">
                <div style="background-color: gainsboro;" class="w-100 height-100 rounded">
                    
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
                <div style="background-color: gainsboro;" class="w-100 height-100 rounded">
                </div>
             </div>
        </a>
        <a href="{{ route('school.english-debate-9') }}" class="list-group-item text-white text-center">
            {{ __('school/app.grade') }} {{ __('school/app.n9') }}-{{ __('school/app.n10') }}
             <div class="d-flex justify-content-center ">
                <div style="background-color: gainsboro;" class="w-100 height-100 rounded">
                </div>
             </div>
        </a>
    </ul>
    
</div>
