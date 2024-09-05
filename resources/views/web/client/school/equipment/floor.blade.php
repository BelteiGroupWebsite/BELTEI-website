@extends('web.client.school.layout.app')

@section('content')
    <div>
        <h3>Floor Image</h3>
    </div>

    <div class="row">
        <div class="col-6 p-2">
            <img src="{{ asset('asset/img/school/equipment/multipicture/bis04.png') }}" alt="" class="w-100">
        </div>
        <div class="col-6 p-2">
            <img src="{{ asset('asset/img/school/equipment/multipicture/bis05.png') }}" alt="" class="w-100">
        </div>
        <div class="col-6 p-2">
            <img src="{{ asset('asset/img/school/equipment/multipicture/bis06.png') }}" alt="" class="w-100">
        </div>
        <div class="col-6 p-2">
            <img src="{{ asset('asset/img/school/equipment/multipicture/bis07.png') }}" alt="" class="w-100">
        </div>
        <div class="col-6 p-2">
            <img src="{{ asset('asset/img/school/equipment/multipicture/bis08.png') }}" alt="" class="w-100">
        </div>
        <div class="col-6 p-2">
            <img src="{{ asset('asset/img/school/equipment/multipicture/bis09.png') }}" alt="" class="w-100">
        </div>
        <div class="col-6 p-2">
            <img src="{{ asset('asset/img/school/equipment/multipicture/bis10.png') }}" alt="" class="w-100">
        </div>
        <div class="col-6 p-2">
            <img src="{{ asset('asset/img/school/equipment/multipicture/bis11.png') }}" alt="" class="w-100">
        </div>
    </div>

    @include('web.client.school.layout.share.news')
@endsection
