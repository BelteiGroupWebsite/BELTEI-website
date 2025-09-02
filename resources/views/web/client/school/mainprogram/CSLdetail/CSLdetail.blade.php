@extends('web.client.school.layout.app')


@section('content')
    <div class="text-start p-3">

        <h2 class="title-translate-font text-center my-3 underline">{{ __('school/mainprogram/CSLdetail/CSLdetail.header') }}</h2>


        <div>
            {!! __('school/mainprogram/CSLdetail/CSLdetail.description') !!}
        </div>

        <div class="row">

            <div class="col-4 p-2">
                <img src="{{ asset('asset/img/school/mainprogram/csl/cert1.jpg') }}" alt="">
            </div>
            <div class="col-4 p-2">
                <img src="{{ asset('asset/img/school/mainprogram/csl/cert2.jpg') }}" alt="">
            </div>
            <div class="col-4 p-2">
                <img src="{{ asset('asset/img/school/mainprogram/csl/cert3.jpg') }}" alt="">
            </div>

        </div>

        <div class="text-center row">
            <img class="w-50 p-2" src="{{ asset('asset/img/school/mainprogram/csl/1.jpg') }}" alt="">
            <img class="w-50 p-2" src="{{ asset('asset/img/school/mainprogram/csl/2.jpg') }}" alt="">
            <img class="w-50 p-2" src="{{ asset('asset/img/school/mainprogram/csl/3.jpg') }}" alt="">
            <img class="w-50 p-2" src="{{ asset('asset/img/school/mainprogram/csl/4.jpg') }}" alt="">
        </div>

    </div>
@endsection
