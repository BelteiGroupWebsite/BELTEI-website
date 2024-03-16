@extends('web.client.school.layout.app')


@section('content')
    <div class="p-3">

        <h3 class="title-translate-font mb-3">{{ __('school/mainprogram/khmerdetail/preschool.header') }}</h3>


        <div>
            {!! __('school/mainprogram/khmerdetail/preschool.description') !!}
        </div>


    </div>

    <div class="mt-5">
        @include('web.client.school.layout.share.mainprogram.khmer')
    </div>
    
@endsection
