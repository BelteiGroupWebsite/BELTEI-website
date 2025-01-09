@extends('web.client.school.layout.app')

@section('content')
    <div class="px-3 ">
        <h3 class="py-3 title-translate-font">
            {!! __('school/extracurriculum/tour.header') !!}
        </h3>
        <div class="content-translate-font text-start">

            <div class="py-2">
                <h5>
                    {!! __('school/extracurriculum/tour.header-1') !!}
                </h5>
                <p class="indent-1rem pt-1">
                    {!! __('school/extracurriculum/tour.detail-1') !!}
                </p>
                <div class="row ">
                    @for ($i = 1; $i <= 10; $i++)
                        <img class="col-6 p-2" loading="lazy"
                            src="{{ asset('asset/img/school/extracurriculum/tour/1/1/' . $i . '.jpg') }}"
                            alt="">
                    @endfor
                </div>
            </div>
            <div class="py-2">
                <h5>
                    {!! __('school/extracurriculum/tour.header-2') !!}
                </h5>
                <p class="indent-1rem pt-1">
                    {!! __('school/extracurriculum/tour.detail-2') !!}
                </p>
                <div class="row ">
                    @for ($i = 1; $i <= 10; $i++)
                        <img class="col-6 p-2" loading="lazy"
                            src="{{ asset('asset/img/school/extracurriculum/tour/2/1/' . $i . '.jpg') }}"
                            alt="">
                    @endfor
                </div>
            </div>
            <div class="py-2">
                <h5>
                    {!! __('school/extracurriculum/tour.header-3') !!}
                </h5>
                <p class="indent-1rem pt-1">
                    {!! __('school/extracurriculum/tour.detail-3') !!}
                </p>
                <div class="row ">
                    @for ($i = 1; $i <= 10; $i++)
                        <img class="col-6 p-2" loading="lazy"
                            src="{{ asset('asset/img/school/extracurriculum/tour/2/2/' . $i . '.jpg') }}"
                            alt="">
                    @endfor
                </div>
            </div>
            <div class="py-2">
                <h5>
                    {!! __('school/extracurriculum/tour.header-3') !!}
                </h5>
                <p class="indent-1rem pt-1">
                    {!! __('school/extracurriculum/tour.detail-3') !!}
                </p>
                <div class="row ">
                    @for ($i = 1; $i <= 10; $i++)
                        <img class="col-6 p-2" loading="lazy"
                            src="{{ asset('asset/img/school/extracurriculum/tour/3/1/' . $i . '.jpg') }}"
                            alt="">
                    @endfor
                </div>
            </div>
            <div class="py-2">
                <h5>
                    {!! __('school/extracurriculum/tour.header-4') !!}
                </h5>
                <p class="indent-1rem pt-1">
                    {!! __('school/extracurriculum/tour.detail-4') !!}
                </p>
                <div class="row ">
                    @for ($i = 1; $i <= 10; $i++)
                        <img class="col-6 p-2" loading="lazy"
                            src="{{ asset('asset/img/school/extracurriculum/tour/3/2/' . $i . '.jpg') }}"
                            alt="">
                    @endfor
                </div>
            </div>

            <div class="py-2">
                <h5>
                    {!! __('school/extracurriculum/tour.header-5') !!}
                </h5>
                <p class="indent-1rem pt-1">
                    {!! __('school/extracurriculum/tour.detail-5') !!}
                </p>
                <div class="row ">
                    @for ($i = 1; $i <= 10; $i++)
                        <img class="col-6 p-2" loading="lazy"
                            src="{{ asset('asset/img/school/extracurriculum/tour/4/1/' . $i . '.jpg') }}"
                            alt="">
                    @endfor
                </div>
            </div>
            <div class="py-2">
                <h5>
                    {!! __('school/extracurriculum/tour.header-6') !!}
                </h5>
                <p class="indent-1rem pt-1">
                    {!! __('school/extracurriculum/tour.detail-6') !!}
                </p>
                <div class="row ">
                    @for ($i = 1; $i <= 10; $i++)
                        <img class="col-6 p-2" loading="lazy"
                            src="{{ asset('asset/img/school/extracurriculum/tour/4/2/' . $i . '.jpg') }}"
                            alt="">
                    @endfor
                </div>
            </div>


            <div class="py-2">
                <h5>
                    {!! __('school/extracurriculum/tour.header-7') !!}
                </h5>
                <p class="indent-1rem pt-1">
                    {!! __('school/extracurriculum/tour.detail-7') !!}
                </p>
                <div class="row ">
                    @for ($i = 1; $i <= 10; $i++)
                        <img class="col-6 p-2" loading="lazy"
                            src="{{ asset('asset/img/school/extracurriculum/tour/5/1/' . $i . '.jpg') }}"
                            alt="">
                    @endfor
                </div>
            </div>
            <div class="py-2">
                <h5>
                    {!! __('school/extracurriculum/tour.header-8') !!}
                </h5>
                <p class="indent-1rem pt-1">
                    {!! __('school/extracurriculum/tour.detail-8') !!}
                </p>
                <div class="row ">
                    @for ($i = 1; $i <= 10; $i++)
                        <img class="col-6 p-2" loading="lazy"
                            src="{{ asset('asset/img/school/extracurriculum/tour/5/2/' . $i . '.jpg') }}"
                            alt="">
                    @endfor
                </div>
            </div>


            <div class="py-2">
                <h5>
                    {!! __('school/extracurriculum/tour.header-9') !!}
                </h5>
                <p class="indent-1rem pt-1">
                    {!! __('school/extracurriculum/tour.detail-9') !!}
                </p>
                <div class="row ">
                    @for ($i = 1; $i <= 10; $i++)
                        <img class="col-6 p-2" loading="lazy"
                            src="{{ asset('asset/img/school/extracurriculum/tour/6/1/' . $i . '.jpg') }}"
                            alt="">
                    @endfor
                </div>
            </div>
            <div class="py-2">
                <h5>
                    {!! __('school/extracurriculum/tour.header-10') !!}
                </h5>
                <p class="indent-1rem pt-1">
                    {!! __('school/extracurriculum/tour.detail-10') !!}
                </p>
                <div class="row ">
                    @for ($i = 1; $i <= 10; $i++)
                        <img class="col-6 p-2" loading="lazy"
                            src="{{ asset('asset/img/school/extracurriculum/tour/6/2/' . $i . '.jpg') }}"
                            alt="">
                    @endfor
                </div>
            </div>


            <div class="py-2">
                <h5>
                    {!! __('school/extracurriculum/tour.header-11') !!}
                </h5>
                <p class="indent-1rem pt-1">
                    {!! __('school/extracurriculum/tour.detail-11') !!}
                </p>
                <div class="row ">
                    @for ($i = 1; $i <= 10; $i++)
                        <img class="col-6 p-2" loading="lazy"
                            src="{{ asset('asset/img/school/extracurriculum/tour/7/1/' . $i . '.jpg') }}"
                            alt="">
                    @endfor
                </div>
            </div>
            <div class="py-2">
                <h5>
                    {!! __('school/extracurriculum/tour.header-12') !!}
                </h5>
                <p class="indent-1rem pt-1">
                    {!! __('school/extracurriculum/tour.detail-12') !!}
                </p>
                <div class="row ">
                    @for ($i = 1; $i <= 10; $i++)
                        <img class="col-6 p-2" loading="lazy"
                            src="{{ asset('asset/img/school/extracurriculum/tour/7/2/' . $i . '.jpg') }}"
                            alt="">
                    @endfor
                </div>
            </div>


            <div class="py-2">
                <h5>
                    {!! __('school/extracurriculum/tour.header-13') !!}
                </h5>
                <p class="indent-1rem pt-1">
                    {!! __('school/extracurriculum/tour.detail-13') !!}
                </p>
                <div class="row ">
                    @for ($i = 1; $i <= 10; $i++)
                        <img class="col-6 p-2" loading="lazy"
                            src="{{ asset('asset/img/school/extracurriculum/tour/8/1/' . $i . '.jpg') }}"
                            alt="">
                    @endfor
                </div>
            </div>
            <div class="py-2">
                <h5>
                    {!! __('school/extracurriculum/tour.header-14') !!}
                </h5>
                <p class="indent-1rem pt-1">
                    {!! __('school/extracurriculum/tour.detail-14') !!}
                </p>
                <div class="row ">
                    @for ($i = 1; $i <= 10; $i++)
                        <img class="col-6 p-2" loading="lazy"
                            src="{{ asset('asset/img/school/extracurriculum/tour/8/2/' . $i . '.jpg') }}"
                            alt="">
                    @endfor
                </div>
            </div>


            <div class="py-2">
                <h5>
                    {!! __('school/extracurriculum/tour.header-15') !!}
                </h5>
                <p class="indent-1rem pt-1">
                    {!! __('school/extracurriculum/tour.detail-15') !!}
                </p>
                <div class="row ">
                    @for ($i = 1; $i <= 10; $i++)
                        <img class="col-6 p-2" loading="lazy"
                            src="{{ asset('asset/img/school/extracurriculum/tour/9/1/' . $i . '.jpg') }}"
                            alt="">
                    @endfor
                </div>
            </div>
            <div class="py-2">
                <h5>
                    {!! __('school/extracurriculum/tour.header-16') !!}
                </h5>
                <p class="indent-1rem pt-1">
                    {!! __('school/extracurriculum/tour.detail-16') !!}
                </p>
                <div class="row ">
                    @for ($i = 1; $i <= 10; $i++)
                        <img class="col-6 p-2" loading="lazy"
                            src="{{ asset('asset/img/school/extracurriculum/tour/9/2/' . $i . '.jpg') }}"
                            alt="">
                    @endfor
                </div>
            </div>


            <div class="py-2">
                <h5>
                    {!! __('school/extracurriculum/tour.header-16') !!}
                </h5>
                <p class="indent-1rem pt-1">
                    {!! __('school/extracurriculum/tour.detail-16') !!}
                </p>
                <div class="row ">
                    @for ($i = 1; $i <= 10; $i++)
                        <img class="col-6 p-2" loading="lazy"
                            src="{{ asset('asset/img/school/extracurriculum/tour/10/1/' . $i . '.jpg') }}"
                            alt="">
                    @endfor
                </div>
            </div>
            <div class="py-2">
                <h5>
                    {!! __('school/extracurriculum/tour.header-16') !!}
                </h5>
                <p class="indent-1rem pt-1">
                    {!! __('school/extracurriculum/tour.detail-16') !!}
                </p>
                <div class="row ">
                    @for ($i = 1; $i <= 10; $i++)
                        <img class="col-6 p-2" loading="lazy"
                            src="{{ asset('asset/img/school/extracurriculum/tour/10/2/' . $i . '.jpg') }}"
                            alt="">
                    @endfor
                </div>
            </div>


        </div>

    </div>
@endsection
