@extends('web.client.beltei_university.layout.app')

@section('content')
    <div class="text-start Battambang-Regular p-3">
        <h5 class="Khmer-OS-Koulen" style="color: #4156A3" class="text-center font-bold mb-3"><span id="BCampus"></span></h5>
        <div class="text-center">
            <img class="w-75 rounded shadow-sm " id="img" src="" alt="">
        </div>
        <p id="description" class="p-2"></p>
        <div class="text-center row" id="images">
        </div>
    </div>

    <script>
        const myKeysValues = window.location.search;
        const urlParams = new URLSearchParams(myKeysValues);
        const id = urlParams.get("id");
        var lang = document.documentElement.getAttribute("lang");
        // alert(id);

        if (lang == "kh") {
            var campusNameArr = [
                "សាកលវិទ្យាល័យ ប៊ែលធី អន្តរជាតិ ទី​តាំង​ទី ១ ទួលស្លែង",
                "សាកលវិទ្យាល័យ ប៊ែលធី អន្តរជាតិ ទី​តាំង​ទី ២ ស្ពានអាកាស ចោមចៅ",
                "សាកលវិទ្យាល័យ ប៊ែលធី អន្តរជាតិ គម្រោងទី​តាំង​ទី ៣ ទួលពង្រ",

            ];
        } else {
            var campusNameArr = [
                "Kirirom",
                "Toul Tum Pong",
                "Toul Tum Pong",
            ];
        }

        if(lang == "kh")
        {
            var descriptionArray = [
                'សាកល​វិទ្យាល័យ​ ប៊ែលធី​ អន្តរ​ជាតិ​ ទី​តាំង​ទី​ ១​ ទួល​ស្លែង​៖​ អគារ​២១​ ផ្លូវ​៣៦០​ សង្កាត់​បឹង​កេង​កង​៣ ​ខណ្ឌ​បឹង​កេង​កង​ រាជ​ធានី​ ភ្នំ​ពេញ​ (​ខាង​ត្បូង​សារ​មន្ទីរ​ទួល​ស្លែង​១០០​ម៉ែត្រ​) អគារ​មាន​កម្ពស់​១៥​ ជាន់​ស្មើ​នឹង​១១០​បន្ទប់​ មាន​សាលសហ​សិក្សា១​ ចំណុះ​១៥០​នាក់​ និង​ សាល​សន្និសីទ​១​ ចំណុះ​៧០០​នាក់​ មាន​អាហារ​ដ្ឋាន​១កន្លែង​ បណ្ណា​ល័យ​១​ និង​ចំណត​យាន​យន្ត​២​ជាន់​។',
                'សាកល​វិទ្យា​ល័យ​ ប៊ែលធី​ អន្តរ​ជាតិ​ ទី​តាំងទី​ ២​ ស្ពាន​អាកាស​ចោមចៅ​៖​ អគារ​១៥១​ ផ្លូវ​ជាតិ​លេខ​៣​ សង្កាត់​ចោម​ចៅ​ទី​២​ ខណ្ឌ​ពោធិ៍​សែន​ជ័យ​ រាជ​ធានី​ភ្នំពេញ​ (​ចម្ងាយ​ប្រហែល​ ៥០០​ម៉ែត្រ​ ពី​ ស្ពាន​អាកាស​ចោម​ចៅ​) ​អគារ​កម្ពស់​៩ជាន់​ ស្មើ​នឹង​១៤២​បន្ទប់​ មាន​សាល​សហ​សិក្សា​១​ចំណុះ​១៥០​នាក់​ សាល​មហោ​ស្រព​១​ ចំណុះ​៨០០​នាក់​ និង​សាល​សន្និសីទ​១​ ចំណុះ​១,២០០​នាក់​ មាន​អាហារ​ដ្ឋាន​១​កន្លែង​ បណ្ណា​ល័យ​១​ មាន​អគារ​អន្តេវា​សិកដ្ឋាន​១​ ខ្នង​ ស្មើ​នឹង​៦៥​បន្ទប់​មាន​ គ្រែ​ចំនួន​១៣០​ និង​មាន​ចំណត​យាន​យន្ត​ជាង​១០,០០០​ ម៉ែត្រ​ការ៉េ​។',
                'សាកល​វិទ្យា​ល័យ​ ប៊ែលធី​ អន្តរ​ជាតិ​ ទី​តាំងទី​ ៣​ ទួលពង្រ​៖ ភូមិត្រពាំងរំចេក សង្កាត់ចោមចៅទី១ ខណ្ឌពោធិ៍សែនជ័យ រាជធានីភ្នំពេញ',
            ]
        }else{
            var descriptionArray = [
                'BELTEI Kirirom is located at 77, Street 125, Sangkat Veal Vong, Khan 7 Makara, Phnom Penh and was officially opened on January 01, 2002 and presided over by Mr. Oum Hoeung, Director of Phnom Penh Municipal Department of Education, Youth and Sport. It is a five-story building with 41 rooms and it belongs to BELTEI, which was built by BELTEI Construction Company of BELTEI Group, and it belongs to BELTEI.'
                ,'It is located at 34, Street 431, Sangkat Tuol Tumpoung 1, Khan Chamkamon, Phnom Penh. It is a reinforced concrete and seven-story building with convenient parking lots in the basement and has more than 50 rooms and it belongs to BELTEI and it is scheduled to open on May 02, 2011, which was built by BELTEI Construction Company of BELTEI Group, and it belongs to BELTEI.'
                ,'It is located at Nº 10A, Street 118, Sangkat Phsar Depo 3, Khan Tuol Kork, Phnom Penh City. It was inauguration on October 30, 2014, and highly presided over by H.E. Ly Chheng, Director-General of BELTEI Group and President of BELTEI International University and Lok Chum Teav. It is the transformation of the former BELTEI Campus 3 (DN) into the new one (It’s been operated since April 20, 2005) due to the end of the contract. It is seven-storey reinforced concrete building with 60 rooms and basement and ground floor for parking lot, which was built by BELTEI Construction Company of BELTEI Group, and it belongs to BELTEI.'
            ]
        }

        try {
            if(id){
                var BCampus = document.getElementById('BCampus');
                var img = document.getElementById('img');
                var description = document.getElementById('description');

                BCampus.innerHTML = `   ${campusNameArr[id-1]} `;
                img.src = `{{ asset('asset/img/university/campus/BIU${id}.png') }}`;
                description.innerHTML = descriptionArray[id-1];

                var images = document.getElementById('images');
                for(let i = 1 ; i <= 2 ; i++){
                    var img = `<img class="w-50 rounded shadow-sm " id="images" src="{{ asset('asset/img/university/campus/BIU${id}.png') }}" alt="">`;
                    var div = document.createElement("div");
                    div.innerHTML = img.trim();
                    images.appendChild(div.firstChild);
                }


                // var campusContainer = document.getElementById('campusDetail');

                // descriptionArray.forEach((description, key) => {
                //     var temp = `
                //     <div>
                //         <h5 class="text-center bg-success py-3 gold">ប៊ែលធីសាខាទី ${key + 1} (${campusNameArr[key]})</h5>
                //         <div class="d-flex align-items-center p-2 content-translate-font">
                //             <p>
                //                 ${description}
                //             </p>
                //             <img class="float-end rounded shadow p-2"
                //                 src="{{ asset('asset/img/school/campus/school-B${key+1}.jpg') }}"
                //                 alt="">
                //         </div>
                //     </div>
                //     `;

                //     var div = document.createElement("div");
                //     div.innerHTML = temp.trim();
                //     campusContainer.appendChild(div.firstChild);
                // });
            }
        } catch (error) {

        }

    </script>
@endsection
