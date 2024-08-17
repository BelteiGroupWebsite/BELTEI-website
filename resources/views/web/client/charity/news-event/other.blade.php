@extends('web.client.charity.layout.app')

@section('content')
    <div class="p-lg-3">

        <h2 class="title-translate-font my-3 underline">{{ __('charity/new-event/other.header') }}</h2>


        <div class="content" id="content">

        </div>


        <div class="row p-4 ">
            {{-- {!! __('charity/new-event/other.description') !!} --}}
            <img src="{{ asset('asset/img/tours/news-event/other/beltei_tour_new_khpromotion_15_sep_15.jpg') }}" alt="">
            <img src="{{ asset('asset/img/tours/news-event/other/grand_opening_biu_bt_ir.png') }}" alt="">
            <img src="{{ asset('asset/img/tours/news-event/other/special_discount_17_Oct_14.png') }}" alt="">
        </div>

    </div>


@endsection
