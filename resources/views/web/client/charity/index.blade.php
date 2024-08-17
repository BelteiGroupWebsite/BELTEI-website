@extends('web.client.charity.layout.app')

@section('content')
    <img data-aos="zoom-out-up" class=""
        src="https://www.belteitour.com.kh/btk/images/bt-home/welcome_to_beltei_tour.png"
        border="0">

    <div>
        <img src="https://www.belteitour.com.kh/btk/images/bt-home/tour_facebook.png" alt="">
        <img src="https://www.belteitour.com.kh/btk/images/bt-home/beltei_youtube.png" alt="">
    </div>

    <div>
        <img data-aos="zoom-out-up" class="w-75 my-2" src="{{ asset('asset/img/BTG.png') }}" alt="">
    </div>

    <iframe data-aos="zoom-out-up" class="w-75 my-2" width="500" height="280" src="https://www.youtube.com/embed/6I8WENHBtOc?si=izlAt6OZxnbO-vPT" title="YouTube video player" frameborder="0" allow="autoplay; " allowfullscreen></iframe>


    <img data-aos="zoom-out-up" class="w-75 my-2" src="https://www.belteitour.com.kh/btk/images/announcement/beltei_tour_new_promotion.jpg"
        border="0">
    <img data-aos="zoom-out-up" class="w-75 my-2" src="https://www.belteitour.com.kh/btk/images/announcement/beltei_tour_in_cambodia_new_promotion_to_china.jpg"
        border="0">
    <img data-aos="zoom-out-up" class="w-75 my-2" src="https://www.belteitour.com.kh/btk/images/homepics/office_1.jpg"
        border="0">


    @include('web.client.charity.layout.share.news')
@endsection
