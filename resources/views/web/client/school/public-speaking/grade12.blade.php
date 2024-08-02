@extends('web.client.school.layout.app')

@section('content')

<script>

</script>

    <div class="px-2">

        <h3 class="title-translate-font p-3 bg-success text-white">Public Speaking Content</h3>
        <hr>
        <div>
            <iframe id="vd-container" class="w-100 aspect-ratio-16"
                src="https://www.youtube.com/embed/avZyd_SInnI?si=-9ATifwbCHJKSdas" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
        </div>

        <hr>
        <h5 class="mt-4 mb-2 content-translate-font mt-3 mb-1">{{ __('school/public-speaking/public-speaking.thewinner')  }} {{ __('school/public-speaking/public-speaking.n1') }}{{ __('school/public-speaking/public-speaking.n2') }} {{ __('school/public-speaking/public-speaking.in') }} 2024 ({{ __('school/public-speaking/public-speaking.Batch') }} 9)</h5>
        <div class="row">
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" width="20%" class="position-absolute" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/avZyd_SInnI/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/avZyd_SInnI?si=-9ATifwbCHJKSdas">

                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school/public-speaking/public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n1') }}
                    </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" width="20%" class="position-absolute" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/S3mPS60DLz4/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/S3mPS60DLz4?si=M4vIxkKLJrMXuKnS">

                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school/public-speaking/public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n2') }}
                    </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" width="20%" class="position-absolute" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/h4nTSMKPd2w/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/h4nTSMKPd2w?si=umKXzdWC7abr9wvM">

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
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" width="20%" class="position-absolute" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/sO33Y4ZaXnw/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/sO33Y4ZaXnw?si=nNjtV8eT-r5cFEw3">

                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school/public-speaking/public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n1') }}
                    </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" width="20%" class="position-absolute" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/deTKaQvEhd4/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/deTKaQvEhd4?si=IM5Q0P084ZBOZrJr">

                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school/public-speaking/public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n2') }}
                    </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" width="20%" class="position-absolute" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/VB_zkh5zF84/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/VB_zkh5zF84?si=lcLBMm1_pOYWB-fn">

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
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" width="20%" class="position-absolute" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/PMj3yQAnTEs/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/PMj3yQAnTEs?si=xODmEMPONpIT2czE">

                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school/public-speaking/public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n1') }}
                    </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" width="20%" class="position-absolute" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/BYhbYiRo7cg/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/BYhbYiRo7cg?si=FqZj_3WKEW4vvhFb">

                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school/public-speaking/public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n2') }}
                    </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" width="20%" class="position-absolute" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/LFhCXanheu0/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/LFhCXanheu0?si=hRHAN2hNgpjnUy9m">

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
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" width="20%" class="position-absolute" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/clf7nmWGjms/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/clf7nmWGjms?si=j2UTheRFE8hM40UN">

                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school/public-speaking/public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n1') }}
                    </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" width="20%" class="position-absolute" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/-QO1F9n7Afg/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/-QO1F9n7Afg?si=N4q3GBDZTBgpaN-v">

                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school/public-speaking/public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n2') }}
                    </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" width="20%" class="position-absolute" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/qJ9aTFtzTvM/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/qJ9aTFtzTvM?si=-Co6QsSAUaJqHWB-">

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
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" width="20%" class="position-absolute" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/U-oLaivszg4/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/U-oLaivszg4?si=g7wr3ImgBTB_rwCz">

                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school/public-speaking/public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n1') }}
                    </p>

            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" width="20%" class="position-absolute" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/lf2FQZN9LZ8/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/lf2FQZN9LZ8?si=3iq0VKf59fvae9ql">

                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school/public-speaking/public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n2') }}
                    </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" width="20%" class="position-absolute" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/HTJKNCgF4D8/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/HTJKNCgF4D8?si=is5su9YeeXVNeBOo">

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
                <iframe class="w-100 rounded shadow-sm" src="https://www.youtube.com/embed/5o5EQzefWfs?rel=0&autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                    <p class="goldenrod font-bold">
                        {{ __('school/public-speaking/public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n1') }}
                    </p>

            </div>
            <div class="col-4 height-200 content-translate-font">
                <iframe class="w-100 rounded shadow-sm" src="https://www.youtube.com/embed/5o5EQzefWfs?rel=0&autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                    <p class="goldenrod font-bold">
                        {{ __('school/public-speaking/public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n2') }}
                    </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <iframe class="w-100 rounded shadow-sm" src="https://www.youtube.com/embed/5o5EQzefWfs?rel=0&autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

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
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" width="20%" class="position-absolute" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/5y409ym3uf0/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/5y409ym3uf0?si=rlh2Mjr3t-9Pq9PT">

                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school/public-speaking/public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n1') }}
                    </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" width="20%" class="position-absolute" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/4JrUIVQ7ZIU/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/4JrUIVQ7ZIU?si=WQl-4xu7bMaiVrtj">

                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school/public-speaking/public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n2') }}
                    </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/4JrUIVQ7ZIU/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/4JrUIVQ7ZIU?si=WQl-4xu7bMaiVrtj">
                </div>
                    <p class="goldenrod font-bold">
                        {{ __('school/public-speaking/public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n3') }}
                    </p>
            </div>
        </div>
        <hr class="border border-success border-3">

        
        
    </div>

    
    
@endsection
