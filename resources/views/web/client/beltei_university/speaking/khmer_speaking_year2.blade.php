@extends('web.client.beltei_university.layout.app')


@section('content')

    <div class="px-2">

        <h3 class="title-translate-font p-3 bg-success text-white">{{ __('school/public-speaking/public-speaking.header')  }}</h3>
        <hr>
        <div>
            <iframe class="w-100 aspect-ratio-16"
                src="https://www.youtube.com/embed/ibP4wKyKHYg?si=5JlFIlOUnUQAdyNi"></iframe>
        </div>


        <hr>
        <h5 class="mt-4 mb-2 content-translate-font mt-3 mb-1">{{ __('school/public-speaking/public-speaking.thewinner')  }} {{ __('school/public-speaking/public-speaking.n1') }}{{ __('school/public-speaking/public-speaking.n2') }} {{ __('school/public-speaking/public-speaking.in') }} 2024 ({{ __('school/public-speaking/public-speaking.Batch') }} 10)</h5>
        <div class="row">
            <div class="col-4 height-200 content-translate-font">
                <iframe class="w-100 rounded shadow-sm"
                    src="https://www.youtube.com/embed/ibP4wKyKHYg?si=5JlFIlOUnUQAdyNi"
                    title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin"
                    allowfullscreen></iframe>
                <p class="goldenrod font-bold">
                    {{ __('school/public-speaking/public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n1') }}
                </p>
            </div>

            <div class="col-4 height-200 content-translate-font">
                <iframe class="w-100 rounded shadow-sm"
                    src="https://www.youtube.com/embed/6bA9hGjnzH4?si=uI8X9Erky094wBjZ"
                    title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin"
                    allowfullscreen></iframe>
                <p class="goldenrod font-bold">
                    {{ __('school/public-speaking/public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n2') }}
                </p>
            </div>

            <div class="col-4 height-200 content-translate-font">
                <iframe class="w-100 rounded shadow-sm"
                    src="https://www.youtube.com/embed/CCPwiQHeAHE?si=PSq-j6nw9F1I6pM2"
                    title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin"
                    allowfullscreen></iframe>
                <p class="goldenrod font-bold">
                    {{ __('school/public-speaking/public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n3') }}
                </p>
            </div>

        </div>

        <hr>
        <h5 class="mt-4 mb-2 content-translate-font mt-3 mb-1">{{ __('school/public-speaking/public-speaking.thewinner')  }} {{ __('school/public-speaking/public-speaking.n1') }}{{ __('school/public-speaking/public-speaking.n2') }} {{ __('school/public-speaking/public-speaking.in') }} 2023 ({{ __('school/public-speaking/public-speaking.Batch') }} 8)</h5>
        <div class="row">
            <div class="col-4 height-200 content-translate-font">
                <iframe class="w-100 rounded shadow-sm " width="" height=""
                    src="https://www.youtube.com/embed/MLUtdHqI9fQ?si=hz6FkDIjBcTvGydd" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <p class="goldenrod font-bold">
                        {{ __('school/public-speaking/public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n1') }}
                    </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <iframe class="w-100 rounded shadow-sm " width="" height=""
                    src="https://www.youtube.com/embed/ZjTTk3Elg0s?si=2GfzOpNUnbMcHxHs" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <p class="goldenrod font-bold">
                        {{ __('school/public-speaking/public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n2') }}
                    </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <iframe class="w-100 rounded shadow-sm " width="" height=""
                    src="https://www.youtube.com/embed/wbdLpEwMPmg?si=vwKOQz1Vplpz-oFm" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <p class="goldenrod font-bold">
                        {{ __('school/public-speaking/public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n3') }}
                    </p>
            </div>
        </div>

        <hr class="border border-success border-3">

    </div>

@endsection
