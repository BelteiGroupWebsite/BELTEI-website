@extends('web.client.beltei_tours_travel.layout.app')

@section('content')
    <div>

        <div>
            <h4 class="title-translate-font font-bold pb-3 text-success">ដំណើរទេសចរណ៍​ ទ្វីបអាស៊ី</h4>
        </div>


        <div class="my-3">
            <h5 class="title-translate-font font-bold pb-3 text-success">នាំភ្លៀវពីបរទេស ទៅបរទេស</h5>

            <div class="container content-translate-font">
                {{-- <div class="row row-cols-2 row-cols-lg-2 g-2 g-lg-4"> --}}
                <div class="row row-cols-lg-2 g-2 g-lg-4">
                    <a href="{{ route('beltei_tours_travel.mainprogram.inbound.detail') }}?id=1" class="col">
                        <div class="p-3 border bg-light shadow rounded scale-9-hover">
                            <img class="w-80" src="{{ asset('asset/img/tours/mainprogram/outbound/outbound01.png') }}"
                                alt="">
                            <p class="height-50 align-middle align-items-center d-flex justify-content-center">
                                ១-វៀតណាម-ទីក្រុងហូជីមិញ-ក្រុងដាឡាត់</p>

                        </div>
                    </a>
                    <a href="{{ route('beltei_tours_travel.mainprogram.inbound.detail') }}?id=2" class="col">
                        <div class="p-3 border bg-light shadow rounded scale-9-hover">
                            <img class="w-80" src="{{ asset('asset/img/tours/mainprogram/outbound/outbound02.png') }}"
                                alt="">
                            <p class="height-50 align-middle align-items-center d-flex justify-content-center">
                                ២-វៀតណាម-ហូជីមិញ-ហាណូយ-សមុទ្រហាឡុង</p>

                        </div>
                    </a>
                    <a href="{{ route('beltei_tours_travel.mainprogram.inbound.detail') }}?id=2" class="col">
                        <div class="p-3 border bg-light shadow rounded scale-9-hover">
                            <img class="w-80" src="{{ asset('asset/img/tours/mainprogram/outbound/outbound03.png') }}"
                                alt="">
                            <p class="height-50 align-middle align-items-center d-flex justify-content-center">
                                ៣-វៀតណាម-ហូជីមិញ-សមុទ្រញ៉ាត្រាង-ដាឡាត់</p>

                        </div>
                    </a>
                    <a href="{{ route('beltei_tours_travel.mainprogram.inbound.detail') }}?id=2" class="col">
                        <div class="p-3 border bg-light shadow rounded scale-9-hover">
                            <img class="w-80" src="{{ asset('asset/img/tours/mainprogram/outbound/outbound04.png') }}"
                                alt="">
                            <p class="height-50 align-middle align-items-center d-flex justify-content-center">៤-ប្រទេសឡាវ
                                ទីក្រុងប៉ាសេ-ទឹកជ្រោះខនផាកផេង</p>

                        </div>
                    </a>
                    <a href="{{ route('beltei_tours_travel.mainprogram.inbound.detail') }}?id=2" class="col">
                        <div class="p-3 border bg-light shadow rounded scale-9-hover">
                            <img class="w-80" src="{{ asset('asset/img/tours/mainprogram/outbound/outbound05.png') }}"
                                alt="">
                            <p class="height-50 align-middle align-items-center d-flex justify-content-center">៥-ប្រទេសឡាវ
                                ទីក្រុងប៉ាសេ-ទីក្រុងវៀងច័ន្ទ</p>

                        </div>
                    </a>
                    <a href="{{ route('beltei_tours_travel.mainprogram.inbound.detail') }}?id=2" class="col">
                        <div class="p-3 border bg-light shadow rounded scale-9-hover">
                            <img class="w-80" src="{{ asset('asset/img/tours/mainprogram/outbound/outbound06.png') }}"
                                alt="">
                            <p class="height-50 align-middle align-items-center d-flex justify-content-center">៦-ប្រទេសឡាវ
                                ប៉ាកសេ-ទីក្រុងវៀងច័ន្ទ</p>

                        </div>
                    </a>
                    <a href="{{ route('beltei_tours_travel.mainprogram.inbound.detail') }}?id=2" class="col">
                        <div class="p-3 border bg-light shadow rounded scale-9-hover">
                            <img class="w-80" src="{{ asset('asset/img/tours/mainprogram/outbound/outbound07.png') }}"
                                alt="">
                            <p class="height-50 align-middle align-items-center d-flex justify-content-center">៧-ប្រទេសថៃ
                                ទីក្រុងបាងកក-សមុទ្រប៉ាតាយ៉ា</p>

                        </div>
                    </a>
                    <a href="{{ route('beltei_tours_travel.mainprogram.inbound.detail') }}?id=2" class="col">
                        <div class="p-3 border bg-light shadow rounded scale-9-hover">
                            <img class="w-80" src="{{ asset('asset/img/tours/mainprogram/outbound/outbound08.png') }}"
                                alt="">
                            <p class="height-50 align-middle align-items-center d-flex justify-content-center">៨-ប្រទេសថៃ
                                បាងកក-សមុទ្រប៉ាតាយ៉ា</p>

                        </div>
                    </a>
                    <a href="{{ route('beltei_tours_travel.mainprogram.inbound.detail') }}?id=2" class="col">
                        <div class="p-3 border bg-light shadow rounded scale-9-hover">
                            <img class="w-80" src="{{ asset('asset/img/tours/mainprogram/outbound/outbound09.png') }}"
                                alt="">
                            <p class="height-50 align-middle align-items-center d-flex justify-content-center">៩-ប្រទេសថៃ
                                បាងកក-ឈៀងម៉ៃ-ឈៀងរ៉ៃ</p>

                        </div>
                    </a>
                    <a href="{{ route('beltei_tours_travel.mainprogram.inbound.detail') }}?id=2" class="col">
                        <div class="p-3 border bg-light shadow rounded scale-9-hover">
                            <img class="w-80" src="{{ asset('asset/img/tours/mainprogram/outbound/outbound10.png') }}"
                                alt="">
                            <p class="height-50 align-middle align-items-center d-flex justify-content-center">
                                ១០-ប្រទេសសិង្ហបុរី-ប្រទេសម៉ាឡេស៊ី</p>

                        </div>
                    </a>
                    <a href="{{ route('beltei_tours_travel.mainprogram.inbound.detail') }}?id=2" class="col">
                        <div class="p-3 border bg-light shadow rounded scale-9-hover">
                            <img class="w-80" src="{{ asset('asset/img/tours/mainprogram/outbound/outbound11.png') }}"
                                alt="">
                            <p class="height-50 align-middle align-items-center d-flex justify-content-center">
                                ១១-ប្រទេសម៉ាឡេស៊ី-ប្រទេសសិង្ហបុរី</p>

                        </div>
                    </a>
                    <a href="{{ route('beltei_tours_travel.mainprogram.inbound.detail') }}?id=2" class="col">
                        <div class="p-3 border bg-light shadow rounded scale-9-hover">
                            <img class="w-80" src="{{ asset('asset/img/tours/mainprogram/outbound/outbound12.png') }}"
                                alt="">
                            <p class="height-50 align-middle align-items-center d-flex justify-content-center">
                                ១២-ប្រទេសម៉ាឡេស៊ី ទីក្រុងកូឡាឡាំពួរ-ភ្នំហ្គេនធីង</p>

                        </div>
                    </a>
                    <a href="{{ route('beltei_tours_travel.mainprogram.inbound.detail') }}?id=2" class="col">
                        <div class="p-3 border bg-light shadow rounded scale-9-hover">
                            <img class="w-80" src="{{ asset('asset/img/tours/mainprogram/outbound/outbound13.png') }}"
                                alt="">
                            <p class="height-50 align-middle align-items-center d-flex justify-content-center">
                                ១៣-ប្រទេសភូមា-ទីក្រុងរ៉ុងហ្គន</p>

                        </div>
                    </a>
                    <a href="{{ route('beltei_tours_travel.mainprogram.inbound.detail') }}?id=2" class="col">
                        <div class="p-3 border bg-light shadow rounded scale-9-hover">
                            <img class="w-80" src="{{ asset('asset/img/tours/mainprogram/outbound/outbound14.png') }}"
                                alt="">
                            <p class="height-50 align-middle align-items-center d-flex justify-content-center">
                                ១៤-ប្រទេសភូមា-ទីក្រុងរ៉ុងហ្គន</p>

                        </div>
                    </a>
                    <a href="{{ route('beltei_tours_travel.mainprogram.inbound.detail') }}?id=2" class="col">
                        <div class="p-3 border bg-light shadow rounded scale-9-hover">
                            <img class="w-80" src="{{ asset('asset/img/tours/mainprogram/outbound/outbound15.png') }}"
                                alt="">
                            <p class="height-50 align-middle align-items-center d-flex justify-content-center">
                                ១៥-ប្រទេសឥណ្ឌូនេស៊ី-កោះបាលី</p>

                        </div>
                    </a>
                    <a href="{{ route('beltei_tours_travel.mainprogram.inbound.detail') }}?id=2" class="col">
                        <div class="p-3 border bg-light shadow rounded scale-9-hover">
                            <img class="w-80" src="{{ asset('asset/img/tours/mainprogram/outbound/outbound16.png') }}"
                                alt="">
                            <p class="height-50 align-middle align-items-center d-flex justify-content-center">
                                ១៦-ប្រទេសឥណ្ឌូនេស៊ី-កោះបាលី</p>

                        </div>
                    </a>
                    <a href="{{ route('beltei_tours_travel.mainprogram.inbound.detail') }}?id=2" class="col">
                        <div class="p-3 border bg-light shadow rounded scale-9-hover">
                            <img class="w-80" src="{{ asset('asset/img/tours/mainprogram/outbound/outbound17.png') }}"
                                alt="">
                            <p class="height-50 align-middle align-items-center d-flex justify-content-center">
                                ១៧-ប្រទេសឥណ្ឌូនេស៊ី-កោះបាលី</p>

                        </div>
                    </a>
                    <a href="{{ route('beltei_tours_travel.mainprogram.inbound.detail') }}?id=2" class="col">
                        <div class="p-3 border bg-light shadow rounded scale-9-hover">
                            <img class="w-80" src="{{ asset('asset/img/tours/mainprogram/outbound/outbound18.png') }}"
                                alt="">
                            <p class="height-50 align-middle align-items-center d-flex justify-content-center">១៨-ប្រទេសចិន
                                ទីក្រុងប៉េកាំង-មហាកំផែង</p>

                        </div>
                    </a>
                    <a href="{{ route('beltei_tours_travel.mainprogram.inbound.detail') }}?id=2" class="col">
                        <div class="p-3 border bg-light shadow rounded scale-9-hover">
                            <img class="w-80" src="{{ asset('asset/img/tours/mainprogram/outbound/outbound19.png') }}"
                                alt="">
                            <p class="height-50 align-middle align-items-center d-flex justify-content-center">
                                ១៩-ប្រទេសចិន-ហុងកុង-ក្វាងចូវ-ម៉ាកាវ-សិនជិន-ជូហៃ</p>

                        </div>
                    </a>
                    <a href="{{ route('beltei_tours_travel.mainprogram.inbound.detail') }}?id=2" class="col">
                        <div class="p-3 border bg-light shadow rounded scale-9-hover">
                            <img class="w-80" src="{{ asset('asset/img/tours/mainprogram/outbound/outbound20.png') }}"
                                alt="">
                            <p class="height-50 align-middle align-items-center d-flex justify-content-center">២០-ប្រទេសចិន
                                ប៉េកាំង-មហាកំផែង-សៀងហៃ</p>

                        </div>
                    </a>
                    <a href="{{ route('beltei_tours_travel.mainprogram.inbound.detail') }}?id=2" class="col">
                        <div class="p-3 border bg-light shadow rounded scale-9-hover">
                            <img class="w-80" src="{{ asset('asset/img/tours/mainprogram/outbound/outbound21.png') }}"
                                alt="">
                            <p class="height-50 align-middle align-items-center d-flex justify-content-center">២១-ប្រទេសចិន
                                មហាកំផែង-សៀងហៃ-គួយលីង</p>

                        </div>
                    </a>
                    <a href="{{ route('beltei_tours_travel.mainprogram.inbound.detail') }}?id=2" class="col">
                        <div class="p-3 border bg-light shadow rounded scale-9-hover">
                            <img class="w-80" src="{{ asset('asset/img/tours/mainprogram/outbound/outbound22.png') }}"
                                alt="">
                            <p class="height-50 align-middle align-items-center d-flex justify-content-center">
                                ២២-ប្រទេសប្រ៊ុយណេ-ទីក្រុងបានដាសេរីប៊ីហ្គាវ៉ាន់</p>

                        </div>
                    </a>
                    <a href="{{ route('beltei_tours_travel.mainprogram.inbound.detail') }}?id=2" class="col">
                        <div class="p-3 border bg-light shadow rounded scale-9-hover">
                            <img class="w-80" src="{{ asset('asset/img/tours/mainprogram/outbound/outbound23.png') }}"
                                alt="">
                            <p class="height-50 align-middle align-items-center d-flex justify-content-center">
                                ២៣-ប្រទេសកូរ៉េ-សេអ៊ូល-កោះណាមី-អេវើលែន-ភ្នំទឹកកកសូរ៉ាក់</p>

                        </div>
                    </a>
                    <a href="{{ route('beltei_tours_travel.mainprogram.inbound.detail') }}?id=2" class="col">
                        <div class="p-3 border bg-light shadow rounded scale-9-hover">
                            <img class="w-80" src="{{ asset('asset/img/tours/mainprogram/outbound/outbound24.png') }}"
                                alt="">
                            <p class="height-50 align-middle align-items-center d-flex justify-content-center">
                                ២៤-ប្រទេសកូរ៉េ-សេអ៊ូល-កោះណាមី-ភ្នំទឹកកកសូរ៉ាក់</p>

                        </div>
                    </a>
                    <a href="{{ route('beltei_tours_travel.mainprogram.inbound.detail') }}?id=2" class="col">
                        <div class="p-3 border bg-light shadow rounded scale-9-hover">
                            <img class="w-80" src="{{ asset('asset/img/tours/mainprogram/outbound/outbound25.png') }}"
                                alt="">
                            <p class="height-50 align-middle align-items-center d-flex justify-content-center">
                                ២៥-ប្រទេសជប៉ុន-អូសាកា-ក្យូតុ-តូយូហាស៊ី-ភ្នំហ្វូជី-តូក្យូ</p>

                        </div>
                    </a>
                    <a href="{{ route('beltei_tours_travel.mainprogram.inbound.detail') }}?id=2" class="col">
                        <div class="p-3 border bg-light shadow rounded scale-9-hover">
                            <img class="w-80" src="{{ asset('asset/img/tours/mainprogram/outbound/outbound26.png') }}"
                                alt="">
                            <p class="height-50 align-middle align-items-center d-flex justify-content-center">
                                ២៦-ប្រទេសជប៉ុន-អូសាកា-ភ្នំហ្វូជី-ទីក្រុងតូក្យូ</p>

                        </div>
                    </a>

                </div>
            </div>

        </div>



    </div>
@endsection
