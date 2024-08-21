@extends('web.client.testcenter.layout.app')

@section('content')
<div class="welcome-msg d-flex justify-content-center">
    <h2 class="Battambang-Regular text-center"
        style="font-size: clamp(1rem, 4vw, 1.5rem); background: linear-gradient(to top right, #204683, #0353EF); color:white; padding-block: 1rem; border-radius: 50%; width: 450px;">
        សូមស្វាគមន៍មកកាន់
        <br>
        មជ្ឍមណ្ឌលតេស្តអន្តរជាតិ ប៊ែលធី
    </h2>
</div>
    <img data-aos="zoom-out-up" class=""
        src="https://www.beltei.edu.kh/khm/images/homepics/beltei the best quality of education in cambodia.gif"
        border="0">
    <div>
        <img src="https://www.beltei.edu.kh/khm/images/specialevents/school_facebook.png" alt="">
        <img src="https://www.beltei.edu.kh/khm/images/specialevents/beltei_youtube.png" alt="">
    </div>

    <div>
        <img data-aos="zoom-out-up" class="w-75 my-2" src="{{ asset('asset/img/BTG.png') }}" alt="">
        <img data-aos="zoom-out-up" class="w-75 my-2" src="{{ asset('asset/img/testcenter/BELTEIITCCover.png') }}" alt="">
    </div>
    
    {{-- <img data-aos="zoom-out-up" class="" src="https://www.beltei.edu.kh/khm/images/announcement/New_term_2024.jpg"
        border="0">
    <img data-aos="zoom-out-up" class="" src="https://www.beltei.edu.kh/khm/images/announcement/03_02_2024_p1.jpg"
        border="0">
    <img data-aos="zoom-out-up" class="" src="https://www.beltei.edu.kh/khm/images/announcement/03_02_2024_p2.jpg"
        border="0">
    <img data-aos="zoom-out-up" class="" src="https://www.beltei.edu.kh/khm/images/announcement/03_02_2024_p3.jpg"
        border="0">
    <img data-aos="zoom-out-up" class="" src="https://www.beltei.edu.kh/khm/images/announcement/03_02_2024_p4.jpg"
        border="0"> --}}


    {{-- @include('web.client.school.layout.share.news') --}}
@endsection
