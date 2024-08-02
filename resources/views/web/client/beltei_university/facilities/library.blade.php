@extends('web.client.beltei_university.layout.app')

@section('content')


<div>
    <div>
        <h3 class="title-translate-font p-3 bg-success text-white">{{ __('beltei_university/facilities/library.header')  }}</h3>
    </div>
    <div class="text-start content-translate-font my-3">
        {!! __('beltei_university/facilities/library.description') !!}
    </div>
</div>


@endsection
