@extends('web.client.beltei_tours_travel.layout.app')

@section('content')
    <div>

        <div>
            <h4 class="title-translate-font font-bold pb-3 text-success">នាំភ្លៀវពីបរទេស មកកម្ពុជា</h4>
        </div>


        <div class="my-3">
            <h5 class="title-translate-font font-bold pb-3 text-success">OUR BELTEI TOURS & TRAVEL DOMESTIC TOUR AS
                FOLLOWING:</h5>

            <div class="container">
                {{-- <div class="row row-cols-2 row-cols-lg-2 g-2 g-lg-4"> --}}
                <div class="row row-cols-lg-2 g-2 g-lg-4">
                    <a href="{{ route('beltei_tours_travel.mainprogram.domestic.expatrate-detail') }}?id=1" class="col">
                        <div class="p-3 border bg-light shadow rounded scale-9-hover">
                            <img class="w-80" src="{{ asset('asset/img/tours/mainprogram/income/income01.png') }}"
                                alt="">
                            <p class="height-50 align-middle align-items-center d-flex justify-content-center">1- Fantastic Cambodia</p>

                        </div>
                    </a>
                    <a href="{{ route('beltei_tours_travel.mainprogram.domestic.expatrate-detail') }}?id=2" class="col">
                        <div class="p-3 border bg-light shadow rounded scale-9-hover">
                            <img class="w-80" src="{{ asset('asset/img/tours/mainprogram/income/income02.png') }}"
                                alt="">
                            <p class="height-50 align-middle align-items-center d-flex justify-content-center">2- Amazing Cambodia</p>

                        </div>
                    <a href="{{ route('beltei_tours_travel.mainprogram.domestic.expatrate-detail') }}?id=3" class="col">
                        <div class="p-3 border bg-light shadow rounded scale-9-hover">
                            <img class="w-80"
                                src="{{ asset('asset/img/tours/mainprogram/income/income03.png') }}"
                                alt="">
                            <p class="height-50 align-middle align-items-center d-flex justify-content-center">3- Nothern Cambodia</p>

                        </div>
                    </a>
                    <a href="{{ route('beltei_tours_travel.mainprogram.domestic.expatrate-detail') }}?id=4" class="col">
                        <div class="p-3 border bg-light shadow rounded scale-9-hover">
                            <img class="w-80"
                                src="{{ asset('asset/img/tours/mainprogram/income/income04.png') }}"
                                alt="">
                            <p class="height-50 align-middle align-items-center d-flex justify-content-center">4- Eco-Explore</p>

                        </div>
                    </a>
                    <a href="{{ route('beltei_tours_travel.mainprogram.domestic.expatrate-detail') }}?id=5" class="col">
                        <div class="p-3 border bg-light shadow rounded scale-9-hover">
                            <img class="w-80" src="{{ asset('asset/img/tours/mainprogram/income/income05.png') }}"
                                alt="">
                            <p class="height-50 align-middle align-items-center d-flex justify-content-center">5-Beach Explore</p>

                        </div>
                    </a>
                    <a href="{{ route('beltei_tours_travel.mainprogram.domestic.expatrate-detail') }}?id=6" class="col">
                        <div class="p-3 border bg-light shadow rounded scale-9-hover">
                            <img class="w-80" src="{{ asset('asset/img/tours/mainprogram/income/income06.png') }}"
                                alt="">
                            <p class="height-50 align-middle align-items-center d-flex justify-content-center">6- Cambodia Reliable</p>

                        </div>
                    </a>
                    <a href="{{ route('beltei_tours_travel.mainprogram.domestic.expatrate-detail') }}?id=7" class="col">
                        <div class="p-3 border bg-light shadow rounded scale-9-hover">
                            <img class="w-80" src="{{ asset('asset/img/tours/mainprogram/income/income07.png') }}"
                                alt="">
                            <p class="height-50 align-middle align-items-center d-flex justify-content-center">7- Cyclical Great Lake</p>

                        </div>
                    </a>
                    <a href="{{ route('beltei_tours_travel.mainprogram.domestic.expatrate-detail') }}?id=8" class="col">
                        <div class="p-3 border bg-light shadow rounded scale-9-hover">
                            <img class="w-80" src="{{ asset('asset/img/tours/mainprogram/income/income08.png') }}"
                                alt="">
                            <p class="height-50 align-middle align-items-center d-flex justify-content-center">8- Landscape Tour</p>

                        </div>
                    </a>
                    <a href="{{ route('beltei_tours_travel.mainprogram.domestic.expatrate-detail') }}?id=9" class="col">
                        <div class="p-3 border bg-light shadow rounded scale-9-hover">
                            <img class="w-80" src="{{ asset('asset/img/tours/mainprogram/income/income09.png') }}"
                                alt="">
                            <p class="height-50 align-middle align-items-center d-flex justify-content-center">9- Angkor Classic</p>

                        </div>
                    </a>
                    <a href="{{ route('beltei_tours_travel.mainprogram.domestic.expatrate-detail') }}?id=10" class="col">
                        <div class="p-3 border bg-light shadow rounded scale-9-hover">
                            <img class="w-80" src="{{ asset('asset/img/tours/mainprogram/income/income10.png') }}"
                                alt="">
                            <p class="height-50 align-middle align-items-center d-flex justify-content-center">10- Majestic Angkor</p>

                        </div>
                    </a>
                    <a href="{{ route('beltei_tours_travel.mainprogram.domestic.expatrate-detail') }}?id=11" class="col">
                        <div class="p-3 border bg-light shadow rounded scale-9-hover">
                            <img class="w-80" src="{{ asset('asset/img/tours/mainprogram/income/income11.png') }}"
                                alt="">
                            <p class="height-50 align-middle align-items-center d-flex justify-content-center">11- Angkor Image</p>

                        </div>
                    </a>
                    <a href="{{ route('beltei_tours_travel.mainprogram.domestic.expatrate-detail') }}?id=12" class="col">
                        <div class="p-3 border bg-light shadow rounded scale-9-hover">
                            <img class="w-80" src="{{ asset('asset/img/tours/mainprogram/income/income12.png') }}"
                                alt="">
                            <p class="height-50 align-middle align-items-center d-flex justify-content-center">12- East-West Corridor</p>

                        </div>
                    </a>
                    <a href="{{ route('beltei_tours_travel.mainprogram.domestic.expatrate-detail') }}?id=13" class="col">
                        <div class="p-3 border bg-light shadow rounded scale-9-hover">
                            <img class="w-80" src="{{ asset('asset/img/tours/mainprogram/income/income13.png') }}"
                                alt="">
                            <p class="height-50 align-middle align-items-center d-flex justify-content-center">13- Border Trip</p>

                        </div>
                    </a>
                    <a href="{{ route('beltei_tours_travel.mainprogram.domestic.expatrate-detail') }}?id=14" class="col">
                        <div class="p-3 border bg-light shadow rounded scale-9-hover">
                            <img class="w-80" src="{{ asset('asset/img/tours/mainprogram/income/income14.png') }}"
                                alt="">
                            <p class="height-50 align-middle align-items-center d-flex justify-content-center">14- Border Scenery</p>

                        </div>
                    </a>

                </div>
            </div>

        </div>



    </div>
@endsection
