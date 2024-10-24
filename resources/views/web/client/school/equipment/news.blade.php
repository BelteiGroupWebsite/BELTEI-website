@extends('web.client.school.layout.app')

@section('content')
    <div>
        <h3 class="title-translate-font pb-3">{{ __('school/app.D9') }}</h3>
    </div>

    <div class="row">
        <div class="col-6 p-2">
            <img src="{{asset('asset/img/school/equipment/recieptionist/bis12.png')}}" alt="" class="w-100">
        </div>
        <div class="col-6 p-2">
            <img src="{{asset('asset/img/school/equipment/recieptionist/bis13.png')}}" alt="" class="w-100">
        </div>
    </div>

    @include('web.client.school.layout.share.news')
@endsection
