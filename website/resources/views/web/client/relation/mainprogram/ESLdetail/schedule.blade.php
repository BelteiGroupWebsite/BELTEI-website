@extends('web.client.school.layout.app')


@section('content')
    <div class="text-start p-3">

        <h4 class="title-translate-font text-center my-3 underline">{{ __('school/mainprogram/ESLdetail/schedule.header') }}</h4>


        <div>
            {!! __('school/mainprogram/ESLdetail/schedule.description') !!}
        </div>


        <div class="mt-5">
            @include('web.client.school.layout.share.mainprogram.ESL')
        </div>

    </div>
@endsection
