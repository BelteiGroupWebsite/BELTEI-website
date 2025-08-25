@extends('web.client.beltei_university.layout.app')

@section('content')
    <div class="text-start Battambang-Regular p-3">
        
        <h5 class="Khmer-OS-Koulen text-center mb-3" style="color: #4156A3" class="text-center font-bold mb-3"><span id="BCampus"></span></h5>
        <div class="text-center">
            <img class="w-75 rounded shadow-sm " id="img" src="" alt="">
        </div>
        <p id="description" class="p-2"></p>
        
        <div class="text-center row g-3" id="images">
        </div>


        <div id="map" class="row my-3">
        </div>
    </div>

    @php
        try {
            $id = $_GET['id']; //Retrieve the 'id' parameter from the URL
            $folderPath = public_path("asset/img/university/campus/campus${id}");
            $fileCount = count(glob("$folderPath/*"));
            //echo "<p>Page <script>x</script> of  $fileCount</p>";
            echo "
            <script>
                var fileCount = $fileCount;
            </script>
            ";
        } catch (\Throwable $th) {
            //Handle any exceptions here
        }
    @endphp
    
    
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
            var descriptionArray = [
                'សាកល​វិទ្យាល័យ​ ប៊ែលធី​ អន្តរ​ជាតិ​ ទី​តាំង​ទី​ ១​ ទួល​ស្លែង​៖​ អគារ​២១​ ផ្លូវ​៣៦០​ សង្កាត់​បឹង​កេង​កង​៣ ​ខណ្ឌ​បឹង​កេង​កង​ រាជ​ធានី​ ភ្នំ​ពេញ​ (​ខាង​ត្បូង​សារ​មន្ទីរ​ទួល​ស្លែង​១០០​ម៉ែត្រ​) អគារ​មាន​កម្ពស់​១៥​ ជាន់​ស្មើ​នឹង​១១០​បន្ទប់​ មាន​សាលសហ​សិក្សា១​ ចំណុះ​១៥០​នាក់​ និង​ សាល​សន្និសីទ​១​ ចំណុះ​៧០០​នាក់​ មាន​អាហារ​ដ្ឋាន​១កន្លែង​ បណ្ណា​ល័យ​១​ និង​ចំណត​យាន​យន្ត​២​ជាន់​។',
                'សាកល​វិទ្យា​ល័យ​ ប៊ែលធី​ អន្តរ​ជាតិ​ ទី​តាំងទី​ ២​ ស្ពាន​អាកាស​ចោមចៅ​៖​ អគារ​១៥១​ ផ្លូវ​ជាតិ​លេខ​៣​ សង្កាត់​ចោម​ចៅ​ទី​២​ ខណ្ឌ​ពោធិ៍​សែន​ជ័យ​ រាជ​ធានី​ភ្នំពេញ​ (​ចម្ងាយ​ប្រហែល​ ៥០០​ម៉ែត្រ​ ពី​ ស្ពាន​អាកាស​ចោម​ចៅ​) ​អគារ​កម្ពស់​៩ជាន់​ ស្មើ​នឹង​១៤២​បន្ទប់​ មាន​សាល​សហ​សិក្សា​១​ចំណុះ​១៥០​នាក់​ សាល​មហោ​ស្រព​១​ ចំណុះ​៨០០​នាក់​ និង​សាល​សន្និសីទ​១​ ចំណុះ​១,២០០​នាក់​ មាន​អាហារ​ដ្ឋាន​១​កន្លែង​ បណ្ណា​ល័យ​១​ មាន​អគារ​អន្តេវា​សិកដ្ឋាន​១​ ខ្នង​ ស្មើ​នឹង​៦៥​បន្ទប់​មាន​ គ្រែ​ចំនួន​១៣០​ និង​មាន​ចំណត​យាន​យន្ត​ជាង​១០,០០០​ ម៉ែត្រ​ការ៉េ​។',
                'សាកល​វិទ្យា​ល័យ​ ប៊ែលធី​ អន្តរ​ជាតិ​ ទី​តាំងទី​ ៣​ ទួលពង្រ​៖ ភូមិត្រពាំងរំចេក សង្កាត់ចោមចៅទី១ ខណ្ឌពោធិ៍សែនជ័យ រាជធានីភ្នំពេញ',
            ];

        } else {
            var campusNameArr = [
                "BELTEI International University, Campus 1 (Tuol Sleng)",
                "BELTEI International University, Campus 2 (Chom Chao Flyover)",
                "BELTEI International University, Campus 3 TOUL PONGRO",
            ];
            var descriptionArray = [
                'BELTEI International University, Campus 1 (Tuol Sleng): № 21, St.360, Sangkat Boeng Keng Kang 3, Khan Boeng Keng Kang, Phnom Penh (100 meters South of Tuol Sleng Genocide Museum), a 15-storey building with 110 rooms, 1 Lecture Hall with 150 seats, 1 conference hall with a capacity of 700 seats, 1 cafeteria, 1 library and 2-basement parking lots. '
                ,'BELTEI International University, Campus 2 (Chom Chao Flyover):  № 151, National Road № 3, Sangkat Chom Chao 2, Khan Posenchey, Phnom Penh (about 500 meters from Chom Chao Flyover), a 9-storey building with 142 rooms, 1 Lecture Hall with 150 seats, 1 Auditorium with 800 seats and 1 Conference Hall with a capacity of 1200 seats, 1 cafeteria, 1 library, 1 dormitory with 65 spacious rooms accommodating 130 beds and more than 10,000m2 basement parking lot.'
                ,'BELTEI International University, Campus 3 TOUL PONGRO: Sangkat Chom Chao I, Khan Porsenchey, Phnom Penh'
            ];
        }

        var mapArray = [
            '<iframe class="col-12 rounded" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15636.232687399719!2d104.9168647!3d11.5476849!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3109511f69ba6309%3A0xc65060947881cb4e!2sBELTEI%20International%20University%20(Campus%201%2C%20Tuol%20Sleng)!5e0!3m2!1sen!2skh!4v1722940783471!5m2!1sen!2skh" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            '<iframe class="col-12 rounded" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15637.514707648124!2d104.823231!3d11.5246703!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31094fbd312449f5%3A0xaf3393bc9eda7678!2sBELTEI%20International%20University%20(Campus%202%2C%20Chaom%20Chao%20Flyover)!5e0!3m2!1sen!2skh!4v1722940869245!5m2!1sen!2skh" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            '<iframe class="col-12 rounded" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3909.4542554620853!2d104.85475149999999!3d11.5192366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310951b387d85e35%3A0xb90241fb295e5441!2sBELTEI%20International%20School%2C%20Campus%2029!5e0!3m2!1sen!2skh!4v1722940907880!5m2!1sen!2skh" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>'
        ];

        try {
            if(id){
                var BCampus = document.getElementById('BCampus');
                var img = document.getElementById('img');
                var description = document.getElementById('description');

                BCampus.innerHTML = `   ${campusNameArr[id-1]} `;
                img.src = `{{ asset('asset/img/university/campus/BIU${id}.png') }}`;
                description.innerHTML = descriptionArray[id-1];

                document.getElementById('map').innerHTML = mapArray[id-1];
                
                var images = document.getElementById('images');
                for(let i = 1 ; i <= fileCount ; i++){
                    var img = `<img class="col-6 rounded shadow-sm " src="{{ asset('asset/img/university/campus/campus${id}/${i}.jpg') }}" alt="">`;
                    var div = document.createElement("div");
                    div.innerHTML = img.trim();
                    images.appendChild(div.firstChild);
                }
            }
        } catch (error) {

        }

    </script>
@endsection
