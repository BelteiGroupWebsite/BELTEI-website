@extends('web.client.beltei_university.layout.app')

@section('content')


<div>
    <div>
        <h3 class="title-translate-font p-3 bg-success text-white">{{ __('beltei_university/facilities/library.header')  }}</h3>
    </div>
    <div class="text-start content-translate-font my-3 px-2">
        {!! __('beltei_university/facilities/library.description') !!}
    </div>
    <div class="row g-2">
        <div class="col-6">
            <img class="w-100" src="{{ asset('asset/img/university/facility/library/1.png') }}" alt="">
        </div>
        <div class="col-6">
            <img class="w-100" src="{{ asset('asset/img/university/facility/library/2.png') }}" alt="">
        </div>
        <div class="col-6">
            <img class="w-100" src="{{ asset('asset/img/university/facility/library/3.png') }}" alt="">
        </div>
        <div class="col-6">
            <img class="w-100" src="{{ asset('asset/img/university/facility/library/4.png') }}" alt="">
        </div>
        <div class="col-6">
            <img class="w-100" src="{{ asset('asset/img/university/facility/library/5.png') }}" alt="">
        </div>
        <div class="col-6">
            <img class="w-100" src="{{ asset('asset/img/university/facility/library/6.png') }}" alt="">
        </div>
        <div class="col-6">
            <img class="w-100" src="{{ asset('asset/img/university/facility/library/7.png') }}" alt="">
        </div>
        <div class="col-6">
            <img class="w-100" src="{{ asset('asset/img/university/facility/library/8.png') }}" alt="">
        </div>
    </div>
</div>


@endsection
