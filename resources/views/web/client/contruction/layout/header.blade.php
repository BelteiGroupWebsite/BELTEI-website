<div class="">
    <div class="header d-flex align-items-center justify-content-center gap-lg-5 py-2" style="background-color: #3A60A1">
        {{-- <img class="max-width-120"
            src="{{ asset('asset/img/beltei_construction_in_cambodia.png') }}"
            alt="">
        <div class="text-center gold py-2">
            <h2 class="Muol-Light">ប៊ែលធី សំណង់</h2>
            <h3 class="Times-New-Roman font-bold text-uppercase">BELTEI Contruction</h3>
            <h5 class="text-capitalize font-italic Times-New-Roman">BELTEI, the best quality of Contruction in
                cambodia</h5>
        </div> --}}
        <img src="{{ asset('asset/img/construction/logo.jpg') }}" alt="">
    </div>
    {{-- <br> --}}
    {{-- <hr>     --}}

    <div id="universityCampus" class="universityCampus row shadow-sm rounded p-3 justify-content-center mb-3 content-translate-font">
        {{-- <div id="universityCampus" class="universityCampus d-flex shadow-sm rounded p-3 justify-content-center mb-3 gap-5 content-translate-font"> --}}
            <a class="col-3" href="{{route('beltei_university.about.belteigroup')}}?id=1">
                <img class="w-100" src="{{ asset('asset/img/BTG.png') }}" alt="">
                <div class="d-flex  justify-content-around text-center">
                    <h5 class="Khmer-OS-Koulen py-3 Blue-color text-capitalize">{{ __('beltei_university/app.belteigroup') }}</h3>
                </div>
            </a>    
        </div>
    
</div>
