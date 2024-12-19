<div class="">
    <div class="header d-flex align-items-center justify-content-center gap-lg-5  bg-header-color py-2">
        <img class="max-width-100"
            src="{{ asset('asset/img/university/campus/beltei_international_university_in_cambodia.png') }}"
            alt="">
        <div class="text-center gold">
            <h2 class="Muol-Light">សាកលវិទ្យាល័យ ប៊ែលធី អន្តរជាតិ</h2>
            <h3 class="Times-New-Roman font-bold">BELTEI INTERNATIONAL UNIVERSITY</h3>
            <h5 class="text-capitalize Khmer-OS-Koulen">គុណភាព ប្រសិទ្ធភាព ឧត្ដមភាព សីលធម៌ គុណធម៌</h5>
        </div>
    </div>

    <div id="universityCampus"
        class="universityCampus row shadow-sm rounded p-3 justify-content-center mb-3 content-translate-font">
        {{-- <div id="universityCampus" class="universityCampus d-flex shadow-sm rounded p-3 justify-content-center mb-3 gap-5 content-translate-font"> --}}
        <a class="col-3" href="{{ route('beltei_university.about.belteigroup') }}?id=1">
            <img class="w-100" src="{{ asset('asset/img/BTG.png') }}" alt="">
            <div class="d-flex  justify-content-around text-center">
                <h5 class="Khmer-OS-Koulen py-3 Blue-color text-capitalize">
                    {{ __('beltei_university/app.belteigroup') }}</h3>
            </div>
        </a>
        <a class="col-3" href="{{ route('beltei_university.campus.campusTemplete') }}?id=1">
            <img class="w-100" src="{{ asset('asset/img/university/campus/BIU1.png') }}" alt="">
            <div class="d-flex  justify-content-around text-center">
                <h5 class="Khmer-OS-Koulen py-3 Blue-color text-capitalize">{{ __('beltei_university/app.campus1') }}
                    </h3>
            </div>
        </a>
        <a class="col-3" href="{{ route('beltei_university.campus.campusTemplete') }}?id=2">
            <img class="w-100" src="{{ asset('asset/img/university/campus/BIU2.png') }}" alt="">
            <div class="d-flex  justify-content-around text-center">
                <h5 class="Khmer-OS-Koulen py-3 Blue-color text-capitalize">{{ __('beltei_university/app.campus2') }}
                    </h3>
            </div>
        </a>
        <a class="col-3" href="{{ route('beltei_university.campus.campusTemplete') }}?id=3">
            <img class="w-100" src="{{ asset('asset/img/university/campus/BIU3.png') }}" alt="">
            <div class="d-flex  justify-content-around text-center">
                <h5 class="Khmer-OS-Koulen py-3 Blue-color text-capitalize">{{ __('beltei_university/app.campus3') }}
                    </h3>
            </div>
        </a>

    </div>

    <div class="p-2">
        <marquee behavior="scroll" scrollamount="4.5"><span style="color: green; font-size: small;">


                {!! __('beltei_university/app.marquee') !!}



        </marquee>
    </div>


    {{-- <div class="d-flex justify-content-between container p-2 bg-secondary position-sticky top-0" style="z-index: 10">
        <a href="">Home</a>
        <a href="">Bar</a>
    </div> --}}


</div>
