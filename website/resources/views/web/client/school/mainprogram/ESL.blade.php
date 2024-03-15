@extends('web.client.school.layout.app')


@section('content')

<div class="text-start p-3">

    <h2 class="title-translate-font text-center my-3 underline">{{ __('school/mainprogram/khmer.header') }}</h2>


    <div>
        
        @include('web.client.school.layout.share.mainprogram.ESL')

    </div>

</div>  

@endsection