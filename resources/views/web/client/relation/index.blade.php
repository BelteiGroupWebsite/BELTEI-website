@extends('web.client.relation.layout.app')

@section('content')
    <div class="d-flex justify-content-center">
        <img class="w-50-600px" src="https://www.beltei.edu.kh/khm/images/specialevents/school_facebook.png" alt="">
        <img class="w-50-600px" src="https://www.beltei.edu.kh/khm/images/specialevents/beltei_youtube.png" alt="">
    </div>
    <div>
        <p class="title-translate-font my-3 Green-color">សូមស្វាគមន៍ការវិលត្រឡប់មកជាថ្មីនៃកម្មវិធីសន្និសិទ<br>
            កិច្ចសហប្រតិបតិ្តការអន្តរជាតិ ប៊ែលធី លើកទី៦<br>
            ដែលបានប្រព្រឹត្តទៅនាថ្ងៃទី៦-៨ មិថុនា ២០២៣</p>
    </div>

    <div>
        <img data-aos="zoom-out-up" class="w-75 my-2" src="{{ asset('asset/img/BTG.png') }}" alt="">
        <iframe width="500" height="285" src="https://www.youtube.com/embed/UyMJdh_j1AQ?si=KGP9XP6NAgJvCiGG" ></iframe>
        <iframe width="500" height="285" src="https://www.youtube.com/embed/Sia-Qj5lHzU?si=nOBmydBZydAB4uqw" ></iframe>
        <img data-aos="zoom-out-up"  class="w-100-600px" src="{{ asset('asset/img/relation/beltei-international-relations-service1.jpg') }}" alt="">
        <img data-aos="zoom-out-up"  class="w-100-600px" src="{{ asset('asset/img/relation/beltei-international-relations-service2.jpg') }}" alt="">
        <img data-aos="zoom-out-up"  class="w-100-600px" src="{{ asset('asset/img/relation/beltei-international-relations-service3.jpg') }}" alt="">
        <img data-aos="zoom-out-up"  class="w-100-600px" src="{{ asset('asset/img/relation/beltei-international-relations-service4.jpg') }}" alt="">
        <img data-aos="zoom-out-up"  class="w-100-600px" src="{{ asset('asset/img/relation/beltei-international-relations-service5.jpg') }}" alt="">
        <img data-aos="zoom-out-up"  class="w-100-600px" src="{{ asset('asset/img/relation/beltei-international-relations-service6.jpg') }}" alt="">
    </div>



    @include('web.client.relation.layout.share.news')
@endsection
