@extends('web.client.beltei_university.layout.app')


@section('content')

<div class="text-start p-3">

    <h2 class="title-translate-font text-center my-3 underline">{{ __('beltei_university/mainprogram/khmer.header') }}</h2>


    <div>

        @include('web.client.beltei_university.layout.share.mainprogram.khmer')

    </div>

</div>

@endsection
