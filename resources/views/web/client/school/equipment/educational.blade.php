@extends('web.client.school.layout.app')

@section('content')
    <div>
        <h3 class="title-translate-font pb-3">{{ __('school/app.D8') }}</h3>
    </div>

    @include('web.client.school.layout.share.news')
@endsection
