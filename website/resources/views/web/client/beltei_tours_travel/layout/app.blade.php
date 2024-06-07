<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Beltei</title>

    <link rel="shortcut icon" href="{{ asset('asset/img/school/beltei_international_school_in_cambodia.png') }}"
        type="image/png">


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

        <div class="container shadow p-0 mb-5 bg-white">

            {{-- Header  --}}
            @include('web.client.beltei_tours_travel.layout.header')




            {{-- sidebar and content  --}}
            <div class="d-flex position-relative">

                {{-- left sidebar  --}}
                @include('web.client.beltei_tours_travel.layout.left_side_bar')

                {{-- content  --}}
                <div class="content shadow-sm text-center w-100  pb-lg-5 pb-md-4 pb-sm-3 p-3">

                    @yield('content')



                </div>

                {{-- right sidebar  --}}
                @include('web.client.beltei_tours_travel.layout.right_side_bar')




            </div>

            {{-- footer  --}}


            <div>

                <table class="table position-relative" border="0">
                    <tbody>
                        <tr>
                            <td colspan="2"><img class="w-100"
                                    src="{{ asset('asset/img/tours/footer/footer_top.png') }}"
                                    border="0"></td>
                        </tr>
                        <tr>
                            <td><img src="{{ asset('asset/img/tours/footer/beltei_tour_text.png') }}"
                                    border="0"></td>
                            <td><img src="{{ asset('asset/img/tours/footer/tour_facility.png') }}"
                                    border="0">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2"><img class="w-100"
                                    src="{{ asset('asset/img/tours/footer/line_break.png') }}"
                                    border="0"></td>
                        </tr>
                        <tr>
                            <td><img src="{{ asset('asset/img/tours/footer/beltei_service_text.png') }}"
                                    border="0"></td>
                            <td><img src="{{ asset('asset/img/tours/footer/beltei_tour_passport.png') }}"
                                    border="0"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><img class="w-100"
                                    src="{{ asset('asset/img/tours/footer/footer_bottom.png') }}"
                                    border="0"></td>
                        </tr>
                    </tbody>
                </table>

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
