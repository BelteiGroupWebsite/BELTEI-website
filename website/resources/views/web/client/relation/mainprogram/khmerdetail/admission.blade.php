@extends('web.client.school.layout.app')


@section('content')
    <div class="p-3 text-start ">

        <h4 class="title-translate-font text-center my-3 underline">{{ __('school/mainprogram/khmerdetail/admission.header') }}</h4>

        <div>
            {!! __('school/mainprogram/khmerdetail/admission.description') !!}
        </div>



        <div class="mt-5">
            @include('web.client.school.layout.share.mainprogram.khmer')
        </div>



    </div>
@endsection
