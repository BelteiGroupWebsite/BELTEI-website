@extends('web.client.beltei_university.layout.app')

@section('content')
    <style>
        .background-asaihl {
            position: relative;
            z-index: 10;
            background-color: #003572;
        }

        .background-asaihl::after {
            content: '';
            width: 100%;
            height: 100%;
            position: absolute;
            background-color: #0035729f;
            z-index: -1;
            top: 0;
            left: 0;

        }

        .background-asaihl::before {
            /* background-color: #003572; */
            /* background: url('{{ asset('asset/img/university/asaihl/banner/background.png') }}') no-repeat center; */

            background-color: #007222;
            content: '';
            width: 100%;
            height: 100%;
            position: absolute;
            z-index: -10;
            background: url('{{ asset('asset/img/university/asaihl/banner/background.png') }}') no-repeat bottom;
            background-size: 100%;

            top: 0;
            left: 0;
        }

        .detail-container {
            padding: 1rem;
            border-radius: .5rem;
            background-color: rgb(235, 248, 253);
            margin-block: 1rem;
        }

        .detail-container h4 {
            color: blue;
            padding-block: 1rem;
        }

        .detail-container p {
            padding-block: .5rem;
            text-indent: 2rem;
        }

        .countdown-div span {
            padding: .2rem 1rem;
            background-color: goldenrod;
            color: white;
            border-radius: 50px;
            font-weight: bold;
        }

        .selection {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr;
            /* grid-template-columns: auto auto auto auto; */
            gap: 12px;
        }

        .selection a {
            text-align: center;
            color: whitesmoke;
            padding: 1rem;
            border-radius: .5rem;
            font-weight: bold;
            /* width: 200px; */
            background-color: #003572;
        }

        .selection div a {}

        #footer {
            /* background-image: url('https://static.vecteezy.com/system/resources/thumbnails/017/518/564/small/outline-phnom-penh-cambodia-city-skyline-with-blue-buildings-vector.jpg'); */
            position: relative;
            z-index: 10;
            background: url('https://img.freepik.com/premium-vector/vector-illustration-phnom-penh-skyline-cambodia_668947-342.jpg') no-repeat center;
            background-size: cover;
        }

        #footer::before {
            content: '';
            width: 100%;
            height: 100%;
            position: absolute;
            z-index: -10;
            /* background-color: #003572d8; */
            background-color: #003572;

            top: 0;
            left: 0;
        }



        .footer-icon-container div {
            display: flex;
            justify-content: center;
            gap: .75rem;
            margin-block: 1rem;
        }

        .footer-icon-container i {

            font-size: 20px;
            color: white;
        }
    </style>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Get the target date from Laravel's Blade variable
            const futureDate = new Date("{{ $futureDate->toIso8601String() }}").getTime();

            // Update the countdown every second
            const countdownInterval = setInterval(() => {
                const now = new Date().getTime();
                const distance = futureDate - now;

                // If the countdown is over
                if (distance < 0) {
                    clearInterval(countdownInterval);
                    document.getElementById("countdown").innerHTML = "EXPIRED";
                    return;
                }

                // Calculate days, hours, minutes, seconds
                const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((distance % (1000 * 60)) / 1000);

                // Display the result
                document.getElementById("countdown").innerHTML =
                    `<small><span>${days} Days</span> <span>${hours} Hrs</span> <span>${minutes} Min</span> <span>${seconds} Sec</span></small>`;
            }, 100);
        });
    </script>

    <div class="text-start">
        <div class="banner mb-4">
            <div class="position-relative mb-3">
                <div>
                    <img class="w-100" src="{{ asset('asset/img/university/asaihl/banner/banner2.jpg') }}" alt="">
                </div>
                <div class="countdown position-absolute bottom-0 start-0 w-100 background-asaihl p-3 pb-4 gold"
                    style="padding-inline: 30px !important">
                    <div class="d-flex justify-content-between align-items-center gap-3 w-100 text-center">
                        <img class="max-height-70" src="{{ asset('asset/img/university/asaihl/logo.png') }}" alt="">
                        <div class=" w-100">
                            <h5 class="pb-4">
                                <strong>2025 ASAIHL Conference</strong> at BELTEI International University, <br>
                                Phnom Penh, Kingdom of Cambodia
                            </h5>
                            <div class="countdown-div position-absolute " style="right: 30px; bottom: 10px" id="countdown">
                                <span>Loading ...</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="">
                <img class="w-100" src="{{ asset('asset/img/university/asaihl/banner/banner1.gif') }}" alt="">
            </div>
            <hr class="" style="border: 5px solid #003572; ">
        </div>


        <div class="selection my-5">
            <a href="">About Us</a>
            <a href="">Registration</a>
            <a href="">Paper Submission</a>
            <a href="">Conference Program</a>
            <a href="">Venue</a>
            <a href="">Travel Information</a>
            <a href="">Tour Destination</a>
            <a href="">Contact Us</a>
        </div>

        {{-- <div class="logo">
            <div class="d-flex justify-content-center align-items-center gap-5">
                <div>
                    <img class="max-height-150"
                        src="{{ asset('asset/img/beltei_international_university_in_cambodia.png') }}" alt="">
                </div>
                <div class="">
                    <img class="max-height-150" src="{{ asset('asset/img/university/asaihl/logo.png') }}" alt="">
                </div>
            </div>
        </div> --}}

        <div class="frame my-2 d-flex justify-content-center">

            <iframe class="w-100" width="560" height="415"
                src="https://www.youtube.com/embed/XRg3XUz24fI?si=2QaYU0zGICIybOme" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

        </div>

        {{-- <div class="about detail-container">
            <h4>About BELTEI International University</h4>

            <div>

                <p>
                    BELTEI International University is a private higher education institution founded on August 4, 2005,
                    originating from BELTEI International Institute, and it was developed into BELTEI International
                    University on September 6, 2012. The university was officially inaugurated on August 21, 2014, which was
                    presided over by Samdech Akka Moha Sena Padei Techo HUN SEN, Prime Minister of the Kingdom of Cambodia.
                </p>
                <p>
                    The full name of the university in Khmer is <span class="Muol-Light">“សាកលវិទ្យាល័យ ប៊ែលធី
                        អន្តរជាតិ”</span> and in English “BELTEI
                    International University”; “BELTEI” is an acronym for 6 major disciplines, "BEL" stands for Business,
                    Economics, and Law, and "TEI" stands for Tourism, English, and Information technology.
                </p>
                <p>
                    His Excellency Dr. Ly Chheng is currently a Member of the National Assembly for Phnom Penh Capital City.
                    He is the Director-General of BELTEI Group and the Chairman of the Board of Directors of BELTEI
                    International University, the sole founder, who has invested the capital to establish and construct all
                    buildings of BELTEI International University Campuses.
                </p>
                <p>
                    Nowadays, there are 2 campuses located in Phnom Penh providing 2 main programs (National and
                    International Programs) with 13 Faculties and 45 Majors:
                </p>
                <p>
                    - BELTEI International University, Campus 1 (Tuol Sleng): № 21, St.360, Sangkat Boeng Keng Kang 3, Khan
                    Boeng Keng Kang, Phnom Penh (100 meters South of Tuol Sleng Genocide Museum), a 15-storey building with
                    110 rooms, 1 Lecture Hall with 150 seats, 1 conference hall with a capacity of 700 seats, 1 cafeteria, 1
                    library and 2-basement parking lots.
                </p>
                <p>
                    - BELTEI International University, Campus 2 (Chom Chao Flyover): № 151, National Road № 3, Sangkat Chom
                    Chao 2, Khan Posenchey, Phnom Penh (about 500 meters from Chom Chao Flyover), a 9-storey building with
                    142 rooms, 1 Lecture Hall with 150 seats, 1 Auditorium with 800 seats and 1 Conference Hall with a
                    capacity of 1200 seats, 1 cafeteria, 1 library, 1 dormitory with 65 spacious rooms accommodating 130
                    beds and more than 10,000m2 basement parking lot.
                </p>

            </div>

            <div>
                <img src="" alt="">
                <img src="" alt="">
                <img src="" alt="">
            </div>
        </div>

        <div class="introduction detail-container">
            <h4>ASAIHL introduction</h4>
            <div>
                <p>The Association of Southeast Asian Institutions of Higher Learning (ASAIHL) was founded in 1956 as a
                    non-governmental organization at a meeting in Bangkok of the heads of eight state universities in
                    Southeast Asia. Field Marshal Pibulsongkram, the Prime Minister, supported its foundation and approved
                    setting up the Secretariat in Thailand. His government began by giving financial and material support,
                    which continued for several years until the Association had other sources of funds. More recently, in
                    addition to physical facilities, the Thai government has been supporting the Association with a grant of
                    USD 10,000 annually.
                </p>
                <p>
                    ASAIHL’s purpose is to assist member institutions to strengthen themselves through mutual self-help and
                    to achieve international distinction in teaching, research and public service. In so doing, the
                    institutions contribute strength to their respective nations and to the entire region. Specifically, the
                    Association exists to foster the development of the institutions themselves, the cultivation of a sense
                    of regional identity and interdependence and liaison with other regional and international organizations
                    concerned with research and teaching. It serves as a clearing-house of information; provides regular
                    opportunities for the discussion of academic development and general university development; assists
                    member institutions in the recruitment and placement of faculty and staff, exchanges of professors and
                    students and in the development of co-operative arrangements on specific projects; provides advisory
                    services of consultants; strengthens the relationship with regional and international bodies and keeps
                    member institutions informed about developments in the region; and recognizes and acknowledges
                    distinctive achievements among Southeast Asian institutions of higher education.
                </p>
            </div>
        </div>

        <div class="profile  detail-container text-center">
            <img class="max-width-150 rounded-pill "
                src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Profile_avatar_placeholder_large.png?20150327203541"
                alt="">
            <div>
                <h4>BELTEI International University</h4>
            </div>
        </div>


        <div class="asaihl detail-container">
            <h4>About ASAIHL Conference 2025</h4>
            <p>
                Situated in Surabaya, a port city in the Province of East Java, Indonesia, Universitas Airlangga was
                established on 10 November 1954. Ever since it was established 69 years ago, Universitas Airlangga has been
                committed to providing excellent education by adhering to its motto; Excellent with Morality.
            </p>
            <p>
                In addition to providing excellent education over the generations, Universitas Airlangga has also attempted
                initiatives to increase its quality in global level through the internationalization initiatives conducted
                in various activities starting from initiating partnerships with universities overseas, organizing mobility
                programs for both students and academic members of the university, to participating in international
                consortia.
            </p>
            <p>
                The Association of Southeast Asian Institutions of Higher Learning (ASAIHL) is one of the consortia
                participated by UNAIR and in 2024, UNAIR has the honor to host the ASAIHL Conference 2024 on University’s
                Role in Advancing Climate Crises Reduction with the following sub-themes:
            </p>
            <p>
                1. Curriculum design towards supporting academics’ role in climate crises reduction
            </p>
            <p>
                2. Green economy-oriented research in accelerating university-industry collaboration
            </p>
            <p>
                3. Community services as climate crises resolution framework
            </p>
        </div> --}}

        <div class="selection">

        </div>

        <div class="footer d-flex gap-3 align-items-center justify-content-between px-4 py-4 gold" id="footer">

            <div class="logo-footer ">
                <div class="d-flex gap-3 mb-2">
                    <div>
                        <img class="max-height-50"
                            src="{{ asset('asset/img/beltei_international_university_in_cambodia.png') }}" alt="">
                    </div>
                    <div class="">
                        <img class="max-height-50" src="{{ asset('asset/img/university/asaihl/logo.png') }}" alt="">
                    </div>
                </div>
                <div style="line-height: .3;">
                    <small style="line-height: normal;">
                        <span class="gold">Campus 1 (Toul Sleng):</span><br>
                        <span class="text-white">#21, Street, Sangkat Boeung KengKang III, Khan Boeung KengKang, Phnom Penh.
                            (100m south of Tuol Sleng Genocide Museum)</span>
                        <br>
                        <span class="gold">Campus 2 (Chom Cao Flyover):</span><br>
                        <span class="text-white">#151, National Road No. 3, Sangkat Chom Chao II, Khan Posenchey, Phnom
                            Penh.</span>

                    </small>
                </div>
            </div>

            <div class="social-media text-center">
                <h6>GET MORE UPDATES ON OUR SOCIAL MEDIA</h6>
                <div class="footer-icon-container">
                    <div>
                        <a href=""><i class="fa-brands fa-facebook"></i></a>
                        <a href=""><i class="fa-brands fa-instagram"></i></a>
                        <a href=""><i class="fa-brands fa-tiktok"></i></a>
                        <a href=""><i class="fa-brands fa-youtube"></i></a>
                        <a href=""><i class="fa-brands fa-telegram"></i></a>
                    </div>
                </div>
            </div>

        </div>


    </div>
@endsection
