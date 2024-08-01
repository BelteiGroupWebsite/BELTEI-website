@extends('web.client.beltei_university.layout.app')

@section('content')
    <h2 class="title-translate-font my-3 underline Blue-color">{{ __('beltei_university/about/welcome.header') }}</h2>




    <div class="text-start">
        <div class="content-translate-font p-lg-4 ul-none-style">
            <img class="float-start rounded shadow-sm p-3"
                src="https://media.licdn.com/dms/image/C5603AQEfV5tW79ZMJg/profile-displayphoto-shrink_200_200/0/1593411121688?e=2147483647&v=beta&t=e5O6w9XdIM4BkXWltAqsN7_9ku4WEvY6iHWBuOxH0gM" alt="">
            <div class="text-justify">
                {!! __('beltei_university/about/welcome.welcome') !!}
            </div>
            <img class="float-start rounded"
                src="{{ asset('asset/img/biu/app/HEDr_sign.png')}}" alt="">
        </div>
    </div>
@endsection
