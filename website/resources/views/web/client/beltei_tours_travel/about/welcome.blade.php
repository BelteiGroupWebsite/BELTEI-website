@extends('web.client.beltei_tours_travel.layout.app')

@section('content')
    <h2 class="title-translate-font my-3 underline">{{ __('beltei_tours_travel/about/welcome.header') }}</h2>




    <div class="text-start">
        <div class="content-translate-font p-lg-4 ul-none-style">
            <img class="float-start rounded shadow-sm p-3"
                src="https://www.beltei.edu.kh/khm/images/beltei_pic/H.E_Dr_Ly_chheng_beltei.jpg" alt="">
            <div class="text-justify">
                {!! __('beltei_tours_travel/about/welcome.welcome') !!}
            </div>
        </div>
    </div>
@endsection
