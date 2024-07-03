@extends('web.client.school.layout.app')

@section('content')
    <div class="px-2">

        <h3 class="title-translate-font p-3 bg-success text-white">Public Speaking Content</h3>
        <hr>
        <div>
            <iframe class="w-100 aspect-ratio-16" id="vd-container"
                src="https://www.youtube.com/embed/3TjLH1SGNO8?si=-mAqtLfBtpDw3Y37" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
        </div>

        <hr>
        <h5 class="mt-4 mb-2 content-translate-font mt-3 mb-1">{{ __('school/public-speaking/public-speaking.thewinner')  }} {{ __('school/public-speaking/public-speaking.n1') }}{{ __('school/public-speaking/public-speaking.n2') }} {{ __('school/public-speaking/public-speaking.in') }} 2023 ({{ __('school/public-speaking/public-speaking.Batch') }} 8)</h5>
        <div class="row">
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/3TjLH1SGNO8/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/3TjLH1SGNO8?si=-mAqtLfBtpDw3Y37">
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school\public-speaking\public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n1') }}
                    </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/J6khC9tb5iE/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/J6khC9tb5iE?si=QW54HQF1W53c4FD7">
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school\public-speaking\public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n2') }}
                    </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/LPJlm6dEcRw/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/LPJlm6dEcRw?si=bGewBfeQDQQQjBTV">
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school\public-speaking\public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n3') }}
                    </p>
            </div>
        </div>
        <hr class="border border-success border-3">
        <h5 class="mt-4 mb-2 content-translate-font mt-3 mb-1">{{ __('school/public-speaking/public-speaking.thewinner')  }} {{ __('school/public-speaking/public-speaking.n1') }} {{ __('school/public-speaking/public-speaking.in') }} 2022 ({{ __('school/public-speaking/public-speaking.Batch') }} 7)</h5>
        <div class="row">
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/Euoy5GkV_p8/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/Euoy5GkV_p8?si=_ZxZ31wRF9CQ79uR">
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school\public-speaking\public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n1') }}
                    </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/HcSB_C73i6Y/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/HcSB_C73i6Y?si=V1d98g2ncir27aOV">
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school\public-speaking\public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n2') }}
                    </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/wF-3XW_yn_o/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/wF-3XW_yn_o?si=YtARjPaK4Xk_9l4P">
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school\public-speaking\public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n3') }}
                    </p>
            </div>
        </div>
        <hr class="border border-success border-3">
        <h5 class="mt-4 mb-2 content-translate-font mt-3 mb-1">{{ __('school/public-speaking/public-speaking.thewinner')  }} {{ __('school/public-speaking/public-speaking.n1') }} {{ __('school/public-speaking/public-speaking.in') }} 2018 ({{ __('school/public-speaking/public-speaking.Batch') }} 4)</h5>
        <div class="row">
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/bR2m9cx-o5c/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/bR2m9cx-o5c?si=WoTvPygL8EESuwhh">
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school\public-speaking\public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n1') }}
                    </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/-FE0SZ50Fjc/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/-FE0SZ50Fjc?si=59qD35ccjD-KlEpM">
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school\public-speaking\public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n2') }}
                    </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/4oHTJ7l9cvM/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/4oHTJ7l9cvM?si=OgsY1UFV78B3DIiQ">
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school\public-speaking\public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n3') }}
                    </p>
            </div>
        </div>

        <hr class="border border-success border-3">
        <h5 class="mt-4 mb-2 content-translate-font mt-3 mb-1">{{ __('school/public-speaking/public-speaking.thewinner')  }} {{ __('school/public-speaking/public-speaking.n1') }} {{ __('school/public-speaking/public-speaking.in') }} 2017 ({{ __('school/public-speaking/public-speaking.Batch') }} 3)</h5>
        <div class="row">
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/5o5EQzefWfs/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/5o5EQzefWfs?rel=0&autoplay=1">
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school\public-speaking\public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n1') }}
                    </p>

            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/5o5EQzefWfs/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/5o5EQzefWfs?rel=0&autoplay=1">
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school\public-speaking\public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n2') }}
                    </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/5o5EQzefWfs/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/5o5EQzefWfs?rel=0&autoplay=1">
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school\public-speaking\public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n3') }}
                    </p>
            </div>
        </div>

        <hr class="border border-success border-3">
        <h5 class="mt-4 mb-2 content-translate-font mt-3 mb-1">{{ __('school/public-speaking/public-speaking.thewinner')  }} {{ __('school/public-speaking/public-speaking.n1') }} {{ __('school/public-speaking/public-speaking.in') }} 2016 ({{ __('school/public-speaking/public-speaking.Batch') }} 2)</h5>
        <div class="row">
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/5o5EQzefWfs/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/5o5EQzefWfs?rel=0&autoplay=1">
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school\public-speaking\public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n1') }}
                    </p>

            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/5o5EQzefWfs/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/5o5EQzefWfs?rel=0&autoplay=1">
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school\public-speaking\public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n2') }}
                    </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/5o5EQzefWfs/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/5o5EQzefWfs?rel=0&autoplay=1">
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school\public-speaking\public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n3') }}
                    </p>
            </div>
        </div>
        <hr class="border border-success border-3">

        <h5 class="mt-4 mb-2 content-translate-font mt-3 mb-1">{{ __('school/public-speaking/public-speaking.thewinner')  }} {{ __('school/public-speaking/public-speaking.n1') }} {{ __('school/public-speaking/public-speaking.in') }} 2015 ({{ __('school/public-speaking/public-speaking.Batch') }} 1)</h5>
        <div class="row">
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/SX8QE__1zF8/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/SX8QE__1zF8?si=lIh-JyDiQc8t1Wp5">
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school\public-speaking\public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n1') }}
                    </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/KJ9MRGtxTDE/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/KJ9MRGtxTDE?si=zybcIvNGnI4ljFh6">
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school\public-speaking\public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n2') }}
                    </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/3VB_K0IQ0AA/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/3VB_K0IQ0AA?si=WM6n7msk0x85RZVw">
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school\public-speaking\public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n3') }}
                    </p>
            </div>
        </div>
        <hr class="border border-success border-3">

    </div>
@endsection
