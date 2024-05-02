@extends('web.client.beltei_tours_travel.layout.app')


@section('content')
    <div class="text-start p-3">

        <h2 class="title-translate-font text-center my-3 underline">{{ __('beltei_tours_travel/about/history.header') }}</h2>





        <div id="campusDetail" class="content-translate-font text-justify">
            {!! __('beltei_tours_travel/about/history.description') !!}
        </div>


        <div class="text-center w-100 row gy-3">
            <img class="col-6" src="{{ asset('asset/img/tours/about/history/1.jpg') }}" alt="">
            <img class="col-6" src="{{ asset('asset/img/tours/about/history/2.jpg') }}" alt="">
            <img class="col-6" src="{{ asset('asset/img/tours/about/history/3.jpg') }}" alt="">
            <img class="col-6" src="{{ asset('asset/img/tours/about/history/4.jpg') }}" alt="">
            <img class="col-6" src="{{ asset('asset/img/tours/about/history/5.jpg') }}" alt="">
            <img class="col-6" src="{{ asset('asset/img/tours/about/history/6.jpg') }}" alt="">
            <img class="col-6" src="{{ asset('asset/img/tours/about/history/7.jpg') }}" alt="">
            <img class="col-6" src="{{ asset('asset/img/tours/about/history/8.jpg') }}" alt="">
            <img class="col-6" src="{{ asset('asset/img/tours/about/history/9.jpg') }}" alt="">
            <img class="col-6" src="{{ asset('asset/img/tours/about/history/10.jpg') }} " alt="">
            <img class="col-6" src="{{ asset('asset/img/tours/about/history/11.jpg') }} " alt="">
            <img class="col-6" src="{{ asset('asset/img/tours/about/history/12.jpg') }} " alt="">
        </div>


    </div>

@endsection

