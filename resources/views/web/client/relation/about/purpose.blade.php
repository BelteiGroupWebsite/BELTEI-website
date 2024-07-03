@extends('web.client.relation.layout.app')


@section('content')
    <div class="p-lg-3">

        <h2 class="title-translate-font my-3 underline">{{ __('relation/about/purpose.header') }}</h2>

        <div class="text-start content-translate-font text-justify ">
            {!! __('relation/about/purpose.description') !!}
        </div>

    </div>
@endsection
