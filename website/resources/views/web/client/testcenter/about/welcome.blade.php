@extends('web.client.testcenter.layout.app')

@section('content')
    <h2 class="title-translate-font my-3 underline">{{ __('testcenter/about/welcome.header') }}</h2>




    <div class="text-start">
        <div class="content-translate-font p-lg-4 ul-none-style">
            <img class="float-start rounded shadow-sm mx-3"
                src="https://www.beltei.edu.kh/khm/images/beltei_pic/H.E_Dr_Ly_chheng_beltei.jpg" alt="">
            <div class="text-justify">
                {!! __('testcenter/about/welcome.welcome') !!}
            </div>
        </div>
    </div>
@endsection
