{{-- @extends('web.client.beltei_university.layout.app')

@section('content')
<div>
    <img data-aos="zoom-out-up" class=""
        src="https://www.beltei.edu.kh/biue/images/homepics/beltei_the_future_of_global_leaders.gif"
        border="0">

    <div>
        <img src="https://www.beltei.edu.kh/biuk/images/university_facebook.png" alt="">
        <img src="https://www.beltei.edu.kh/biuk/images/beltei_youtube.png" alt="">
    </div>
    <img data-aos="zoom-out-up" class="" src="https://www.beltei.edu.kh/khm/images/announcement/New_term_2024.jpg"
        border="0">
    <img data-aos="zoom-out-up" class="" src="https://www.beltei.edu.kh/khm/images/announcement/03_02_2024_p1.jpg"
        border="0">
    <img data-aos="zoom-out-up" class="" src="https://www.beltei.edu.kh/khm/images/announcement/03_02_2024_p2.jpg"
        border="0">
    <img data-aos="zoom-out-up" class="" src="https://www.beltei.edu.kh/khm/images/announcement/03_02_2024_p3.jpg"
        border="0">
    <img data-aos="zoom-out-up" class="" src="https://www.beltei.edu.kh/khm/images/announcement/03_02_2024_p4.jpg"
        border="0">
</div>


    @include('web.client.beltei_university.layout.share.news')
@endsection --}}


@extends('web.client.beltei_university.layout.app')

@section('content')
    <div>

        <div>
            <div>
                <img data-aos="zoom-out-up" class="" style=""
                    src="{{ asset('asset/img/university/app/beltei_the_future_of_global_leaders.gif') }}">
            </div>
            <div class="d-flex gap-5 justify-content-center my-3">
                <a href="{{ route('beltei_university.bicc.bicc') }}">
                    <img data-aos="zoom-out-up" class="" style="max-width: 200px"
                        src="{{ asset('asset/img/university/app/BICC.jpg') }}">
                </a>
                <a href="{{ route('beltei_university.asaihl.index') }}">
                    <img data-aos="zoom-out-up" class="" style="max-width: 200px"
                        src="{{ asset('asset/img/university/asaihl/logo.png') }}">
                </a>
            </div>
            <div>
                <a href="https://www.facebook.com/belteiuniversity">
                    <img data-aos="zoom-out-up" class="" style="max-width: 50%"
                        src="{{ asset('asset/img/university/app/photo_2024-07-05_09-27-01.jpg') }}">
                </a>
                <a href="https://www.youtube.com/channel/UCV8pvuK4Wu0l-K1o38h5iag">
                    <img data-aos="zoom-out-up" class="" style="max-width: 50%"
                        src="{{ asset('asset/img/university/app/youtube.jpg') }}">
                </a>
            </div>
        </div>

        <div class="row gy-2 justify-content-center">
            <img data-aos="zoom-out-up" class="w-75 rounded shadow p-0"
            src="{{ asset('asset/img/university/app/2nd_intake.jpg') }}" alt="">

            {{--<img data-aos="zoom-out-up" class="w-75 rounded shadow p-0"
            src="{{ asset('asset/img/university/app/new_term_2024_2025.jpg') }}" alt="">
            <img data-aos="zoom-out-up" class="w-75 rounded shadow p-0"
            src="{{ asset('asset/img/university/app/new_term_2024_2025_1.jpg') }}" alt="">
             <img data-aos="zoom-out-up" class="w-75 rounded shadow p-0"
                src="{{ asset('asset/img/university/app/F.ChineseIntakedone.jpg') }}" alt="">
            <img data-aos="zoom-out-up" class="w-75 rounded shadow p-0"
                src="{{ asset('asset/img/university/app/F.ChineseIntake.jpg') }}" alt=""> --}}

            {{-- <img data-aos="zoom-out-up" class="w-75 rounded shadow p-0"
                src="{{ asset('asset/img/university/app/New_term_3.jpg') }}" alt="">
            <img data-aos="zoom-out-up" class="w-75 rounded shadow p-0"
                src="{{ asset('asset/img/university/app/New_term_4.jpg') }}" alt="">
            <img data-aos="zoom-out-up" class="w-75 rounded shadow p-0"
                src="{{ asset('asset/img/university/app/New_term_5.jpg') }}" alt="">
            <img data-aos="zoom-out-up" class="w-75 rounded shadow p-0"
                src="{{ asset('asset/img/university/app/New_term_6.jpg') }}" alt="">
            <img data-aos="zoom-out-up" class="w-75 rounded shadow p-0" src="{{ asset('asset/img/university/app/3.jpg') }}"
                alt="">
            <img data-aos="zoom-out-up" class="w-75 rounded shadow p-0" src="{{ asset('asset/img/university/app/4.jpg') }}"
                alt="">
            <img data-aos="zoom-out-up" class="w-75 rounded shadow p-0" src="{{ asset('asset/img/university/app/5.jpg') }}"
                alt="">
            <img data-aos="zoom-out-up" class="w-75 rounded shadow p-0"
                src="{{ asset('asset/img/university/app/Doctor_2024-09-11_16-39-16.jpg') }}" alt=""> --}}

        </div>

    </div>


    {{-- <livewire:university.share.news-component  --}}
    {{-- <livewire:university.certificate-search :degree="3" :batch="$batch" /> --}}
    @include('web.client.beltei_university.layout.share.news')
@endsection
