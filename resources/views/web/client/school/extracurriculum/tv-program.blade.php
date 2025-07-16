@extends('web.client.school.layout.app')

@section('content')
<div class="px-3 ">
    <h3 class="py-3 title-translate-font">
        {!! __('school/extracurriculum/tv-program.header') !!}
    </h3>
    <div class="content-translate-font text-start">

        <div class="py-2">
            {{-- <h5>
                    {!! __('school/extracurriculum/tv-program.header-1') !!}
                </h5> --}}
            <div class="pt-1">
                {!! __('school/extracurriculum/tv-program.detail-1') !!}
            </div>
            <div class="row ">
                @for ($i = 1; $i <= 2; $i++)
                    <img class="col-6 p-2" loading="lazy"
                    src="{{ asset('asset/img/school/extracurriculum/tv-program/' . $i . '.png') }}"
                    alt="">
                @endfor
            </div>
        </div>
    </div>

</div>
@endsection