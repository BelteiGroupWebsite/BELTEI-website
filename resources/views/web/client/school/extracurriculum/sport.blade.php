@extends('web.client.school.layout.app')

@section('content')
    <div class="px-3 ">
        <h3 class="py-3 title-translate-font">
            {!! __('school/extracurriculum/sport.header') !!}
        </h3>
        <div class="content-translate-font text-start">

            <div class="py-2">
                <h5>
                    {!! __('school/extracurriculum/sport.header-1') !!}
                </h5>
                <p class="indent-1rem pt-1">
                    {!! __('school/extracurriculum/sport.detail-1') !!}
                </p>
                <div class="row ">
                    @for ($i = 1; $i <= 10; $i++)
                        <img class="col-6 p-2" loading="lazy"
                            src="{{ asset('asset/img/school/extracurriculum/sport/' . $i . '.jpg') }}"
                            alt="">
                    @endfor
                </div>
            </div>
        </div>

    </div>
@endsection
