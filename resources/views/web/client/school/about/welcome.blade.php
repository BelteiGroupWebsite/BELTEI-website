@extends('web.client.school.layout.app')

@section('content')
    <h2 class="title-translate-font my-3 underline">{{ __('school/about/welcome.header') }}</h2>




    <div class="text-start">
        <div class="content-translate-font p-lg-4 ul-none-style">
            <img class="float-start rounded shadow-sm p-3"
                src="https://www.beltei.edu.kh/khm/images/beltei_pic/H.E_Dr_Ly_chheng_beltei.jpg" alt="">
            <div class="text-justify">
                {!! __('school/about/welcome.welcome') !!}
            </div>
            <div class="text-end">
                <img class="w-5" src="{{ asset('asset/img/school/campus/signature.png') }}" alt="">
            </div>
        </div>
    </div>
@endsection
