@extends('web.client.charity.layout.app')


@section('content')
    <div class="p-lg-3">

        <h2 class="title-translate-font my-3 underline">{{ __('charity/about/purpose.header') }}</h2>

        <div class="text-start content-translate-font text-justify ">
            {!! __('charity/about/purpose.description') !!}
        </div>

    </div>
@endsection
