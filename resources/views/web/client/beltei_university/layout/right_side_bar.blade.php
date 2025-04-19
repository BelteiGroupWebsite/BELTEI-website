{{-- <div class="sidebar min-width-250 max-width-300 position-sticky shadow-sm p-0 m-0 px-1 content-translate-font" > --}}
{{-- <div class="sidebar max-width-275 shadow-sm p-0 m-0 px-1 content-translate-font" > --}}
<style>
    .right-bar-ul>li {
        height: 75px;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        background-image: linear-gradient(to left, #20409A -22.5%, #21ade3, #21ade3, #21ade3, #21ade3, #20409A 122.5%);
    }

    .right-bar-ul>li>a {
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;

        justify-content: center;
    }

    .right-bar-ul>li>a>img {
        max-height: 70px;
        width: 80% !important;
        object-fit: contain;
    }

    .right-bar-ul>li:hover {
        background-image: linear-gradient(to left, #20409A -22.5%, #1784af, #1784af, #1784af, #1784af, #20409A 122.5%);
    }

    .right-bar-ul>li:hover>a>img {
        transform: scale(.9);
    }
</style>

@php

    $collaborators = App\Models\University\Collaborator\UtbCollaborators::with(['country.countryName.language']) // eager load country to avoid N+1
        ->where('branch_id', 3)
        ->orderBy('order_column') // order collaborators
        ->get()
        ->groupBy('utb_country_id'); // group by country

    // Sort the grouped countries by their country's order_column
    $utb_collaboratorsByCountry = $collaborators->sortBy(function ($group, $countryId) {
        return optional($group->first()->country)->order_column;
    });

@endphp

<div class="sidebar max-width-250 w-100 shadow-sm p-0 m-0 content-translate-font px-1">

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
                <img class="w-100" src="{{ asset('asset/img/university/campus/belgroupkh.png') }}" alt="">
            </a>
        </div>
    </ul>
    </ul>

    <ul class="text-capitalize list-group f14">
        <a  class="pt-2">
            <h6 
                {{-- style="height: 60px; border:inset 3px ; border-radius: 15px ; font-family: KhmerOSMoul" --}}
                style="border:outset 3px ; border-radius: 2rem ; border-color: gold;"
                class="text-uppercase text-center py-3 title-translate-font bg-header-color gold align-items-center">
                {{ __('beltei_university/app.LA') }}</h6>
        </a>
    </ul>

    @foreach ($utb_collaboratorsByCountry as $collaborators)
        @php
            $first_collaborator = $collaborators->first();
        @endphp
        <ul class="p-0 m-0  list-group ">

            <li class="list-group-item d-flex justify-content-center">

                <div style="border:inset 7px ; border-radius: 15px ; border-color: #006cb8"
                    class="w-100 overflow-hidden border-blue">
                    <a href="#" class="cursor-pointer justify-content-center">
                        <p style="font-family: KhmerOSMoul ; text-align: center" class="bg-success text-white p-2">
                            <img loading="lazy" class="w-100 max-width-100 justify-content-center"
                                src="{{ asset('storage/' . $first_collaborator->country->flag) }}" alt="">
                            <br>
                            {{ $first_collaborator->country->countryName->firstWhere('language.key', app()->getLocale())->name ?? 'N/A' }}
                        </p>
                    </a>

                    <ul class="list-group text-center right-bar-ul">
                        @forelse ($collaborators->sortBy('order_column') as $collaborator)
                            <li class="list-group-item p-0">
                                <a href="{{ $collaborator->link }}" target="blank">
                                    <img loading="lazy"
                                        {{-- style="max-height: 75px; width: 80% !important; object-fit: fill;" --}}
                                        class="justify-content-center"
                                        src="{{ asset('storage/' . $collaborator->logo) }}" alt="">
                                </a>
                            </li>
                        @empty
                        @endforelse

                    </ul>

                </div>
            </li>

        </ul>
    @endforeach

    @include('web.client.share.visitor')




































</div>
