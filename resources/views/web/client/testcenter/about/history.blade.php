@extends('web.client.testcenter.layout.app')


@section('content')
    <div class="text-start p-3">

        <h2 class="title-translate-font text-center my-3 underline">{{ __('testcenter/about/history.header') }}</h2>





        <div id="campusDetail" class="content-translate-font text-justify">
            {!! __('testcenter/about/history.description') !!}
        </div>




    </div>
@endsection
