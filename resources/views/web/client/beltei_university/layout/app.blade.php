<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1"> --}}

    <title>BELTEI International University</title>

    <link rel="shortcut icon" href="{{ asset('asset/img/favicon.ico') }}" type="image/png">

    <meta property="og:title" content="Beltei University - Quality Education for Everyone">
    <meta property="og:description"
        content="Explore top-quality education at Beltei University. Learn more about our programs and admissions.">
    <meta property="og:image" content="https://www.beltei.edu.kh/asset/img/university/campus/BIU3.png">
    <meta property="og:url" content="https://www.beltei.edu.kh">
    <meta property="og:type" content="website">

    <!-- Twitter Card Meta Tags (Optional but Recommended) -->
    {{-- <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Beltei University">
    <meta name="twitter:description" content="Explore top-quality education at Beltei University.">
    <meta name="twitter:image" content="https://www.beltei.edu.kh/asset/img/university/campus/BIU3.png"> --}}

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/root.css') }}">
    <link rel="stylesheet" href="{{ asset('css/school/layout/app.css') }}">

    <style>
        .right-bar-ul>li {
            height: 75px;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            background-image: linear-gradient(to left, #20409A -22.5%, #21ade3, #21ade3, #21ade3, #21ade3, #20409A 122.5%);
        }

        .right-bar-ul>li>a {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;

            justify-content: center;
        }

        .right-bar-ul>li>a>img {
            max-height: 70px;
            width: 80% !important;
            object-fit: contain;
        }

        .right-bar-ul>li:hover {
            background-image: linear-gradient(to left, #20409A -22.5%, #1784af, #1784af, #1784af, #1784af, #20409A 122.5%);
        }

        .right-bar-ul>li:hover>a>img {
            transform: scale(.9);
        }

        .recaptcha-box {
            border: 1px solid #ccc;
            border-radius: 6px;
            padding: 15px 20px;
            background-color: white;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .recaptcha-left {
            display: flex;
            align-items: center;
        }

        .recaptcha-left input[type="checkbox"] {
            width: 22px;
            height: 22px;
            margin-right: 15px;
        }

        .recaptcha-right {
            display: flex;
            flex-direction: column;
            align-items: center;
            font-size: 12px;
        }

        .recaptcha-right img {
            width: 25px;
            height: 25px;
        }

        .footer-link:hover{
            color: white;
        }
    </style>

</head>

<body>

    {{-- <div style="max-width: 200px; height: 200px; overflow: hidden;" onclick="let p = document.getElementById('p'); if (p.style.whiteSpace == 'normal') p.style.whiteSpace = 'nowrap'; else p.style.whiteSpace = 'normal';">
        <p style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;" id="p">
            ​ដែល​បាន​ប្រឡង​ជាប់​សញ្ញា​បត្រ​មធ្យម​សិក្សា​ទុតិ​យ​ភូមិ​ (​បាក់​ឌុប​)​មក​ពី​សា​ខា​ទី​១​ ដល់​សា​ខា​ទី​១០​
            ក្រោម​អធិប​តី​ភាព​ដ៏​ខ្ពង់​ខ្ពស់​របស់​ឯក​ឧត្តម​បណ្ឌិត​ លី​ ឆេង​ តំណាង​រាស្រ្ត​មណ្ឌល​រាជ​ធានី​ភ្នំពេញ​
            ស្ថាប​និក​និក​នា​ព្រឹក​ថ្ងៃ​សៅរ៍​ ១​រោច​ ខែ​បុស្ស​ ឆ្នាំ​ថោះ​បញ្ចស័ក​ ព.ស.​២៥៦៧​ ត្រូវ​នឹង​ថ្ងៃ​ទី​២៧​ ខែ​មករា​
            ឆ្នាំ​២០២៤​ នៅ​សាល​សន្និ​សីទ​នៃ​សាកល​វិទ្យា​ល័យ​ ប៊ែលធី​ អន្តរ​ជាតិ​ទី​តាំង​ទី​២​ (​ស្ពាន​អាកាស​ចោម​ចៅ​)​។
        </p>
    </div> --}}


    <header>

    </header>


    <main>

        <div class="container shadow p-0 mb-5 bg-white position-relative">

            {{-- Header  --}}
            @include('web.client.beltei_university.layout.header')




            {{-- sidebar and content  --}}
            <div class="d-flex position-relative">

                {{-- left sidebar  --}}
                @include('web.client.beltei_university.layout.left_side_bar')

                {{-- content  --}}
                <div class="content shadow-sm text-center w-100  pb-lg-5 pb-md-4 pb-sm-3 p-3">

                    @yield('content')



                </div>

                {{-- right sidebar  --}}
                @include('web.client.beltei_university.layout.right_side_bar')




            </div>

            {{-- footer  --}}


            <div class="mt-4">
                <h6 class="Muol-Light p-3 bg-success text-white">វីឌីអូសំខាន់ៗ</h6>
                <hr>
                <div class="d-flex justify-content-between m-3" style="flex-wrap: wrap; gap: .5rem;">

                    <a href="https://www.youtube.com/embed/aLkTDdx8aS8?si=02EusmijT5ROthGA"
                        class="col rounded overflow-hidden position-relative d-flex justify-content-center align-items-center cursor-pointer">
                        <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute"
                            width="20%" alt="">
                        <img class="w-100 youtube-thumbnail"
                            src="https://img.youtube.com/vi/aLkTDdx8aS8/maxresdefault.jpg" alt="YouTube Video Thumbnail"
                            data-src="https://www.youtube.com/embed/aLkTDdx8aS8?si=02EusmijT5ROthGA" />
                    </a>
                    <a href="https://www.youtube.com/embed/1cHgtZUcEl8?si=-qnYdJks4l357rEO"
                        class="col rounded overflow-hidden position-relative d-flex justify-content-center align-items-center cursor-pointer">
                        <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute"
                            width="20%" alt="">
                        <img class="w-100 youtube-thumbnail"
                            src="https://img.youtube.com/vi/1cHgtZUcEl8/maxresdefault.jpg" alt="YouTube Video Thumbnail"
                            data-src="https://www.youtube.com/embed/1cHgtZUcEl8?si=-qnYdJks4l357rEO" />
                    </a>
                    <a href="https://www.youtube.com/embed/7Bozi7A_9lw?si=2R0s3VpOkFck2jPr"
                        class="col rounded overflow-hidden position-relative d-flex justify-content-center align-items-center cursor-pointer">
                        <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute"
                            width="20%" alt="">
                        <img class="w-100 youtube-thumbnail"
                            src="https://img.youtube.com/vi/7Bozi7A_9lw/maxresdefault.jpg" alt="YouTube Video Thumbnail"
                            data-src="https://www.youtube.com/embed/7Bozi7A_9lw?si=2R0s3VpOkFck2jPr" />
                    </a>
                    <a href="https://www.youtube.com/embed/0ha5Xtf6BLo?si=zYAql8Nj-nVJ-4-H"
                        class="col rounded overflow-hidden position-relative d-flex justify-content-center align-items-center cursor-pointer">
                        <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute"
                            width="20%" alt="">
                        <img class="w-100 youtube-thumbnail"
                            src="https://img.youtube.com/vi/0ha5Xtf6BLo/maxresdefault.jpg" alt="YouTube Video Thumbnail"
                            data-src="https://www.youtube.com/embed/0ha5Xtf6BLo?si=zYAql8Nj-nVJ-4-H" />
                    </a>
                </div>
                <div class="d-flex justify-content-between m-3" style="flex-wrap: wrap; gap: .5rem;">

                    <a href="https://www.youtube.com/embed/7G6AK-zk7w0?si=yvkG5Uimh4puKuCR"
                        class="col rounded overflow-hidden position-relative d-flex justify-content-center align-items-center cursor-pointer">
                        <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute"
                            width="20%" alt="">
                        <img class="w-100 youtube-thumbnail"
                            src="https://img.youtube.com/vi/7G6AK-zk7w0/maxresdefault.jpg" alt="YouTube Video Thumbnail"
                            data-src="https://www.youtube.com/embed/7G6AK-zk7w0?si=yvkG5Uimh4puKuCR" />
                    </a>
                    <a href="https://www.youtube.com/embed/Ip-QgjIWhoo?si=xJx2AAJHR_I19LRu"
                        class="col rounded overflow-hidden position-relative d-flex justify-content-center align-items-center cursor-pointer">
                        <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute"
                            width="20%" alt="">
                        <img class="w-100 youtube-thumbnail"
                            src="https://img.youtube.com/vi/Ip-QgjIWhoo/maxresdefault.jpg" alt="YouTube Video Thumbnail"
                            data-src="https://www.youtube.com/embed/Ip-QgjIWhoo?si=xJx2AAJHR_I19LRu" />
                    </a>
                    <a href="https://www.youtube.com/embed/l88M7K1oYlA?si=J_uCR0w6B7vBnlRe"
                        class="col rounded overflow-hidden position-relative d-flex justify-content-center align-items-center cursor-pointer">
                        <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute"
                            width="20%" alt="">
                        <img class="w-100 youtube-thumbnail"
                            src="https://img.youtube.com/vi/l88M7K1oYlA/maxresdefault.jpg"
                            alt="YouTube Video Thumbnail"
                            data-src="https://www.youtube.com/embed/l88M7K1oYlA?si=J_uCR0w6B7vBnlRe" />
                    </a>
                    <a href="https://www.youtube.com/embed/dNI20hmq3R0?si=SIDRfTf_jLDkAcnM"
                        class="col rounded overflow-hidden position-relative d-flex justify-content-center align-items-center cursor-pointer">
                        <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute"
                            width="20%" alt="">
                        <img class="w-100 youtube-thumbnail"
                            src="https://img.youtube.com/vi/dNI20hmq3R0/maxresdefault.jpg"
                            alt="YouTube Video Thumbnail"
                            data-src="https://www.youtube.com/embed/dNI20hmq3R0?si=SIDRfTf_jLDkAcnM" />
                    </a>

                </div>
            </div>

            <div>
                <marquee behavior="scroll" scrollamount="4.5"><span style="color: green; font-size: small;">
                        {!! __('beltei_university/app.marquee') !!}
                </marquee>
            </div>

            <div class="p-4 Times-New-Roman" style="background-color: #006cb8">
                <img class="w-100" src="{{ asset('asset/img/biu/app/footer.jpg') }}" alt="">
                <div class=" gold">
                    <h5 class="underline">Contact Us: </h5>
                    <ul class="pt-2">
                        <li>Email: <a class="underline font-bold footer-link" href="biu.admin@beltei.edu.kh">biu.admin@beltei.edu.kh</a> (General Information)</li>
                        <li>Email: <a class="underline font-bold footer-link" href="biu.academic@beltei.edu.kh">biu.academic@beltei.edu.kh</a> (Student's Service and Confirmation)</li>
                    </ul>
                </div>

            </div>

        </div>


        <button onclick="topFunction()" id="goToTopBtn" title="Go to top"
            class="fa fa-angle-up bg-info shadow btn rounded-pill text-white"
            style="width: 40px; height: 40px;"></button>

    </main>


    <footer>

    </footer>




    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>


    <script src="{{ asset('css/school/layout/app.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>
