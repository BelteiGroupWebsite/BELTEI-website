@extends('web.client.beltei_university.layout.app')

@section('content')
    <h4 class="title-translate-font my-3 underline Blue-color">{{ __('beltei_university/about/welcome.header') }}</h4>




    <div class="text-start">
        <div class=" p-lg-4 ul-none-style">
            <img class="float-start rounded shadow-sm p-3"
                src="https://media.licdn.com/dms/image/C5603AQEfV5tW79ZMJg/profile-displayphoto-shrink_200_200/0/1593411121688?e=2147483647&v=beta&t=e5O6w9XdIM4BkXWltAqsN7_9ku4WEvY6iHWBuOxH0gM"
                alt="">
            <div class="text-justify content-translate-font">
                {!! __('beltei_university/about/welcome.welcome') !!}
            </div>
            <div style="font-weight: bold" class="mt-2 title-translate-font">
                {!! __('beltei_university/about/welcome.message') !!}
            </div>
            <div class="d-flex justify-content-end">
                <div class="col-6 text-center">
                    <div>
                        <img class="rounded" style="width: 200px" src="{{ asset('asset/img/biu/app/HEDr_sign.png') }}"
                            alt="">
                    </div>
                    <p class="title-translate-font">{!! __('beltei_university/about/welcome.founder') !!}</p>
                </div>
            </div>

        </div>
    </div>
@endsection
