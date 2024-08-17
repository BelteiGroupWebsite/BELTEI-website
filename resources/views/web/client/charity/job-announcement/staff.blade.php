@extends('web.client.charity.layout.app')

@section('content')
    <div class="p-lg-3">

        <h2 class="title-translate-font my-3 underline">{{ __('charity/new-event/other.header') }}</h2>


        <div class="content" id="content">

        </div>


        <div class="row p-4 ">
            <img src="{{ asset('asset\img\tours\job-announcement\staff\1.png') }}" alt="">
            <img src="{{ asset('asset\img\tours\job-announcement\staff\2.png') }}" alt="">
        </div>

    </div>


@endsection
