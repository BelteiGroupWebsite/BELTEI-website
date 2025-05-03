@extends('web.client.school.layout.app')

@section('content')
    <img data-aos="zoom-out-up" class="w-75"
        src="{{ asset('assets/images/school/beltei_the_best_quality_of_education_in_cambodia.gif') }}"
        border="0">

    <div class="d-flex justify-content-center">
        <img class="w-50-600px" src="{{ asset('assets/images/school/school_facebook.png') }}" alt="">
        <img class="w-50-600px" src="{{ asset('assets/images/school/beltei_youtube.png') }}" alt="">
    </div>

    <livewire:share.poster-component :poster_id="2" />

    {{-- <div class="row gy-2 justify-content-center">
        
        <img data-aos="zoom-out-up"  class="w-75" src="{{ asset('asset/img/school/app/news/Group_1.jpg') }}"
            border="0">
        <img data-aos="zoom-out-up"  class="w-75" src="{{ asset('asset/img/school/app/news/esl.jpg') }}"
            border="0">
        <img data-aos="zoom-out-up"  class="w-75" src="{{ asset('asset/img/school/app/news/new_term_2025.jpg') }}"
            border="0">
        <img data-aos="zoom-out-up"  class="w-75" src="{{ asset('asset/img/school/app/news/gradeA.jpg') }}"
            border="0">

    </div> --}}


    @include('web.client.school.layout.share.news')
@endsection
