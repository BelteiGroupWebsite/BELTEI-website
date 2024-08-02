@extends('web.client.school.layout.app')

@section('content')
    <div class="px-2">

        <h3 class="title-translate-font p-3 bg-success text-white">Public Speaking Content</h3>
        <hr>
        <div>
            <iframe class="w-100 aspect-ratio-16" id="vd-container"
                src="https://www.youtube.com/embed/9S_U4LIUaow?si=1hGPGxE1Rvhhoc9_" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
        </div>

        <hr>
        <h5 class="mt-4 mb-2 content-translate-font mt-3 mb-1">{{ __('school/public-speaking/public-speaking.thewinner')  }} {{ __('school/public-speaking/public-speaking.n1') }}{{ __('school/public-speaking/public-speaking.n2') }} {{ __('school/public-speaking/public-speaking.in') }} 2023 ({{ __('school/public-speaking/public-speaking.Batch') }} 8)</h5>
        <div class="row">
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute " width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/9S_U4LIUaow/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/9S_U4LIUaow?si=1hGPGxE1Rvhhoc9_">
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school/public-speaking/public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n1') }}
                    </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute " width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/mOVVHcZLQYM/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/mOVVHcZLQYM?si=aMMCLn1q2xC11kYE">
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school/public-speaking/public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n2') }}
                    </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute " width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/H4jRPzZLbyc/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/H4jRPzZLbyc?si=QKrt29TWgXFN2UQ4">
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school/public-speaking/public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n3') }}
                    </p>
            </div>
        </div>
        <hr class="border border-success border-3">

        <h5 class="mt-4 mb-2 content-translate-font mt-3 mb-1">{{ __('school/public-speaking/public-speaking.thewinner')  }} {{ __('school/public-speaking/public-speaking.n1') }}{{ __('school/public-speaking/public-speaking.n2') }} {{ __('school/public-speaking/public-speaking.in') }} 2023 ({{ __('school/public-speaking/public-speaking.Batch') }} 8)</h5>
        <div class="row">
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute " width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/bG5u-SnTtdg/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/bG5u-SnTtdg?si=RYmnXcYJZ8btnKma">
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school/public-speaking/public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n1') }}
                    </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute " width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/bG5u-SnTtdg/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/bG5u-SnTtdg?si=zRUIOLDibOJL7Y3w">
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school/public-speaking/public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n2') }}
                    </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute " width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/OIm2hRX0X8E/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/OIm2hRX0X8E?si=RVjkMh3u6SJQmAjk">
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school/public-speaking/public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n3') }}
                    </p>
            </div>
        </div>
        <hr class="border border-success border-3">
        <h5 class="mt-4 mb-2 content-translate-font mt-3 mb-1">{{ __('school/public-speaking/public-speaking.thewinner')  }} {{ __('school/public-speaking/public-speaking.n1') }} {{ __('school/public-speaking/public-speaking.in') }} 2022 ({{ __('school/public-speaking/public-speaking.Batch') }} 7)</h5>
        <div class="row">
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute " width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/c8DNqgZQ13c/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/c8DNqgZQ13c?si=IUS-3ZqoBcLEAhzK">
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school/public-speaking/public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n1') }}
                    </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute " width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/TrZy-aWSpl4/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/TrZy-aWSpl4?si=gGtGNIgbB17-qDci">
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school/public-speaking/public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n2') }}
                    </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute " width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/DsQ8YluxRgw/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/DsQ8YluxRgw?si=kPQp-U4bCZqkVmP3">
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school/public-speaking/public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n3') }}
                    </p>
            </div>
        </div>
        <hr class="border border-success border-3">
        <h5 class="mt-4 mb-2 content-translate-font mt-3 mb-1">{{ __('school/public-speaking/public-speaking.thewinner')  }} {{ __('school/public-speaking/public-speaking.n1') }} {{ __('school/public-speaking/public-speaking.in') }} 2018 ({{ __('school/public-speaking/public-speaking.Batch') }} 4)</h5>
        <div class="row">
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute " width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/LAZimHe0Zus/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/LAZimHe0Zus?si=jfSHYLoNvs8dvgrc">
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school/public-speaking/public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n1') }}
                    </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute " width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/esaYp2X2TAs/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/esaYp2X2TAs?si=OwSeBvrlO5UdXO80">
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school/public-speaking/public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n2') }}
                    </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute " width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/PmXCZ7Whm0c/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/PmXCZ7Whm0c?si=5PnflNWGplldujt_">
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school/public-speaking/public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n3') }}
                    </p>
            </div>
        </div>

        <hr class="border border-success border-3">
        <h5 class="mt-4 mb-2 content-translate-font mt-3 mb-1">{{ __('school/public-speaking/public-speaking.thewinner')  }} {{ __('school/public-speaking/public-speaking.n1') }} {{ __('school/public-speaking/public-speaking.in') }} 2017 ({{ __('school/public-speaking/public-speaking.Batch') }} 3)</h5>
        <div class="row">
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute " width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/i846AGaVFRk/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/i846AGaVFRk?si=yR5WtvZdExpvhzvD">
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school/public-speaking/public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n1') }}
                    </p>

            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute " width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/8-xZTr5g6PE/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/8-xZTr5g6PE?si=4ulhUyN-Khya0B0I">
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school/public-speaking/public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n2') }}
                    </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute " width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/3RFNGvq2sXM/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/3RFNGvq2sXM?si=d-EXgneRpiVUdd_9">
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school/public-speaking/public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n3') }}
                    </p>
            </div>
        </div>

        <hr class="border border-success border-3">
        <h5 class="mt-4 mb-2 content-translate-font mt-3 mb-1">{{ __('school/public-speaking/public-speaking.thewinner')  }} {{ __('school/public-speaking/public-speaking.n1') }} {{ __('school/public-speaking/public-speaking.in') }} 2016 ({{ __('school/public-speaking/public-speaking.Batch') }} 2)</h5>
        <div class="row">
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute " width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/5o5EQzefWfs/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/5o5EQzefWfs?rel=0&autoplay=1">
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school/public-speaking/public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n1') }}
                    </p>

            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute " width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/5o5EQzefWfs/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/5o5EQzefWfs?rel=0&autoplay=1">
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school/public-speaking/public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n2') }}
                    </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute " width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/5o5EQzefWfs/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/5o5EQzefWfs?rel=0&autoplay=1">
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school/public-speaking/public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n3') }}
                    </p>
            </div>
        </div>
        <hr class="border border-success border-3">

        <h5 class="mt-4 mb-2 content-translate-font mt-3 mb-1">{{ __('school/public-speaking/public-speaking.thewinner')  }} {{ __('school/public-speaking/public-speaking.n1') }} {{ __('school/public-speaking/public-speaking.in') }} 2015 ({{ __('school/public-speaking/public-speaking.Batch') }} 1)</h5>
        <div class="row">
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute " width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/yQYABKPHx0Q/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/yQYABKPHx0Q?si=QzGLOQy_ipK8LzrX">
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school/public-speaking/public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n1') }}
                    </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute " width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/Lw0Xc1sbLJ8/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/Lw0Xc1sbLJ8?si=Rr9pq6phshAfx5gM">
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school/public-speaking/public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n2') }}
                    </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute " width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/ruThfyOnv-E/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/ruThfyOnv-E?si=3ei7SvxBSLAuI_2l">
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school/public-speaking/public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n3') }}
                    </p>
            </div>
        </div>
        <hr class="border border-success border-3">

    </div>
@endsection
