@extends('web.client.school.layout.app')

@section('content')
    <img data-aos="zoom-out-up" class="w-75"
        src="{{ asset('assets/images/school/beltei_the_best_quality_of_education_in_cambodia.gif') }}"
        border="0">

    <div class="d-flex justify-content-center">
        <img class="w-50-600px" src="{{ asset('assets/images/school/school_facebook.png') }}" alt="">
        <img class="w-50-600px" src="{{ asset('assets/images/school/beltei_youtube.png') }}" alt="">
    </div>

    <div class="row gy-2 justify-content-center">
        <img data-aos="zoom-out-up"  class="w-75" src="{{ asset('assets/images/school/New_term_2024.jpg') }}"
            border="0">
        <img data-aos="zoom-out-up"  class="w-75" src="{{ asset('assets/images/school/03_02_2024_p1.jpg') }}"
            border="0">
        <img data-aos="zoom-out-up"  class="w-75" src="{{ asset('assets/images/school/03_02_2024_p2.jpg') }}"
            border="0">
        <img data-aos="zoom-out-up"  class="w-75" src="{{ asset('assets/images/school/03_02_2024_p3.jpg') }}"
            border="0">
        <img data-aos="zoom-out-up"  class="w-75" src="{{ asset('assets/images/school/03_02_2024_p4.jpg') }}"
            border="0">
    </div>


    @include('web.client.school.layout.share.news')
@endsection
