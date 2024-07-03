@extends('web.client.beltei_university.layout.app')


@section('content')
    <div class="p-lg-3">

        <h2 class="title-translate-font my-3 underline Blue-color">{{ __('beltei_university/about/sturcture.header') }}</h2>

        <div class="w-100 justify-content-center">
            <img style=""  class="w-100 justify-content-center" src="https://www.beltei.edu.kh/khm/images/beltei_pic/organization_chart.jpg" alt="">
        </div>

        <div class="text-start content-translate-font  text-justify ">
            {!! __('beltei_university/about/sturcture.description') !!}
        </div>


    </div>
@endsection


