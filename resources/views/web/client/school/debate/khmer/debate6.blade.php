@extends('web.client.school.layout.app')

@section('content')
    <div class="px-2">

        <h3 class="title-translate-font p-3 bg-success text-white">Public Speaking Content</h3>
        <hr>
        <div>
            <iframe class="w-100 aspect-ratio-16" id="vd-container"
                src="https://www.youtube.com/embed/H0FtZylz8ks?si=rKrwUrcTm5bhRfHN" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
        </div>

        <hr>
        <h5 class="mt-4 mb-2 content-translate-font mt-3 mb-1">
            រគ្គទី ១​ <br>
            បកស្រាយពីសេចក្តីផ្តើម និងទឡ្ហីករណ៍ទី១
        </h5>
        <div class="row">
            <div class="col-6 height-300 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/H0FtZylz8ks/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/H0FtZylz8ks?si=rKrwUrcTm5bhRfHN">
                </div>
                
            </div>
            <div class="col-6 height-300 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/DeSs8vUBlI4/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/DeSs8vUBlI4?si=8bsBzvqO_OlZaZby">
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
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/zKKLPHk6IU0/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/zKKLPHk6IU0?si=PKLBP5HwIWm62qPh">
                </div>
                
            </div>
            <div class="col-6 height-300 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/Z9gVTukGSuE/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/Z9gVTukGSuE?si=VFXMHmtNgVUbYsse">
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
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/_-QkJVoLOmY/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/_-QkJVoLOmY?si=jwoYi0AO6Yq6uMuz">
                </div>
                
            </div>
            <div class="col-6 height-300 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/8kVwHMwpTho/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/8kVwHMwpTho?si=IE_ONfHU3EpfbCx2">
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
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/Yn9SovMLgx4/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/Yn9SovMLgx4?si=6FGU6APEWQF1n3ob">
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
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/i0L_GhLEMPc/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/i0L_GhLEMPc?si=-7zSN__iQ7ezql2s">
                </div>
                
            </div>
            <div class="col-6 height-300 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/mq0P2k9TNwg/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/mq0P2k9TNwg?si=e3f-drc_6dC7dxUY">
                </div>
                
            </div>
        </div>
        <hr class="border border-success border-3">
        
        

    </div>
@endsection
