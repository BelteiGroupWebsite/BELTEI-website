@extends('web.client.school.layout.app')

@section('content')
    <div>
        <h3>{{ __('school/app.D12') }}</h3>
    </div>

    <div class="row">
        <div class="col-6 p-2">
            <img src="{{ asset('asset/img/school/equipment/cctv/bis01.png') }}" alt="" class="w-100">
        </div>
        <div class="col-6 p-2">
            <img src="{{ asset('asset/img/school/equipment/cctv/bis02.png') }}" alt="" class="w-100">
        </div>
        <div class="col-6 p-2">
            <img src="{{ asset('asset/img/school/equipment/cctv/bis03.png') }}" alt="" class="w-100">
        </div>
    </div>

    @include('web.client.school.layout.share.news')
@endsection
