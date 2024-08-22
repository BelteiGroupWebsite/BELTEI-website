@extends('web.client.testcenter.layout.app')



@section('content')
    <div class="p-3">

        <h2 class="title-translate-font my-3 underline">{{ __('testcenter/service/toefl.header') }}</h2>

        <div class="text-center">
            <img class="w-75 " src="{{ asset('asset/img/testcenter/TOEFL.png') }}" alt="">
        </div>
        
        <div class="text-start content-translate-font">
            {!! __('testcenter/service/toefl.description') !!}
        </div>

    </div>
@endsection