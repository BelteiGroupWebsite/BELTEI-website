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
            <img data-aos="zoom-out-up" class="" style="" src="{{ asset('asset\img\university\app\beltei_the_future_of_global_leaders.gif') }}">
        </div>
        <div>
            <a href="{{ route('beltei_university.bicc.bicc') }}">
                <img data-aos="zoom-out-up" class="" style="max-width: 200px" src="{{ asset('asset\img\university\app\BICC.jpg') }}">
            </a>
        </div>
        <div>
            <a href="https://www.facebook.com/belteiuniversity">
                <img data-aos="zoom-out-up" class="" style="max-width: 50%" src="{{ asset('asset\img\university\app\photo_2024-07-05_09-27-01.jpg') }}">
            </a>
            <a href="https://www.youtube.com/channel/UCV8pvuK4Wu0l-K1o38h5iag">
                <img data-aos="zoom-out-up" class="" style="max-width: 50%" src="{{ asset('asset\img\university\app\youtube.jpg') }}">
            </a>
        </div>
    </div>
    
    <div class="row gy-2 justify-content-center">
        <img  data-aos="zoom-out-up"  class="w-75 rounded shadow p-0" src="{{ asset('asset\img\university\app\photo_2024-07-30_19-35-57.jpg') }}" alt="">
        <img  data-aos="zoom-out-up"  class="w-75 rounded shadow p-0" src="{{ asset('asset\img\university\app\photo_2024-07-30_19-35-59.jpg') }}" alt="">
        <img  data-aos="zoom-out-up"  class="w-75 rounded shadow p-0" src="{{ asset('asset\img\university\app\photo_2024-07-05_09-06-49.jpg') }}" alt="">
        <img data-aos="zoom-out-up"  class="w-75 rounded shadow p-0" src="{{ asset('asset\img\university\app\photo_2024-07-05_09-06-55.jpg') }}" alt="">
        <img data-aos="zoom-out-up"  class="w-75 rounded shadow p-0" src="{{ asset('asset\img\university\app\photo_2024-07-05_09-06-58.jpg') }}" alt="">
    </div>

</div>


    @include('web.client.beltei_university.layout.share.news')
@endsection
