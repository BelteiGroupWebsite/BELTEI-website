@extends('web.client.school.layout.app')

@section('content')

    <div class="px-2">

        <h3 class="title-translate-font p-3 bg-success text-white">Competition</h3>
        {{-- <h3 class="title-translate-font p-3 bg-success text-white">Public Speaking Content</h3> --}}
        <hr>
        <div>
            @if ($firstPlaceVideo)
                <iframe id="vd-container" class="w-100 aspect-ratio-16" src="{{ $firstPlaceVideo->embed }}"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen>
                </iframe>
            @endif
        </div>





        @forelse ($competitionBatches as $batch)
            {{-- {{ dd($batch) }} --}}

            <hr class="border border-success border-3">
            <h5 class="mt-4 mb-2 content-translate-font mt-3 mb-1">
                {{ __('school/public-speaking/public-speaking.thewinner') }}
                {{ $batch->grade->translate->first()?->translate }} {{ __('school/public-speaking/public-speaking.in') }}
                {{ $batch->year }} ({{ __('school/public-speaking/public-speaking.Batch') }} {{ $batch->batch }}) </h5>


            <div class="row text-center">
                @foreach ($batch->videos as $video)
                    @php
                        $embedUrl = $video->embed;
                        preg_match('/embed\/([^\?]+)/', $embedUrl, $matches);
                        $videoId = $matches[1] ?? null;
                    @endphp

                    <div class="col-4 height-200 content-translate-font">
                        <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer"
                            onclick="setVideoSource(this)">
                            <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" width="20%"
                                class="position-absolute" alt="">
                            <img class="w-100 rounded shadow-sm"
                                src="https://img.youtube.com/vi/{{ $videoId }}/hqdefault.jpg"
                                alt="YouTube Video Thumbnail" data-src="{{ $video->embed }}">

                        </div>

                        <p class="goldenrod font-bold">
                            {{ __('school/public-speaking/public-speaking.place') }}
                            {{ __('school/public-speaking/public-speaking.n' . $video->rank) }}
                        </p>
                    </div>
                @endforeach
            </div>
        @empty
        @endforelse


    </div>

@endsection
