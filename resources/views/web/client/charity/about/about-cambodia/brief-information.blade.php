@extends('web.client.charity.layout.app')


@section('content')
    <div class="text-start p-3">

        <h2 class="title-translate-font text-center my-3 underline">{{ __('charity/about/about-cambodia/brief-information.header') }}</h2>





        <div id="campusDetail" class="content-translate-font text-justify">
            {!! __('charity/about/about-cambodia/brief-information.description') !!}
        </div>



    </div>

@endsection

