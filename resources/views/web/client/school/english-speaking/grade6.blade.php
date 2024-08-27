@extends('web.client.school.layout.app')

@section('content')
    <div class="px-2">

        <h3 class="title-translate-font p-3 bg-success text-white">Public Speaking Content</h3>
        <hr>
        <div>
            <iframe class="w-100 aspect-ratio-16" id="vd-container"
                src="https://www.youtube.com/embed/H96bJnqoefo?si=_i77s6OhhjVYGls0" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
        </div>


        <hr>
        <h5 class="mt-4 mb-2 content-translate-font mt-3 mb-1">{{ __('school/public-speaking/public-speaking.thewinner') }}
            {{ __('school/public-speaking/public-speaking.n1') }}{{ __('school/public-speaking/public-speaking.n2') }}
            {{ __('school/public-speaking/public-speaking.in') }} 2024
            ({{ __('school/public-speaking/public-speaking.Batch') }} 20)</h5>
        <div class="row">
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/RaybuOZlW7k/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/RaybuOZlW7k?si=FM-y2LLsRpyxdQ-0"> --}}
                    <img class="w-100 youtube-thumbnail" src="https://img.youtube.com/vi/H96bJnqoefo/maxresdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/H96bJnqoefo?si=_i77s6OhhjVYGls0" />
                </div>

                <p class="goldenrod font-bold">
                    {{ __('school\public-speaking\public-speaking.place') }}
                    {{ __('school/public-speaking/public-speaking.n1') }}
                </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/RaybuOZlW7k/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/RaybuOZlW7k?si=FM-y2LLsRpyxdQ-0"> --}}
                    <img class="w-100 youtube-thumbnail" src="https://img.youtube.com/vi/CeXMzJGRGo4/maxresdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/CeXMzJGRGo4?si=TKGlKaHNNgpxkrk1" />
                </div>

                <p class="goldenrod font-bold">
                    {{ __('school\public-speaking\public-speaking.place') }}
                    {{ __('school/public-speaking/public-speaking.n2') }}
                </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/RaybuOZlW7k/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/RaybuOZlW7k?si=FM-y2LLsRpyxdQ-0"> --}}
                    <img class="w-100 youtube-thumbnail" src="https://img.youtube.com/vi/rr9kVvF9E00/maxresdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/rr9kVvF9E00?si=hsa18xNjUigH61o8" />
                </div>

                <p class="goldenrod font-bold">
                    {{ __('school\public-speaking\public-speaking.place') }}
                    {{ __('school/public-speaking/public-speaking.n3') }}
                </p>
            </div>
        </div>




        <hr>
        <h5 class="mt-4 mb-2 content-translate-font mt-3 mb-1">{{ __('school/public-speaking/public-speaking.thewinner') }}
            {{ __('school/public-speaking/public-speaking.n1') }}{{ __('school/public-speaking/public-speaking.n2') }}
            {{ __('school/public-speaking/public-speaking.in') }} 2023
            ({{ __('school/public-speaking/public-speaking.Batch') }} 17)</h5>
        <div class="row">
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/RaybuOZlW7k/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/RaybuOZlW7k?si=FM-y2LLsRpyxdQ-0"> --}}
                    <img class="w-100 youtube-thumbnail" src="https://img.youtube.com/vi/wOE57yFL-HU/maxresdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/wOE57yFL-HU?rel=0&autoplay=1" />
                </div>

                <p class="goldenrod font-bold">
                    {{ __('school\public-speaking\public-speaking.place') }}
                    {{ __('school/public-speaking/public-speaking.n1') }}
                </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/RaybuOZlW7k/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/RaybuOZlW7k?si=FM-y2LLsRpyxdQ-0"> --}}
                    <img class="w-100 youtube-thumbnail" src="https://img.youtube.com/vi/-ULTZvF-TJ8/maxresdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/-ULTZvF-TJ8?rel=0&autoplay=1" />
                </div>

                <p class="goldenrod font-bold">
                    {{ __('school\public-speaking\public-speaking.place') }}
                    {{ __('school/public-speaking/public-speaking.n2') }}
                </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/RaybuOZlW7k/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/RaybuOZlW7k?si=FM-y2LLsRpyxdQ-0"> --}}
                    <img class="w-100 youtube-thumbnail" src="https://img.youtube.com/vi/IQls_F62jBg/maxresdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/IQls_F62jBg?rel=0&autoplay=1" />
                </div>

                <p class="goldenrod font-bold">
                    {{ __('school\public-speaking\public-speaking.place') }}
                    {{ __('school/public-speaking/public-speaking.n3') }}
                </p>
            </div>
        </div>
        <hr class="border border-success border-3">

        <hr>
        <h5 class="mt-4 mb-2 content-translate-font mt-3 mb-1">{{ __('school/public-speaking/public-speaking.thewinner') }}
            {{ __('school/public-speaking/public-speaking.n1') }}{{ __('school/public-speaking/public-speaking.n2') }}
            {{ __('school/public-speaking/public-speaking.in') }} 2023
            ({{ __('school/public-speaking/public-speaking.Batch') }} 17)</h5>
        <div class="row">
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/RaybuOZlW7k/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/RaybuOZlW7k?si=FM-y2LLsRpyxdQ-0"> --}}
                    <img class="w-100 youtube-thumbnail" src="https://img.youtube.com/vi/D2kQ1ZFedVI/maxresdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/D2kQ1ZFedVI?rel=0&autoplay=1" />
                </div>

                <p class="goldenrod font-bold">
                    {{ __('school\public-speaking\public-speaking.place') }}
                    {{ __('school/public-speaking/public-speaking.n1') }}
                </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/RaybuOZlW7k/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/RaybuOZlW7k?si=FM-y2LLsRpyxdQ-0"> --}}
                    <img class="w-100 youtube-thumbnail" src="https://img.youtube.com/vi/tc98Y_shE8s/maxresdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/tc98Y_shE8s?rel=0&autoplay=1" />
                </div>

                <p class="goldenrod font-bold">
                    {{ __('school\public-speaking\public-speaking.place') }}
                    {{ __('school/public-speaking/public-speaking.n2') }}
                </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/RaybuOZlW7k/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/RaybuOZlW7k?si=FM-y2LLsRpyxdQ-0"> --}}
                    <img class="w-100 youtube-thumbnail" src="https://img.youtube.com/vi/D38Vmku3oz8/maxresdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/D38Vmku3oz8?rel=0&autoplay=1" />
                </div>

                <p class="goldenrod font-bold">
                    {{ __('school\public-speaking\public-speaking.place') }}
                    {{ __('school/public-speaking/public-speaking.n3') }}
                </p>
            </div>
        </div>
        <hr class="border border-success border-3">

        <hr>
        <h5 class="mt-4 mb-2 content-translate-font mt-3 mb-1">{{ __('school/public-speaking/public-speaking.thewinner') }}
            {{ __('school/public-speaking/public-speaking.n1') }}{{ __('school/public-speaking/public-speaking.n2') }}
            {{ __('school/public-speaking/public-speaking.in') }} 2023
            ({{ __('school/public-speaking/public-speaking.Batch') }} 17)</h5>
        <div class="row">
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/RaybuOZlW7k/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/RaybuOZlW7k?si=FM-y2LLsRpyxdQ-0"> --}}
                    <img class="w-100 youtube-thumbnail" src="https://img.youtube.com/vi/lPYwqKrOPII/maxresdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/lPYwqKrOPII?rel=0&autoplay=1" />
                </div>

                <p class="goldenrod font-bold">
                    {{ __('school\public-speaking\public-speaking.place') }}
                    {{ __('school/public-speaking/public-speaking.n1') }}
                </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/RaybuOZlW7k/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/RaybuOZlW7k?si=FM-y2LLsRpyxdQ-0"> --}}
                    <img class="w-100 youtube-thumbnail" src="https://img.youtube.com/vi/C1opGGcpOj4/maxresdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/C1opGGcpOj4?rel=0&autoplay=1" />
                </div>

                <p class="goldenrod font-bold">
                    {{ __('school\public-speaking\public-speaking.place') }}
                    {{ __('school/public-speaking/public-speaking.n2') }}
                </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/RaybuOZlW7k/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/RaybuOZlW7k?si=FM-y2LLsRpyxdQ-0"> --}}
                    <img class="w-100 youtube-thumbnail" src="https://img.youtube.com/vi/Mquv4ETA-dw/maxresdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/Mquv4ETA-dw?rel=0&autoplay=1" />
                </div>

                <p class="goldenrod font-bold">
                    {{ __('school\public-speaking\public-speaking.place') }}
                    {{ __('school/public-speaking/public-speaking.n3') }}
                </p>
            </div>
        </div>
        <hr class="border border-success border-3">

        <hr>
        <h5 class="mt-4 mb-2 content-translate-font mt-3 mb-1">
            {{ __('school/public-speaking/public-speaking.thewinner') }}
            {{ __('school/public-speaking/public-speaking.n1') }}{{ __('school/public-speaking/public-speaking.n2') }}
            {{ __('school/public-speaking/public-speaking.in') }} 2023
            ({{ __('school/public-speaking/public-speaking.Batch') }} 17)</h5>
        <div class="row">
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/RaybuOZlW7k/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/RaybuOZlW7k?si=FM-y2LLsRpyxdQ-0"> --}}
                    <img class="w-100 youtube-thumbnail" src="https://img.youtube.com/vi/-54Tm8DHn8k/maxresdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/-54Tm8DHn8k?rel=0&autoplay=1" />
                </div>

                <p class="goldenrod font-bold">
                    {{ __('school\public-speaking\public-speaking.place') }}
                    {{ __('school/public-speaking/public-speaking.n1') }}
                </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/RaybuOZlW7k/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/RaybuOZlW7k?si=FM-y2LLsRpyxdQ-0"> --}}
                    <img class="w-100 youtube-thumbnail" src="https://img.youtube.com/vi/bns2GzvwGaI/maxresdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/bns2GzvwGaI?rel=0&autoplay=1" />
                </div>

                <p class="goldenrod font-bold">
                    {{ __('school\public-speaking\public-speaking.place') }}
                    {{ __('school/public-speaking/public-speaking.n2') }}
                </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/RaybuOZlW7k/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/RaybuOZlW7k?si=FM-y2LLsRpyxdQ-0"> --}}
                    <img class="w-100 youtube-thumbnail" src="https://img.youtube.com/vi/COmGwUcUTj8/maxresdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/COmGwUcUTj8?rel=0&autoplay=1" />
                </div>

                <p class="goldenrod font-bold">
                    {{ __('school\public-speaking\public-speaking.place') }}
                    {{ __('school/public-speaking/public-speaking.n3') }}
                </p>
            </div>
        </div>
        <hr class="border border-success border-3">


        <hr>
        <h5 class="mt-4 mb-2 content-translate-font mt-3 mb-1">
            {{ __('school/public-speaking/public-speaking.thewinner') }}
            {{ __('school/public-speaking/public-speaking.n1') }}{{ __('school/public-speaking/public-speaking.n2') }}
            {{ __('school/public-speaking/public-speaking.in') }} 2023
            ({{ __('school/public-speaking/public-speaking.Batch') }} 17)</h5>
        <div class="row">
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/RaybuOZlW7k/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/RaybuOZlW7k?si=FM-y2LLsRpyxdQ-0"> --}}
                    <img class="w-100 youtube-thumbnail" src="https://img.youtube.com/vi/wBjO1k0J83E/maxresdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/wBjO1k0J83E?rel=0&autoplay=1" />
                </div>

                <p class="goldenrod font-bold">
                    {{ __('school\public-speaking\public-speaking.place') }}
                    {{ __('school/public-speaking/public-speaking.n1') }}
                </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/RaybuOZlW7k/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/RaybuOZlW7k?si=FM-y2LLsRpyxdQ-0"> --}}
                    <img class="w-100 youtube-thumbnail" src="https://img.youtube.com/vi/JbNmYUGefC0/maxresdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/JbNmYUGefC0?rel=0&autoplay=1" />
                </div>

                <p class="goldenrod font-bold">
                    {{ __('school\public-speaking\public-speaking.place') }}
                    {{ __('school/public-speaking/public-speaking.n2') }}
                </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/RaybuOZlW7k/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/RaybuOZlW7k?si=FM-y2LLsRpyxdQ-0"> --}}
                    <img class="w-100 youtube-thumbnail" src="https://img.youtube.com/vi/2JkdfkYvI1U/maxresdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/2JkdfkYvI1U?rel=0&autoplay=1" />
                </div>

                <p class="goldenrod font-bold">
                    {{ __('school\public-speaking\public-speaking.place') }}
                    {{ __('school/public-speaking/public-speaking.n3') }}
                </p>
            </div>
        </div>
        <hr class="border border-success border-3">


        <hr>
        <h5 class="mt-4 mb-2 content-translate-font mt-3 mb-1">
            {{ __('school/public-speaking/public-speaking.thewinner') }}
            {{ __('school/public-speaking/public-speaking.n1') }}{{ __('school/public-speaking/public-speaking.n2') }}
            {{ __('school/public-speaking/public-speaking.in') }} 2023
            ({{ __('school/public-speaking/public-speaking.Batch') }} 17)</h5>
        <div class="row">
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/RaybuOZlW7k/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/RaybuOZlW7k?si=FM-y2LLsRpyxdQ-0"> --}}
                    <img class="w-100 youtube-thumbnail" src="https://img.youtube.com/vi/NevzhquW7R4/maxresdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/NevzhquW7R4?rel=0&autoplay=1" />
                </div>

                <p class="goldenrod font-bold">
                    {{ __('school\public-speaking\public-speaking.place') }}
                    {{ __('school/public-speaking/public-speaking.n1') }}
                </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/RaybuOZlW7k/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/RaybuOZlW7k?si=FM-y2LLsRpyxdQ-0"> --}}
                    <img class="w-100 youtube-thumbnail" src="https://img.youtube.com/vi/QzPnRlISWQc/maxresdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/QzPnRlISWQc?rel=0&autoplay=1" />
                </div>

                <p class="goldenrod font-bold">
                    {{ __('school\public-speaking\public-speaking.place') }}
                    {{ __('school/public-speaking/public-speaking.n2') }}
                </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/RaybuOZlW7k/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/RaybuOZlW7k?si=FM-y2LLsRpyxdQ-0"> --}}
                    <img class="w-100 youtube-thumbnail" src="https://img.youtube.com/vi/6QyEoB88XdY/maxresdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/6QyEoB88XdY?rel=0&autoplay=1" />
                </div>

                <p class="goldenrod font-bold">
                    {{ __('school\public-speaking\public-speaking.place') }}
                    {{ __('school/public-speaking/public-speaking.n3') }}
                </p>
            </div>
        </div>
        <hr class="border border-success border-3">


        <hr>
        <h5 class="mt-4 mb-2 content-translate-font mt-3 mb-1">
            {{ __('school/public-speaking/public-speaking.thewinner') }}
            {{ __('school/public-speaking/public-speaking.n1') }}{{ __('school/public-speaking/public-speaking.n2') }}
            {{ __('school/public-speaking/public-speaking.in') }} 2023
            ({{ __('school/public-speaking/public-speaking.Batch') }} 17)</h5>
        <div class="row">
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/RaybuOZlW7k/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/RaybuOZlW7k?si=FM-y2LLsRpyxdQ-0"> --}}
                    <img class="w-100 youtube-thumbnail" src="https://img.youtube.com/vi/OryxUjxkeNQ/maxresdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/OryxUjxkeNQ?rel=0&autoplay=1" />
                </div>

                <p class="goldenrod font-bold">
                    {{ __('school\public-speaking\public-speaking.place') }}
                    {{ __('school/public-speaking/public-speaking.n1') }}
                </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/RaybuOZlW7k/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/RaybuOZlW7k?si=FM-y2LLsRpyxdQ-0"> --}}
                    <img class="w-100 youtube-thumbnail" src="https://img.youtube.com/vi/5OSX-Hj34EU/maxresdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/5OSX-Hj34EU?rel=0&autoplay=1" />
                </div>

                <p class="goldenrod font-bold">
                    {{ __('school\public-speaking\public-speaking.place') }}
                    {{ __('school/public-speaking/public-speaking.n2') }}
                </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/RaybuOZlW7k/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/RaybuOZlW7k?si=FM-y2LLsRpyxdQ-0"> --}}
                    <img class="w-100 youtube-thumbnail" src="https://img.youtube.com/vi/HK-pL0VQEWo/maxresdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/HK-pL0VQEWo?rel=0&autoplay=1" />
                </div>

                <p class="goldenrod font-bold">
                    {{ __('school\public-speaking\public-speaking.place') }}
                    {{ __('school/public-speaking/public-speaking.n3') }}
                </p>
            </div>
        </div>
        <hr class="border border-success border-3">


        <hr>
        <h5 class="mt-4 mb-2 content-translate-font mt-3 mb-1">
            {{ __('school/public-speaking/public-speaking.thewinner') }}
            {{ __('school/public-speaking/public-speaking.n1') }}{{ __('school/public-speaking/public-speaking.n2') }}
            {{ __('school/public-speaking/public-speaking.in') }} 2023
            ({{ __('school/public-speaking/public-speaking.Batch') }} 17)</h5>
        <div class="row">
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/RaybuOZlW7k/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/RaybuOZlW7k?si=FM-y2LLsRpyxdQ-0"> --}}
                    <img class="w-100 youtube-thumbnail" src="https://img.youtube.com/vi/P9UaLkJvcwk/maxresdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/P9UaLkJvcwk?rel=0&autoplay=1" />
                </div>

                <p class="goldenrod font-bold">
                    {{ __('school\public-speaking\public-speaking.place') }}
                    {{ __('school/public-speaking/public-speaking.n1') }}
                </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/RaybuOZlW7k/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/RaybuOZlW7k?si=FM-y2LLsRpyxdQ-0"> --}}
                    <img class="w-100 youtube-thumbnail" src="https://img.youtube.com/vi/OmsouHyZlBk/maxresdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/OmsouHyZlBk?rel=0&autoplay=1" />
                </div>

                <p class="goldenrod font-bold">
                    {{ __('school\public-speaking\public-speaking.place') }}
                    {{ __('school/public-speaking/public-speaking.n2') }}
                </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/RaybuOZlW7k/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/RaybuOZlW7k?si=FM-y2LLsRpyxdQ-0"> --}}
                    <img class="w-100 youtube-thumbnail" src="https://img.youtube.com/vi/lFWHG688jFs/maxresdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/lFWHG688jFs?rel=0&autoplay=1" />
                </div>

                <p class="goldenrod font-bold">
                    {{ __('school\public-speaking\public-speaking.place') }}
                    {{ __('school/public-speaking/public-speaking.n3') }}
                </p>
            </div>
        </div>
        <hr class="border border-success border-3">


        <hr>
        <h5 class="mt-4 mb-2 content-translate-font mt-3 mb-1">
            {{ __('school/public-speaking/public-speaking.thewinner') }}
            {{ __('school/public-speaking/public-speaking.n1') }}{{ __('school/public-speaking/public-speaking.n2') }}
            {{ __('school/public-speaking/public-speaking.in') }} 2023
            ({{ __('school/public-speaking/public-speaking.Batch') }} 17)</h5>
        <div class="row">
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/RaybuOZlW7k/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/RaybuOZlW7k?si=FM-y2LLsRpyxdQ-0"> --}}
                    <img class="w-100 youtube-thumbnail" src="https://img.youtube.com/vi/q3oI4qOnXqs/maxresdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/q3oI4qOnXqs?rel=0&autoplay=1" />
                </div>

                <p class="goldenrod font-bold">
                    {{ __('school\public-speaking\public-speaking.place') }}
                    {{ __('school/public-speaking/public-speaking.n1') }}
                </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/RaybuOZlW7k/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/RaybuOZlW7k?si=FM-y2LLsRpyxdQ-0"> --}}
                    <img class="w-100 youtube-thumbnail" src="https://img.youtube.com/vi/ctEkFz9TixM/maxresdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/ctEkFz9TixM?rel=0&autoplay=1" />
                </div>

                <p class="goldenrod font-bold">
                    {{ __('school\public-speaking\public-speaking.place') }}
                    {{ __('school/public-speaking/public-speaking.n2') }}
                </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/RaybuOZlW7k/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/RaybuOZlW7k?si=FM-y2LLsRpyxdQ-0"> --}}
                    <img class="w-100 youtube-thumbnail" src="https://img.youtube.com/vi/BKOSls-HAyc/maxresdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/BKOSls-HAyc?rel=0&autoplay=1" />
                </div>

                <p class="goldenrod font-bold">
                    {{ __('school\public-speaking\public-speaking.place') }}
                    {{ __('school/public-speaking/public-speaking.n3') }}
                </p>
            </div>
        </div>
        <hr class="border border-success border-3">


        <hr>
        <h5 class="mt-4 mb-2 content-translate-font mt-3 mb-1">
            {{ __('school/public-speaking/public-speaking.thewinner') }}
            {{ __('school/public-speaking/public-speaking.n1') }}{{ __('school/public-speaking/public-speaking.n2') }}
            {{ __('school/public-speaking/public-speaking.in') }} 2023
            ({{ __('school/public-speaking/public-speaking.Batch') }} 17)</h5>
        <div class="row">
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/RaybuOZlW7k/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/RaybuOZlW7k?si=FM-y2LLsRpyxdQ-0"> --}}
                    <img class="w-100 youtube-thumbnail" src="https://img.youtube.com/vi/_Jg2e40jZjA/maxresdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/_Jg2e40jZjA?rel=0&autoplay=1" />
                </div>

                <p class="goldenrod font-bold">
                    {{ __('school\public-speaking\public-speaking.place') }}
                    {{ __('school/public-speaking/public-speaking.n1') }}
                </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/RaybuOZlW7k/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/RaybuOZlW7k?si=FM-y2LLsRpyxdQ-0"> --}}
                    <img class="w-100 youtube-thumbnail" src="https://img.youtube.com/vi/qX4C8PVda7A/maxresdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/qX4C8PVda7A?rel=0&autoplay=1" />
                </div>

                <p class="goldenrod font-bold">
                    {{ __('school\public-speaking\public-speaking.place') }}
                    {{ __('school/public-speaking/public-speaking.n2') }}
                </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/RaybuOZlW7k/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/RaybuOZlW7k?si=FM-y2LLsRpyxdQ-0"> --}}
                    <img class="w-100 youtube-thumbnail" src="https://img.youtube.com/vi/TeTfOcf8HQA/maxresdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/TeTfOcf8HQA?rel=0&autoplay=1" />
                </div>

                <p class="goldenrod font-bold">
                    {{ __('school\public-speaking\public-speaking.place') }}
                    {{ __('school/public-speaking/public-speaking.n3') }}
                </p>
            </div>
        </div>
        <hr class="border border-success border-3">


        <hr>
        <h5 class="mt-4 mb-2 content-translate-font mt-3 mb-1">
            {{ __('school/public-speaking/public-speaking.thewinner') }}
            {{ __('school/public-speaking/public-speaking.n1') }}{{ __('school/public-speaking/public-speaking.n2') }}
            {{ __('school/public-speaking/public-speaking.in') }} 2023
            ({{ __('school/public-speaking/public-speaking.Batch') }} 17)</h5>
        <div class="row">
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/RaybuOZlW7k/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/RaybuOZlW7k?si=FM-y2LLsRpyxdQ-0"> --}}
                    <img class="w-100 youtube-thumbnail" src="https://img.youtube.com/vi/TeTfOcf8HQA/maxresdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/TeTfOcf8HQA?rel=0&autoplay=1" />
                </div>

                <p class="goldenrod font-bold">
                    {{ __('school\public-speaking\public-speaking.place') }}
                    {{ __('school/public-speaking/public-speaking.n1') }}
                </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/RaybuOZlW7k/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/RaybuOZlW7k?si=FM-y2LLsRpyxdQ-0"> --}}
                    <img class="w-100 youtube-thumbnail" src="https://img.youtube.com/vi/TeTfOcf8HQA/maxresdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/TeTfOcf8HQA?rel=0&autoplay=1" />
                </div>

                <p class="goldenrod font-bold">
                    {{ __('school\public-speaking\public-speaking.place') }}
                    {{ __('school/public-speaking/public-speaking.n2') }}
                </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/RaybuOZlW7k/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/RaybuOZlW7k?si=FM-y2LLsRpyxdQ-0"> --}}
                    <img class="w-100 youtube-thumbnail" src="https://img.youtube.com/vi/TeTfOcf8HQA/maxresdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/TeTfOcf8HQA?rel=0&autoplay=1" />
                </div>

                <p class="goldenrod font-bold">
                    {{ __('school\public-speaking\public-speaking.place') }}
                    {{ __('school/public-speaking/public-speaking.n3') }}
                </p>
            </div>
        </div>
        <hr class="border border-success border-3">


        <hr>
        <h5 class="mt-4 mb-2 content-translate-font mt-3 mb-1">
            {{ __('school/public-speaking/public-speaking.thewinner') }}
            {{ __('school/public-speaking/public-speaking.n1') }}{{ __('school/public-speaking/public-speaking.n2') }}
            {{ __('school/public-speaking/public-speaking.in') }} 2023
            ({{ __('school/public-speaking/public-speaking.Batch') }} 17)</h5>
        <div class="row">
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/RaybuOZlW7k/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/RaybuOZlW7k?si=FM-y2LLsRpyxdQ-0"> --}}
                    <img class="w-100 youtube-thumbnail" src="https://img.youtube.com/vi/TeTfOcf8HQA/maxresdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/TeTfOcf8HQA?rel=0&autoplay=1" />
                </div>

                <p class="goldenrod font-bold">
                    {{ __('school\public-speaking\public-speaking.place') }}
                    {{ __('school/public-speaking/public-speaking.n1') }}
                </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/RaybuOZlW7k/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/RaybuOZlW7k?si=FM-y2LLsRpyxdQ-0"> --}}
                    <img class="w-100 youtube-thumbnail" src="https://img.youtube.com/vi/TeTfOcf8HQA/maxresdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/TeTfOcf8HQA?rel=0&autoplay=1" />
                </div>

                <p class="goldenrod font-bold">
                    {{ __('school\public-speaking\public-speaking.place') }}
                    {{ __('school/public-speaking/public-speaking.n2') }}
                </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/RaybuOZlW7k/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/RaybuOZlW7k?si=FM-y2LLsRpyxdQ-0"> --}}
                    <img class="w-100 youtube-thumbnail" src="https://img.youtube.com/vi/TeTfOcf8HQA/maxresdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/TeTfOcf8HQA?rel=0&autoplay=1" />
                </div>

                <p class="goldenrod font-bold">
                    {{ __('school\public-speaking\public-speaking.place') }}
                    {{ __('school/public-speaking/public-speaking.n3') }}
                </p>
            </div>
        </div>
        <hr class="border border-success border-3">


        <hr>
        <h5 class="mt-4 mb-2 content-translate-font mt-3 mb-1">
            {{ __('school/public-speaking/public-speaking.thewinner') }}
            {{ __('school/public-speaking/public-speaking.n1') }}{{ __('school/public-speaking/public-speaking.n2') }}
            {{ __('school/public-speaking/public-speaking.in') }} 2023
            ({{ __('school/public-speaking/public-speaking.Batch') }} 17)</h5>
        <div class="row">
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/RaybuOZlW7k/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/RaybuOZlW7k?si=FM-y2LLsRpyxdQ-0"> --}}
                    <img class="w-100 youtube-thumbnail" src="https://img.youtube.com/vi/qTkU2WE4DKw/maxresdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/qTkU2WE4DKw?rel=0&autoplay=1" />
                </div>

                <p class="goldenrod font-bold">
                    {{ __('school\public-speaking\public-speaking.place') }}
                    {{ __('school/public-speaking/public-speaking.n1') }}
                </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/RaybuOZlW7k/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/RaybuOZlW7k?si=FM-y2LLsRpyxdQ-0"> --}}
                    <img class="w-100 youtube-thumbnail" src="https://img.youtube.com/vi/HqppOsK76uw/maxresdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/HqppOsK76uw?rel=0&autoplay=1" />
                </div>

                <p class="goldenrod font-bold">
                    {{ __('school\public-speaking\public-speaking.place') }}
                    {{ __('school/public-speaking/public-speaking.n2') }}
                </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/RaybuOZlW7k/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/RaybuOZlW7k?si=FM-y2LLsRpyxdQ-0"> --}}
                    <img class="w-100 youtube-thumbnail" src="https://img.youtube.com/vi/qUaIv6ZULDk/maxresdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/qUaIv6ZULDk?rel=0&autoplay=1" />
                </div>

                <p class="goldenrod font-bold">
                    {{ __('school\public-speaking\public-speaking.place') }}
                    {{ __('school/public-speaking/public-speaking.n3') }}
                </p>
            </div>
        </div>
        <hr class="border border-success border-3">


        <hr>
        <h5 class="mt-4 mb-2 content-translate-font mt-3 mb-1">
            {{ __('school/public-speaking/public-speaking.thewinner') }}
            {{ __('school/public-speaking/public-speaking.n1') }}{{ __('school/public-speaking/public-speaking.n2') }}
            {{ __('school/public-speaking/public-speaking.in') }} 2023
            ({{ __('school/public-speaking/public-speaking.Batch') }} 17)</h5>
        <div class="row">
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/RaybuOZlW7k/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/RaybuOZlW7k?si=FM-y2LLsRpyxdQ-0"> --}}
                    <img class="w-100 youtube-thumbnail" src="https://img.youtube.com/vi/qUaIv6ZULDk/maxresdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/qUaIv6ZULDk?rel=0&autoplay=1" />
                </div>

                <p class="goldenrod font-bold">
                    {{ __('school\public-speaking\public-speaking.place') }}
                    {{ __('school/public-speaking/public-speaking.n1') }}
                </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/RaybuOZlW7k/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/RaybuOZlW7k?si=FM-y2LLsRpyxdQ-0"> --}}
                    <img class="w-100 youtube-thumbnail" src="https://img.youtube.com/vi/qUaIv6ZULDk/maxresdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/qUaIv6ZULDk?rel=0&autoplay=1" />
                </div>

                <p class="goldenrod font-bold">
                    {{ __('school\public-speaking\public-speaking.place') }}
                    {{ __('school/public-speaking/public-speaking.n2') }}
                </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/RaybuOZlW7k/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/RaybuOZlW7k?si=FM-y2LLsRpyxdQ-0"> --}}
                    <img class="w-100 youtube-thumbnail" src="https://img.youtube.com/vi/qUaIv6ZULDk/maxresdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/qUaIv6ZULDk?rel=0&autoplay=1" />
                </div>

                <p class="goldenrod font-bold">
                    {{ __('school\public-speaking\public-speaking.place') }}
                    {{ __('school/public-speaking/public-speaking.n3') }}
                </p>
            </div>
        </div>
        <hr class="border border-success border-3">


        <hr>
        <h5 class="mt-4 mb-2 content-translate-font mt-3 mb-1">
            {{ __('school/public-speaking/public-speaking.thewinner') }}
            {{ __('school/public-speaking/public-speaking.n1') }}{{ __('school/public-speaking/public-speaking.n2') }}
            {{ __('school/public-speaking/public-speaking.in') }} 2023
            ({{ __('school/public-speaking/public-speaking.Batch') }} 17)</h5>
        <div class="row">
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/RaybuOZlW7k/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/RaybuOZlW7k?si=FM-y2LLsRpyxdQ-0"> --}}
                    <img class="w-100 youtube-thumbnail" src="https://img.youtube.com/vi/qUaIv6ZULDk/maxresdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/qUaIv6ZULDk?rel=0&autoplay=1" />
                </div>

                <p class="goldenrod font-bold">
                    {{ __('school\public-speaking\public-speaking.place') }}
                    {{ __('school/public-speaking/public-speaking.n1') }}
                </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/RaybuOZlW7k/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/RaybuOZlW7k?si=FM-y2LLsRpyxdQ-0"> --}}
                    <img class="w-100 youtube-thumbnail" src="https://img.youtube.com/vi/qUaIv6ZULDk/maxresdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/qUaIv6ZULDk?rel=0&autoplay=1" />
                </div>

                <p class="goldenrod font-bold">
                    {{ __('school\public-speaking\public-speaking.place') }}
                    {{ __('school/public-speaking/public-speaking.n2') }}
                </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/RaybuOZlW7k/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/RaybuOZlW7k?si=FM-y2LLsRpyxdQ-0"> --}}
                    <img class="w-100 youtube-thumbnail" src="https://img.youtube.com/vi/qUaIv6ZULDk/maxresdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/qUaIv6ZULDk?rel=0&autoplay=1" />
                </div>

                <p class="goldenrod font-bold">
                    {{ __('school\public-speaking\public-speaking.place') }}
                    {{ __('school/public-speaking/public-speaking.n3') }}
                </p>
            </div>
        </div>
        <hr class="border border-success border-3">

    </div>
@endsection
