@extends('web.client.school.layout.app')


@section('content')
    <div class="p-3">

        <h3 class="title-translate-font mb-3">{{ __('school/mainprogram/ESLdetail/highschool.header') }}</h3>

        <div>
            {!! __('school/mainprogram/ESLdetail/highschool.description') !!}
        </div>


    </div>

    <div class="mt-5">
        @include('web.client.school.layout.share.mainprogram.ESL')
    </div>
@endsection
