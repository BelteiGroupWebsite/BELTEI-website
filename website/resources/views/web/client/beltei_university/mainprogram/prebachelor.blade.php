@extends('web.client.beltei_university.layout.app')


@section('content')

<div class="text-start p-3">

    <h2 class="title-translate-font text-center my-3 underline">{{ __('beltei_university/mainprogram/prebachelor.header') }}</h2>


    <div class="text-start content-translate-font  text-justify ">
        {!! __('beltei_university/mainprogram/prebachelor.description') !!}
    </div>

</div>

@endsection
