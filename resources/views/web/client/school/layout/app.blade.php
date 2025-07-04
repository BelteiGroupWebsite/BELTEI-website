<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    {{-- <meta name="viewport" content="width=device-width, initial-scale=.5"> --}}

    <title>BELTEI International School</title>

    <link rel="shortcut icon" href="{{ asset('asset/img/school/beltei_international_school_in_cambodia.png') }}"
        type="image/png">
    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

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
        .campus {
            display: grid;
            grid-template-columns: repeat(10, 1fr);
            /* Repeat 1fr 10 times */
            /* gap: .5rem;   */
        }


        .campus>a {
            /* overflow: hidden; */
            max-width: 125px;
            border: 3px solid #21ade3 !important;
            margin-bottom: 5px;
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
            @include('web.client.school.layout.header')




            {{-- sidebar and content  --}}
            <div class="d-flex position-relative w-100">

                {{-- left sidebar  --}}
                @include('web.client.school.layout.left_side_bar')

                {{-- content  --}}
                <div class="content shadow-sm text-center w-100 overflow-hidden pb-lg-5 pb-md-4 pb-sm-3 p-3">

                    @yield('content')



                </div>

                {{-- right sidebar  --}}
                @include('web.client.school.layout.right_side_bar')




            </div>

            {{-- footer  --}}


            <div class="mt-4 remove-600px">
                <h6 class="Muol-Light p-3 bg-success text-white">វីឌីអូសំខាន់ៗ</h6>
                <hr>
                <div class="d-flex justify-content-between m-3" style="flex-wrap: wrap; gap: .5rem;">

                    <a href="https://www.youtube.com/embed/LuUS8xRzpd4?rel=0&autoplay=1"
                        class="col rounded overflow-hidden position-relative d-flex justify-content-center align-items-center cursor-pointer">
                        <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute"
                            width="20%" alt="">
                        <img class="w-100 youtube-thumbnail"
                            src="https://img.youtube.com/vi/LuUS8xRzpd4/maxresdefault.jpg" alt="YouTube Video Thumbnail"
                            data-src="https://www.youtube.com/embed/LuUS8xRzpd4?rel=0&autoplay=1" />
                    </a>
                    <a href="https://www.youtube.com/embed/Gtj87I5670Y?rel=0&autoplay=1"
                        class="col rounded overflow-hidden position-relative d-flex justify-content-center align-items-center cursor-pointer">
                        <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute"
                            width="20%" alt="">
                        <img class="w-100 youtube-thumbnail"
                            src="https://img.youtube.com/vi/Gtj87I5670Y/maxresdefault.jpg" alt="YouTube Video Thumbnail"
                            data-src="https://www.youtube.com/embed/Gtj87I5670Y?rel=0&autoplay=1" />
                    </a>
                    <a href="https://www.youtube.com/embed/W2K_pt28MGE?rel=0&autoplay=1"
                        class="col rounded overflow-hidden position-relative d-flex justify-content-center align-items-center cursor-pointer">
                        <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute"
                            width="20%" alt="">
                        <img class="w-100 youtube-thumbnail"
                            src="https://img.youtube.com/vi/W2K_pt28MGE/maxresdefault.jpg" alt="YouTube Video Thumbnail"
                            data-src="https://www.youtube.com/embed/W2K_pt28MGE?rel=0&autoplay=1" />
                    </a>
                    <a href="https://www.youtube.com/embed/kyM32Imki2E?rel=0&autoplay=1"
                        class="col rounded overflow-hidden position-relative d-flex justify-content-center align-items-center cursor-pointer">
                        <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute"
                            width="20%" alt="">
                        <img class="w-100 youtube-thumbnail"
                            src="https://img.youtube.com/vi/kyM32Imki2E/maxresdefault.jpg" alt="YouTube Video Thumbnail"
                            data-src="https://www.youtube.com/embed/kyM32Imki2E?rel=0&autoplay=1" />
                    </a>
                    <a href="https://www.youtube.com/embed/mDXDdcPVj1M?rel=0&autoplay=1"
                        class="col rounded overflow-hidden position-relative d-flex justify-content-center align-items-center cursor-pointer">
                        <img src="{{ asset('asset/img/biu/speaking/youtube-logo.png') }}" class="position-absolute"
                            width="20%" alt="">
                        <img class="w-100 youtube-thumbnail"
                            src="https://img.youtube.com/vi/mDXDdcPVj1M/maxresdefault.jpg" alt="YouTube Video Thumbnail"
                            data-src="https://www.youtube.com/embed/mDXDdcPVj1M?rel=0&autoplay=1" />
                    </a>


                </div>
            </div>

            <div>
                <marquee class="Battambang-Regular p-3" behavior="scroll" scrollamount="4.5">
                    <font size="3" color="green">
                        <strong>សាលា ប៊ែលធី អន្តរជាតិ</strong>
                    </font> មានបង្រៀន <font size="3" color="green">៥</font>កម្មវិធីធំៗគឺ <font size="3"
                        color="green">១-
                        ចំណេះទូទៅ | ២- ភាសាអង់គ្លេសទូទៅ | ៣- វគ្គបណ្តុះបណ្តាលជំនាញឯកទេស | ៤- វគ្គបណ្តុះបណ្តាលកុំព្យូទ័រ
                        | ៥- ថ្នាក់ត្រៀមប្រឡងតេស្តអន្តរជាតិ</font>
                </marquee>
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

    <script>
        var campusDiv = document.getElementById("campus");
        var campusDivChildren = campusDiv.children;

        var lang = document.documentElement.getAttribute("lang");

        if (lang == "kh") {
            var campusNameArr = [
                "គីរីរម្យ",
                "ផ្សារទួលទំពូង",
                "ដេអិន",
                "ផ្សារដើមថ្កូវ",
                "ច្បារអំពៅ",
                "អូរឫស្សី",
                "ពេទ្យលោកសង្ឃ",
                "ផ្សារពោធិ៍ចិនតុង",
                "ស្ទឹងមានជ័យ",
                "អាងទឹកអូឡាំពិក",
                "ផ្សារតូច",
                "ផ្សារដីហុយ",
                "រង្វង់មូលកាំកូស៊ីធី",
                "ក្រុងតាខ្មៅ",
                "ផ្សារជម្ពូវ័ន",
                "ផ្លូវកោងវេងស្រេង",
                "ឫស្សីកេវគីឡូលេខ១០",
                "ព្រែកឯង",
                "ផ្សារព្រែកលៀប",
                "ចោមចៅ",
                "ផ្សារឈូកមាស",
                "រង្វង់មូលកួរស្រូវ",
                "ផ្លូវព្រៃសស្តុបឫស្សីសាញ់",
                "រង្វង់មូលគល់ស្ពានព្រែកតាមាក់",
                "ស្ថានីយបូមទឹក ផ្លូវ៣៧១",
                "ព្រែកប្រា",
                "ព្រែកព្នៅ បុរី លី សុវណ្ណ",
                "វត្តអង្គតាម៉ិញ",
                "ទួលពង្រ",
                "បុរីអ័រគីដេ ៦អា",
                "វត្តទួលឫស្សីកែវ",
                "ក្រាំងធ្នង់",

                "ទួលពង្រ",
                "បុរីអ័រគីដេ ៦អា",
                "វត្តទួលឬស្សីកែ",
                "ក្រាំងធ្នង់",

            ];
        } else {
            var campusNameArr = [
                "Kirirom",
                "Phsar Toul Tum Poung",
                "DN",
                "Phsar Doeum Thkov",
                "Chbar Ampeou",
                "Orussey",
                "Loksang Hospital",
                "Phsar Pochentong",
                "Steung Meanchey",
                "Angteuk Olympic",
                "Phsar Toch",
                "Phsar Deihoy",
                "Camko City",
                "Takhmao Town",
                "Phsar Chumpou Vorn",
                "Phlov Koang Veng Sreng",
                "Russey Keo",
                "Phsar Prek Eng",
                "Phsar Prek Leab",
                "Choam Chao",
                "Phsar Chhouk Meas",
                "Kour Srov Roundabout",
                "Prey Sar Road, Russey Sanh Stoplight",
                "Prek Tamak Bridge Roundabout",
                "Pumping Station 371",
                "Prek Pra",
                "Prek Pnov Borey Ly Sovann",
                "Wat Ang Taminh",
                "Tuol Pongro",
                "Borey Orkide 6A",
                "Wat Toul Russey Keo",
                "Krang Tnong"

            ];
        }

        for (let i = 1; i <= 32; i++) {
            var campusCardTemplate = `
                <a id="sammenten${i}" href="{{ route('school.campus.campusTemplete') }}?id=${i}" data-aos="fade-left" data-aos-delay="${
                    i * 100
                }" class="border rounded shadow-sm ">
                    <div class="overflow-hidden img-scale-hover" style="width:120px; height:110px">
                        
                        <img class="shadow-sm rounded w-100 h-100" style="width:120px; height:110px ; object-fit:cover;"
                            src="{{ asset('asset/img/school/campus/school-B${i}.jpg') }}"
                            alt="">
                    </div>
                    <div class="d-flex align-items-center justify-content-around p-1">
                        <h6 style="min-width:30px ; width: 30px; height: 30px;"
                            class="f14 rounded-pill bg-header-color d-flex justify-content-center align-items-center text-white">
                            ${i}
                        </h6>
                        <b class=" text-center ${
                            campusNameArr[i - 1].length > 12 ? "f10" : "f12"
                        }">
                            ${campusNameArr[i - 1]}
                        </b>
                    </div>
                </a>
            `;

            var div = document.createElement("div");
            div.innerHTML = campusCardTemplate.trim();
            campusDiv.appendChild(div.firstChild);

        }

        function responesiveCardDiv() {
            var campusDiv = document.getElementById("campus");
            var campusDivChildren = campusDiv.children;
            for (let i = 0; i < campusDivChildren.length; i++) {
                // campusDivChildren[i].classList.add('col-4 p-0 m-0 overflow-hidden')
                campusDivChildren[i].setAttribute("data-aos", "fade-zoom-in");
                campusDivChildren[i].setAttribute("data-aos-delay", 100);

            }
        }
        responesiveCardDiv();
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
