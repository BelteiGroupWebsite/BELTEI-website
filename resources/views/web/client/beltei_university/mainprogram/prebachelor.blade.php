@extends('web.client.beltei_university.layout.app')


@section('content')

<div class="p-lg-3">

    <h2 class="title-translate-font my-3 underline Blue-color">{{ __('beltei_university/mainprogram/prebachelor.header') }}</h2>

    <div class="row">
        <div class="col-8">
            <img class="w-100" src="{{ asset('asset/img/university/main_degree/cc/1.png') }}" alt="">
        </div>
        <div class="col-4">
            <img class="w-100" src="{{ asset('asset/img/university/main_degree/cc/2.png') }}" alt="">
        </div>
    </div>

    <div class="text-start content-translate-font  text-justify ">
        {!! __('beltei_university/mainprogram/prebachelor.description') !!}
    </div>

    <div class="row">
        <div class="col-4">
            <img class="w-100" src="{{ asset('asset/img/university/main_degree/cc/3.png') }}" alt="">
        </div>
        <div class="col-4">
            <img class="w-100" src="{{ asset('asset/img/university/main_degree/cc/4.png') }}" alt="">
        </div>
        <div class="col-4">
            <img class="w-100" src="{{ asset('asset/img/university/main_degree/cc/5.png') }}" alt="">
        </div>
        <div class="col-12">
            <img class="w-100" src="{{ asset('asset/img/university/main_degree/cc/6.png') }}" alt="">
        </div>
    </div>
    
</div>

@endsection
