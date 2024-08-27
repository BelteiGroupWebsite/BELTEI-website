@extends('web.client.school.layout.app')

@section('content')
    <div class="px-2 w-100">

        <h3 class="title-translate-font p-3 bg-success text-white">Public Speaking Content</h3>
        <hr>
        <div>
            <iframe class="w-100 aspect-ratio-16"  id="vd-container"
                src="https://www.youtube.com/embed/BdfC23ldML0?si=S_jT6c4e86Rc2kEi" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
        </div>


        <hr>
        <h5 class="mt-4 mb-2 content-translate-font mt-3 mb-1">{{ __('school/public-speaking/public-speaking.thewinner')  }} {{ __('school/public-speaking/public-speaking.n1') }}{{ __('school/public-speaking/public-speaking.n2') }} {{ __('school/public-speaking/public-speaking.in') }} 2023 ({{ __('school/public-speaking/public-speaking.Batch') }} 17)</h5>
        <div class="row">
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm min-height-100" src="https://img.youtube.com/vi/VdCCsBOMBts/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/VdCCsBOMBts?si=Pl6wKOs2Ymp0jKxL"> --}}
                    <img class="w-100 rounded shadow-sm min-height-100" src="https://img.youtube.com/vi/BdfC23ldML0/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/BdfC23ldML0?si=S_jT6c4e86Rc2kEi" title="YouTube video player" />
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school\public-speaking\public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n1') }}
                    </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm min-height-100" src="https://img.youtube.com/vi/VdCCsBOMBts/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/VdCCsBOMBts?si=Pl6wKOs2Ymp0jKxL"> --}}
                    <img class="w-100 rounded shadow-sm min-height-100 youtube-thumbnail" src="https://img.youtube.com/vi/CSEKd5o75RE/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/CSEKd5o75RE?si=jDtsCN62NhYox-FP" title="YouTube video player" />
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school\public-speaking\public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n2') }}
                    </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm min-height-100" src="https://img.youtube.com/vi/VdCCsBOMBts/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/VdCCsBOMBts?si=Pl6wKOs2Ymp0jKxL"> --}}
                    <img class="w-100 rounded shadow-sm min-height-100 youtube-thumbnail" src="https://img.youtube.com/vi/droK0UR_5og/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/droK0UR_5og?si=Zj5CpXt9V1Xv8CQ_" title="YouTube video player" />
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school\public-speaking\public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n3') }}
                    </p>
            </div>
        </div>






        <hr>
        <h5 class="mt-4 mb-2 content-translate-font mt-3 mb-1">{{ __('school/public-speaking/public-speaking.thewinner')  }} {{ __('school/public-speaking/public-speaking.n1') }}{{ __('school/public-speaking/public-speaking.n2') }} {{ __('school/public-speaking/public-speaking.in') }} 2023 ({{ __('school/public-speaking/public-speaking.Batch') }} 17)</h5>
        <div class="row">
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm min-height-100" src="https://img.youtube.com/vi/VdCCsBOMBts/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/VdCCsBOMBts?si=Pl6wKOs2Ymp0jKxL"> --}}
                    <img class="w-100 rounded shadow-sm min-height-100" src="https://img.youtube.com/vi/wOE57yFL-HU/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/wOE57yFL-HU?si=E3JqVl1M3qINXKao" title="YouTube video player" />
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school\public-speaking\public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n1') }}
                    </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm min-height-100" src="https://img.youtube.com/vi/VdCCsBOMBts/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/VdCCsBOMBts?si=Pl6wKOs2Ymp0jKxL"> --}}
                    <img class="w-100 rounded shadow-sm min-height-100 youtube-thumbnail" src="https://img.youtube.com/vi/-ULTZvF-TJ8/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/-ULTZvF-TJ8?si=r0nNYzJWCWAtXVnU" title="YouTube video player" />
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school\public-speaking\public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n2') }}
                    </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm min-height-100" src="https://img.youtube.com/vi/VdCCsBOMBts/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/VdCCsBOMBts?si=Pl6wKOs2Ymp0jKxL"> --}}
                    <img class="w-100 rounded shadow-sm min-height-100 youtube-thumbnail" src="https://img.youtube.com/vi/IQls_F62jBg/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/IQls_F62jBg?si=rQSfMIV9elk1DNWI" title="YouTube video player" />
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school\public-speaking\public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n3') }}
                    </p>
            </div>
        </div>



        <hr class="border border-success border-3">

        <hr>
        <h5 class="mt-4 mb-2 content-translate-font mt-3 mb-1">{{ __('school/public-speaking/public-speaking.thewinner')  }} {{ __('school/public-speaking/public-speaking.n1') }}{{ __('school/public-speaking/public-speaking.n2') }} {{ __('school/public-speaking/public-speaking.in') }} 2023 ({{ __('school/public-speaking/public-speaking.Batch') }} 17)</h5>
        <div class="row">
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm min-height-100" src="https://img.youtube.com/vi/VdCCsBOMBts/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/VdCCsBOMBts?si=Pl6wKOs2Ymp0jKxL"> --}}
                    <img class="w-100 rounded shadow-sm min-height-100 youtube-thumbnail" src="https://img.youtube.com/vi/D2kQ1ZFedVI/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/D2kQ1ZFedVI?si=wAoBuKL4GClVVrJc" title="YouTube video player" />
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school\public-speaking\public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n1') }}
                    </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm min-height-100" src="https://img.youtube.com/vi/VdCCsBOMBts/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/VdCCsBOMBts?si=Pl6wKOs2Ymp0jKxL"> --}}
                    <img class="w-100 rounded shadow-sm min-height-100 youtube-thumbnail" src="https://img.youtube.com/vi/tc98Y_shE8s/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/tc98Y_shE8s?si=4T3VH6IJxKlLXrM6" title="YouTube video player" />
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school\public-speaking\public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n2') }}
                    </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm min-height-100" src="https://img.youtube.com/vi/VdCCsBOMBts/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/VdCCsBOMBts?si=Pl6wKOs2Ymp0jKxL"> --}}
                    <img class="w-100 rounded shadow-sm min-height-100 youtube-thumbnail" src="https://img.youtube.com/vi/D38Vmku3oz8/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/D38Vmku3oz8?si=waOBW86p9Ud4y3Gp" title="YouTube video player" />
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school\public-speaking\public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n3') }}
                    </p>
            </div>
        </div>
        <hr class="border border-success border-3">

        <hr>
        <h5 class="mt-4 mb-2 content-translate-font mt-3 mb-1">{{ __('school/public-speaking/public-speaking.thewinner')  }} {{ __('school/public-speaking/public-speaking.n1') }}{{ __('school/public-speaking/public-speaking.n2') }} {{ __('school/public-speaking/public-speaking.in') }} 2023 ({{ __('school/public-speaking/public-speaking.Batch') }} 17)</h5>
        <div class="row">
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm min-height-100" src="https://img.youtube.com/vi/VdCCsBOMBts/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/VdCCsBOMBts?si=Pl6wKOs2Ymp0jKxL"> --}}
                    <img class="w-100 rounded shadow-sm min-height-100 youtube-thumbnail" src="https://img.youtube.com/vi/lPYwqKrOPII/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/lPYwqKrOPII?si=KFFdx2yMudinZC-t" title="YouTube video player" />
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school\public-speaking\public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n1') }}
                    </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm min-height-100" src="https://img.youtube.com/vi/VdCCsBOMBts/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/VdCCsBOMBts?si=Pl6wKOs2Ymp0jKxL"> --}}
                    <img class="w-100 rounded shadow-sm min-height-100 youtube-thumbnail" src="https://img.youtube.com/vi/C1opGGcpOj4/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/C1opGGcpOj4?si=vKah0EFdd11YPLMK" title="YouTube video player" />
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school\public-speaking\public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n2') }}
                    </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm min-height-100" src="https://img.youtube.com/vi/VdCCsBOMBts/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/VdCCsBOMBts?si=Pl6wKOs2Ymp0jKxL"> --}}
                    <img class="w-100 rounded shadow-sm min-height-100 youtube-thumbnail" src="https://img.youtube.com/vi/Mquv4ETA-dw/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/Mquv4ETA-dw?si=1rk2TG4CHRcQGFKu" title="YouTube video player" />
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school\public-speaking\public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n3') }}
                    </p>
            </div>
        </div>
        <hr class="border border-success border-3">

        <hr>
        <h5 class="mt-4 mb-2 content-translate-font mt-3 mb-1">{{ __('school/public-speaking/public-speaking.thewinner')  }} {{ __('school/public-speaking/public-speaking.n1') }}{{ __('school/public-speaking/public-speaking.n2') }} {{ __('school/public-speaking/public-speaking.in') }} 2023 ({{ __('school/public-speaking/public-speaking.Batch') }} 17)</h5>
        <div class="row">
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm min-height-100" src="https://img.youtube.com/vi/VdCCsBOMBts/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/VdCCsBOMBts?si=Pl6wKOs2Ymp0jKxL"> --}}
                    <img class="w-100 rounded shadow-sm min-height-100 youtube-thumbnail" src="https://img.youtube.com/vi/-54Tm8DHn8k/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/-54Tm8DHn8k?si=2dxxDsRCJ0aO4_ja" title="YouTube video player" />
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school\public-speaking\public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n1') }}
                    </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm min-height-100" src="https://img.youtube.com/vi/VdCCsBOMBts/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/VdCCsBOMBts?si=Pl6wKOs2Ymp0jKxL"> --}}
                    <img class="w-100 rounded shadow-sm min-height-100 youtube-thumbnail" src="https://img.youtube.com/vi/bns2GzvwGaI/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/bns2GzvwGaI?si=YTlysCVxq6nui8cd" title="YouTube video player" />
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school\public-speaking\public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n2') }}
                    </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm min-height-100" src="https://img.youtube.com/vi/VdCCsBOMBts/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/VdCCsBOMBts?si=Pl6wKOs2Ymp0jKxL"> --}}
                    <img class="w-100 rounded shadow-sm min-height-100 youtube-thumbnail" src="https://img.youtube.com/vi/COmGwUcUTj8/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/COmGwUcUTj8?si=-i3_fk0JZPGUzht1" title="YouTube video player" />
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school\public-speaking\public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n3') }}
                    </p>
            </div>
        </div>
        <hr class="border border-success border-3">


        <hr>
        <h5 class="mt-4 mb-2 content-translate-font mt-3 mb-1">{{ __('school/public-speaking/public-speaking.thewinner')  }} {{ __('school/public-speaking/public-speaking.n1') }}{{ __('school/public-speaking/public-speaking.n2') }} {{ __('school/public-speaking/public-speaking.in') }} 2023 ({{ __('school/public-speaking/public-speaking.Batch') }} 17)</h5>
        <div class="row">
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm min-height-100" src="https://img.youtube.com/vi/VdCCsBOMBts/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/VdCCsBOMBts?si=Pl6wKOs2Ymp0jKxL"> --}}
                    <img class="w-100 rounded shadow-sm min-height-100 youtube-thumbnail" src="https://img.youtube.com/vi/wBjO1k0J83E/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/wBjO1k0J83E?si=FnT3rK_Qce6C_eKa" title="YouTube video player" />
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school\public-speaking\public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n1') }}
                    </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm min-height-100" src="https://img.youtube.com/vi/VdCCsBOMBts/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/VdCCsBOMBts?si=Pl6wKOs2Ymp0jKxL"> --}}
                    <img class="w-100 rounded shadow-sm min-height-100 youtube-thumbnail" src="https://img.youtube.com/vi/JbNmYUGefC0/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/JbNmYUGefC0?si=ns4HdCc-FniNBDOZ" title="YouTube video player" />
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school\public-speaking\public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n2') }}
                    </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm min-height-100" src="https://img.youtube.com/vi/VdCCsBOMBts/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/VdCCsBOMBts?si=Pl6wKOs2Ymp0jKxL"> --}}
                    <img class="w-100 rounded shadow-sm min-height-100 youtube-thumbnail" src="https://img.youtube.com/vi/2JkdfkYvI1U/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/2JkdfkYvI1U?si=6uuVzqVoJNUHjURC" title="YouTube video player" />
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school\public-speaking\public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n3') }}
                    </p>
            </div>
        </div>
        <hr class="border border-success border-3">


        <hr>
        <h5 class="mt-4 mb-2 content-translate-font mt-3 mb-1">{{ __('school/public-speaking/public-speaking.thewinner')  }} {{ __('school/public-speaking/public-speaking.n1') }}{{ __('school/public-speaking/public-speaking.n2') }} {{ __('school/public-speaking/public-speaking.in') }} 2023 ({{ __('school/public-speaking/public-speaking.Batch') }} 17)</h5>
        <div class="row">
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm min-height-100" src="https://img.youtube.com/vi/VdCCsBOMBts/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/VdCCsBOMBts?si=Pl6wKOs2Ymp0jKxL"> --}}
                    <img class="w-100 rounded shadow-sm min-height-100 youtube-thumbnail" src="https://img.youtube.com/vi/NevzhquW7R4/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/NevzhquW7R4?si=CbRaejwryu2ajxGc" title="YouTube video player" />
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school\public-speaking\public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n1') }}
                    </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm min-height-100" src="https://img.youtube.com/vi/VdCCsBOMBts/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/VdCCsBOMBts?si=Pl6wKOs2Ymp0jKxL"> --}}
                    <img class="w-100 rounded shadow-sm min-height-100 youtube-thumbnail" src="https://img.youtube.com/vi/QzPnRlISWQc/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/QzPnRlISWQc?si=MEyA2u0xRor-4s-_" title="YouTube video player" />
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school\public-speaking\public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n2') }}
                    </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm min-height-100" src="https://img.youtube.com/vi/VdCCsBOMBts/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/VdCCsBOMBts?si=Pl6wKOs2Ymp0jKxL"> --}}
                    <img class="w-100 rounded shadow-sm min-height-100 youtube-thumbnail" src="https://img.youtube.com/vi/6QyEoB88XdY/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/6QyEoB88XdY?si=13cWyU_uSPuVn9nP" title="YouTube video player" />
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school\public-speaking\public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n3') }}
                    </p>
            </div>
        </div>
        <hr class="border border-success border-3">


        <hr>
        <h5 class="mt-4 mb-2 content-translate-font mt-3 mb-1">{{ __('school/public-speaking/public-speaking.thewinner')  }} {{ __('school/public-speaking/public-speaking.n1') }}{{ __('school/public-speaking/public-speaking.n2') }} {{ __('school/public-speaking/public-speaking.in') }} 2023 ({{ __('school/public-speaking/public-speaking.Batch') }} 17)</h5>
        <div class="row">
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm min-height-100" src="https://img.youtube.com/vi/VdCCsBOMBts/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/VdCCsBOMBts?si=Pl6wKOs2Ymp0jKxL"> --}}
                    <img class="w-100 rounded shadow-sm min-height-100 youtube-thumbnail" src="https://img.youtube.com/vi/OryxUjxkeNQ/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/OryxUjxkeNQ?si=RN643RX09Ep7Zxe_" title="YouTube video player" />
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school\public-speaking\public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n1') }}
                    </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm min-height-100" src="https://img.youtube.com/vi/VdCCsBOMBts/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/VdCCsBOMBts?si=Pl6wKOs2Ymp0jKxL"> --}}
                    <img class="w-100 rounded shadow-sm min-height-100 youtube-thumbnail" src="https://img.youtube.com/vi/5OSX-Hj34EU/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/5OSX-Hj34EU?si=YNonqxXpVgYSsDJb" title="YouTube video player" />
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school\public-speaking\public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n2') }}
                    </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm min-height-100" src="https://img.youtube.com/vi/VdCCsBOMBts/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/VdCCsBOMBts?si=Pl6wKOs2Ymp0jKxL"> --}}
                    <img class="w-100 rounded shadow-sm min-height-100 youtube-thumbnail" src="https://img.youtube.com/vi/HK-pL0VQEWo/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/HK-pL0VQEWo?si=Ar6yxZkoBCTLwpR-" title="YouTube video player" />
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school\public-speaking\public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n3') }}
                    </p>
            </div>
        </div>
        <hr class="border border-success border-3">


        <hr>
        <h5 class="mt-4 mb-2 content-translate-font mt-3 mb-1">{{ __('school/public-speaking/public-speaking.thewinner')  }} {{ __('school/public-speaking/public-speaking.n1') }}{{ __('school/public-speaking/public-speaking.n2') }} {{ __('school/public-speaking/public-speaking.in') }} 2023 ({{ __('school/public-speaking/public-speaking.Batch') }} 17)</h5>
        <div class="row">
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm min-height-100" src="https://img.youtube.com/vi/VdCCsBOMBts/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/VdCCsBOMBts?si=Pl6wKOs2Ymp0jKxL"> --}}
                    <img class="w-100 rounded shadow-sm min-height-100 youtube-thumbnail" src="https://img.youtube.com/vi/P9UaLkJvcwk/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/P9UaLkJvcwk?si=zEQ-EOAaGGxlW0ny" title="YouTube video player" />
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school\public-speaking\public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n1') }}
                    </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm min-height-100" src="https://img.youtube.com/vi/VdCCsBOMBts/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/VdCCsBOMBts?si=Pl6wKOs2Ymp0jKxL"> --}}
                    <img class="w-100 rounded shadow-sm min-height-100 youtube-thumbnail" src="https://img.youtube.com/vi/OmsouHyZlBk/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/OmsouHyZlBk?si=lt_mxwIL3l-znceF" title="YouTube video player" />
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school\public-speaking\public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n2') }}
                    </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm min-height-100" src="https://img.youtube.com/vi/VdCCsBOMBts/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/VdCCsBOMBts?si=Pl6wKOs2Ymp0jKxL"> --}}
                    <img class="w-100 rounded shadow-sm min-height-100 youtube-thumbnail" src="https://img.youtube.com/vi/lFWHG688jFs/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/lFWHG688jFs?si=eUczHjhAzr-SXKRF" title="YouTube video player" />
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school\public-speaking\public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n3') }}
                    </p>
            </div>
        </div>
        <hr class="border border-success border-3">


        <hr>
        <h5 class="mt-4 mb-2 content-translate-font mt-3 mb-1">{{ __('school/public-speaking/public-speaking.thewinner')  }} {{ __('school/public-speaking/public-speaking.n1') }}{{ __('school/public-speaking/public-speaking.n2') }} {{ __('school/public-speaking/public-speaking.in') }} 2023 ({{ __('school/public-speaking/public-speaking.Batch') }} 17)</h5>
        <div class="row">
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm min-height-100" src="https://img.youtube.com/vi/VdCCsBOMBts/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/VdCCsBOMBts?si=Pl6wKOs2Ymp0jKxL"> --}}
                    <img class="w-100 rounded shadow-sm min-height-100 youtube-thumbnail" src="https://img.youtube.com/vi/q3oI4qOnXqs/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/q3oI4qOnXqs?si=C3-TNyWR0Od5C253" title="YouTube video player" />
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school\public-speaking\public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n1') }}
                    </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm min-height-100" src="https://img.youtube.com/vi/VdCCsBOMBts/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/VdCCsBOMBts?si=Pl6wKOs2Ymp0jKxL"> --}}
                    <img class="w-100 rounded shadow-sm min-height-100 youtube-thumbnail" src="https://img.youtube.com/vi/ctEkFz9TixM/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/ctEkFz9TixM?si=p-et-uclhqm4HRLY" title="YouTube video player" />
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school\public-speaking\public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n2') }}
                    </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm min-height-100" src="https://img.youtube.com/vi/VdCCsBOMBts/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/VdCCsBOMBts?si=Pl6wKOs2Ymp0jKxL"> --}}
                    <img class="w-100 rounded shadow-sm min-height-100 youtube-thumbnail" src="https://img.youtube.com/vi/BKOSls-HAyc/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/BKOSls-HAyc?si=KvbM8slA8wPSotfL" title="YouTube video player" />
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school\public-speaking\public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n3') }}
                    </p>
            </div>
        </div>
        <hr class="border border-success border-3">


        <hr>
        <h5 class="mt-4 mb-2 content-translate-font mt-3 mb-1">{{ __('school/public-speaking/public-speaking.thewinner')  }} {{ __('school/public-speaking/public-speaking.n1') }}{{ __('school/public-speaking/public-speaking.n2') }} {{ __('school/public-speaking/public-speaking.in') }} 2023 ({{ __('school/public-speaking/public-speaking.Batch') }} 17)</h5>
        <div class="row">
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm min-height-100" src="https://img.youtube.com/vi/VdCCsBOMBts/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/VdCCsBOMBts?si=Pl6wKOs2Ymp0jKxL"> --}}
                    <img class="w-100 rounded shadow-sm min-height-100 youtube-thumbnail" src="https://img.youtube.com/vi/_Jg2e40jZjA/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/_Jg2e40jZjA?si=NLo-KNG6cCpDndOP" title="YouTube video player" />
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school\public-speaking\public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n1') }}
                    </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm min-height-100" src="https://img.youtube.com/vi/VdCCsBOMBts/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/VdCCsBOMBts?si=Pl6wKOs2Ymp0jKxL"> --}}
                    <img class="w-100 rounded shadow-sm min-height-100 youtube-thumbnail" src="https://img.youtube.com/vi/qX4C8PVda7A/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/qX4C8PVda7A?si=c7GnjORRLJhBnsKk" title="YouTube video player" />
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school\public-speaking\public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n2') }}
                    </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm min-height-100" src="https://img.youtube.com/vi/VdCCsBOMBts/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/VdCCsBOMBts?si=Pl6wKOs2Ymp0jKxL"> --}}
                    <img class="w-100 rounded shadow-sm min-height-100 youtube-thumbnail" src="https://img.youtube.com/vi/TeTfOcf8HQA/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/TeTfOcf8HQA?si=Q7nz6VIG-dn6mfPV" title="YouTube video player" />
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school\public-speaking\public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n3') }}
                    </p>
            </div>
        </div>
        <hr class="border border-success border-3">


        <hr>
        <h5 class="mt-4 mb-2 content-translate-font mt-3 mb-1">{{ __('school/public-speaking/public-speaking.thewinner')  }} {{ __('school/public-speaking/public-speaking.n1') }}{{ __('school/public-speaking/public-speaking.n2') }} {{ __('school/public-speaking/public-speaking.in') }} 2023 ({{ __('school/public-speaking/public-speaking.Batch') }} 17)</h5>
        <div class="row">
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm min-height-100" src="https://img.youtube.com/vi/VdCCsBOMBts/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/VdCCsBOMBts?si=Pl6wKOs2Ymp0jKxL"> --}}
                    <img class="w-100 rounded shadow-sm min-height-100 youtube-thumbnail" src="https://img.youtube.com/vi/qIH-JRPoLqg/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/qIH-JRPoLqg?rel=0&autoplay=1" title="YouTube video player" />
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school\public-speaking\public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n1') }}
                    </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm min-height-100" src="https://img.youtube.com/vi/VdCCsBOMBts/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/VdCCsBOMBts?si=Pl6wKOs2Ymp0jKxL"> --}}
                    <img class="w-100 rounded shadow-sm min-height-100 youtube-thumbnail" src="https://img.youtube.com/vi/qIH-JRPoLqg/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/qIH-JRPoLqg?rel=0&autoplay=1" title="YouTube video player" />
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school\public-speaking\public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n2') }}
                    </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm min-height-100" src="https://img.youtube.com/vi/VdCCsBOMBts/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/VdCCsBOMBts?si=Pl6wKOs2Ymp0jKxL"> --}}
                    <img class="w-100 rounded shadow-sm min-height-100 youtube-thumbnail" src="https://img.youtube.com/vi/qIH-JRPoLqg/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/qIH-JRPoLqg?rel=0&autoplay=1" title="YouTube video player" />
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school\public-speaking\public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n3') }}
                    </p>
            </div>
        </div>
        <hr class="border border-success border-3">


        <hr>
        <h5 class="mt-4 mb-2 content-translate-font mt-3 mb-1">{{ __('school/public-speaking/public-speaking.thewinner')  }} {{ __('school/public-speaking/public-speaking.n1') }}{{ __('school/public-speaking/public-speaking.n2') }} {{ __('school/public-speaking/public-speaking.in') }} 2023 ({{ __('school/public-speaking/public-speaking.Batch') }} 17)</h5>
        <div class="row">
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm min-height-100" src="https://img.youtube.com/vi/VdCCsBOMBts/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/VdCCsBOMBts?si=Pl6wKOs2Ymp0jKxL"> --}}
                    <img class="w-100 rounded shadow-sm min-height-100 youtube-thumbnail" src="https://img.youtube.com/vi/qIH-JRPoLqg/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/qIH-JRPoLqg?rel=0&autoplay=1" />
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school\public-speaking\public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n1') }}
                    </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm min-height-100" src="https://img.youtube.com/vi/VdCCsBOMBts/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/VdCCsBOMBts?si=Pl6wKOs2Ymp0jKxL"> --}}
                    <img class="w-100 rounded shadow-sm min-height-100 youtube-thumbnail" src="https://img.youtube.com/vi/qIH-JRPoLqg/maxresdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/qIH-JRPoLqg?rel=0&autoplay=1" />
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school\public-speaking\public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n2') }}
                    </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm min-height-100" src="https://img.youtube.com/vi/VdCCsBOMBts/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/VdCCsBOMBts?si=Pl6wKOs2Ymp0jKxL"> --}}
                    <img class="w-100 rounded shadow-sm min-height-100 youtube-thumbnail" src="https://img.youtube.com/vi/qIH-JRPoLqg/maxresdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/qIH-JRPoLqg?rel=0&autoplay=1" />
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school\public-speaking\public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n3') }}
                    </p>
            </div>
        </div>
        <hr class="border border-success border-3">


        <hr>
        <h5 class="mt-4 mb-2 content-translate-font mt-3 mb-1">{{ __('school/public-speaking/public-speaking.thewinner')  }} {{ __('school/public-speaking/public-speaking.n1') }}{{ __('school/public-speaking/public-speaking.n2') }} {{ __('school/public-speaking/public-speaking.in') }} 2023 ({{ __('school/public-speaking/public-speaking.Batch') }} 17)</h5>
        <div class="row">
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm min-height-100" src="https://img.youtube.com/vi/VdCCsBOMBts/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/VdCCsBOMBts?si=Pl6wKOs2Ymp0jKxL"> --}}
                    <img class="w-100 rounded shadow-sm min-height-100 youtube-thumbnail" src="https://img.youtube.com/vi/qTkU2WE4DKw/maxresdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/qTkU2WE4DKw?rel=0&autoplay=1" />
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school\public-speaking\public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n1') }}
                    </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm min-height-100" src="https://img.youtube.com/vi/VdCCsBOMBts/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/VdCCsBOMBts?si=Pl6wKOs2Ymp0jKxL"> --}}
                    <img class="w-100 rounded shadow-sm min-height-100 youtube-thumbnail" src="https://img.youtube.com/vi/HqppOsK76uw/maxresdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/HqppOsK76uw?rel=0&autoplay=1" />
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school\public-speaking\public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n2') }}
                    </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm min-height-100" src="https://img.youtube.com/vi/VdCCsBOMBts/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/VdCCsBOMBts?si=Pl6wKOs2Ymp0jKxL"> --}}
                    <img class="w-100 rounded shadow-sm min-height-100 youtube-thumbnail" src="https://img.youtube.com/vi/qUaIv6ZULDk/maxresdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/qUaIv6ZULDk?rel=0&autoplay=1" />
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school\public-speaking\public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n3') }}
                    </p>
            </div>
        </div>
        <hr class="border border-success border-3">


        <hr>
        <h5 class="mt-4 mb-2 content-translate-font mt-3 mb-1">{{ __('school/public-speaking/public-speaking.thewinner')  }} {{ __('school/public-speaking/public-speaking.n1') }}{{ __('school/public-speaking/public-speaking.n2') }} {{ __('school/public-speaking/public-speaking.in') }} 2023 ({{ __('school/public-speaking/public-speaking.Batch') }} 17)</h5>
        <div class="row">
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm min-height-100" src="https://img.youtube.com/vi/VdCCsBOMBts/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/VdCCsBOMBts?si=Pl6wKOs2Ymp0jKxL"> --}}
                    <img class="w-100 rounded shadow-sm min-height-100 youtube-thumbnail" src="https://img.youtube.com/vi/qUaIv6ZULDk/maxresdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/qUaIv6ZULDk?rel=0&autoplay=1" />
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school\public-speaking\public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n1') }}
                    </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm min-height-100" src="https://img.youtube.com/vi/VdCCsBOMBts/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/VdCCsBOMBts?si=Pl6wKOs2Ymp0jKxL"> --}}
                    <img class="w-100 rounded shadow-sm min-height-100 youtube-thumbnail" src="https://img.youtube.com/vi/qUaIv6ZULDk/maxresdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/qUaIv6ZULDk?rel=0&autoplay=1" />
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school\public-speaking\public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n2') }}
                    </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm min-height-100" src="https://img.youtube.com/vi/VdCCsBOMBts/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/VdCCsBOMBts?si=Pl6wKOs2Ymp0jKxL"> --}}
                    <img class="w-100 rounded shadow-sm min-height-100 youtube-thumbnail" src="https://img.youtube.com/vi/qUaIv6ZULDk/maxresdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/qUaIv6ZULDk?rel=0&autoplay=1" />
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school\public-speaking\public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n3') }}
                    </p>
            </div>
        </div>
        <hr class="border border-success border-3">


        <hr>
        <h5 class="mt-4 mb-2 content-translate-font mt-3 mb-1">{{ __('school/public-speaking/public-speaking.thewinner')  }} {{ __('school/public-speaking/public-speaking.n1') }}{{ __('school/public-speaking/public-speaking.n2') }} {{ __('school/public-speaking/public-speaking.in') }} 2023 ({{ __('school/public-speaking/public-speaking.Batch') }} 17)</h5>
        <div class="row">
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm min-height-100" src="https://img.youtube.com/vi/VdCCsBOMBts/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/VdCCsBOMBts?si=Pl6wKOs2Ymp0jKxL"> --}}
                    <img class="w-100 rounded shadow-sm min-height-100 youtube-thumbnail" src="https://img.youtube.com/vi/qUaIv6ZULDk/maxresdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/qUaIv6ZULDk?rel=0&autoplay=1" />
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school\public-speaking\public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n1') }}
                    </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm min-height-100" src="https://img.youtube.com/vi/VdCCsBOMBts/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/VdCCsBOMBts?si=Pl6wKOs2Ymp0jKxL"> --}}
                    <img class="w-100 rounded shadow-sm min-height-100 youtube-thumbnail" src="https://img.youtube.com/vi/qUaIv6ZULDk/maxresdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/qUaIv6ZULDk?rel=0&autoplay=1" />
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school\public-speaking\public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n2') }}
                    </p>
            </div>
            <div class="col-4 height-200 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    {{-- <img class="w-100 rounded shadow-sm min-height-100" src="https://img.youtube.com/vi/VdCCsBOMBts/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/VdCCsBOMBts?si=Pl6wKOs2Ymp0jKxL"> --}}
                    <img class="w-100 rounded shadow-sm min-height-100 youtube-thumbnail" src="https://img.youtube.com/vi/qUaIv6ZULDk/maxresdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/qUaIv6ZULDk?rel=0&autoplay=1" />
                </div>

                    <p class="goldenrod font-bold">
                        {{ __('school\public-speaking\public-speaking.place') }} {{ __('school/public-speaking/public-speaking.n3') }}
                    </p>
            </div>
        </div>
        <hr class="border border-success border-3">

    </div>
@endsection
