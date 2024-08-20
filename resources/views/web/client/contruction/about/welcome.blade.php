@extends('web.client.contruction.layout.app')

@section('content')

    <style>
        .content-container p{
            padding-top: 1rem;
            text-indent: 1rem;
        }
    </style>

    <h2 class="title-translate-font my-3 underline">{{ __('construction/about/welcome.header') }}</h2>




    <div class="text-start">
        <div class="content-translate-font p-lg-4 ul-none-style content-container">
            <img class="float-start rounded shadow-sm p-3"
                src="https://www.beltei.edu.kh/khm/images/beltei_pic/H.E_Dr_Ly_chheng_beltei.jpg" alt="">
            <div class="text-justify">
                {!! __('construction/about/welcome.description') !!}
            </div>
        </div>
    </div>
@endsection
