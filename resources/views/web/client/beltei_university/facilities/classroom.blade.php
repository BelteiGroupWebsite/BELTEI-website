@extends('web.client.beltei_university.layout.app')

@section('content')


<div>
    <div>
        <h3 class="title-translate-font p-3 bg-success text-white">{{ __('beltei_university/facilities/classroom.header')  }}</h3>
    </div>
    <div class="text-start content-translate-font my-3 px-2">
        {!! __('beltei_university/facilities/classroom.description') !!}
    </div>
    <div class="row g-2">
        <div class="col-6">
            <img class="w-100 h-100" src="{{ asset('asset/img/university/facility/classroom/1.jpg') }}" alt="">
        </div>
        <div class="col-6">
            <img class="w-100 h-100" src="{{ asset('asset/img/university/facility/classroom/2.jpg') }}" alt="">
        </div>
        <div class="col-6">
            <img class="w-100 h-100" src="{{ asset('asset/img/university/facility/classroom/3.jpg') }}" alt="">
        </div>
        <div class="col-6">
            <img class="w-100 h-100" src="{{ asset('asset/img/university/facility/classroom/4.jpg') }}" alt="">
        </div>
    </div>
</div>


@endsection
