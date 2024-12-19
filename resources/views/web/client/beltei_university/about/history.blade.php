@extends('web.client.beltei_university.layout.app')


@section('content')
    <div class="p-lg-3">

        <h2 class="title-translate-font my-3 underline Blue-color">{{ __('beltei_university/about/history.header') }}</h2>





        <div id="campusDetail" class="content-translate-font text-justify">
            {!! __('beltei_university/about/history.description') !!}
        </div>


        <div class="row">
            <div class="col-6">
                <img class="w-100" src="{{ asset('asset/img/university/campus/BIU1.png') }}" alt="">
            </div>
            <div class="col-6">
                <img class="w-100" src="{{ asset('asset/img/university/campus/BIU2.png') }}" alt="">
            </div>
            <div class="col-6">
                <img class="w-100" src="{{ asset('asset/img/university/campus/map/biu1.jpg') }}" alt="">
            </div>
            <div class="col-6">
                <img class="w-100" src="{{ asset('asset/img/university/campus/map/biu2.jpg') }}" alt="">
            </div>
            <div class="col-6">
                {{-- <img class="w-100" src="{{ asset('asset/img/university/campus/map/biu1.jpg') }}" alt=""> --}}
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15636.232687399719!2d104.9168647!3d11.5476849!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3109511f69ba6309%3A0xc65060947881cb4e!2sBELTEI%20International%20University%20(Campus%201%2C%20Tuol%20Sleng)!5e0!3m2!1sen!2skh!4v1722940783471!5m2!1sen!2skh"
                    class="w-100" frameborder="0"></iframe>
            </div>
            <div class="col-6">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15637.514707648124!2d104.823231!3d11.5246703!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31094fbd312449f5%3A0xaf3393bc9eda7678!2sBELTEI%20International%20University%20(Campus%202%2C%20Chaom%20Chao%20Flyover)!5e0!3m2!1sen!2skh!4v1722940869245!5m2!1sen!2skh"
                    class="w-100" frameborder="0"></iframe>
                {{-- <img class="w-100" src="{{ asset('asset/img/university/campus/map/biu2.jpg') }}" alt=""> --}}
            </div>
        </div>



    </div>

    {{-- <script>
        var lang = document.documentElement.getAttribute("lang");
        if (lang == "kh") {
            var campusNameArr = [
                "គីរីរម្យ",
                "ផ្សារទួលទំពូង",
                "ដេអិន",

            ];
        } else {
            var campusNameArr = [
                "Kirirom",
                "Toul Tum Pong",
                "DN",

            ];
        }

        if (lang == "kh") {
            var descriptionArray = [
                'ស្ថិត ​នៅ​អាគារ​លេខ​ ៧៧ ផ្លូវ​ ១២៥ សង្កាត់​វាល​វង់​​ខណ្ឌ​ ៧​មករា​ ក្រុង​ ភ្នំពេញ​ ដែល​បាន​សម្ពោធ​បើក​អោយ​ដំណើរ​ការ​នៅ​ថ្ងៃទី​ ០១​ ខែ មករា​ ឆ្នាំ​ ២០០២​ ក្រោម​អធិប​តីភាព លោក​ អ៊ុំ ហឿង ប្រធាន​មន្ទីរ​អប់រំ​ យុវ​ជន​និង​កីឡា​រាជ​ធានី​ភ្នំពេញ​។ វិទ្យា​ស្ថាន​ ប៊ែល​ធី​ទី១​ សង់​ឡើង​ពី​បេតុង​អាម៉េ​ (Reinforced Concrete) កំពស់​ ៥​ជាន់​ មាន​ ៤១​បន្ទប់ ដែល​ជា​កម្ម​សិទ្ធិ​ផ្ទាល់ខ្លួន​ និង​សាង​សង់​ដោយ​ខ្លួន​ឯង​ផ្ទាល់។',
                'ស្ថិត​នៅ​អាគារ​លេខ​៣៤​​ ផ្លូវ​៤៣២​ សង្កាត់​ទួល​ទំពូង​១​ ខណ្ឌ​ចំការ​មន​ ក្រុង​ភ្នំពេញ​ ដែល​នឹង​គ្រោង​បើក​ ឲ្យ​ដំណើរ​ការ​ថ្ងៃ​ទី​០១​ ខែកុម្ភៈ​ ឆ្នាំ​២០១១ ខាងមុខនេះ​។​ សាលា​ ប៊ែល​ធី ​ទី​២​ សង់​ឡើង​ពី​បេ​តុង​អាម៉េ​ (Reinforced Concrete) កំពស់​ ៦ជាន់​ មាន​ ៤៥​ បន្ទប់​ ដែល​ជា​កម្ម​សិទ្ធិ​ផ្ទាល់​ខ្លួន​ និង​សាង​សង់​ដោយ​ខ្លួន​ឯង​ផ្ទាល់។',
                'ស្ថិត​នៅ​អាគារ​លេខ​ ១០A ផ្លូវ១១៨​ សង្កាត់​ផ្សារ​ដេ​ប៉ូ​ទី៣​ ខណ្ឌ​ទួល​គោក​ រាជធានីភ្នំ​ពេញ ​ដែល​បាន​សម្ពោធ​បើក​អោយ​ដំណើរ​ការ​នៅ ​ថ្ងៃ​ទី​៣០​ ខែតុលា​ ឆ្នាំ​២០១៤ ក្រោម​អធិប​តីភាព​ដ៏ខ្ពង់ខ្ពស់របស់ ឯក​ឧត្តម​ លី ឆេង អគ្គនាយកប៊ែលធី គ្រុប និងជាសាកលវិទ្យាធិការ សាកលវិទ្យាល័យ ប៊ែលធី អន្តរជាតិ និងលោកជំទាវ។ ដែលជាទីតាំងថ្មី ប្តូរមកពីទីតាំងចាស់ (ដំណើរការតាំងពីថ្ងៃទី២០ ខែមេសា ឆ្នាំ២០០៥) ដោយសារផុតកំណត់កិច្ចសន្យា។ សាលា​ ប៊ែល​ធី ​អន្តរ​ជាតិ​ ទី​៣​ សង់​ឡើង​ពី​បេ​តុង​អាម៉េ​(Reinforced Concrete) កំពស់​ ៧ជាន់​ ចំណតក្រោមដី ០១ជាន់ និងមាន​ ៦០បន្ទប់​ ដោយមានទីធ្លាខាងលើសម្រាប់ហាត់ប្រាណ-លំហែកាយ ដែល​ជា​កម្ម​សិទ្ធិ​ផ្ទាល់ខ្លួន​ និង​សាង​សង់​ដោយ​ខ្លួន​ឯង​ផ្ទាល់។',

            ]
        } else {
            var descriptionArray = [
                'BELTEI Kirirom is located at 77, Street 125, Sangkat Veal Vong, Khan 7 Makara, Phnom Penh and was officially opened on January 01, 2002 and presided over by Mr. Oum Hoeung, Director of Phnom Penh Municipal Department of Education, Youth and Sport. It is a five-story building with 41 rooms and it belongs to BELTEI, which was built by BELTEI Construction Company of BELTEI Group, and it belongs to BELTEI.',
                'It is located at 34, Street 431, Sangkat Tuol Tumpoung 1, Khan Chamkamon, Phnom Penh. It is a reinforced concrete and seven-story building with convenient parking lots in the basement and has more than 50 rooms and it belongs to BELTEI and it is scheduled to open on May 02, 2011, which was built by BELTEI Construction Company of BELTEI Group, and it belongs to BELTEI.',
                'It is located at Nº 10A, Street 118, Sangkat Phsar Depo 3, Khan Tuol Kork, Phnom Penh City. It was inauguration on October 30, 2014, and highly presided over by H.E. Ly Chheng, Director-General of BELTEI Group and President of BELTEI International University and Lok Chum Teav. It is the transformation of the former BELTEI Campus 3 (DN) into the new one (It’s been operated since April 20, 2005) due to the end of the contract. It is seven-storey reinforced concrete building with 60 rooms and basement and ground floor for parking lot, which was built by BELTEI Construction Company of BELTEI Group, and it belongs to BELTEI.',
        ]
        }

        var campusContainer = document.getElementById('campusDetail');

        descriptionArray.forEach((description, key) => {
            var temp = `
            <div>
                <h5 class="text-center bg-success py-3 gold">ប៊ែលធីសាខាទី ${key + 1} (${campusNameArr[key]})</h5>
                <div class="d-flex align-items-center p-2 content-translate-font">
                    <p>
                        ${description}
                    </p>
                    <img class="float-end rounded shadow p-2"
                        src="{{ asset('asset/img/school/campus/school-B${key+1}.jpg') }}"
                        alt="">
                </div>
            </div>
            `;

            var div = document.createElement("div");
            div.innerHTML = temp.trim();
            campusContainer.appendChild(div.firstChild);
        });


        // campusNameArr.forEach(campusName => {

        // });
    </script> --}}
@endsection
