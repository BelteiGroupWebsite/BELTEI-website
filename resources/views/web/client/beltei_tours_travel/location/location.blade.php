@extends('web.client.beltei_tours_travel.layout.app')

@section('content')
    <div class="p-lg-3">

        <h2 class="title-translate-font my-3 underline">{{ __('beltei_tours_travel/location/location.header') }}</h2>


        <div class="content" id="content">

        </div>


        <div class="text-start content-translate-font text-justify ">
            {!! __('beltei_tours_travel/location/location.description') !!}
        </div>

        <div class="row gy-4 p-3">
            <img src="{{ asset('asset/img/tours/location/office_1.jpg') }}" alt="">
            <img src="{{ asset('asset/img/tours/location/office_2.jpg') }}" alt="">
            <img src="{{ asset('asset/img/tours/location/office_3.jpg') }}" alt="">
            <img src="{{ asset('asset/img/tours/location/office_4.jpg') }}" alt="">
            <img src="{{ asset('asset/img/tours/location/office_5.jpg') }}" alt="">
            <img src="{{ asset('asset/img/tours/location/tour_map.jpg') }}" alt="">
        </div>

    </div>

@endsection
