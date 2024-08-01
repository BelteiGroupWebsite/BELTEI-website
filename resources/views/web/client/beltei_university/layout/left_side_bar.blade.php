{{-- <div class="sidebar min-width-250 max-width-300 shadow-sm p-0 m-0 content-translate-font px-1"> --}}
<div class="sidebar max-width-250 w-100 shadow-sm p-0 m-0 content-translate-font px-1">
    <ul class="text-capitalize list-group f14">
        <a href="{{ route('beltei_university.') }}">
            <h6 class="text-uppercase text-center py-2 bg-header-color gold ">{{ __('beltei_university/app.A') }}</h6>
        </a>
        <a href="{{ route('beltei_university.about.welcome') }}" class="list-group-item text-white">{{ __('beltei_university/app.A1') }}</a>
        <a href="{{ route('beltei_university.about.purpose') }}" class="list-group-item text-white">{{ __('beltei_university/app.A2') }}</a>
        <a href="{{ route('beltei_university.about.vision') }}" class="list-group-item text-white">{{ __('beltei_university/app.A3') }}</a>
        <a href="{{ route('beltei_university.about.belteigroup') }}" class="list-group-item text-white">{{ __('school/app.A7') }}</a>
        <a href="{{ route('beltei_university.about.history') }}" class="list-group-item text-white">{{ __('beltei_university/app.A4') }}</a>
        <a href="{{ route('beltei_university.about.sturcture') }}" class="list-group-item text-white">{{ __('beltei_university/app.A5') }}</a>
        <a href="{{ route('beltei_university.about.whybeltei') }}" class="list-group-item text-white">{{ __('beltei_university/app.A6') }}</a>
    </ul>
    <ul class="text-capitalize list-group f14">
        <a href="{{ route('beltei_university.') }}">
            <h6 class="text-uppercase text-center py-2 bg-header-color gold ">{{ __('beltei_university/app.B') }}</h6>
        </a>
        <a href="{{ route('beltei_university.mainprogram.prebachelor') }}" class="list-group-item text-white">{{ __('beltei_university/app.B1') }}</a>
        <a href="{{ route('beltei_university.mainprogram.degree') }}?degree=associate&nation={{ app()->getLocale() }}" class="list-group-item text-white">{{ __('beltei_university/app.B2') }}</a>
        <a href="{{ route('beltei_university.mainprogram.degree') }}?degree=bachelor&nation={{ app()->getLocale() }}" class="list-group-item text-white">{{ __('beltei_university/app.B3') }}</a>
        <a href="{{ route('beltei_university.mainprogram.degree') }}?degree=master&nation={{ app()->getLocale() }}" class="list-group-item text-white">{{ __('beltei_university/app.B4') }}</a>
        <a href="{{ route('beltei_university.mainprogram.degree') }}?degree=doctor&nation={{ app()->getLocale() }}" class="list-group-item text-white">{{ __('beltei_university/app.B5') }}</a>
    </ul>
    <ul style="background-color: #21ade3" class="text-capitalize list-group f14 ">
        <a href="{{ route('beltei_university.') }}">
            <h6 class="text-uppercase text-center py-2 bg-header-color gold ">{{ __('beltei_university/app.C') }}</h6>
        </a>

        <a href="{{ route('beltei_university.faculty-detail') }}?id=1" style="height: 40px;  border-radius: 16px ; text-shadow: 2px 2px 2px #21ade3;" class="list-group-item title-translate-font py-4 BBA-color-bg border border-2 border-bottom-0 Gold-color-border text-white d-flex align-items-center">{{ __('beltei_university/app.C1') }}</a>
        <a href="{{ route('beltei_university.faculty-detail') }}?id=2" style="height: 40px;  border-radius: 16px ; text-shadow: 2px 2px 2px #21ade3" class="list-group-item title-translate-font py-4 BFB-color-bg border border-2 border-bottom-0 Gold-color-border text-white d-flex align-items-center">{{ __('beltei_university/app.C2') }}</a>
        <a href="{{ route('beltei_university.faculty-detail') }}?id=3" style="height: 40px;  border-radius: 16px ; text-shadow: 2px 2px 2px #21ade3" class="list-group-item title-translate-font py-4 BEco-color-bg border border-2 border-bottom-0 Gold-color-border text-white d-flex align-items-center">{{ __('beltei_university/app.C3') }}</a>
        <a href="{{ route('beltei_university.faculty-detail') }}?id=4" style="height: 40px;  border-radius: 16px ; text-shadow: 2px 2px 2px #21ade3" class="list-group-item title-translate-font py-4 BLaw-color-bg border border-2 border-bottom-0 Gold-color-border text-white d-flex align-items-center">{{ __('beltei_university/app.C4') }}</a>
        <a href="{{ route('beltei_university.faculty-detail') }}?id=5" style="height: 40px;  border-radius: 16px ; font-size: 12px ; text-shadow: 2px 2px 2px #21ade3" class="list-group-item title-translate-font py-4 BEdu-color-bg border border-2 border-bottom-0 Gold-color-border text-white d-flex align-items-center">{{ __('beltei_university/app.C5') }}</a>
        <a href="{{ route('beltei_university.faculty-detail') }}?id=6" style="height: 40px;  border-radius: 16px ; font-size: 12px ;text-shadow: 2px 2px 2px #21ade3" class="list-group-item title-translate-font py-4 BTh-color-bg border border-2 border-bottom-0 Gold-color-border text-white d-flex align-items-center">{{ __('beltei_university/app.C6') }}</a>
        <a href="{{ route('beltei_university.faculty-detail') }}?id=7" style="height: 40px;  border-radius: 16px ; font-size: 12px ; text-shadow: 2px 2px 2px #21ade3" class="list-group-item title-translate-font py-4 BIT-color-bg border border-2 border-bottom-0 Gold-color-border text-white d-flex align-items-center">{{ __('beltei_university/app.C7') }}</a>
        <a href="{{ route('beltei_university.faculty-detail') }}?id=8" style="height: 40px;  border-radius: 16px ; font-size: 10px ; text-shadow: 1px 1px 1px #21ade3" class="list-group-item title-translate-font py-4 BDT-color-bg border border-2 border-bottom-0 Gold-color-border text-white d-flex align-items-center">{{ __('beltei_university/app.C8') }}</a>
        <a href="{{ route('beltei_university.faculty-detail') }}?id=9" style="height: 40px;  border-radius: 16px ; text-shadow: 2px 2px 2px #21ade3" class="list-group-item title-translate-font py-4 BEng-color-bg border border-2 border-bottom-0 Gold-color-border text-white d-flex align-items-center">{{ __('beltei_university/app.C9') }}</a>
        <a href="{{ route('beltei_university.faculty-detail') }}?id=10" style="height: 40px;  border-radius: 16px ; text-shadow: 2px 2px 2px #21ade3" class="list-group-item title-translate-font py-4 BArch-color-bg border border-2 border-bottom-0 Gold-color-border text-white d-flex align-items-center">{{ __('beltei_university/app.C10') }}</a>
        <a href="{{ route('beltei_university.faculty-detail') }}?id=11" style="height: 40px;  border-radius: 16px ; text-shadow: 2px 2px 2px #21ade3" class="list-group-item title-translate-font py-4 BIR-color-bg border border-2 border-bottom-0 Gold-color-border text-white d-flex align-items-center">{{ __('beltei_university/app.C11') }}</a>
        <a href="{{ route('beltei_university.faculty-detail') }}?id=12" style="height: 40px;  border-radius: 16px ; text-shadow: 2px 2px 2px #21ade3" class="list-group-item title-translate-font py-4 BCA-color-bg border border-2 border-bottom-0 Gold-color-border text-white d-flex align-items-center">{{ __('beltei_university/app.C12') }}</a>

    </ul>

    <ul style="background-color: #21ade3" class="text-capitalize list-group f14 ">
        <a href="{{ route('beltei_university.') }}">
            <h6 class="text-uppercase text-center py-2 bg-header-color gold ">{!! __('beltei_university/app.D') !!}</h6>
        </a>
        <a href="{{ route('beltei_university.recognition.') }}" style="height: 80px; border:inset 3px ; border-radius: 18px" class="pe-2 text-white Red-color-border d-flex align-items-center">
            <img class="width-80" src="{{ asset('asset/img/university/app/Untitled-1.png') }}" alt="">
            <p>
                {{ __('beltei_university/app.D1') }}
            </p>
        </a>
        <a href="{{ route('beltei_university.mou.national') }}" style="height: 80px; border:inset 3px ; border-radius: 18px"  class="pe-2 text-white Red-color-border d-flex align-items-center">
            <img class="width-80" src="{{ asset('asset/img/university/app/Untitled-2.png') }}" alt="">
            <p>
                {{ __('beltei_university/app.D2') }}
            </p>
        </a>
        <a href="{{ route('beltei_university.mou.international') }}" style="height: 80px; border:inset 3px ; border-radius: 18px"  class="pe-2 text-white Red-color-border d-flex align-items-center">
            <img class="width-80" src="{{ asset('asset/img/university/app/Untitled-3.png') }}" alt="">
            <p>
                {{ __('beltei_university/app.D3') }}
            </p>
        </a>

    </ul>

    <ul class="text-capitalize list-group f14">
        <a href="{{ route('beltei_university.') }}">
            <h6 class="text-uppercase text-center py-2 bg-header-color gold ">{{ __('beltei_university/app.E') }}</h6>
        </a>
        <a href="{{ route('beltei_university.construction') }}" class="list-group-item text-white">{{ __('beltei_university/app.E1') }}</a>
        <a href="{{ route('beltei_university.construction') }}" class="list-group-item text-white">{{ __('beltei_university/app.E2') }}</a>
        <a href="{{ route('beltei_university.construction') }}" class="list-group-item text-white">{{ __('beltei_university/app.E3') }}</a>
        <a href="{{ route('beltei_university.construction') }}" class="list-group-item text-white">{{ __('beltei_university/app.E4') }}</a>
        <a href="{{ route('beltei_university.construction') }}" class="list-group-item text-white">{{ __('beltei_university/app.E5') }}</a>
        <a href="{{ route('beltei_university.construction') }}" class="list-group-item text-white">{{ __('beltei_university/app.E6') }}</a>
    </ul>

    <ul class="text-capitalize list-group f14">
        <a href="{{ route('beltei_university.') }}">
            <h6 class="text-uppercase text-center py-2 bg-header-color gold ">{{ __('beltei_university/app.F') }}</h6>
        </a>
        <a href="{{ route('beltei_university.construction') }}" class="list-group-item text-white">{{ __('beltei_university/app.F1') }}</a>
        <a href="{{ route('beltei_university.construction') }}" class="list-group-item text-white">{{ __('beltei_university/app.F2') }}</a>
        <a href="{{ route('beltei_university.construction') }}" class="list-group-item text-white">{{ __('beltei_university/app.F3') }}</a>
        <a href="{{ route('beltei_university.construction') }}" class="list-group-item text-white">{{ __('beltei_university/app.F4') }}</a>
        <a href="{{ route('beltei_university.construction') }}" class="list-group-item text-white">{{ __('beltei_university/app.F5') }}</a>
    </ul>
    <ul class="text-capitalize list-group f14">
        <a href="{{ route('beltei_university.') }}">
            <h6 class="text-uppercase text-center py-2 bg-header-color gold ">{{ __('beltei_university/app.G') }}</h6>
        </a>
        <a href="{{ route('beltei_university.construction') }}" class="list-group-item text-white">{{ __('beltei_university/app.G1') }}</a>
        <a href="{{ route('beltei_university.construction') }}" class="list-group-item text-white">{{ __('beltei_university/app.G2') }}</a>
        <a href="{{ route('beltei_university.construction') }}" class="list-group-item text-white">{{ __('beltei_university/app.G3') }}</a>
        <a href="{{ route('beltei_university.construction') }}" class="list-group-item text-white">{{ __('beltei_university/app.G4') }}</a>
        <a href="{{ route('beltei_university.construction') }}" class="list-group-item text-white">{{ __('beltei_university/app.G5') }}</a>
        <a href="{{ route('beltei_university.construction') }}" class="list-group-item text-white">{{ __('beltei_university/app.G6') }}</a>
    </ul>
    <ul class="text-capitalize list-group f14">
        <a href="{{ route('beltei_university.') }}">
            <h6 class="text-uppercase text-center py-2 bg-header-color gold ">{{ __('beltei_university/app.H') }}</h6>
        </a>
        <a href="{{ route('beltei_university.construction') }}" class="list-group-item text-white">{{ __('beltei_university/app.H1') }}</a>
        <a href="{{ route('beltei_university.construction') }}" class="list-group-item text-white">{{ __('beltei_university/app.H2') }}</a>
        <a href="{{ route('beltei_university.construction') }}" class="list-group-item text-white">{{ __('beltei_university/app.H3') }}</a>
        <a href="{{ route('beltei_university.construction') }}" class="list-group-item text-white">{{ __('beltei_university/app.H4') }}</a>
        <a href="{{ route('beltei_university.construction') }}" class="list-group-item text-white">{{ __('beltei_university/app.H5') }}</a>
    </ul>
    <ul class="text-capitalize f14 ul-none-style w-100 p-0 m-0 unhover-padding" >
        <a href="{{ route('beltei_university.') }}">
            <h6 class="text-uppercase text-center py-2 bg-header-color gold ">{{ __('beltei_university/app.I') }}</h6>
        </a>
        <a class="list-group-item" href="{{ route('beltei_university.graduated.doctor') }}" class="list-group-item text-white font-bold text-center">
            <div class="d-flex align-items-center justify-content-between Red-color-border rounded " style="border:outset 3px ;">
                <img class="max-width-50 px-2 shadow-sm border-end Red-color-border" src="{{ asset('asset/img/biu/app/phd.png') }}" alt="">
                <p class="text-white text-center Khmer-OS-Koulen px-2 w-100">
                    {{ __('beltei_university/app.I1') }}
                </p>
            </div>
        </a>
        <a class="list-group-item" href="{{ route('beltei_university.certificate' , ['degree' => 2 ]) }}" class="list-group-item text-white font-bold text-center">
            <div class="d-flex align-items-center justify-content-between Red-color-border rounded " style="border:outset 3px ;">
                <img class="max-width-50 px-2 shadow-sm border-end Red-color-border" src="{{ asset('asset/img/biu/app/master.png') }}" alt="">
                <p class="text-white text-center Khmer-OS-Koulen px-2 w-100">
                    {{ __('beltei_university/app.I2') }}
                </p>
            </div>
        </a>
        <a class="list-group-item" href="{{ route('beltei_university.certificate' , ['degree' => 3 ]) }}" class="list-group-item text-white font-bold text-center">
            <div class="d-flex align-items-center justify-content-between Red-color-border rounded " style="border:outset 3px ;">
                <img class="max-width-50 px-2 shadow-sm border-end Red-color-border" src="{{ asset('asset/img/biu/app/bachelor.png') }}" alt="">
                <p class="text-white text-center Khmer-OS-Koulen px-2 w-100">
                    {{ __('beltei_university/app.I3') }}
                </p>
            </div>
        </a>
        <a class="list-group-item" href="{{ route('beltei_university.certificate' , ['degree' => 4 ]) }}" class="list-group-item text-white font-bold text-center">
            <div class="d-flex align-items-center justify-content-between Red-color-border rounded " style="border:outset 3px ;">
                <img class="max-width-50 px-2 shadow-sm border-end Red-color-border" src="{{ asset('asset/img/biu/app/assoiate.png') }}" alt="">
                <p class="text-white text-center Khmer-OS-Koulen px-2 w-100">
                    {{ __('beltei_university/app.I4') }}
                </p>
            </div>
        </a>
        
    </ul>
    {{-- <ul class="text-capitalize list-group f14">
        <a href="{{ route('beltei_university.') }}">
            <h6 class="text-uppercase text-center py-2 bg-header-color gold ">{{ __('beltei_university/app.I') }}</h6>
        </a>

        <a href="{{ route('beltei_university.graduated.doctor') }}" class="list-group-item text-white">{{ __('beltei_university/app.I1') }}
            <div class="d-flex align-items-center justify-content-center gap-3 Red-color-border rounded" style="border:inset 3px ; border-radius: 18px">
                <img class="max-width-50 shadow-sm" src="https://beltei.edu.kh/khm/images/specialevents/graduation_g9_2023_g3/13.jpg" alt="">
                <p class="text-danger font-bold text-center Khmer-OS-Koulen">
                    {{ __('beltei_university/app.I1') }}
                </p>
            </div>
        </a>
        <a href="{{ route('beltei_university.certificate' , ['degree' => 2 ]) }}" class="list-group-item text-white">{{ __('beltei_university/app.I2') }}</a>
        <a href="{{ route('beltei_university.certificate' , ['degree' => 3 ]) }}" class="list-group-item text-white">{{ __('beltei_university/app.I3') }}</a>
        <a href="{{ route('beltei_university.certificate' , ['degree' => 4 ]) }}" class="list-group-item text-white">{{ __('beltei_university/app.I4') }}</a>

    </ul> --}}
    <ul class="text-capitalize list-group f14">
        <a href="{{ route('beltei_university.') }}">
            <h6 class="text-uppercase text-center py-2 bg-header-color gold ">{{ __('beltei_university/app.J') }}</h6>
        </a>
        <a href="{{ route('beltei_university.construction') }}" class="list-group-item text-white">{{ __('beltei_university/app.J1') }}</a>
        <a href="{{ route('beltei_university.construction') }}" class="list-group-item text-white">{{ __('beltei_university/app.J2') }}</a>
    </ul>
    <ul class="text-capitalize list-group f14">
        <a href="{{ route('beltei_university.') }}">
            <h6 class="text-uppercase text-center py-2 bg-header-color gold ">{{ __('beltei_university/app.K') }}</h6>
        </a>
        <a href="{{ route('beltei_university.construction') }}" class="list-group-item text-white">{{ __('beltei_university/app.K1') }}</a>
        <a href="{{ route('beltei_university.construction') }}" class="list-group-item text-white">{{ __('beltei_university/app.K2') }}</a>
        <a href="{{ route('beltei_university.construction') }}" class="list-group-item text-white">{{ __('beltei_university/app.K3') }}</a>

    </ul>

    <ul class="text-capitalize list-group f14 unhover-padding">
        <a href="{{ route('beltei_university.') }}">
            <h6 class="text-uppercase text-center py-2 bg-header-color gold ">{{ __('beltei_university/app.L') }}</h6>
        </a>
        <a href="{{ route('beltei_university.') }}">
            <h6 style="height: 50px; border:inset 3px ; border-radius: 18px" class="BBA-color-bg pe-2 text-white Gold-color-border d-flex justify-content-center align-items-center">
            {{ __('beltei_university/app.L1') }}</h6>
        </a>
        <a href="{{ route('beltei_university.khmer_speaking_year1') }}" style="font-weight: bold;" class="p-3 text-white text-center Blue-color text-uppercase">
             {{ __('school/app.grade') }} {{ __('beltei_university/app.L2') }}
             <div class="d-flex justify-content-center ">
                <div style="background-color: gainsboro;" class="w-100 height-100 rounded d-flex justify-content-center align-items-center position-relative">
                    <img class="w-100 h-100 shadow" src="{{ asset('asset/img/biu/speaking/speaking_kyear1.png') }}" alt="">
                    <img class=" shadow position-absolute" width="50px" src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" alt="">

                </div>
             </div>
        </a>
        <a href="{{ route('beltei_university.khmer_speaking_year2') }}" style="font-weight: bold;" class="p-3 text-white text-center Blue-color text-uppercase">
            {{ __('school/app.grade') }} {{ __('beltei_university/app.L3') }}
             <div class="d-flex justify-content-center ">
                <div style="background-color: gainsboro;" class="w-100 height-100 rounded d-flex justify-content-center align-items-center position-relative">
                    <img class="w-100 h-100 shadow" src="{{ asset('asset/img/biu/speaking/speaking_kyear2.png') }}" alt="">
                    <img class=" shadow position-absolute" width="50px" src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" alt="">

                </div>
             </div>
        </a>
        <a href="{{ route('beltei_university.khmer_speaking_year3') }}" style="font-weight: bold;" class="p-3 text-white text-center Blue-color text-uppercase">
            {{ __('school/app.grade') }} {{ __('beltei_university/app.L4') }}
             <div class="d-flex justify-content-center ">
                <div style="background-color: gainsboro;" class="w-100 height-100 rounded d-flex justify-content-center align-items-center position-relative">
                    <img class="w-100 h-100 shadow" src="{{ asset('asset/img/biu/speaking/speaking_kyear1.png') }}" alt="">
                    <img class=" shadow position-absolute" width="50px" src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" alt="">

                </div>
             </div>
        </a>
        <a href="{{ route('beltei_university.khmer_speaking_year4') }}" style="font-weight: bold;" class="p-3 text-white text-center Blue-color text-uppercase">
            {{ __('school/app.grade') }} {{ __('beltei_university/app.L5') }}
             <div class="d-flex justify-content-center ">
                <div style="background-color: gainsboro;" class="w-100 height-100 rounded d-flex justify-content-center align-items-center position-relative">
                    <img class="w-100 h-100 shadow" src="{{ asset('asset/img/biu/speaking/speaking_kyear4.png') }}" alt="">
                    <img class=" shadow position-absolute" width="50px" src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" alt="">

                </div>
             </div>
        </a>

        <a href="{{ route('beltei_university.') }}">
            <h6 style="height: 50px; border:inset 3px ; border-radius: 18px" class="BEdu-color-bg pe-2 text-white Gold-color-border d-flex justify-content-center align-items-center">
            {{ __('beltei_university/app.L6') }}</h6>
        </a>
        <a href="{{ route('beltei_university.english_speaking_year1') }}" style="font-weight: bold;" class="p-3 text-white text-center Blue-color text-uppercase">
             {{ __('school/app.grade') }} {{ __('beltei_university/app.L7') }}
             <div class="d-flex justify-content-center ">
                <div style="background-color: gainsboro;" class="w-100 height-100 rounded d-flex justify-content-center align-items-center position-relative">
                    <img class="w-100 h-100 shadow" src="{{ asset('asset/img/biu/speaking/Year1_eng.png') }}" alt="">
                    <img class=" shadow position-absolute" width="50px" src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" alt="">
                </div>
             </div>
        </a>
        <a href="{{ route('beltei_university.english_speaking_year2') }}" style="font-weight: bold;" class="p-3 text-white text-center Blue-color text-uppercase">
            {{ __('school/app.grade') }} {{ __('beltei_university/app.L8') }}
             <div class="d-flex justify-content-center ">
                <div style="background-color: gainsboro;" class="w-100 height-100 rounded d-flex justify-content-center align-items-center position-relative">
                    <img class="w-100 h-100 shadow" src="{{ asset('asset/img/biu/speaking/Year2_eng.png') }}" alt="">
                    <img class=" shadow position-absolute" width="50px" src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" alt="">
                </div>
             </div>
        </a>
        <a href="{{ route('beltei_university.english_speaking_year3') }}" style="font-weight: bold;" class="p-3 text-white text-center Blue-color text-uppercase">
            {{ __('school/app.grade') }} {{ __('beltei_university/app.L9') }}
             <div class="d-flex justify-content-center ">
                <div style="background-color: gainsboro;" class="w-100 height-100 rounded d-flex justify-content-center align-items-center position-relative">
                    <img class="w-100 h-100 shadow" src="{{ asset('asset/img/biu/speaking/speaking_kyear1.png') }}" alt="">
                    <img class=" shadow position-absolute" width="50px" src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" alt="">
                </div>
             </div>
        </a>
        <a href="{{ route('beltei_university.english_speaking_year4') }}" style="font-weight: bold;" class="p-3 text-white text-center Blue-color text-uppercase">
            {{ __('school/app.grade') }} {{ __('beltei_university/app.L10') }}
             <div class="d-flex justify-content-center ">
                <div style="background-color: gainsboro;" class="w-100 height-100 rounded d-flex justify-content-center align-items-center position-relative">
                    <img class="w-100 h-100 shadow" src="{{ asset('asset/img/biu/speaking/Year4_eng.png') }}" alt="">
                    <img class=" shadow position-absolute" width="50px" src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" alt="">
                </div>
             </div>
        </a>
    </ul>
</div>
