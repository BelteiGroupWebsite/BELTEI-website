@extends('web.client.school.layout.app')

@section('content')
    <div>
        <h3 class="title-translate-font pb-3">{{ __('school/app.D4') }}</h3>
    </div>


    <div class="row">
        <div class="col-6 p-2">
            <img src="{{asset('asset/img/school/equipment/laboratory/bislaboratory.png')}}" alt="" class="w-100">
        </div>
        <div class="col-6 p-2">
            <img src="{{asset('asset/img/school/equipment/laboratory/bislaboratory01.png')}}" alt="" class="w-100">
        </div>
        <div class="col-6 p-2">
            <img src="{{asset('asset/img/school/equipment/laboratory/bislaboratory02.png')}}" alt="" class="w-100">
        </div>
        <div class="col-6 p-2">
            <img src="{{asset('asset/img/school/equipment/laboratory/bislaboratory03.png')}}" alt="" class="w-100">
        </div>
        <div class="col-6 p-2">
            <img src="{{asset('asset/img/school/equipment/laboratory/bislaboratory04.png')}}" alt="" class="w-100">
        </div>
        <div class="col-6 p-2">
            <img src="{{asset('asset/img/school/equipment/laboratory/bislaboratory05.png')}}" alt="" class="w-100">
        </div>
        <div class="col-6 p-2">
            <img src="{{asset('asset/img/school/equipment/laboratory/bislaboratory06.png')}}" alt="" class="w-100">
        </div>
        <div class="col-6 p-2">
            <img src="{{asset('asset/img/school/equipment/laboratory/bislaboratory07.png')}}" alt="" class="w-100">
        </div>
    </div>
    

    @include('web.client.school.layout.share.news')
@endsection
