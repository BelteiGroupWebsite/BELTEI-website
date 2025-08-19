@extends('web.client.school.layout.app')

@section('content')
    <div class="px-2">

        <h3 class="title-translate-font p-3 bg-success text-white">Public Speaking Content</h3>
        <hr>
        <div>
            <iframe class="w-100 aspect-ratio-16"  id="vd-container"
                src="https://www.youtube.com/embed/3KZNpkgpSp8?si=UCiBYKsEmrREJ1fI" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
        </div>
        <hr>

        {{--  --}}
        <h6 class="content-translate-font p-3 bg-success text-white">សូមរីករាយទស្សនាវីដេអូ កម្មវិធី “ប្រកួតជជែកដេញដោល ផ្នែកភាសាអង់គ្លេស” រដូវកាលទី២ ឆ្នាំ២០២៤ របស់សិស្សកម្រិតទី៩ & ១០ វគ្គផ្តាច់ព្រ័ត្រ ក្រោមប្រធានបទ៖ "ការកំណត់អាយុក្នុងការសេពគ្រឿងស្រវឹងគឺជាជម្រើសដ៏ល្អបំផុតក្នុងការធានាសុខុមាលភាពយុវជននៅកម្ពុជា"។ នារសៀលថ្ងៃអង្គារ ទី២៧ ខែមិថុនា ឆ្នាំ២០២៥ នៅសាលសន្និសីទ នៃសាកលវិទ្យាល័យ ប៊ែលធី អន្តរជាតិទីតាំងទី២ (ស្ពានអាកាសចោមចៅ)។</h6>
        <hr>
        <h5 class="mt-4 mb-2 content-translate-font mt-3 mb-1">
            វីដេអូវគ្គទី១ និង វគ្គទី២
        </h5>
        <div class="row">
            <div class="col-6 height-300 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/2N-4cnZXAf0/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/2N-4cnZXAf0?si=npxyFo3kRuO9DkH-">
                </div>
            </div>


            <div class="col-6 height-300 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="Play Button">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/Dke1nB1p9g8/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/Dke1nB1p9g8?si=mid6ih2Y1GsCFwFj">
                </div>
            </div>
        </div>
        <hr class="border border-success border-3">

        <hr>
        <h5 class="mt-4 mb-2 content-translate-font mt-3 mb-1">
            វីដេអូវគ្គទី៣ និង វគ្គទី៤
        </h5>
        <div class="row">
            <div class="col-6 height-300 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="Play Button">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/_PtnkLt3FjE/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/_PtnkLt3FjE?si=-Ru3i2Dijmm9eLpZ">
                </div>
            </div>

            <div class="col-6 height-300 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="Play Button">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/NLZh12uMyl8/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/NLZh12uMyl8?si=m6okA_LcYTlzepNn">
                </div>
            </div>

        </div>

        <hr class="border border-success border-3">

        <hr>
        <h5 class="mt-4 mb-2 content-translate-font mt-3 mb-1">
            វីដេអូវគ្គទី៥
        </h5>
        <div class="row justify-content-center">
            <div class="col-6 height-300 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="Play Button">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/_IULLMPcjmc/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/_IULLMPcjmc?si=g7-DWIdtSUwaGr-U">
                </div>
            </div>

        </div>
        {{--  --}}

        <hr>
        <h6 class="content-translate-font p-3 bg-success text-white">សូមរីករាយទស្សនាវីដេអូ កម្មវិធី “ប្រកួតជជែកដេញដោល ផ្នែកភាសាអង់គ្លេស” រដូវកាលទី២ ឆ្នាំ២០២៤ របស់សិស្សកម្រិតទី១១ & ១២ វគ្គផ្តាច់ព្រ័ត្រ ក្រោមប្រធានបទ៖ "ទំនើបកម្មបច្ចេកវិទ្យាជាធាតុគន្លឹះជំរុញឱ្យការសិក្សារបស់សិស្សមានភាពល្អប្រសើរ"។ នារសៀលថ្ងៃអង្គារ ទី០៩ ខែកក្កដា ឆ្នាំ២០២៤ នៅសាលសន្និសីទ នៃសាកលវិទ្យាល័យ ប៊ែលធី អន្តរជាតិទីតាំងទី២ (ស្ពានអាកាសចោមចៅ)។</h6>
        <hr>
        <h5 class="mt-4 mb-2 content-translate-font mt-3 mb-1">
            វីដេអូវគ្គទី១ និង វគ្គទី២
        </h5>
        <div class="row">
            <div class="col-6 height-300 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/3KZNpkgpSp8/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/3KZNpkgpSp8?si=UCiBYKsEmrREJ1fI">
                </div>
            </div>
            <div class="col-6 height-300 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/YNnA5fv9JTE/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/YNnA5fv9JTE?si=KSznoec5iKYnDHFw">
                </div>
            </div>
        </div>
        <hr>
        <h5 class="mt-4 mb-2 content-translate-font mt-3 mb-1">
            វីដេអូវគ្គទី៣ និង វគ្គទី៤
        </h5>
        <div class="row">
            <div class="col-6 height-300 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/jT47wXpRWP4/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/jT47wXpRWP4?si=NDFvN-WKjOxEI6nU">
                </div>
            </div>
            <div class="col-6 height-300 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/1mFVAxqgS-U/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/1mFVAxqgS-U?si=UUG49NxNYp9apPjV">
                </div>
            </div>
        </div>
        <hr>
        <h5 class="mt-4 mb-2 content-translate-font mt-3 mb-1">
            វីដេអូវគ្គទី៥
        </h5>
        <div class="row justify-content-center">
            <div class="col-6 height-300 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/aWgZ1E9BEo4/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/aWgZ1E9BEo4?si=FYodkMDK6hrqsOHj">
                </div>
            </div>
        </div>

        <hr>
        <h6 class="content-translate-font p-3 bg-success text-white">សូមរីករាយទស្សនាវីដេអូ កម្មវិធី “ប្រកួតជជែកដេញដោល ផ្នែកភាសាអង់គ្លេស” រដូវកាលទី២ ឆ្នាំ២០២៤ របស់សិស្សកម្រិតទី៩ & ១០ វគ្គផ្តាច់ព្រ័ត្រ ក្រោមប្រធានបទ៖ "ការចូលរួមចំណែកពីសាលារៀន និងគ្រូបង្រៀនគឺជាកត្តាចម្បងក្នុងការកែទម្រង់វិស័យអប់រំកម្ពុជា"។ នារសៀលថ្ងៃអង្គារ ទី០៩ ខែកក្កដា ឆ្នាំ២០២៤ នៅសាលសន្និសីទ នៃសាកលវិទ្យាល័យ ប៊ែលធី អន្តរជាតិទីតាំងទី២ (ស្ពានអាកាសចោមចៅ)។</h6>
        <hr>

        <h5 class="mt-4 mb-2 content-translate-font mt-3 mb-1">
            រគ្គទី ១​ <br>
            បកស្រាយពីសេចក្តីផ្តើម និងទឡ្ហីករណ៍ទី១
        </h5>
        <div class="row">
            <div class="col-6 height-300 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/RaybuOZlW7k/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/RaybuOZlW7k?si=FM-y2LLsRpyxdQ-0">
                </div>

            </div>
            <div class="col-6 height-300 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/VdCCsBOMBts/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/VdCCsBOMBts?si=Pl6wKOs2Ymp0jKxL">
                </div>

            </div>
        </div>
        <hr class="border border-success border-3">

        <hr>
        <h5 class="mt-4 mb-2 content-translate-font mt-3 mb-1">
            រគ្គទី ២ <br>
            បកស្រាយពីសេចក្តីផ្តើម និងទឡ្ហីករណ៍ទី២
        </h5>
        <div class="row">
            <div class="col-6 height-300 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/90pnHgT64ac/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/90pnHgT64ac?si=DU757x_6Bg_eIrC_">
                </div>

            </div>
            <div class="col-6 height-300 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/13H8_fmFsSs/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/13H8_fmFsSs?si=Mrj9BdbUcgOudPL-">
                </div>

            </div>
        </div>
        <hr class="border border-success border-3">

        <hr>
        <h5 class="mt-4 mb-2 content-translate-font mt-3 mb-1">
            រគ្គទី ៣ <br>
            បកស្រាយពីសេចក្តីផ្តើម និងទឡ្ហីករណ៍ទី៣
        </h5>
        <div class="row">
            <div class="col-6 height-300 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/LOe8KpKmEvc/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/LOe8KpKmEvc?si=6Ktxe4Fn3ySWFUY2">
                </div>

            </div>
            <div class="col-6 height-300 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/_g1pa2yElrc/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/_g1pa2yElrc?si=_S6FHmWIIktEXJ-y">
                </div>

            </div>
        </div>
        <hr class="border border-success border-3">

        <hr>
        <h5 class="mt-4 mb-2 content-translate-font mt-3 mb-1">
            រគ្គទី 4 <br>
            បកស្រាយពីសេចក្តីផ្តើម និងទឡ្ហីករណ៍ទី4
        </h5>
        <div class="row justify-content-center">
            <div class="col-6 height-300 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/f2sRnTXG1TM/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/f2sRnTXG1TM?si=3vuc9jpY7GiGFhAK">
                </div>

            </div>
        </div>
        <hr class="border border-success border-3">

        <hr>
        <h5 class="mt-4 mb-2 content-translate-font mt-3 mb-1">
            រគ្គទី 5 <br>
            បកស្រាយពីសេចក្តីផ្តើម និងទឡ្ហីករណ៍ទី5
        </h5>
        <div class="row">
            <div class="col-6 height-300 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/hpoimjVHLuU/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/hpoimjVHLuU?si=TBgcp11hgpiTMZL4">
                </div>

            </div>
            <div class="col-6 height-300 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/tfZpWTPwOCc/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/tfZpWTPwOCc?si=YZJVUyjQeSxv6cez">
                </div>

            </div>
        </div>
        <hr class="border border-success border-3">



    </div>
@endsection
