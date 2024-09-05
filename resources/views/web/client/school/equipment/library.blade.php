@extends('web.client.school.layout.app')

@section('content')
    <div>
        <h3 class="title-translate-font pb-3">{{ __('school/app.D2') }}</h3>
    </div>

    <div class="row">
        <div class="col-6 p-2">
            <img src="{{asset('asset/img/school/equipment/library/bislibrary.png')}}" alt="" class="w-100">
        </div>
        <div class="col-6 p-2">
            <img src="{{asset('asset/img/school/equipment/library/bislibrary01.png')}}" alt="" class="w-100">
        </div>
        <div class="col-6 p-2">
            <img src="{{asset('asset/img/school/equipment/library/bislibrary02.png')}}" alt="" class="w-100">
        </div>
        <div class="col-6 p-2">
            <img src="{{asset('asset/img/school/equipment/library/bislibrary03.png')}}" alt="" class="w-100">
        </div>
        <div class="col-6 p-2">
            <img src="{{asset('asset/img/school/equipment/library/bislibrary04.png')}}" alt="" class="w-100">
        </div>
        <div class="col-6 p-2">
            <img src="{{asset('asset/img/school/equipment/library/bislibrary05.png')}}" alt="" class="w-100">
        </div>
        <div class="col-6 p-2">
            <img src="{{asset('asset/img/school/equipment/library/bislibrary06.png')}}" alt="" class="w-100">
        </div>
        <div class="col-6 p-2">
            <img src="{{asset('asset/img/school/equipment/library/bislibrary07.png')}}" alt="" class="w-100">
        </div>
        <div class="col-6 p-2">
            <img src="{{asset('asset/img/school/equipment/library/bislibrary08.png')}}" alt="" class="w-100">
        </div>
        <div class="col-6 p-2">
            <img src="{{asset('asset/img/school/equipment/library/bislibrary09.png')}}" alt="" class="w-100">
        </div>
        <div class="col-6 p-2">
            <img src="{{asset('asset/img/school/equipment/library/bislibrary10.png')}}" alt="" class="w-100">
        </div>
        <div class="col-6 p-2">
            <img src="{{asset('asset/img/school/equipment/library/bislibrary11.png')}}" alt="" class="w-100">
        </div>
        <div class="col-6 p-2">
            <img src="{{asset('asset/img/school/equipment/library/bislibrary12.png')}}" alt="" class="w-100">
        </div>
    </div>

    @include('web.client.school.layout.share.news')
@endsection
