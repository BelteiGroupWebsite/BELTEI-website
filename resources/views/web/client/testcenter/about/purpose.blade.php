@extends('web.client.testcenter.layout.app')


@section('content')
    <div class="p-lg-3">

        <h2 class="title-translate-font my-3 underline">{{ __('testcenter/about/purpose.header') }}</h2>

        <div class="text-start content-translate-font ">
            {!! __('testcenter/about/purpose.description') !!}
        </div>

    </div>
@endsection
