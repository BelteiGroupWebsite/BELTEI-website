@extends('web.client.relation.layout.app')


@section('content')
    <div class="p-lg-3">

        <h5 class="title-translate-font my-3 underline Blue-color">{{ __('relation/service/first_service.header') }}</h5>

        <div class="text-start content-translate-font text-justify ">
            {!! __('relation/service/first_service.description') !!}
        </div>

    </div>
@endsection
