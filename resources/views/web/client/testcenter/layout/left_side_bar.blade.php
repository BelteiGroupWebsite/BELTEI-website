<div class="sidebar max-width-250 w-100 shadow-sm p-0 m-0 content-translate-font px-1">
    <ul class="text-capitalize list-group f14">
        <a href="{{ route('school.') }}">
            <h6 class="text-uppercase text-center py-2 bg-header-color gold ">{{ __('testcenter/app.A') }}</h6>
        </a>
        <a href="{{ route('testcenter.about.welcome') }}" class="list-group-item text-white">{{ __('school/app.A1') }}</a>
        <a href="{{ route('testcenter.about.purpose') }}" class="list-group-item text-white">{{ __('school/app.A2') }}</a>
        <a href="{{ route('testcenter.about.vision') }}" class="list-group-item text-white">{{ __('school/app.A3') }}</a>
        <a href="{{ route('testcenter.about.history') }}" class="list-group-item text-white">{{ __('school/app.A4') }}</a>
    </ul>
    <ul class="text-capitalize list-group f14">
        <a href="{{ route('school.') }}">
            <h6 class="text-uppercase text-center py-2 bg-header-color gold ">{{ __('testcenter/app.B') }}</h6>
        </a>
        <a href="{{ route('testcenter.service.toefl') }}" class="list-group-item text-white">{{ __('testcenter/app.B1') }}</a>
        <a href="{{ route('testcenter.service.gre') }}" class="list-group-item text-white">{{ __('testcenter/app.B2') }}</a>
        <a href="{{ route('testcenter.service.ielts') }}" class="list-group-item text-white">{{ __('testcenter/app.B3') }}</a>
        <a href="{{ route('testcenter.service.selt') }}" class="list-group-item text-white">{{ __('testcenter/app.B4') }}</a>
    </ul>

    <ul class="p-0 m-0  list-group ">
        <a href="{{ route('school.') }}">
            <h5 class="text-uppercase text-center py-2 bg-header-color gold ">{{ __('testcenter/app.C') }}</h5>
        </a>
        <li class="list-group-item">
            <a href="https://www.ets.org/toefl.html" target="_blank">
                <img class="w-100 justify-content-center" src="{{ asset('asset/img/testcenter/TOEFL.png') }}" alt="">
            </a>
        </li>
        <li class="list-group-item">
            <a href="https://www.ets.org/gre.html" target="_blank">
                <img class="w-100 justify-content-center" src="{{ asset('asset/img/testcenter/GRE.png') }}" alt="">
            </a>
        </li>
        <li class="list-group-item">
            <a href="https://takeielts.britishcouncil.org/" target="_blank">
                <img class="w-100 justify-content-center" src="{{ asset('asset/img/testcenter/IELTS.png') }}" alt="">
            </a>
        </li>
        <li class="list-group-item">
            <a href="https://skillsforenglish.com/test/selt/" target="_blank">
                <img class="w-100 justify-content-center" src="{{ asset('asset/img/testcenter/SELT.png') }}" alt="">
            </a>
        </li>

    
    </ul>
    
</div>
