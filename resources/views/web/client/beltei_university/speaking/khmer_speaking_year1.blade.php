@extends('web.client.beltei_university.layout.app')


@section('content')

    <div class="px-2">

        <h3 class="title-translate-font p-3 bg-success text-white">{{ __('school/public-speaking/public-speaking.header')  }}</h3>
        <hr>
        <div>
            <iframe class="w-100 aspect-ratio-16"
                src="https://www.youtube.com/embed/IJQ7zQTikHA?si=QRoiYn5VRGd50xoN"></iframe>
        </div>

        <hr>
        <h5 class="mt-4 mb-2 content-translate-font mt-3 mb-1">{{ __('school/public-speaking/public-speaking.thewinner')  }} {{ __('school/public-speaking/public-speaking.n1') }}{{ __('school/public-speaking/public-speaking.n2') }} {{ __('school/public-speaking/public-speaking.in') }} 2023 ({{ __('school/public-speaking/public-speaking.Batch') }} 8)</h5>
        <div class="row">
            <div class="col-4 height-200 content-translate-font">
                <iframe class="w-100 rounded shadow-sm " width="" height=""
                    src="https://www.youtube.com/embed/IJQ7zQTikHA?si=QRoiYn5VRGd50xoN" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <p class="goldenrod font-bold">
                        {{ __('school\public-speaking\public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n1') }}
                    </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <iframe class="w-100 rounded shadow-sm " width="" height=""
                    src="https://www.youtube.com/embed/QzeQXIApCNQ?si=koiJfOxOMZSTUG6T" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <p class="goldenrod font-bold">
                        {{ __('school\public-speaking\public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n2') }}
                    </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <iframe class="w-100 rounded shadow-sm " width="" height=""
                    src="https://www.youtube.com/embed/jcMHhjwNxBU?si=HRkGNa3AyI4wPOGQ" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <p class="goldenrod font-bold">
                        {{ __('school\public-speaking\public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n3') }}
                    </p>
            </div>
        </div>

        <hr class="border border-success border-3">

    </div>

@endsection
