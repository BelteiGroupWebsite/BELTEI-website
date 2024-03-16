@extends('web.client.school.layout.app')


@section('content')
    <div class="text-start p-3">

        <h2 class="title-translate-font text-center my-3 underline">{{ __('school/mainprogram/khmerdetail/schedule.header') }}</h2>


        <div>
            {!! __('school/mainprogram/khmerdetail/schedule.description') !!}
        </div>


        <div class="mt-5">
            @include('web.client.school.layout.share.mainprogram.khmer')
        </div>

    </div>
@endsection
