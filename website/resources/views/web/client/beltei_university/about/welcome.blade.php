@extends('web.client.beltei_university.layout.app')

@section('content')
    <h2 class="title-translate-font my-3 underline Blue-color">{{ __('beltei_university/about/welcome.header') }}</h2>




    <div class="text-start">
        <div class="content-translate-font p-lg-4 ul-none-style">
            <img class="float-start rounded shadow-sm p-3"
                src="https://www.beltei.edu.kh/khm/images/beltei_pic/H.E_Dr_Ly_chheng_beltei.jpg" alt="">
            <div class="text-justify">
                {!! __('beltei_university/about/welcome.welcome') !!}
            </div>
            <img class="float-start rounded"
                src="https://www.beltei.edu.kh/biuk/images/beltei_pic/beltei_international_university_in_cambodia_ly_chheng_singature.png" alt="">
        </div>
    </div>
@endsection
