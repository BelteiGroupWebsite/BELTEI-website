@extends('web.client.charity.layout.app')


@section('content')
    <div class="text-start p-3">

        <h2 class="text-center title-translate-font my-3 underline">{{ __('charity/about/whyBeltei.header') }}</h2>

        <div class="content-translate-font text-justify">
            {!! __('charity/about/whyBeltei.description') !!}
        </div>


    </div>
@endsection
