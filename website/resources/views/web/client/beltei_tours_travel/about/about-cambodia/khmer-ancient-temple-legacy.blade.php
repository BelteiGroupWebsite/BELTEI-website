@extends('web.client.beltei_tours_travel.layout.app')


@section('content')
    <div class="text-start p-3">

        <h2 class="title-translate-font text-center my-3 underline">{{ __('beltei_tours_travel/about/about-cambodia/khmer-ancient-temple-legacy.header') }}</h2>





        <div id="campusDetail" class="content-translate-font text-justify">
            {!! __('beltei_tours_travel/about/about-cambodia/khmer-ancient-temple-legacy.description') !!}
        </div>


        <div class="text-center w-100 row gy-3">
            <img class="col-6" src="{{ asset('asset/img/tours/about/about-cambodia/khmer-ancient-temple-legacy/1.jpg') }}" alt="">
            <img class="col-6" src="{{ asset('asset/img/tours/about/about-cambodia/khmer-ancient-temple-legacy/2.jpg') }}" alt="">
            <img class="col-6" src="{{ asset('asset/img/tours/about/about-cambodia/khmer-ancient-temple-legacy/3.jpg') }}" alt="">
            <img class="col-6" src="{{ asset('asset/img/tours/about/about-cambodia/khmer-ancient-temple-legacy/4.jpg') }}" alt="">
            <img class="col-6" src="{{ asset('asset/img/tours/about/about-cambodia/khmer-ancient-temple-legacy/5.jpg') }}" alt="">
            <img class="col-6" src="{{ asset('asset/img/tours/about/about-cambodia/khmer-ancient-temple-legacy/6.jpg') }}" alt="">
            <img class="col-6" src="{{ asset('asset/img/tours/about/about-cambodia/khmer-ancient-temple-legacy/7.jpg') }}" alt="">
            <img class="col-6" src="{{ asset('asset/img/tours/about/about-cambodia/khmer-ancient-temple-legacy/8.jpg') }}" alt="">
            <img class="col-6" src="{{ asset('asset/img/tours/about/about-cambodia/khmer-ancient-temple-legacy/9.jpg') }}" alt="">
            <img class="col-6" src="{{ asset('asset/img/tours/about/about-cambodia/khmer-ancient-temple-legacy/10.jpg') }} " alt="">
            <img class="col-6" src="{{ asset('asset/img/tours/about/about-cambodia/khmer-ancient-temple-legacy/11.jpg') }} " alt="">
            <img class="col-6" src="{{ asset('asset/img/tours/about/about-cambodia/khmer-ancient-temple-legacy/12.jpg') }} " alt="">
        </div>

        

    </div>

@endsection

