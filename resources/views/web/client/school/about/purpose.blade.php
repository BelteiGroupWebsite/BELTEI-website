@extends('web.client.school.layout.app')


@section('content')
    <div class="p-lg-3">

        <h2 class="title-translate-font my-3 underline">{{ __('school/about/purpose.header') }}</h2>

        <p class="text-start content-translate-font text-justify ">
            {!! __('school/about/purpose.description') !!}
        </p>

    </div>
@endsection
