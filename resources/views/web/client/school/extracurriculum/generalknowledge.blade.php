@extends('web.client.school.layout.app')

@section('content')
    <div class="px-3">
        <h3 class="py-3">Increase General Knowledge</h3>
        <div class="content-translate-font text-start">

            <div class="py-2">
                <h5>
                    {!! __('school/extracurriculum/generalknowledge.header-1') !!}
                </h5>
                <p class="indent-1rem pt-1">
                    {!! __('school/extracurriculum/generalknowledge.detail-1') !!}
                </p>
                <div class="row ">
                    @for ($i = 1; $i <= 10; $i++)
                        <img class="col-6 p-2" loading="lazy"
                            src="{{ asset('asset/img/school/extracurriculum/generalknowledge/vape/' . $i . '.jpg') }}"
                            alt="">
                    @endfor
                </div>
            </div>
            <div class="py-2">
                <h5>
                    {!! __('school/extracurriculum/generalknowledge.header-2') !!}
                </h5>
                <p class="indent-1rem pt-1">
                    {!! __('school/extracurriculum/generalknowledge.detail-2') !!}

                </p>
                <div class="row ">
                    @for ($i = 1; $i <= 10; $i++)
                        <img class="col-6 p-2" loading="lazy"
                            src="{{ asset('asset/img/school/extracurriculum/generalknowledge/trafficlaw/' . $i . '.jpg') }}"
                            alt="">
                    @endfor
                </div>
            </div>
            <div class="py-2">
                <h5>
                    {!! __('school/extracurriculum/generalknowledge.header-3') !!}
                </h5>
                <p class="indent-1rem pt-1">
                    {!! __('school/extracurriculum/generalknowledge.detail-3') !!}
                </p>
                <div class="row ">
                    @for ($i = 1; $i <= 10; $i++)
                        <img class="col-6 p-2" loading="lazy"
                            src="{{ asset('asset/img/school/extracurriculum/generalknowledge/buddhist/' . $i . '.jpg') }}"
                            alt="">
                    @endfor
                </div>
            </div>
            <div class="py-2">
                <h5>
                    {!! __('school/extracurriculum/generalknowledge.header-4') !!}
                </h5>
                <p class="indent-1rem pt-1">
                    {!! __('school/extracurriculum/generalknowledge.detail-4') !!}
                </p>
                <div class="row ">
                    @for ($i = 1; $i <= 10; $i++)
                        <img class="col-6 p-2" loading="lazy"
                            src="{{ asset('asset/img/school/extracurriculum/generalknowledge/safetyfood/' . $i . '.jpg') }}"
                            alt="">
                    @endfor
                </div>
            </div>
            <div class="py-2">
                <h5>
                    {!! __('school/extracurriculum/generalknowledge.header-5') !!}
                </h5>
                <p class="indent-1rem pt-1">
                    {!! __('school/extracurriculum/generalknowledge.detail-5') !!}

                </p>
                <div class="row ">
                    @for ($i = 1; $i <= 10; $i++)
                        <img class="col-6 p-2" loading="lazy"
                            src="{{ asset('asset/img/school/extracurriculum/generalknowledge/digitalyouth/' . $i . '.jpg') }}"
                            alt="">
                    @endfor
                </div>
            </div>
            <div class="py-2">
                <h5>
                    {!! __('school/extracurriculum/generalknowledge.header-6') !!}
                </h5>
                <p class="indent-1rem pt-1">
                    {!! __('school/extracurriculum/generalknowledge.detail-6') !!}


                </p>
                <div class="row ">
                    @for ($i = 1; $i <= 10; $i++)
                        <img class="col-6 p-2" loading="lazy"
                            src="{{ asset('asset/img/school/extracurriculum/generalknowledge/societyyouthrole/' . $i . '.jpg') }}"
                            alt="">
                    @endfor
                </div>
            </div>
            <div class="py-2">
                <h5>
                    {!! __('school/extracurriculum/generalknowledge.header-7') !!}
                </h5>
                <p class="indent-1rem pt-1">
                    {!! __('school/extracurriculum/generalknowledge.detail-7') !!}



                </p>
                <div class="row ">
                    @for ($i = 1; $i <= 10; $i++)
                        <img class="col-6 p-2" loading="lazy"
                            src="{{ asset('asset/img/school/extracurriculum/generalknowledge/securityregime/' . $i . '.jpg') }}"
                            alt="">
                    @endfor
                </div>
            </div>
        </div>

    </div>
@endsection
