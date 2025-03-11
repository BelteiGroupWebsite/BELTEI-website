@extends('web.client.relation.layout.app')

@section('content')
    <h2 class="title-translate-font my-3 underline">{{ __('relation/about/welcome.header') }}</h2>




    <div class="text-start">
        <div class=" p-lg-4 ul-none-style">
            <img class="float-start rounded shadow-sm p-3"
                src="https://www.beltei.edu.kh/khm/images/beltei_pic/H.E_Dr_Ly_chheng_beltei.jpg" alt="">
            <div class="text-justify content-translate-font">
                {!! __('relation/about/welcome.welcome') !!}
            </div>
            <div style="font-weight: bold" class="mt-2 title-translate-font">
                {!! __('beltei_university/about/welcome.message') !!}
            </div>
            <div class="d-flex justify-content-end">
                <div class="col-6 text-center">
                    <div>
                        <img class="rounded" style="width: 200px" src="{{ asset('asset/img/biu/app/HEDr_sign.png') }}"
                            alt="">
                    </div>
                    <p class="title-translate-font">{!! __('beltei_university/about/welcome.founder') !!}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
