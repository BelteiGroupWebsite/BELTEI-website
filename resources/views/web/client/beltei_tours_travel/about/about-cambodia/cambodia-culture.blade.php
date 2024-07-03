@extends('web.client.beltei_tours_travel.layout.app')


@section('content')
    <div class="text-start p-3">

        <h2 class="title-translate-font text-center my-3 underline">{{ __('beltei_tours_travel/about/about-cambodia/cambodia-culture.header') }}</h2>





        <div id="campusDetail" class="content-translate-font text-justify">
            {!! __('beltei_tours_travel/about/about-cambodia/cambodia-culture.description') !!}
        </div>


        <div class="text-center w-100 row gy-3">
            <img class="col-6" src="{{ asset('asset/img/tours/about/about-cambodia/cambodia-culture/1.jpg') }}" alt="">
            <img class="col-6" src="{{ asset('asset/img/tours/about/about-cambodia/cambodia-culture/2.jpg') }}" alt="">
            <img class="col-6" src="{{ asset('asset/img/tours/about/about-cambodia/cambodia-culture/3.jpg') }}" alt="">
            <img class="col-6" src="{{ asset('asset/img/tours/about/about-cambodia/cambodia-culture/4.jpg') }}" alt="">
            <img class="col-6" src="{{ asset('asset/img/tours/about/about-cambodia/cambodia-culture/5.jpg') }}" alt="">
            <img class="col-6" src="{{ asset('asset/img/tours/about/about-cambodia/cambodia-culture/6.jpg') }}" alt="">
            <img class="col-6" src="{{ asset('asset/img/tours/about/about-cambodia/cambodia-culture/7.jpg') }}" alt="">
            <img class="col-6" src="{{ asset('asset/img/tours/about/about-cambodia/cambodia-culture/8.jpg') }}" alt="">
            <img class="col-6" src="{{ asset('asset/img/tours/about/about-cambodia/cambodia-culture/9.jpg') }}" alt="">
            <img class="col-6" src="{{ asset('asset/img/tours/about/about-cambodia/cambodia-culture/10.jpg') }} " alt="">
            <img class="col-6" src="{{ asset('asset/img/tours/about/about-cambodia/cambodia-culture/11.jpg') }} " alt="">
            <img class="col-6" src="{{ asset('asset/img/tours/about/about-cambodia/cambodia-culture/12.jpg') }} " alt="">
        </div>

        

    </div>

@endsection

