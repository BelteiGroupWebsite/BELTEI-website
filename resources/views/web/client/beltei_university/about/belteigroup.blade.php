@extends('web.client.beltei_university.layout.app')



@section('content')
    <div class="p-3">

        <h2 class="title-translate-font my-3 underline">{{ __('school/about/belteigroup.header') }}</h2>

        <div class="row g-3">
            <div class="col-12">
                {{-- <img class="w-100" src="{{ asset('assets/images/school/belteigroup.jpg') }}" alt=""> --}}
                <iframe class="w-100 aspect-ratio-16" src="https://www.youtube.com/embed/hNlIC_dPKBQ?si=fGg8LUbXSvpGLene"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="col-12 col-md-6">
                <img class="w-100" src="{{ asset('assets/images/school/belteigroup.jpg') }}" alt="">
            </div>
            <div class="col-12 col-md-6">
                <img class="w-100" src="{{ asset('assets/images/school/belteigroup1.jpg') }}" alt="">
            </div>
            {{-- <div class="col-12">
                <img class="w-100" src="{{ asset('assets/images/school/belteigroup2.png') }}" alt="">
            </div> --}}

        </div>
        <div class="text-start content-translate-font text-justify">
            {!! __('school/about/belteigroup.description') !!}
        </div>


    </div>
@endsection
