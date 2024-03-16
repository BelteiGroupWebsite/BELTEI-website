@extends('web.client.beltei_tours_travel.layout.app')


@section('content')
    <div class="p-lg-3">

        <h2 class="title-translate-font my-3 underline">{{ __('beltei_tours_travel/about/purpose.header') }}</h2>

        <p class="text-start content-translate-font text-justify ">
            {!! __('beltei_tours_travel/about/purpose.description') !!}
        </p>

    </div>
@endsection
