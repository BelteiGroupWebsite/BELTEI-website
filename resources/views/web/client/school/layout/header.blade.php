<div class="">
    <div class="header d-flex align-items-center justify-content-center gap-lg-5  bg-header-color py-2">
        <img class="max-width-100"
            src="{{ asset('asset/img/school/beltei_international_school_in_cambodia.png') }}"
            alt="">
        <div class="text-center gold">
            <h2 class="Muol-Light">សាលា ប៊ែលធី អន្តរជាតិ</h2>
            <h3 class="Times-New-Roman font-bold">BELTEI INTERNATIONAL SCHOOL</h3>
            <h5 class="text-capitalize font-italic Times-New-Roman">BELTEI, the best quality of education in
                cambodia</h5>
        </div>
    </div>

    <div class="text-center">
        <a href="{{ route('school.about.belteigroup', ['goto' => "content"]) }}" class="text-center">
            <img class="w-50 mt-2" src="{{ asset('asset/img/school/Head_combine.png') }}" alt="">
        </a>
    </div>
    {{-- <div id="campus" class="campus d-flex shadow-sm rounded  justify-content-between mb-3 content-translate-font p-lg-3 scale-9-600px"> --}}
    <div id="campus" class="campus shadow-sm rounded  mb-3 content-translate-font p-lg-3 scale-9-600px">
    </div>
    
    <div class="p-2">
        <marquee behavior="scroll" scrollamount="4.5"><span style="color: green; font-size: small;">


                {!! __('school/app.marquee') !!}



        </marquee>
    </div>


    {{-- <div class="d-flex justify-content-between container p-2 bg-secondary position-sticky top-0" style="z-index: 10">
        <a href="">Home</a>
        <a href="">Bar</a>
    </div> --}}
    

</div>