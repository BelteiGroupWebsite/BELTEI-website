@extends('web.client.beltei_university.layout.app')

@section('content')


<div>
    <div>
        <h3 class="title-translate-font p-3 bg-success text-white">{{ __('beltei_university/facilities/lab.header')  }}</h3>
    </div>
    <div class="text-start content-translate-font my-3 px-2">
        {!! __('beltei_university/facilities/lab.description') !!}
    </div>
    <div class="row g-2">
        <div class="col-6">
            <img class="w-100" src="{{ asset('asset/img/university/facility/lab/1.jpg') }}" alt="">
        </div>
        <div class="col-6">
            <img class="w-100" src="{{ asset('asset/img/university/facility/lab/2.jpg') }}" alt="">
        </div>
        <div class="col-12">
            <img class="w-100" src="{{ asset('asset/img/university/facility/lab/3.jpg') }}" alt="">
        </div>
    </div>
</div>


@endsection
