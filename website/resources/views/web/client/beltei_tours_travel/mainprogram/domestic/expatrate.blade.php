@extends('web.client.beltei_tours_travel.layout.app')

@section('content')
    <div>

        <div>
            <h4 class="title-translate-font font-bold pb-3 text-success">WELCOME TO BELTEI TOURS</h4>
            <p class="text-justify indent-1rem">BELTEI TOURS & TRAVEL provides domestic tour services for expatriates in
                Cambodia traveling to the main tourist destinations in the Kingdom of Cambodia such as: Phnom Penh capital
                city, Siem Reap , Northeast (Kratie, Stung Treng, Ratanakiri, and Mondulkiri ), Coastal areas (Koh Kong,
                Preah Sihanouk, Kampot, and Kep), and more famous tourist attractions in other provinces.​</p>
        </div>


        <div class="my-3">
            <h5 class="title-translate-font font-bold pb-3 text-success">OUR BELTEI TOURS & TRAVEL DOMESTIC TOUR AS
                FOLLOWING:</h5>

            <div class="container">
                {{-- <div class="row row-cols-2 row-cols-lg-2 g-2 g-lg-4"> --}}
                <div class="row row-cols-lg-2 g-2 g-lg-4">
                    <a href="{{ route('beltei_tours_travel.mainprogram.domestic.expatrate-detail') }}?id=1" class="col">
                        <div class="p-3 border bg-light shadow rounded scale-9-hover">
                            <img class="w-80" src="{{ asset('asset/img/tours/domestic/expatrate/watphnom.jpg') }}"
                                alt="">
                            <p class="height-50 align-middle align-items-center d-flex justify-content-center">1- PHNOM PENH</p>

                        </div>
                    </a>
                    <a href="{{ route('beltei_tours_travel.mainprogram.domestic.expatrate-detail') }}?id=2" class="col">
                        <div class="p-3 border bg-light shadow rounded scale-9-hover">
                            <img class="w-80" src="{{ asset('asset/img/tours/domestic/expatrate/img02.png') }}"
                                alt="">
                            <p class="height-50 align-middle align-items-center d-flex justify-content-center">2-PHNOM PENH-SIEM REAP</p>

                        </div>
                    </a>
                    <a href="{{ route('beltei_tours_travel.mainprogram.domestic.expatrate-detail') }}?id=3" class="col">
                        <div class="p-3 border bg-light shadow rounded scale-9-hover">
                            <img class="w-80"
                                src="{{ asset('asset/img/tours/domestic/expatrate/Kampong-Thom-province-1.jpg') }}"
                                alt="">
                            <p class="height-50 align-middle align-items-center d-flex justify-content-center">3-PHNOM PENH-KAMPONG THOM-SIEM REAP</p>

                        </div>
                    </a>
                    <a href="{{ route('beltei_tours_travel.mainprogram.domestic.expatrate-detail') }}?id=4" class="col">
                        <div class="p-3 border bg-light shadow rounded scale-9-hover">
                            <img class="w-80"
                                src="{{ asset('asset/img/tours/domestic/expatrate/14388661301438866403l-696x452.jpg') }}"
                                alt="">
                            <p class="height-50 align-middle align-items-center d-flex justify-content-center">4-PHNOM PENH- PREAH VIHEAR TEMPLE</p>

                        </div>
                    </a>
                    <a href="{{ route('beltei_tours_travel.mainprogram.domestic.expatrate-detail') }}?id=5" class="col">
                        <div class="p-3 border bg-light shadow rounded scale-9-hover">
                            <img class="w-80" src="{{ asset('asset/img/tours/domestic/expatrate/img05.png') }}"
                                alt="">
                            <p class="height-50 align-middle align-items-center d-flex justify-content-center">5-PHNOM PENH-PURSAT-BATTAMBANG</p>

                        </div>
                    </a>
                    <a href="{{ route('beltei_tours_travel.mainprogram.domestic.expatrate-detail') }}?id=6" class="col">
                        <div class="p-3 border bg-light shadow rounded scale-9-hover">
                            <img class="w-80" src="{{ asset('asset/img/tours/domestic/expatrate/img06.png') }}"
                                alt="">
                            <p class="height-50 align-middle align-items-center d-flex justify-content-center">6-Mondulkiri(Sen Monorom City)</p>

                        </div>
                    </a>
                    <a href="{{ route('beltei_tours_travel.mainprogram.domestic.expatrate-detail') }}?id=7" class="col">
                        <div class="p-3 border bg-light shadow rounded scale-9-hover">
                            <img class="w-80" src="{{ asset('asset/img/tours/domestic/expatrate/img07.png') }}"
                                alt="">
                            <p class="height-50 align-middle align-items-center d-flex justify-content-center">7-PHNOM PENH-KRATIE-RATANAKIRI</p>

                        </div>
                    </a>
                    <a href="{{ route('beltei_tours_travel.mainprogram.domestic.expatrate-detail') }}?id=8" class="col">
                        <div class="p-3 border bg-light shadow rounded scale-9-hover">
                            <img class="w-80" src="{{ asset('asset/img/tours/domestic/expatrate/img08.png') }}"
                                alt="">
                            <p class="height-50 align-middle align-items-center d-flex justify-content-center">8-PP-KRATIE-S_TRENG-RATANAKIRI-MONDULKIRI</p>

                        </div>
                    </a>
                    <a href="{{ route('beltei_tours_travel.mainprogram.domestic.expatrate-detail') }}?id=9" class="col">
                        <div class="p-3 border bg-light shadow rounded scale-9-hover">
                            <img class="w-80" src="{{ asset('asset/img/tours/domestic/expatrate/img09.png') }}"
                                alt="">
                            <p class="height-50 align-middle align-items-center d-flex justify-content-center">9-PP-KOH SDACH ISLAND-KOH KONG</p>

                        </div>
                    </a>
                    <a href="{{ route('beltei_tours_travel.mainprogram.domestic.expatrate-detail') }}?id=10" class="col">
                        <div class="p-3 border bg-light shadow rounded scale-9-hover">
                            <img class="w-80" src="{{ asset('asset/img/tours/domestic/expatrate/img10.png') }}"
                                alt="">
                            <p class="height-50 align-middle align-items-center d-flex justify-content-center">10-PP-DARA SAKOR RESORT-KOH KONG</p>

                        </div>
                    </a>
                    <a href="{{ route('beltei_tours_travel.mainprogram.domestic.expatrate-detail') }}?id=11" class="col">
                        <div class="p-3 border bg-light shadow rounded scale-9-hover">
                            <img class="w-80" src="{{ asset('asset/img/tours/domestic/expatrate/img11.png') }}"
                                alt="">
                            <p class="height-50 align-middle align-items-center d-flex justify-content-center">11-PHNOM PENH-PREAH SIHANOUK</p>

                        </div>
                    </a>
                    <a href="{{ route('beltei_tours_travel.mainprogram.domestic.expatrate-detail') }}?id=12" class="col">
                        <div class="p-3 border bg-light shadow rounded scale-9-hover">
                            <img class="w-80" src="{{ asset('asset/img/tours/domestic/expatrate/img12.png') }}"
                                alt="">
                            <p class="height-50 align-middle align-items-center d-flex justify-content-center">12-PHNOM PENH- KOH THANSUR</p>

                        </div>
                    </a>
                    <a href="{{ route('beltei_tours_travel.mainprogram.domestic.expatrate-detail') }}?id=13" class="col">
                        <div class="p-3 border bg-light shadow rounded scale-9-hover">
                            <img class="w-80" src="{{ asset('asset/img/tours/domestic/expatrate/img13.png') }}"
                                alt="">
                            <p class="height-50 align-middle align-items-center d-flex justify-content-center">13-PHNOM PENH-KAMPOT-KEP</p>

                        </div>
                    </a>
                    <a href="{{ route('beltei_tours_travel.mainprogram.domestic.expatrate-detail') }}?id=14" class="col">
                        <div class="p-3 border bg-light shadow rounded scale-9-hover">
                            <img class="w-80" src="{{ asset('asset/img/tours/domestic/expatrate/img14.png') }}"
                                alt="">
                            <p class="height-50 align-middle align-items-center d-flex justify-content-center">14-PHNOM PENH-KAMPOT ( 2DAYS-1NIGHTS)</p>

                        </div>
                    </a>
                    <a href="{{ route('beltei_tours_travel.mainprogram.domestic.expatrate-detail') }}?id=15" class="col">
                        <div class="p-3 border bg-light shadow rounded scale-9-hover">
                            <img class="w-80" src="{{ asset('asset/img/tours/domestic/expatrate/img15.png') }}"
                                alt="">
                            <p class="height-50 align-middle align-items-center d-flex justify-content-center">15-PHNOM PENH-KEP-KAMPOT-PREAH MONIVONG BOKOR NATIONAL PARK</p>

                        </div>
                    </a>
                </div>
            </div>

        </div>



    </div>
@endsection
