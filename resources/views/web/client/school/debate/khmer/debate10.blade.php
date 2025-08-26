@extends('web.client.school.layout.app')

@section('content')
    <div class="px-2">

        <h3 class="title-translate-font p-3 bg-success text-white">{{ __('school/app.I') }}</h3>
        <hr>
        <div>
            <iframe class="w-100 aspect-ratio-16" id="vd-container"
                src="https://www.youtube.com/embed/qxNFShnNhmw?si=nK2ZsWOhuEIL-YGp" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
        </div>



                <hr>
        <h5 class="mt-4 mb-2 content-translate-font mt-3 mb-1">
            រគ្គទី ១​
        </h5>
        <div class="row">
            <div class="col-6 height-300 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/qxNFShnNhmw/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/qxNFShnNhmw?si=nK2ZsWOhuEIL-YGp">
                </div>
                
            </div>
            <div class="col-6 height-300 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/G4uOOx64Q3Y/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/G4uOOx64Q3Y?si=Yo66w-GjDS_6gvGg">
                </div>
                
            </div>
        </div>
        <hr class="border border-success border-3">

        <hr>
        <h5 class="mt-4 mb-2 content-translate-font mt-3 mb-1">
            រគ្គទី ២
        </h5>
        <div class="row">
            <div class="col-6 height-300 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/L97v4zqWl0I/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/L97v4zqWl0I?si=F2lCw1PuohHaKXBo">
                </div>
                
            </div>
            <div class="col-6 height-300 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/4EO1GDMzz2Y/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/4EO1GDMzz2Y?si=Y-hpEql_gMEsLTsw">
                </div>
                
            </div>
        </div>
        <hr class="border border-success border-3">

        <hr>
        <h5 class="mt-4 mb-2 content-translate-font mt-3 mb-1">
            រគ្គទី ៣
        </h5>
        <div class="row">
            <div class="col-6 height-300 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/M--cauPWyGg/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/M--cauPWyGg?si=np1yxHBW69pEQEgg">
                </div>
                
            </div>
        </div>
        <hr class="border border-success border-3">
        
        
        
        
        
        <hr>
        <h5 class="mt-4 mb-2 content-translate-font mt-3 mb-1">
            រគ្គទី ១​ <br>
            បកស្រាយពីសេចក្តីផ្តើម និងទឡ្ហីករណ៍ទី១
        </h5>
        <div class="row">
            <div class="col-6 height-300 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/Un_Jh-9ccwg/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/Un_Jh-9ccwg?si=1g8iThpJb0eFoj5E">
                </div>
                
            </div>
            <div class="col-6 height-300 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/TTzAPzGNG3E/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/TTzAPzGNG3E?si=DRV_bM0ltQmGb3DN">
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
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/5QTFFK-NOU4/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/5QTFFK-NOU4?si=XNKDEcBIxIgxitr">
                </div>
                
            </div>
            <div class="col-6 height-300 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/QicB3DzaYR4/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/QicB3DzaYR4?si=Y0sVPClCM25BVjsU">
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
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/rZW-0lavCQ4/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/rZW-0lavCQ4?si=33i8IPe4m9FvyZ1e">
                </div>
                
            </div>
            <div class="col-6 height-300 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/Uc5dzyCaPns/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/Uc5dzyCaPns?si=GHuFHIl2gicf9Xaz">
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
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/gK4T2xHlK6s/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/gK4T2xHlK6s?si=WrjXceCvgvFrwVHA">
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
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/lh7tWLq8NNE/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/lh7tWLq8NNE?si=aOAzpKZPpdOSKM2Z">
                </div>
                
            </div>
            <div class="col-6 height-300 content-translate-font">
                <div class="position-relative d-flex justify-content-center align-items-center cursor-pointer" onclick="setVideoSource(this)">
                    <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute" width="20%" alt="">
                    <img class="w-100 rounded shadow-sm" src="https://img.youtube.com/vi/euxbTPcgBro/hqdefault.jpg" alt="YouTube Video Thumbnail" data-src="https://www.youtube.com/embed/euxbTPcgBro?si=_U273HVkKn2fJ6in">
                </div>
                
            </div>
        </div>
        <hr class="border border-success border-3">
        
        

    </div>
@endsection
