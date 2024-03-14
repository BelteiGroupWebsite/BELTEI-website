@extends('web.client.school.layout.app')


@section('content')
    <div class="text-start p-3">

        <h2 class="text-center title-translate-font my-3 underline">{{ __('school/about/whyBeltei.header') }}</h2>

        <div class="content-translate-font text-justify">
            {!! __('school/about/whyBeltei.description') !!}
        </div>


    </div>
@endsection
