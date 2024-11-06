@extends('web.client.beltei_university.layout.app')


@section('content')
    <div class="p-lg-3">

        <h4 class="title-translate-font my-3 underline Blue-color">{{ __('beltei_university/about/whyBeltei.header') }}</h4>

        <div>
            <img class="w-75 text-center my-3" src="{{ asset('asset/img/university/about/whybeltei.jpg') }}" alt="">
            <div class="row mt-2">
                <div class="col-6 p-2">
                    <img class="w-100 text-center" src="{{ asset('asset/img/university/about/1.png') }}" alt="">
                </div>
                <div class="col-6 p-2">
                    <img class="w-100 text-center" src="{{ asset('asset/img/university/about/2.png') }}" alt="">
                </div>
                <div class="col-6 p-2">
                    <img class="w-100 text-center" src="{{ asset('asset/img/university/about/3.png') }}" alt="">
                </div>
                <div class="col-6 p-2">
                    <img class="w-100 text-center" src="{{ asset('asset/img/university/about/4.png') }}" alt="">
                </div>
            </div>
        </div>

        <div class="content-translate-font text-justify">
            {!! __('beltei_university/about/whyBeltei.description') !!}
        </div>


    </div>
@endsection
