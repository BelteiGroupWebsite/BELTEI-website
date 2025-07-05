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

        .selection a,
        .selection button {
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


        .content-details>p {
            padding-bottom: 1rem;
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
                                Phnom Penh, The Kingdom of Cambodia
                            </h5>
                            <div class="countdown-div position-absolute " style="right: 30px; bottom: 10px" id="countdown">
                                <span>Loading ...</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="">
                {{-- <video autoplay src="{{ asset('asset/img/university/asaihl/banner/banner1.mp4') }}"></video> --}}
                <video class="w-100" autoplay muted loop>
                    <source src="{{ asset('asset/img/university/asaihl/banner/banner1.mp4') }}" type="video/mp4">
                    {{-- <source src="movie.ogg" type="video/ogg"> --}}
                    {{-- Your browser does not support the video tag. --}}
                </video>
                {{-- <img class="w-100" src="{{ asset('asset/img/university/asaihl/banner/banner1.gif') }}" alt=""> --}}
            </div>
            <hr class="" style="border: 5px solid #003572; ">
        </div>


        <div class="selection text-white">
            <button onclick="toggleDiv('content-detail-1')" style="background-color: #001436">About Us</button>
            <button onclick="toggleDiv('content-detail-2')" style="background-color: #002a72">Registration</button>
            <button onclick="toggleDiv('content-detail-3')" style="background-color: #003997">Paper Submission</button>
            <button onclick="toggleDiv('content-detail-4')" style="background-color: #004ac4">Conference Program</button>
            <button onclick="toggleDiv('content-detail-5')" style="background-color: #2e42d6">Venue</button>
            <button onclick="toggleDiv('content-detail-6')" style="background-color: #0054de">Travel Information</button>
            <button onclick="toggleDiv('content-detail-7')" style="background-color: #0061ff">Tour Destination</button>
            <button onclick="toggleDiv('content-detail-8')" style="background-color: #2779ff">Contact Us</button>
        </div>

        <div id="content-detail" class="text-justify">
            <div id="content-detail-1" class="content-details p-3 d-none" style="background-color: rgb(215, 244, 253);">

                <div class="d-flex align-items-center">
                    <img src="https://media.licdn.com/dms/image/C5603AQEfV5tW79ZMJg/profile-displayphoto-shrink_200_200/0/1593411121688?e=2147483647&v=beta&t=e5O6w9XdIM4BkXWltAqsN7_9ku4WEvY6iHWBuOxH0gM"
                        alt="">
                    <div class="position-relative">
                        <h5>Chairman's Message</h5>
                        {{-- <h4 class="position-absolute bg-primary p-2" style="top: -30px"> --}}
                        <h4 class="text-white bg-primary p-2 w-5" style="width: 300px">
                            H.E. Dr. LY CHHENG
                        </h4>
                        <div class="text-white p-3" style="background-color: #002a72">
                            <p>
                                The Member of the National Assembly for Phnom Penh Capital City Cambodia, Founder &
                                Director-General of BELTEI Group, Chairman of The Board of Directors of BELTEI International
                                University
                            </p>
                        </div>
                    </div>
                </div>

                <div class="py-2">
                    <p>-Delegates from ASAIHL and Partners in Higher Education around the World,</p>
                    <p>-Your Excellencies, Lok Oknha, Lok Chumteav, National and International Distinguished Guests,</p>
                    <p>-Ladies and Gentlemen!</p>
                    <h5><strong>Welcome to 2025 ASAIHL Conference</strong></h5>
                    <h5><strong>at BELTEI International University, Phnom Penh, The Kingdom of Cambodia!</strong></h5>
                </div>
                <p>Today is an auspicious day that BELTEI International University has a great honor to welcome Delegates
                    from ASAIHL and Partners in Higher Education across the globe to 2025 ASAIHL Conference hosted by BELTEI
                    International University, Phnom Penh, The Kingdom of Cambodia.</p>
                <p>On behalf of the Management Team of BELTEI Group and the 2025 ASAIHL Conference Organizing Committee, I
                    would like to express my profound thanks to all Delegates from ASAIHL and Partners in Higher Education
                    who are spending their invaluable time and putting their efforts to attend the 2025 ASAIHL Conference.
                </p>
                <p>I am really honored to warmly welcome your excellencies, ladies and gentlemen to the 2025 ASAIHL
                    Conference, which is being held from 06-08 July, 2025. I firmly believe that this event will provide an
                    international research sharing platform for our partners in higher education not only to providing and
                    sharing useful information regarding to their institutions but also promoting global education
                    integration.</p>
                <p>The 2025 ASAIHL Conference is being organized in the alignment of the aims and purposes of the Royal
                    Government of Cambodia and the Ministry of Education, Youth, and Sports to strengthening the higher
                    education in Cambodia through research, innovation and internationalization.</p>
                <p>Through this meaningful conference, I strongly believe that there will be productive outcomes for all
                    participants and our partners in higher education strengthening optimal solidarity and closed
                    cooperation in order to promote research ecosystem and development of each institution. From this
                    esteemed platform, I would like to suggest to all participants to pay more attention by taking notes and
                    avail the opportunity to learn by interacting and communicating with our partners in education.</p>
                <p>"Learn to be a leader before becoming a Leader !"</p>
                <p>Furthermore, I would like to express my genuine gratitude to ASAIHL for providing opportunity to host
                    2025 ASAIHL Conference and the Ministry of Education, Youth and Sports of the Kingdom of Cambodia that
                    has always been supporting and providing opportunities to all private and public education sectors in
                    Cambodia to operate varieties of higher education programs for the benefits of all students, learners
                    and researchers.</p>
                <p>Ladies and Gentlemen! Once again, I would like to express my profound thanks to ASAIHL and the Royal
                    Government of Cambodia, Minister of Education, Youth and Sports and Officials from all the Ministries
                    for their cooperation and contribution. I would also like to thank to all delegates of our partners in
                    higher education and organizing committee for your vigorous dedication and contribution toward the
                    success of this integral conference.</p>
                <p>Last but not least, I firmly believe that the 2025 ASAIHL Conference hosted BELTEI International
                    University, Phnom Penh, The Kingdom of Cambodia will accomplish its aims and objectives set out for this
                    conference through strengthening the mutual interest and trust with the quality of education by
                    transforming human resources into the human capital.</p>
                <p>Finally, I would also like to wish Excellencies, Lok Oknha, Lok Chumteav, Ladies and Gentlemen with the 4
                    gems of Buddhist Doctrines: Longevity, Nobility, Health and Strength. Thank you.</p>


                <div class="text-center my-3">
                    <img class="w-75" src="{{ asset('asset/img/university/app/photo_2024-07-05_09-06-55.jpg') }}"
                        alt="">
                    <img class="w-75" src="{{ asset('asset/img/university/app/qr.jpg') }}" alt="">
                    <a href="https://onelink.to/646cp2" class="btn btn-lg mt-2 btn-success">Download BELTEI IU App</a>

                </div>
                <hr class="" style="border: 3px solid #003572; ">
                <div class="text-center mt-4">
                    <img class="max-height-150" src="{{ asset('asset/img/university/asaihl/logo.png') }}" alt="">
                </div>

                <h5><strong>ASAIHL Introduction</strong></h5>

                <p>The Association of Southeast Asian Institutions of Higher Learning (ASAIHL) was founded in 1956 as
                    a&nbsp;non-governmental organization at a meeting in Bangkok of the heads of eight state universities in
                    Southeast Asia. Field Marshal Pibulsongkram, the Prime Minister, supported its foundation and approved
                    setting up the Secretariat in Thailand. His government began by giving financial and material support,
                    which continued for several years until the Association had other sources of funds. More recently, in
                    addition to physical facilities, the Thai government has been supporting the Association with a grant of
                    US$ 10,000 annually.</p>
                <p>ASAIHL&rsquo;s purpose is to assist member institutions to strengthen themselves through mutual self-help
                    and to achieve international distinction in teaching, research and public service. In so doing, the
                    institutions contribute strength to their respective nations and to the entire region. Specifically, the
                    Association exists to foster the development of the institutions themselves, the cultivation of a sense
                    of regional identity and interdependence and liaison with other regional and international organizations
                    concerned with research and teaching. It serves as a clearing-house of information; provides regular
                    opportunities for the discussion of academic development and general university development; assists
                    member institutions in the recruitment and placement of faculty and staff, exchanges of professors and
                    students and in the development of co-operative arrangements on specific projects; provides advisory
                    services of consultants; strengthens the relationship with regional and international bodies and keeps
                    member institutions informed about developments in the region; und recognizes and acknowledges
                    distinctive achievements among Southeast Asian institutions of higher education.</p>
                <p><strong>Association of Southeast Asian Institutions of Higher Learning (ASAIHL)</strong></p>
                <p>7th&nbsp;Floor, Ministry of Higher Education Science Research and Innovation (MHESI) Building 328 Si
                    Ayutthaya Road, Phaya Thai, Ratchathewi, Bangkok 10400, Thailand.</p>
                <p>Website: <a href="www.asaihl.stou.ac.th">www.asaihl.stou.ac.th</a></p>
                <p>E-mail: <a href="mailto:asaihl1956@gmail.com">asaihl1956@gmail.com</a></p>
            </div>
            <div id="content-detail-2" class="content-details p-3 d-none" style="background-color: rgb(215, 244, 253);">
                <p><strong>Conference Fee</strong></p>
                <p>-ASAIHL Nominated Participants: Free of charge</p>
                <p>-Parallel Session/Country Report Presenters: Free of charge</p>
                <p>-Nominated Participants by Higher Education Institution Only: Free of charge</p>
                <p>-Regular Participants: 50 USD</p>
                <p style="color: green"><strong>Conference Registration Link For Parallel Session/Country Report
                        Presenters</strong></p>
                <p>Please register in this link <a class="font-bold text-primary"
                        href="https://forms.gle/aajgf9LsprBqmu5L9">https://forms.gle/aajgf9LsprBqmu5L9</a></p>
                <p style="color: purple"><strong>Conference Registration Link For Participants</strong></p>
                <p>Please register in this link <a class="font-bold text-primary"
                        href="https://forms.gle/HFq5qSamSw8SuvVv9">https://forms.gle/HFq5qSamSw8SuvVv9</a></p>

                <br>
                <p>Our Theme for 2025 ASAIHL Conference is <strong>&ldquo;Digitalization of Higher Education&rdquo;</strong>
                    <br> and Subthemes are
                </p>
                <p>- Higher Education Orientation to Meet Market Needs in the Digital Era</p>
                <p>- Higher Education Skills and Work Based Learning in the Digital Era</p>
                <p>- <a
                        href="https://cefcambodia.com/2022/06/03/digital-transformation-in-higher-education-key-to-enhancing-cambodias-higher-education-sector/#:~:text=The%20pandemic%2Dinduced%20digital%20transformation,online%20education%20provision%20and%20management.">Digital
                        Transformation in Higher Education</a></p>
                <p>Follow with related topics are:</p>
                <p>-The Impact of Artificial Intelligence (AI) on Student Learning Outcomes and Equity in Higher Education.
                </p>
                <p>-Digital Divide and Access to Quality Education.</p>
                <p>-The Role of Social Media in Higher Education.</p>
                <p>-The Role of Faculty in the Digital Age.</p>
                <p>-The Ethics of Data-Driven Decision Making in Higher Education.</p>
                <p>-The Application of Virtual Reality (VR) and Augmented Reality (AR) in Science, Technology, Engineering,
                    and Mathematics (STEM) Education.</p>
                <p>-The Use of Big Data Analytics in Scientific Research and Higher Education.</p>
                <p>-The Impact of Digital Tools on Scientific Collaboration and Knowledge Sharing.</p>
                <p>-The Development and Implementation of Online Laboratories and Remote Experimentation in Science
                    Education.</p>
                <p>-The Role of Artificial Intelligence (AI) in Scientific Research: Exploring the Potential of AI in Data
                    Analysis, Drug Discovery, and Materials Science.</p>

            </div>

            <div id="content-detail-3" class="content-details p-3 d-none" style="background-color: rgb(215, 244, 253);">
                <h6><strong>Important Dates</strong></h6>
                <h6><strong>Call for Papers Submission</strong></h6>
                <table class="my-2" style="width: 70%">
                    <tr>
                        <td>-Start: January 1, 2025</td>
                        <td>End: June 1, 2025</td>
                    </tr>
                    <tr>
                        <td>-Abstract Submission: January 1, 2025</td>
                        <td>End: June 1, 2025</td>
                    </tr>
                </table>
                <p>-Full Paper Submission: <span class="text-danger">(After the acceptance notifications are sent
                        out)</span></p>
                <p>-Review Process: 3 days after submission date</p>
                <p>-Slide Presentation Submission: 2 weeks after approval</p>
                <p>-Journal Publication: (Optional)</p>
                <p>-Full Paper and Research Abstract Submitted to our email: <a class="text-danger"
                        href="biu.2025asaihl@beltei.edu.kh">biu.2025asaihl@beltei.edu.kh</a></p>
                <h6><strong>Abstract Guidelines</strong></h6>
                <ol>
                    <ol>
                        <li>Page limit: 01 page in English</li>
                        <li>Formatting:</li>
                    </ol>
                </ol>
                <h6><strong>Title of the abstract</strong></h6>
                <p>First Author*1, Second Author 2, and Third Author 3</p>
                <p>1.Address of the first author (Department, Faculty, University, Address, Postal code, Country)</p>
                <p>2.Address of the second author (Department, Faculty, University, Address, Postal code, Country)</p>
                <p>3.Address of the last author (Department, Faculty, University, Address, Postal code, Country)
                    *Corresponding author. Email: CorrespondingAuthorEmail@mail.com</p>
                <h6><strong>Abstract</strong></h6>
                <p>The abstract should not exceed 250 words in Times New Roman, size 12.</p>
                <p>Keywords: 3 &ndash; 5 terms</p>

                <h6><strong>Full Paper Format</strong></h6>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:-5.1pt;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;text-indent:5.1pt;line-height:115%;'>
                    <strong><span
                            style='font-size:19px;line-height:115%;font-family:"Times New Roman",serif;'>Topic</span></strong>
                </p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:-5.1pt;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;text-indent:5.1pt;line-height:115%;'>
                    <strong><span
                            style='font-size:19px;line-height:115%;font-family:"Times New Roman",serif;'>&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;</span></strong>
                </p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:-5.1pt;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;text-indent:5.1pt;line-height:115%;'>
                    <strong><span style='font-size:19px;line-height:115%;font-family:"Times New Roman",serif;'>(Times New
                            Roman, Bold, 14, Center)</span></strong>
                </p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:-5.1pt;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;text-indent:5.1pt;line-height:115%;'>
                    <strong><span style='font-family:"Times New Roman",serif;'>Author&rsquo;s name
                            &hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;..</span></strong>
                </p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:-5.1pt;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;text-indent:5.1pt;line-height:115%;'>
                    <strong><span style='font-family:"Times New Roman",serif;'>(Times New Roman, Bold, 11,
                            Center)</span></strong>
                </p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:-5.1pt;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;text-indent:5.1pt;line-height:115%;'>
                    <strong><span style='font-family:"Times New Roman",serif;'>Email
                            &hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;.</span></strong>
                </p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:-5.1pt;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;text-indent:5.1pt;line-height:115%;'>
                    <strong><span style='font-family:"Times New Roman",serif;'>University
                            &hellip;&hellip;&hellip;&hellip;.</span></strong>
                </p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:-5.1pt;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;text-indent:5.1pt;line-height:115%;'>
                    <span style='font-family:"Times New Roman",serif;'>* Corresponding Author:&nbsp;</span><a
                        href="mailto:megadewiambarwati@gmail.com"><span
                            style='font-family:"Times New Roman",serif;color:blue;'>..................................@gmail.com</span></a>
                </p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:-5.1pt;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;text-indent:5.1pt;line-height:115%;'>
                    <span style='font-family:"Times New Roman",serif;'>[Times New Roman, 11, center, if there are two or
                        more authors, insert the main author/ <em>Corresponding Author</em>]</span>
                </p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:-5.1pt;font-size:11.0pt;font-family:"Calibri",sans-serif;text-indent:5.1pt;line-height:115%;'>
                    &nbsp;</p>
                <p
                    style='margin-top:6.0pt;margin-right:0cm;margin-bottom:8.0pt;margin-left:-5.1pt;font-size:11.0pt;font-family:"Calibri",sans-serif;text-indent:5.1pt;line-height:115%;border:none;'>
                    <strong><sub><span
                                style='font-size:16px;line-height:115%;font-family:"Times New Roman",serif;color:black;'>ABSTRACT</span></sub></strong>
                </p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;'>
                    <em><span style='font-family:"Times New Roman",serif;color:#222222;'>Write-off is a way to improve
                            credit system of bank by moving a problematic loan that difficult to handle from bank&apos;s
                            balance sheet become extractable therefore it will not burden the bank&apos;s performance
                            later&hellip;. (150-250 words, Times New Roman, Italic, 11, Single spaces. Should concisely
                            describe the background of the paper, research problem, aim, research method, and
                            result)</span></em>
                </p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;'>
                    <strong><span
                            style='font-family:"Times New Roman",serif;'>Keywords:<em>&nbsp;</em></span></strong><em><span
                            style='font-family:"Times New Roman",serif;'>write-off, improve credit, problematic credit<span
                                style="color:#222222;">&nbsp;&hellip;&nbsp;</span>(3-5 words, Times New Roman 11, italic)
                        </span></em>
                </p>
                <h3
                    style='margin-top:2.0pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:16px;font-family:"Calibri Light",sans-serif;color:#1F3763;font-weight:normal;text-align:justify;line-height:115%;'>
                    <strong><span style='font-family:"Times New Roman",serif;'>INTRODUCTION&nbsp;</span></strong>
                </h3>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;text-indent:1.0cm;line-height:115%;'>
                    <span style='font-size:16px;line-height:115%;font-family:"Times New Roman",serif;'>[Times New Roman 12,
                        justify, 1.15 spaces, first paragraph indented a centimeter. Introduction contains a description of
                        the research background, problem statement and research objectives]</span>
                </p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;text-indent:1.0cm;line-height:115%;'>
                    <span style='font-size:16px;line-height:115%;font-family:"Times New Roman",serif;'>Write-off is a way
                        to improve credit system of bank by moving non-performing loans (problematic) that difficult to
                        handle from bank&apos;s balance sheet to being ultracapable therefore it will not burden the
                        bank&apos;s performance later, however, it does not remove the bank&apos;s right to collect the loan
                        as an effort to pay problematic loans to the debtor.</span>
                </p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;text-indent:1.0cm;line-height:115%;'>
                    <span style='font-size:16px;line-height:115%;font-family:"Times New Roman",serif;'>The write-off
                        mechanism is basically a last resort that usually chosen by banking institutions if several other
                        credit rescue efforts such as intensive billing, reconditioning, rescheduling, restructuring and
                        selling collateral do not provide maximum results, or the debtor runs away, disappears, and cannot
                        be contacted. This research has a goal in order to improve the financial performance of banks with a
                        write off system. The specific objective is to provide legal protection for banks that carry out a
                        write-off system and to rescue non-performing loans (bad credit) with a write-off system.</span>
                </p>
                <h4
                    style='margin-top:2.0pt;margin-right:0cm;margin-bottom:6.0pt;margin-left:0cm;font-size:15px;font-family:"Calibri Light",sans-serif;color:#2F5496;font-weight:normal;font-style:italic;line-height:115%;'>
                    <strong><span style='font-family:"Times New Roman",serif;'>LITERATURE REVIEW&nbsp;</span></strong>
                </h4>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;text-indent:1.0cm;line-height:115%;'>
                    <span style='font-size:16px;line-height:115%;font-family:"Times New Roman",serif;'>[Times New Roman 12,
                        justify, 1.15 spaced, contains a paragraph and begins with 1 cm indented line. Literature Review are
                        description of the theory, explanation based on expert, and provide previous relevant studies that
                        are relevant to your paper]</span>
                </p>
                <h4
                    style='margin-top:2.0pt;margin-right:0cm;margin-bottom:6.0pt;margin-left:0cm;font-size:15px;font-family:"Calibri Light",sans-serif;color:#2F5496;font-weight:normal;font-style:italic;line-height:115%;'>
                    <strong><span style='font-family:"Times New Roman",serif;'>RESEARCH METHODOLOGY</span></strong>
                </h4>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;text-indent:1.0cm;line-height:115%;'>
                    <span style='font-size:16px;line-height:115%;font-family:"Times New Roman",serif;'>[Times New Roman 12,
                        justify, 1.15 spaced, contains a paragraph and begins with 1 cm indented line. Methodology contains
                        a description of the approach method, research specifications, types and techniques of data
                        collection and data analysis methods.]</span>
                </p>
                <h4
                    style='margin-top:2.0pt;margin-right:0cm;margin-bottom:6.0pt;margin-left:0cm;font-size:15px;font-family:"Calibri Light",sans-serif;color:#2F5496;font-weight:normal;font-style:italic;line-height:115%;'>
                    <strong><span style='font-family:"Times New Roman",serif;'>RESULT AND DISCUSSION</span></strong>
                </h4>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;text-indent:1.0cm;line-height:115%;'>
                    <span style='font-size:16px;line-height:115%;font-family:"Times New Roman",serif;'>[Times New Roman 12,
                        justify, 1.15 spaces, each paragraph begins with indented a centimeter on first line. The results of
                        the research and discussion are explained in a scientific, analytical and critical descriptive. If
                        there is any sub-chapter, it should be written in Times New Roman, 12, bold]</span>
                </p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;text-indent:1.0cm;line-height:115%;'>
                    <span style='font-size:16px;line-height:115%;font-family:"Times New Roman",serif;'>[Any table and
                        figures should be followed by subtitle (ex: Table 1. Table title) and source]</span>
                </p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:115%;'>
                    <strong><span style='font-family:"Times New Roman",serif;'>Table 1.</span></strong><span
                        style='font-family:"Times New Roman",serif;'>&nbsp;Result Value Index Eckel [</span><span
                        style='font-size:16px;line-height:115%;font-family:"Times New Roman",serif;'>Times New Roman 12,
                        line left, 1.15 spaces]</span>
                </p>

                <img class="w-5" src="{{ asset('asset/img/university/asaihl/papersubmition.jpg') }}" alt="">

                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:115%;'>
                    <span style='font-family:"Times New Roman",serif;'>Source: Secondary data, 2018</span>
                </p>
                <img class="w-5" src="{{ asset('asset/img/university/asaihl/papersubmition2.jpg') }}" alt="">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;line-height:115%;'>
                    <strong><span style='font-family:"Times New Roman",serif;'>Figures 1.</span></strong><span
                        style='font-family:"Times New Roman",serif;'>&nbsp;Mind Mapping [</span><span
                        style='font-size:16px;line-height:115%;font-family:"Times New Roman",serif;'>Times New Roman 12,
                        line left, 1.15 spaces]</span>
                </p>
                <h3
                    style='margin-top:2.0pt;margin-right:0cm;margin-bottom:.0001pt;margin-left:0cm;font-size:16px;font-family:"Calibri Light",sans-serif;color:#1F3763;font-weight:normal;text-align:justify;line-height:115%;'>
                    <span style='font-family:"Times New Roman",serif;'><strong>CONCLUSION and suggestion</strong></span>
                </h3>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;text-indent:1.0cm;line-height:115%;'>
                    <span style='font-size:16px;line-height:115%;font-family:"Times New Roman",serif;'>[Times New Roman 12,
                        justify, 1.15 space, each paragraph begins with indented a centimeter on first line. Contains a
                        brief summary and suggestion from the research conclusion]</span>
                </p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;line-height:115%;'>
                    <strong><span
                            style='font-size:16px;line-height:115%;font-family:"Times New Roman",serif;color:black;'>REFERENCES</span></strong>
                </p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;line-height:115%;'>
                    <span style='font-size:16px;line-height:115%;font-family:"Times New Roman",serif;'>[The composition of
                        references should contain (80%) primary sources from national journal, international journal,
                        thesis, dissertation, conference proceedings national and international. Other sources (20%) can be
                        books or other reference sources.</span>
                </p>
                <p style='font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;line-height:150%;'>
                    <span style='font-size:16px;line-height:150%;font-family:"Times New Roman",serif;'>Each article must
                        contain at least 10 (ten) references and <strong>only references used as citations</strong> may be
                        listed in the Bibliography. Bibliography sources used in research must be at least the last 10
                        years. Format writing references using <strong>APA 7th edition</strong>]</span>
                </p>

                <br>


                <h6><strong>Slide Presentation Format</strong></h6>
                <h6><strong>Introduction</strong></h6>
                <p>Main text in Times New Roman, size 12.</p>
                <h6><strong>Methodology</strong></h6>
                <p>Main text in Times New Roman, size 12.</p>
                <h6><strong>Results</strong></h6>
                <p>Main text in Times New Roman, size 12.</p>
                <h6><strong>Conclusion</strong></h6>
                <p>Main text in Times New Roman, size 12.</p>
                <h6><strong>Reference</strong></h6>
                <p>Text in Times New Roman, size 11.</p>
                <h6><strong>2025 ASAIHL Conference </strong>(6-7-8 of July, 2025)</h6>
                <p>-Conference Day 1: July 6, 2025 (ASAIHL Board Meeting)</p>
                <p>-Conference Day 2: July 7, 2025</p>
                <p>-Conference Day 7: July 8, 2025</p>
                <h6><strong>Optional Tour </strong>: July 9-10, 2025</h6>
                <ul>
                    <li>For the optional tour, the destinations are</li>
                    <ul>
                        <li>1 Day Trip to Sihanoukville: Free of charge</li>
                        <li>2 Days Trip to Siem Reap and Angkor: 100 USD</li>
                    </ul>
                </ul>
            </div>

            <div id="content-detail-4" class="content-details p-3 d-none" style="background-color: rgb(215, 244, 253);">
                <p><strong>About 2025 ASAIHL Conference</strong></p>
                <p>The Association of Southeast Asian Institutions of Higher Learning (ASAIHL) is thrilled to announce that
                    the prestigious 2025 ASAIHL Conference will be hosted by the esteemed BELTEI International University in
                    Cambodia. This significant event will bring together a diverse community of academics, researchers,
                    administrators, and students from across the Southeast Asian region and beyond.</p>
                <p>A Platform for Collaboration and Knowledge Sharing</p>
                <p>The 2025 ASAIHL Conference will serve as a pivotal platform for:</p>
                <p>Sharing cutting-edge research: Presentations and discussions will cover a wide range of topics, including
                    advancements in teaching methodologies, innovative research findings, and best practices in higher
                    education administration.</p>
                <p>Fostering international collaboration: The conference will facilitate networking opportunities among
                    participants, enabling them to establish new partnerships, explore joint research projects, and expand
                    their international collaborations.</p>
                <p>Addressing regional challenges: Through insightful discussions and interactive workshops, participants
                    will delve into critical issues facing higher education in Southeast Asia, such as enhancing quality
                    assurance, promoting inclusivity, and preparing graduates for the demands of the 21<sup>st</sup>-century
                    workforce.</p>
                <p>Showcasing Cambodian excellence: The conference will provide a unique opportunity to showcase the
                    strengths and achievements of BELTEI International University and the Cambodian higher education sector
                    to the international community.</p>
                <p>A Memorable Experience in Cambodia</p>
                <p>Beyond the academic program, the 2025 ASAIHL Conference promises to be a memorable cultural experience.
                    Participants will have the opportunity to explore the rich history, vibrant culture, and stunning
                    natural beauty of Cambodia.</p>
                <p>Join Us in Cambodia!</p>
                <p>We invite all members of the higher education community to join us at the 2025 ASAIHL Conference in
                    BELTEI International University. This is an invaluable opportunity to engage with leading experts,
                    expand your professional network, and contribute to the advancement of higher education in Southeast
                    Asia and beyond.</p>


                <br>

                <p>Our Theme for 2025 ASAIHL Conference is <strong>&ldquo;Digitalization of Higher Education&rdquo;</strong>
                    <br> and Subthemes are
                </p>
                <p>- Higher Education Orientation to Meet Market Needs in the Digital Era</p>
                <p>- Higher Education Skills and Work Based Learning in the Digital Era</p>
                <p>- <a
                        href="https://cefcambodia.com/2022/06/03/digital-transformation-in-higher-education-key-to-enhancing-cambodias-higher-education-sector/#:~:text=The%20pandemic%2Dinduced%20digital%20transformation,online%20education%20provision%20and%20management.">Digital
                        Transformation in Higher Education</a></p>
                <p>Follow with related topics are:</p>
                <p>-The Impact of Artificial Intelligence (AI) on Student Learning Outcomes and Equity in Higher Education.
                </p>
                <p>-Digital Divide and Access to Quality Education.</p>
                <p>-The Role of Social Media in Higher Education.</p>
                <p>-The Role of Faculty in the Digital Age.</p>
                <p>-The Ethics of Data-Driven Decision Making in Higher Education.</p>
                <p>-The Application of Virtual Reality (VR) and Augmented Reality (AR) in Science, Technology, Engineering,
                    and Mathematics (STEM) Education.</p>
                <p>-The Use of Big Data Analytics in Scientific Research and Higher Education.</p>
                <p>-The Impact of Digital Tools on Scientific Collaboration and Knowledge Sharing.</p>
                <p>-The Development and Implementation of Online Laboratories and Remote Experimentation in Science
                    Education.</p>
                <p>-The Role of Artificial Intelligence (AI) in Scientific Research: Exploring the Potential of AI in Data
                    Analysis, Drug Discovery, and Materials Science.</p>


                <p><strong>&nbsp;</strong></p>

                {{-- <p
                    style='font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;line-height:150%;'>
                    <strong><span style='font-size:16px;line-height:150%;font-family:"Segoe UI",sans-serif;'>Tentative
                            Program</span></strong>
                </p>
                <p
                    style='font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;line-height:150%;'>
                    <strong><span style='font-size:16px;line-height:150%;font-family:"Segoe UI",sans-serif;'>2025 ASAIHL
                            Conference </span></strong><span
                        style='font-size:16px;line-height:150%;font-family:"Segoe UI",sans-serif;'>(July 6-7-8, 2025)</span>
                </p> --}}
                {{-- <p
                    style='font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;line-height:150%;'>
                    <strong><span style='font-size:16px;line-height:150%;font-family:"Segoe UI",sans-serif;'>Conference Day
                            1</span></strong><span
                        style='font-size:16px;line-height:150%;font-family:"Segoe UI",sans-serif;'>&nbsp;</span><span
                        style='font-size:16px;line-height:150%;font-family:"Arial",sans-serif;'>│</span><span
                        style='font-size:16px;line-height:150%;font-family:"Segoe UI",sans-serif;'>&nbsp;Venue BELTEI Group
                        Headquarters&nbsp;</span><span
                        style='font-size:16px;line-height:150%;font-family:"Arial",sans-serif;'>│</span><span
                        style='font-size:16px;line-height:150%;font-family:"Segoe UI",sans-serif;'>&nbsp;Sunday, July 6,
                        2025</span>
                </p> --}}


                <h5 class="text-center" style="font-family: 'Times New Roman', Times, serif"><strong><span>Tentative
                            Program <br>2025 ASAIHL Conference&nbsp;(July 6-7-8, 2025) <br>&quot;Digitalization in Higher
                            Education&quot;</span></strong></h5>
                <br />
                <p><strong><span>Conference Day 1</span></strong><span>&nbsp;<strong>│ Venue, BELTEI Group Headquarters │
                            Sunday, July 6, 2025</strong></span></p>
                <p><strong><u><span>Evening Session</span></u></strong></p>
                <p><span>17:00 &ndash; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;- &nbsp;&nbsp;Pick Up from Hotel</span></p>
                <ul>
                    <li><span>ASAIHL Board Meeting <em>(Hybrid Mode)</em></span></li>
                    <li><span>Board Members&rsquo; Networking Dinner</span></li>
                </ul>
                <p><strong><span>&nbsp;</span></strong></p>
                <p><strong><span>Conference Day 2 │ BELTEI IU, Campus 2 │ Monday, July 7, 2025</span></strong></p>
                <p><strong><u><span>Morning Session</span></u></strong></p>
                <p><strong><u><span>Conference Hall Zone A &amp; B</span></u></strong></p>
                <p><span>07:30 &ndash;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Pick Up from Hotel</span>
                </p>
                <p><span>08:30 &ndash;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;Registration</span></p>
                <p><span>08:30 &ndash; 10:30 &nbsp; &nbsp;<strong><u>Opening Ceremony</u></strong></span></p>
                <p><span>-National Anthem of The Kingdom of Cambodia&nbsp;</span></p>
                <p><span>-Khmer Blessing Dance</span></p>
                <p><span>-Video Clip about 2025 ASAIHL Conference in Cambodia</span></p>
                <p><span>-Welcoming Address by <strong>H.E Ly Navuth</strong>, Deputy Director-General of BELTEI Group and
                        The President of BELTEI International University</span></p>
                <p><span>-Keynote Speech by <strong>H.E. Dr. Ly Chheng</strong>, The Member of the National Assembly for
                        Phnom Penh Capital City Cambodia, Founder &amp; Director-General of BELTEI Group</span></p>
                <p><span>-Video Clip of Keynote Adress by <strong>Professor Wilert Puriwat, D.Phil. (Oxon)</strong>, the
                        President of
                        ASAIHL</span></p>
                <p><span>-Opening Speech by <strong>H.E Dr. Sann Vathana</strong>, Secretary of State of Education Youth and
                        Sport</span></p>
                <div>
                    <ul>
                        <li><span>&nbsp;Photo Session</span></li>
                    </ul>
                </div>
                <p><strong><u><span>Conference Hall Zone B</span></u></strong></p>
                <p><span>10:45 &ndash; 12:00 &nbsp;&nbsp;- <strong>Country Report- Thailand</strong></span></p>
                <p><span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;-
                        <strong>Country Report- Poland</strong></span></p>
                <p><span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;-
                        Keynote Adress (Prof, Dr. Heng Kreng, Director of Research Department</span></p>
                <p><em><span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            &nbsp;&nbsp;of MoEYS, Cambodia)</span></em></p>
                <p><em><span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            &nbsp;&nbsp;-Letter of Appreciation Awarding</span></em></p>
                <p><span>12:00 &ndash; 14:00 &nbsp; &nbsp;Lunch <em>(Cafeteria-VPI Lounge)</em></span></p>
                <p><span>-Campus Tour</span></p>
                <p><span>&nbsp;</span></p>
                <p><strong><u><span>Afternoon Session</span></u></strong></p>
                <p><strong><u><span>Conference Hall Zone B</span></u></strong></p>
                <p><span>14:00 &ndash; 15:30 &nbsp; Paper Presentation <em>(4 Breakout Rooms = 12 Presenters, Room
                            101-104)</em></span></p>
                <p><span>15:30 &ndash; 16:00 &nbsp; Coffee Break <em>(Zone A)</em></span></p>
                <p><span>16:00 &ndash; 16:30 &nbsp; <strong>Country Report- Malaysia</strong></span></p>
                <p><span>16:30 &ndash; 17:00 &nbsp; <strong>Country Report- Philippines</strong></span></p>
                <p><span>17:00 &ndash; 17:30 &nbsp; <strong>Country Report- Japan</strong></span></p>
                <p><span>18:30 &ndash; 20:30 &nbsp; Dinner at Tonle Bassac Restaurant</span></p>
                <p><strong><u><span>Conference Day 3 │ BELTEI IU, Campus 2 │ Tuesday, July 8, 2025</span></u></strong></p>
                <p><strong><u><span>Morning Session</span></u></strong></p>
                <p><strong><u><span>Conference Hall Zone B</span></u></strong></p>
                <p><span>07:30 &ndash; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; Pick Up from Hotel</span></p>
                <p><span>08:30 &ndash;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; Registration</span></p>
                <p><span>08:30 &ndash; 09:30<strong>&nbsp; &nbsp; Keynote Adress&nbsp;</strong><em>(Prof, Dr. ALADDIN D.
                            RILLO, Senior Economic Advisor)</em></span></p>
                <p><span>09:30 &ndash; 10:00 &nbsp; &nbsp;<strong>Country Report- Taiwan</strong></span></p>
                <p><span>10:00 &ndash; 10:30&nbsp;&nbsp;&nbsp; Coffee Break <em>(Zone A)</em></span></p>
                <p><span>10:30 &ndash; 12:00&nbsp;&nbsp;&nbsp; Paper Presentation <em>(4 Breakout Rooms = 09 Presenters,
                            Room 101-104)</em></span></p>
                <p><span>12:00 &ndash; 13:00 &nbsp; &nbsp;Lunch <em>(Cafeteria-VIP Lounge)</em>&nbsp;</span></p>
                <p><strong><u><span>Afternoon Session</span></u></strong></p>
                <p><strong><u><span>Conference Hall Zone A</span></u></strong></p>
                <p><span>13:00 &ndash; 14:00 &nbsp; DYNAMEID Program</span></p>
                <p><span>14:00 &ndash; 14:30 &nbsp; <strong>Country Report- Bulgari</strong></span></p>
                <p><span>14:30 &ndash; 15:00 &nbsp; <strong>Country Report- Uzbekistan</strong></span></p>
                <p><span>15:00 &ndash; 15:30&nbsp;&nbsp;&nbsp; Coffee Break <em>(Zone B)</em></span></p>
                <p><strong><span>15:30 &ndash; 17:45</span></strong><span>&nbsp; &nbsp;<strong>Closing
                            Ceremony</strong></span></p>
                <p><strong><span> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; - </span></strong><span>Next Conference
                        Presentation</span></p>
                <p><strong><span>- Country Report- Cambodia</span></strong></p>
                <p><span>- Report by ASAIHL</span></p>
                <p><span>-Video Clip about 2025 ASAIHL Conference in Cambodia</span></p>
                <p><span>- Closing Speech by <strong>H.E. Dr. LY CHHENG,</strong> The Member of the National Assembly for
                        Phnom Penh Capital City Cambodia, Founder &amp; Director-General of BELTEI Group,&nbsp;</span></p>
                <p><span>-Photo Session</span></p>


            </div>

            <div id="content-detail-5" class="content-details p-3 d-none" style="background-color: rgb(215, 244, 253);">
                <div>
                    <p style='font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;line-height:150%;'>
                        <strong><span
                                style='font-size:16px;line-height:150%;font-family:"Segoe UI",sans-serif;color:#212529;'>Accommodation</span></strong>
                    </p>
                    <p style='font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;line-height:150%;'>
                        <strong><span
                                style='font-size:16px;line-height:150%;font-family:"Segoe UI",sans-serif;color:#212529;'>-Recommended
                                hotels are</span></strong>
                    </p>
                    <p style='font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;line-height:150%;'>
                        <strong><span
                                style='font-size:16px;line-height:150%;font-family:"Segoe UI",sans-serif;color:#212529;'>+
                                Fairfield by Marriott Phnom Penh</span></strong>
                    </p>


                    <p
                        style='font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;text-indent:36.0pt;line-height:150%;'>
                        <span
                            style='font-size:16px;line-height:150%;font-family:"Segoe UI",sans-serif;color:#212529;'>About
                            49.98 USD / Night</span>
                    </p>
                    <p
                        style='font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;text-indent:36.0pt;line-height:150%;'>
                        <span
                            style='font-size:16px;line-height:150%;font-family:"Segoe UI",sans-serif;color:#212529;'>Please
                            book through this link :</span>
                    </p>
                    <p
                        style='font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;text-indent:36.0pt;line-height:150%;'>
                        <a class="text-primary" class="text-primary"
                            href="https://www.marriott.com/event-reservations/reservation-link.mi?id=1742362908152&key=GRP&guestreslink2=true&app=resvlink">https://www.marriott.com/event-reservations/reservation-link.mi?id=1742362908152&key=GRP&guestreslink2=true&app=resvlink</a>
                    </p>

                    <div class="row pt-2 pb-3">
                        <img class="col-6" src="{{ asset('asset\img\university\asaihl\hotel\Marriott\1.jpg') }}"
                            alt="">
                        <img class="col-6" src="{{ asset('asset\img\university\asaihl\hotel\Marriott\2.jpg') }}"
                            alt="">
                    </div>

                    <p style='font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;line-height:150%;'>
                        <strong><span
                                style='font-size:16px;line-height:150%;font-family:"Segoe UI",sans-serif;color:#212529;'>+
                                HIMAWARI Hotel</span></strong>
                    </p>
                    <p
                        style='font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;text-indent:36.0pt;line-height:150%;'>
                        <span
                            style='font-size:16px;line-height:150%;font-family:"Segoe UI",sans-serif;color:#212529;'>About
                            75 USD / Night</span>
                    </p>
                    <p
                        style='font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;text-indent:36.0pt;line-height:150%;'>
                        <span
                            style='font-size:16px;line-height:150%;font-family:"Segoe UI",sans-serif;color:#212529;'>Please
                            contact to Moe Sett Yadana, Director &nbsp;of Sales and Marketing&nbsp;</span>
                    </p>
                    <p
                        style='font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;text-indent:36.0pt;line-height:150%;'>
                        <span style='font-size:16px;line-height:150%;font-family:"Segoe UI",sans-serif;color:#212529;'>HP:
                            (855) 16 931 555</span>
                    </p>
                    <p
                        style='font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;text-indent:36.0pt;line-height:150%;'>
                        <span
                            style='font-size:16px;line-height:150%;font-family:"Segoe UI",sans-serif;color:#212529;'>E-mail:
                            dsm@himawari.com.kh</span>
                    </p>
                    <p
                        style='font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;text-indent:36.0pt;line-height:150%;'>
                        <span
                            style='font-size:16px;line-height:150%;font-family:"Segoe UI",sans-serif;color:#212529;'>WhatsApp/Telegram:
                            +855 16 931 555</span>
                    </p>

                    <div class="row pt-2 pb-3">
                        <img class="col-6" src="{{ asset('asset\img\university\asaihl\hotel\HIMAWARI\1.jpg') }}"
                            alt="">
                        <img class="col-6" src="{{ asset('asset\img\university\asaihl\hotel\HIMAWARI\2.jpg') }}"
                            alt="">
                    </div>

                    <p style='font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;line-height:150%;'>
                        <strong><span
                                style='font-size:16px;line-height:150%;font-family:"Segoe UI",sans-serif;color:#212529;'>+
                                Sofitel Phnom Penh Phokeethra</span></strong>
                    </p>
                    <p
                        style='font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;text-indent:36.0pt;line-height:150%;'>
                        <span
                            style='font-size:16px;line-height:150%;font-family:"Segoe UI",sans-serif;color:#212529;'>Please
                            book through this link :</span>
                    </p>
                    <p
                        style='font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;text-indent:36.0pt;line-height:150%;'>
                        <a class="text-primary"
                            href="https://all.accor.com/ssr/app/accor/rates/6526/index.en.shtml?compositions=1&stayplus=false&snu=false&accessibleRooms=false&hideWDR=false&productCode=null&hideHotelDetails=false">https://all.accor.com/ssr/app/accor/rates/6526/index.en.shtml?compositions=1&stayplus=false&snu=false&accessibleRooms=false&hideWDR=false&productCode=null&hideHotelDetails=false</a>
                    </p>
                    <p style='font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;line-height:150%;'>
                        <span
                            style='font-size:16px;line-height:150%;font-family:"Segoe UI",sans-serif;color:#212529;'>&nbsp;</span>
                    </p>

                    <div class="row pt-2 pb-3">
                        <img class="col-6" src="{{ asset('asset\img\university\asaihl\hotel\Sofitel\1.jpg') }}"
                            alt="">
                        <img class="col-6" src="{{ asset('asset\img\university\asaihl\hotel\Sofitel\2.jpg') }}"
                            alt="">
                    </div>

                    <p style='font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;line-height:150%;'>
                        <span style='font-size:16px;line-height:150%;font-family:"Segoe UI",sans-serif;color:#212529;'>For
                            further information, please visit our conference contact the Organizing Committee at
                            biu.2025asaihl@beltei.edu.kh.</span>
                    </p>





                    <p style='font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;line-height:150%;'>
                        <span
                            style='font-size:16px;line-height:150%;font-family:"Segoe UI",sans-serif;color:#212529;'>&nbsp;</span>
                    </p>
                    <p style='font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;line-height:150%;'>
                        <strong><span
                                style='font-size:16px;line-height:150%;font-family:"Segoe UI",sans-serif;color:#212529;'>Transportation</span></strong>
                    </p>
                    <p style='font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;line-height:150%;'>
                        <span
                            style='font-size:16px;line-height:150%;font-family:"Segoe UI",sans-serif;color:#212529;'>-Pick
                            &amp; Drop service is provided on your request. (From the airport to hotel and from hotel to the
                            conference)</span>
                    </p>
                    <p style='font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;line-height:150%;'>
                        <span
                            style='font-size:16px;line-height:150%;font-family:"Segoe UI",sans-serif;color:#212529;'>-Pass
                            App/Crab is recommended for public taxi.</span>
                    </p>
                    <p style='font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;line-height:150%;'>
                        <span
                            style='font-size:16px;line-height:150%;font-family:"Segoe UI",sans-serif;color:#212529;'>-Please
                            contact us at (+855) 78 8888 03/78 221 222 (Telegram, WhatsApp,)</span>
                    </p>
                    <p style='font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;line-height:150%;'>
                        <span style='font-size:16px;line-height:150%;font-family:"Segoe UI",sans-serif;color:#212529;'>-Our
                            Email:&nbsp;</span><a href="mailto:biu.2025asaihl@beltei.edu.kh"><span
                                style='font-size:16px;line-height:150%;font-family:"Segoe UI",sans-serif;'>biu.2025asaihl@beltei.edu.kh</span></a>
                    </p>


                    <p style="margin-top: .5rem; text-align: center;"><span
                            style="background-color: lightgreen; ">Conference Venue BELTEI Group Headquarters</span></p>

                    <img class="w-100" src="{{ asset('asset/img/university/campus/HQ.png') }}" alt="">
                    <iframe class="w-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15635.460973384806!2d104.8975925949065!3d11.561516783539464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3109512310feda21%3A0x4243c6246755cc0!2sBELTEI%20GROUP%20Headquarters!5e0!3m2!1sen!2skh!4v1735013232611!5m2!1sen!2skh"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>

                    <p style="margin-top: .5rem; text-align: center;"><span
                            style="background-color: lightgreen; ">Conference Venue BELTEI International University Campus
                            2</span></p>


                    <img class="w-100" src="{{ asset('asset/img/university/campus/BIU2.png') }}" alt="">
                    <iframe class="w-100"
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31275.029448686146!2d104.823231!3d11.52467!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31094fbd312449f5%3A0xaf3393bc9eda7678!2sBELTEI%20International%20University%20(Campus%202%2C%20Chaom%20Chao%20Flyover)!5e0!3m2!1sen!2skh!4v1735013411762!5m2!1sen!2skh"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div id="content-detail-6" class="content-details p-3 d-none" style="background-color: rgb(215, 244, 253);">
                <div>
                    <p><strong><span
                                style='font-size:16px;line-height:150%;font-family:"Segoe UI",sans-serif;color:#212529;'>Visa
                                Information</span></strong></p>
                    <p style='font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;line-height:150%;'>
                        <strong><span
                                style='font-size:16px;line-height:150%;font-family:"Segoe UI",sans-serif;color:#212529;'>I-Visa-Free
                                Entry (up to 30 days):</span></strong>
                    </p>
                    <p style='font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;line-height:150%;'>
                        <span
                            style='font-size:16px;line-height:150%;font-family:"Segoe UI",sans-serif;color:#212529;'>Brunei,
                            Indonesia, Laos, Malaysia, Myanmar, Philippines, Singapore, Thailand, and Vietnam.</span>
                    </p>
                    <p style='font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;line-height:150%;'>
                        <strong><span
                                style='font-size:16px;line-height:150%;font-family:"Segoe UI",sans-serif;color:#212529;'>II-Cambodia
                                E-visa</span></strong>
                    </p>
                    <p style='font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;line-height:150%;'>
                        <span style='font-size:16px;line-height:150%;font-family:"Segoe UI",sans-serif;color:#212529;'>-For
                            visa information, please refer to https://www.evisa.gov.kh/</span>
                    </p>
                    <p style='font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;line-height:150%;'>
                        <span style='font-size:16px;line-height:150%;font-family:"Segoe UI",sans-serif;color:#212529;'>-For
                            any general information regarding travel to Cambodia, kindly check the latest travel regulations
                            or contact us at (+885) 78 888 803 / (+855) 78 221 222 (Telegram, WhatsApp,)</span>
                    </p>
                    <p style='font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;line-height:150%;'>
                        <span style='font-size:16px;line-height:150%;font-family:"Segoe UI",sans-serif;color:#212529;'>Our
                            Email: biu.2025asaihl@beltei.edu.kh</span>
                    </p>
                    <p style='font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;line-height:150%;'>
                        <strong><span
                                style='font-size:16px;line-height:150%;font-family:"Segoe UI",sans-serif;color:#212529;'>III-
                                e-Arrival</span></strong>
                    </p>
                    <p style='font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;line-height:150%;'>
                        <span style='font-size:16px;line-height:150%;font-family:"Segoe UI",sans-serif;color:#212529;'>-The
                            Cambodia e-Arrival Card (CeA) is&nbsp;a digital immigration form that replaces the traditional
                            paper-based forms required upon arrival in Cambodia.</span>
                    </p>
                    <p style='font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;line-height:150%;'>
                        <span style='font-size:16px;line-height:150%;font-family:"Segoe UI",sans-serif;color:#212529;'>-
                            All travelers can submit the Cambodia e-Arrival within 7 days before their arrival</span>
                    </p>
                    <p style='font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;line-height:150%;'>
                        <span style='font-size:16px;line-height:150%;font-family:"Segoe UI",sans-serif;color:#212529;'>-For
                            any general information regarding The Cambodia e-Arrival Card (CeA), kindly check&nbsp;</span><a
                            href="https://arrival.gov.kh/"><span
                                style='font-size:16px;line-height:150%;font-family:"Segoe UI",sans-serif;'>https://arrival.gov.kh/</span></a>
                    </p>
                    <p style='font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;line-height:normal;'>
                        <span style='font-size:16px;font-family:"Segoe UI",sans-serif;color:#212529;'>&nbsp;</span>
                    </p>
                    <p style='font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;line-height:normal;'>
                        <span style='font-size:16px;font-family:"Segoe UI",sans-serif;color:#212529;'>-For any general
                            information regarding travel to Cambodia, kindly check &nbsp;the latest travel regulations or
                            contact us at (+885) 78 888 803 / (+855) 78 221 222 (Telegram, WhatsApp,)</span>
                    </p>
                    <p style='font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;line-height:normal;'>
                        <span style='font-size:16px;font-family:"Segoe UI",sans-serif;color:#212529;'>Our Email:
                            biu.2025asaihl@beltei.edu.kh</span>
                    </p>

                </div>
            </div>
            <div id="content-detail-7" class="content-details p-3 d-none" style="background-color: rgb(215, 244, 253);">
                <div>
                    <h5 class="mb-3"><strong>-For the optional tour, the destinations are</strong></h5>
                    <p class="mb-2 bg-info p-2 bold text-bold font-bold">1 Day Trip to Royal Palace <span
                            class="text-danger">(July 09, 2025)</span>: Free of charge</p>
                    <div class="row">
                        @for ($i = 1; $i <= 6; $i++)
                            <img class="col-6"
                                src="{{ asset('asset/img/university/asaihl/royalpalace/' . $i . '.jpg') }}"
                                alt="">
                        @endfor
                    </div>
                    <p class="mt-4 mb-2 bg-info p-2 bold text-bold font-bold">2 Days Trip to Siem Reap and Angkor: 100
                        USD<span class="text-danger">(July 09-10, 2025)</span>
                    </p>
                    <div class="row">
                        @for ($i = 1; $i <= 6; $i++)
                            <img class="col-6" src="{{ asset('asset/img/university/asaihl/siemreap/' . $i . '.jpg') }}"
                                alt="">
                        @endfor
                    </div>
                </div>
            </div>
            <div id="content-detail-8" class="content-details p-3 d-none" style="background-color: rgb(215, 244, 253);">
                <div>
                    <p>Contact us at (+885) 78 888 803 / (+855) 78 221 222 (Telegram, WhatsApp,)</p>
                    <p>Our Email: <a href="biu.2025asaihl@beltei.edu.kh">biu.2025asaihl@beltei.edu.kh</a></p>
                </div>
            </div>

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
                src="https://www.youtube.com/embed/ihGIW3o5mB8?si=-aBz7zeUqCfxmPzV" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

        </div>
        <div class="frame my-2 d-flex justify-content-center">


            <iframe class="w-100" width="560" height="415"
                src="https://www.youtube.com/embed/XRg3XUz24fI?si=2QaYU0zGICIybOme" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

        </div>

        <div class="selection">

        </div>

        <div class="footer d-flex gap-3 align-items-center justify-content-between px-4 py-4 gold" id="footer">

            <div class="logo-footer ">
                <div class="d-flex gap-3 mb-2">
                    <div>
                        <img class="max-height-50"
                            src="{{ asset('asset/img/beltei_international_university_in_cambodia.png') }}"
                            alt="">
                    </div>
                    <div class="">
                        <img class="max-height-50" src="{{ asset('asset/img/university/asaihl/logo.png') }}"
                            alt="">
                    </div>
                </div>
                <div style="line-height: .3;">
                    <small style="line-height: normal;">
                        <span class="gold">Campus 1 (Toul Sleng):</span><br>
                        <span class="text-white">#21, Street, Sangkat Boeung KengKang III, Khan Boeung KengKang, Phnom
                            Penh.
                            (100m south of Tuol Sleng Genocide Museum)</span>
                        <br>
                        <span class="gold">Campus 2 (Chom Chao Flyover):</span><br>
                        <span class="text-white">#151, National Road No. 3, Sangkat Chom Chao II, Khan Posenchey, Phnom
                            Penh.</span>

                    </small>
                </div>
            </div>

            <div class="social-media text-center">
                <h6>GET MORE UPDATES ON OUR SOCIAL MEDIA</h6>
                <div class="footer-icon-container">
                    <div>
                        <a href="https://www.facebook.com/belteiuniversity"><i class="fa-brands fa-facebook"></i></a>
                        <a href="https://www.instagram.com/beltei_intl_university_/?hl=en"><i
                                class="fa-brands fa-instagram"></i></a>
                        <a href="https://www.tiktok.com/@beltei_iu?lang=en"><i class="fa-brands fa-tiktok"></i></a>
                        <a href="https://www.youtube.com/user/BELTEIGROUP"><i class="fa-brands fa-youtube"></i></a>
                        <a href="https://t.me/belteiBICC"><i class="fa-brands fa-telegram"></i></a>
                    </div>
                </div>
            </div>

        </div>


    </div>


    <script>
        function toggleDiv(divId) {
            let contentDetail = document.getElementById(divId);
            let contentDetails = document.getElementsByClassName('content-details');

            // Convert HTMLCollection to an array for easy iteration
            Array.from(contentDetails).forEach(element => {
                if (!element.classList.contains('d-none')) {
                    element.classList.add('d-none');
                }
            });

            // Toggle the selected div
            if (contentDetail.classList.contains('d-none')) {
                contentDetail.classList.remove('d-none');
            } else {
                contentDetail.classList.add('d-none');
            }
        }
    </script>
@endsection
