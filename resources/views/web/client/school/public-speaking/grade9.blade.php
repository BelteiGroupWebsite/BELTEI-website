@extends('web.client.school.layout.app')

@section('content')
    <div class="px-2">

        <h3 class="title-translate-font p-3 bg-success text-white">Public Speaking Content</h3>
        <hr>
        <div>
            <iframe class="w-100 aspect-ratio-16" src="https://www.youtube.com/embed/4jlH-_2SXwQ?si=bbj_OgvEqC-ObuCf" id="vd-container"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
        </div>

        <hr>
        <h5 class="mt-4 mb-2 content-translate-font mt-3 mb-1">{{ __('school/public-speaking/public-speaking.thewinner') }}
            {{ __('school/public-speaking/public-speaking.n1') }}{{ __('school/public-speaking/public-speaking.n2') }}
            {{ __('school/public-speaking/public-speaking.in') }} 2024
            ({{ __('school/public-speaking/public-speaking.Batch') }} 9)</h5>
        <div class="row">
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/4jlH-_2SXwQ/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/4jlH-_2SXwQ?si=bbj_OgvEqC-ObuCf">
                </div>

                <p class="goldenrod font-bold">
                    {{ __('school/public-speaking/public-speaking.place') }}
                    {{ __('school/public-speaking/public-speaking.n1') }}
                </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/QVveuMAqTno/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/QVveuMAqTno?si=i_v7T7KnmORqAqFY">
                </div>

                <p class="goldenrod font-bold">
                    {{ __('school/public-speaking/public-speaking.place') }}
                    {{ __('school/public-speaking/public-speaking.n2') }}
                </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/81UyrumG4qA/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/81UyrumG4qA?si=CvNw6ShRxwrwEpAU">
                </div>

                <p class="goldenrod font-bold">
                    {{ __('school/public-speaking/public-speaking.place') }}
                    {{ __('school/public-speaking/public-speaking.n3') }}
                </p>
            </div>
        </div>
        <hr class="border border-success border-3">
        <h5 class="mt-4 mb-2 content-translate-font mt-3 mb-1">{{ __('school/public-speaking/public-speaking.thewinner') }}
            {{ __('school/public-speaking/public-speaking.n1') }} {{ __('school/public-speaking/public-speaking.in') }}
            2022 ({{ __('school/public-speaking/public-speaking.Batch') }} 7)</h5>
        <div class="row">
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/Wo50fwU7QHk/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/Wo50fwU7QHk?si=EFbf13XJkFL-iKIb">
                </div>

                <p class="goldenrod font-bold">
                    {{ __('school/public-speaking/public-speaking.place') }}
                    {{ __('school/public-speaking/public-speaking.n1') }}
                </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/xRZOilD5xbk/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/xRZOilD5xbk?si=nVBNyxBKO4lT4tNm">
                </div>

                <p class="goldenrod font-bold">
                    {{ __('school/public-speaking/public-speaking.place') }}
                    {{ __('school/public-speaking/public-speaking.n2') }}
                </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/SIvsdlVN19k/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/SIvsdlVN19k?si=ZOO9MOClHUtDuwqa">
                </div>

                <p class="goldenrod font-bold">
                    {{ __('school/public-speaking/public-speaking.place') }}
                    {{ __('school/public-speaking/public-speaking.n3') }}
                </p>
            </div>
        </div>
        <hr class="border border-success border-3">
        <h5 class="mt-4 mb-2 content-translate-font mt-3 mb-1">{{ __('school/public-speaking/public-speaking.thewinner') }}
            {{ __('school/public-speaking/public-speaking.n1') }} {{ __('school/public-speaking/public-speaking.in') }}
            2018 ({{ __('school/public-speaking/public-speaking.Batch') }} 4)</h5>
        <div class="row">
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/DOlfc0G2vsY/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/DOlfc0G2vsY?si=6gYKQ-rcnmu3EIRL">
                </div>

                <p class="goldenrod font-bold">
                    {{ __('school/public-speaking/public-speaking.place') }}
                    {{ __('school/public-speaking/public-speaking.n1') }}
                </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/AgUhhXZ_gf8/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/AgUhhXZ_gf8?si=jfXpAmmT107URQcT">
                </div>

                <p class="goldenrod font-bold">
                    {{ __('school/public-speaking/public-speaking.place') }}
                    {{ __('school/public-speaking/public-speaking.n2') }}
                </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/na7OoX2GIYM/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/na7OoX2GIYM?si=4Q6cyXyl6BPjjjQo">
                </div>

                <p class="goldenrod font-bold">
                    {{ __('school/public-speaking/public-speaking.place') }}
                    {{ __('school/public-speaking/public-speaking.n3') }}
                </p>
            </div>
        </div>

        <hr class="border border-success border-3">
        <h5 class="mt-4 mb-2 content-translate-font mt-3 mb-1">{{ __('school/public-speaking/public-speaking.thewinner') }}
            {{ __('school/public-speaking/public-speaking.n1') }} {{ __('school/public-speaking/public-speaking.in') }}
            2017 ({{ __('school/public-speaking/public-speaking.Batch') }} 3)</h5>
        <div class="row">
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/D3hrrP1AS44/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/D3hrrP1AS44?si=s_r2Tji-lZWGrg1X">
                </div>

                <p class="goldenrod font-bold">
                    {{ __('school/public-speaking/public-speaking.place') }}
                    {{ __('school/public-speaking/public-speaking.n1') }}
                </p>

            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/XLrAeWo8T-A/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/XLrAeWo8T-A?si=AXP7KX93rplwCR7a">
                </div>

                <p class="goldenrod font-bold">
                    {{ __('school/public-speaking/public-speaking.place') }}
                    {{ __('school/public-speaking/public-speaking.n2') }}
                </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/XGpf7qqDqy4/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/XGpf7qqDqy4?si=ZrM1RwjSzDNTSBFe">
                </div>

                <p class="goldenrod font-bold">
                    {{ __('school/public-speaking/public-speaking.place') }}
                    {{ __('school/public-speaking/public-speaking.n3') }}
                </p>
            </div>
        </div>

        <hr class="border border-success border-3">
        <h5 class="mt-4 mb-2 content-translate-font mt-3 mb-1">{{ __('school/public-speaking/public-speaking.thewinner') }}
            {{ __('school/public-speaking/public-speaking.n1') }} {{ __('school/public-speaking/public-speaking.in') }}
            2016 ({{ __('school/public-speaking/public-speaking.Batch') }} 2)</h5>
        <div class="row">
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/5o5EQzefWfs/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/5o5EQzefWfs?rel=0&autoplay=1">
                </div>

                <p class="goldenrod font-bold">
                    {{ __('school/public-speaking/public-speaking.place') }}
                    {{ __('school/public-speaking/public-speaking.n1') }}
                </p>

            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/5o5EQzefWfs/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/5o5EQzefWfs?rel=0&autoplay=1">
                </div>

                <p class="goldenrod font-bold">
                    {{ __('school/public-speaking/public-speaking.place') }}
                    {{ __('school/public-speaking/public-speaking.n2') }}
                </p>
            </div>
            <div class="col-4 height-200 content-translate-font">

                <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/5o5EQzefWfs/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/5o5EQzefWfs?rel=0&autoplay=1">
                <p class="goldenrod font-bold">
                    {{ __('school/public-speaking/public-speaking.place') }}
                    {{ __('school/public-speaking/public-speaking.n3') }}
                </p>
            </div>
        </div>
        <hr class="border border-success border-3">

        <h5 class="mt-4 mb-2 content-translate-font mt-3 mb-1">
            {{ __('school/public-speaking/public-speaking.thewinner') }}
            {{ __('school/public-speaking/public-speaking.n1') }} {{ __('school/public-speaking/public-speaking.in') }}
            2015 ({{ __('school/public-speaking/public-speaking.Batch') }} 1)</h5>
        <div class="row">
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/_mQ4kylzYCQ/hqdefault.jpg" alt="YouTube Video Thumbnail"​ data-src="https://www.youtube.com/embed/_mQ4kylzYCQ?si=UdJ6HSzIS8-bni-1">
                </div>


                <p class="goldenrod font-bold">
                    {{ __('school/public-speaking/public-speaking.place') }}
                    {{ __('school/public-speaking/public-speaking.n1') }}
                </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/Xp0Al41dDPw/hqdefault.jpg" alt="YouTube Video Thumbnail"​ data-src="https://www.youtube.com/embed/Xp0Al41dDPw?si=wzOx8iSeZHAcb3Ix">
                </div>


                <p class="goldenrod font-bold">
                    {{ __('school/public-speaking/public-speaking.place') }}
                    {{ __('school/public-speaking/public-speaking.n2') }}
                </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/ayQh5Rn2r-k/hqdefault.jpg" alt="YouTube Video Thumbnail"​ data-src="https://www.youtube.com/embed/ayQh5Rn2r-k?si=HwOk2jzAXiOERRdO">
                </div>

                <p class="goldenrod font-bold">
                    {{ __('school/public-speaking/public-speaking.place') }}
                    {{ __('school/public-speaking/public-speaking.n3') }}
                </p>
            </div>
        </div>
        <hr class="border border-success border-3">

    </div>
@endsection
