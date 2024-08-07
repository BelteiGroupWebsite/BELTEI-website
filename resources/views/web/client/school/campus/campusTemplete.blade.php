@extends('web.client.school.layout.app')

@section('content')
    <div class="text-start Battambang-Regular p-3 pt-0">


        <hr>
        <div>
            <h4 class="Muol-Light p-3 my-3 bg-success text-white text-center">{{ __('school/app.belteicampus') }} <span id="BCampus"></span></h4>
        </div>
        <hr>
        
        {{-- <h5 class="text-center font-bold mb-3 title-translate-font underline">{{ __('school/app.belteicampus') }} <span id="BCampus"></span></h5> --}}
        <div class="text-center">
            <img class="w-75 rounded shadow-sm " id="img" src="" alt="">
        </div>

        
        <p id="description" class="p-2"></p>


        <h4 class="text-center font-bold my-3 text-center title-translate-font underline">{{ __('school/app.map') }} <span id="BCampus"></span></h4>
        
        <div id="map" class="my-3">
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
                "ផ្លូវកោងវែងស្រេង",
                "ឫស្សីកែវ",
                "ផ្សារព្រែកឯក",
                "ផ្សារព្រែកលៀប",
                "ចោមចៅ",
                "ផ្សារឈូកមាស",
                "រង្វង់មូលគួរស្រូវ",
                "ផ្លូវព្រៃសស្តុបឫស្សីសាញ់",
                "រង្វង់មូលព្រែកតាមាក់",
                "ស្ថានីបូមទឹកផ្លូវ",
                "ព្រែកប្រា",
                "",
                "",
                "",
                "",
            ];
            var descriptionArray = [
                'ស្ថិត ​នៅ​អាគារ​លេខ​ ៧៧ ផ្លូវ​ ១២៥ សង្កាត់​វាល​វង់​​ខណ្ឌ​ ៧​មករា​ ក្រុង​ ភ្នំពេញ​ ដែល​បាន​សម្ពោធ​បើក​អោយ​ដំណើរ​ការ​នៅ​ថ្ងៃទី​ ០១​ ខែ មករា​ ឆ្នាំ​ ២០០២​ ក្រោម​អធិប​តីភាព លោក​ អ៊ុំ ហឿង ប្រធាន​មន្ទីរ​អប់រំ​ យុវ​ជន​និង​កីឡា​រាជ​ធានី​ភ្នំពេញ​។ វិទ្យា​ស្ថាន​ ប៊ែល​ធី​ទី១​ សង់​ឡើង​ពី​បេតុង​អាម៉េ​ (Reinforced Concrete) កំពស់​ ៥​ជាន់​ មាន​ ៤១​បន្ទប់ ដែល​ជា​កម្ម​សិទ្ធិ​ផ្ទាល់ខ្លួន​ និង​សាង​សង់​ដោយ​ខ្លួន​ឯង​ផ្ទាល់។',
                'ស្ថិត​នៅ​អាគារ​លេខ​៣៤​​ ផ្លូវ​៤៣២​ សង្កាត់​ទួល​ទំពូង​១​ ខណ្ឌ​ចំការ​មន​ ក្រុង​ភ្នំពេញ​ ដែល​នឹង​គ្រោង​បើក​ ឲ្យ​ដំណើរ​ការ​ថ្ងៃ​ទី​០១​ ខែកុម្ភៈ​ ឆ្នាំ​២០១១ ខាងមុខនេះ​។​ សាលា​ ប៊ែល​ធី ​ទី​២​ សង់​ឡើង​ពី​បេ​តុង​អាម៉េ​ (Reinforced Concrete) កំពស់​ ៦ជាន់​ មាន​ ៤៥​ បន្ទប់​ ដែល​ជា​កម្ម​សិទ្ធិ​ផ្ទាល់​ខ្លួន​ និង​សាង​សង់​ដោយ​ខ្លួន​ឯង​ផ្ទាល់។',
                'ស្ថិត​នៅ​អាគារ​លេខ​ ១០A ផ្លូវ១១៨​ សង្កាត់​ផ្សារ​ដេ​ប៉ូ​ទី៣​ ខណ្ឌ​ទួល​គោក​ រាជធានីភ្នំ​ពេញ ​ដែល​បាន​សម្ពោធ​បើក​អោយ​ដំណើរ​ការ​នៅ ​ថ្ងៃ​ទី​៣០​ ខែតុលា​ ឆ្នាំ​២០១៤ ក្រោម​អធិប​តីភាព​ដ៏ខ្ពង់ខ្ពស់របស់ ឯក​ឧត្តម​ លី ឆេង អគ្គនាយកប៊ែលធី គ្រុប និងជាសាកលវិទ្យាធិការ សាកលវិទ្យាល័យ ប៊ែលធី អន្តរជាតិ និងលោកជំទាវ។ ដែលជាទីតាំងថ្មី ប្តូរមកពីទីតាំងចាស់ (ដំណើរការតាំងពីថ្ងៃទី២០ ខែមេសា ឆ្នាំ២០០៥) ដោយសារផុតកំណត់កិច្ចសន្យា។ សាលា​ ប៊ែល​ធី ​អន្តរ​ជាតិ​ ទី​៣​ សង់​ឡើង​ពី​បេ​តុង​អាម៉េ​(Reinforced Concrete) កំពស់​ ៧ជាន់​ ចំណតក្រោមដី ០១ជាន់ និងមាន​ ៦០បន្ទប់​ ដោយមានទីធ្លាខាងលើសម្រាប់ហាត់ប្រាណ-លំហែកាយ ដែល​ជា​កម្ម​សិទ្ធិ​ផ្ទាល់ខ្លួន​ និង​សាង​សង់​ដោយ​ខ្លួន​ឯង​ផ្ទាល់។',
                'ស្ថិត​នៅ​អាគារ​លេខ​ ៥៤​ ផ្លូវ​លេខ​ ៤៨៨​ សង្កាត់​ ផ្សារ​ដើម​ថ្កូវ​ ខណ្ឌ​ ចំការ​មន​ ក្រុង​ភ្នំពេញ​ ដែល​បាន​សម្ពោធ​បើក​អោយ​ដំណើរ​ការ​នៅ​ថ្ងៃ​ទី​០៣​ ខែ​សីហា​ ឆ្នាំ​២០០៦​ ក្រោម​អធិប​តី​ភាព​ដ៏​ខ្ពង់​ខ្ពស់​របស់​ឯក​ឧត្តម​ កែប​ ជុតិមា អភិ​បាល​រាជ​ធានី​ភ្នំពេញ ។ សាលាប៊ែល​ធី​ទី៤​ សង់​ឡើង​ពី​បេ​តុង​អាម៉េ​(Reinforced Concrete) កំពស់​ ៦ជាន់​ មាន​ ៤៥​បន្ទប់ ​ដែល​ជា​កម្ម​សិទ្ធិ​ផ្ទាល់​ខ្លួន​ និង​សាង​សង់​ដោយ​ខ្លួន​ឯង​ផ្ទាល់ ។',
                'ស្ថិត​នៅ​អាគារ​លេខ​ ៣៦ ផ្លូវ​ជាតិ​លេខ១​ សង្កាត់​ច្បារ​អំពៅ១​ ខណ្ឌច្បារអំពៅ​ ក្រុង​ភ្នំពេញ ដែល​បាន​សម្ពោធ​បើក​អោយ​ដំណើរ​ការ​នៅ​ថ្ងៃទី​០២​ ខែ​សីហា​ ឆ្នាំ​២០០៧​​ ក្រោម​អធិប​តី​ភាព​ ​ឯក​ឧត្តម​ ម៉ប់​ សារិន​ អភិ​បាល​រង​រាជ​ធានី​ ភ្នំពេញ​។ វិទ្យា​ស្ថាន​ប៊ែល​ធី​ទី៥​ សង់​ឡើងពី​បេ​តុង​អាម៉េ​(Reinforced Concrete) កំពស់​ ​៦ជាន់​​ មាន​ ​៥៥បន្ទប់​​ ដែល​ជា​កម្ម​សិទ្ធិ​ផ្ទាល់​ខ្លួន​ និង​សាង​សង់​ដោយ​ខ្លួន​ឯង​ផ្ទាល់ ។',
                'ការិ​យា​ល័យ​កណ្តាល​(Head Office) ស្ថិត​នៅ​អាគារ​លេខ​ ២៥​ ផ្លូវលេខ​ ១០៥​ សង្កាត់​បឹង​ព្រលិត​ ខណ្ឌ​៧​មករា​ ក្រុង​ភ្នំពេញ​ ដែល​បាន​សម្ពោធ​បើក​អោយ​ដំណើរ​ការ​នៅ​ថ្ងៃទី០៣​ ខែ​មិថុនា​ ឆ្នាំ​២០០៨​ ក្រោម​អធិ​បតី​ភាព​ ដ៏​ខ្ពង់​ខ្ពស់​របស់ ​ឯក​ឧត្តម​ កែប ជុតិ​មា ទីព្រឹ​ក្សា​ផ្ទាល់​សម្តច​ អគ្គ​មហា​សេនា​ បតី​តេជោ​ ហ៊ុន​សែន នាយក​រដ្ឋ​មន្រ្តី​ នៃ​ព្រះ​រា​ជា​ណា​ចក្រ​កម្ពុជា​ និង​ ជា​អភិ​បាល​រាជ​ធានី​ភ្នំពេញ ។​ សាលា​ ប៊ែល​ធី​ទី៦​ សង់​ ឡើង​ពី​បេតុង​អាម៉េ​(Reinforced Concrete) កំពស់​៧ជាន់​ មាន​ ៦៣​បន្ទប់​ ដែល​ជា​កម្ម​សិទ្ធិ​ផ្ទាល់​ខ្លួន​​ និង​សាង​សង់​ដោយ​ខ្លួន​ឯង​ផ្ទាល់ ។',
                'ស្ថិត​នៅ​អាគារ​លេខ​ ៦៧ ផ្លូវលេខ​១៦០​ កែង​ ២៦៥​ សង្កាត់​ ទឹក​ល្អក់២​ ខណ្ឌ​ទួល​គោក​ ក្រុង​ភ្នំពេញ​ ដែល​បាន​សម្ពោធ​បើក​អោយ​ដំណើរ​ការ​នៅ​ថ្ងៃទី​១៣​ ខែ​តុលា​ ឆ្នាំ​២០០៨​ ក្រោម​អធិប​តីភាព​ដ៏​ខ្ពង់​ខ្ពស់​របស់ ​ឯក​ឧត្តម​ លី​ ឆេង ទី​ប្រឹក្សា​អម​ទីស្តី​ការ​គណៈ​រដ្ឋ​មន្រ្តី​ អគ្គ​នាយក​ប៊ែល​ធី​គ្រុប​ និង​ជា​នាយក​វិទ្យា​ស្ថាន​ប៊ែល​ធី​អន្តរ​ជាតិ​។​ សាលា​ប៊ែល​ធី​ទី៧​ សង់​ឡើង​ពី​បេតុង​អាម៉េ​(Reinforced Concrete) កំពស់​៧ជាន់​ មាន​ ៦៥​បន្ទប់​​ និង​មានជាន់​ក្រោម​ដី សម្រាប់​ជា​ចំណត​យាន​ជំនិះ​គ្រប់​ប្រភេទ​របស់​សិស្ស​​ ដែល​ជា​កម្ម​សិទ្ធិ​ផ្ទាល់​ខ្លួន​ និង​សាង​សង់​ដោយ​ខ្លួន​ឯង​ផ្ទាល់។',
                'ស្ថិត​នៅ​អា​គារ​លេខ​ ១២៣​ មហា​វិថី​ សហ​ព័ន្ធ​រុស្ស៊ី​ សង្កាត់​ កា​កាប​ ខណ្ឌ​ ពោធិ៍សែនជ័យ​ ក្រុង​ភ្នំពេញ​ ដែល​បាន​សម្ពោធ​ បើក​អោយ​ដំណើរ​ការ​នៅ​ថ្ងៃទី១៨​ ខែ​ឧស​ភា​ ឆ្នាំ​២០០៩​ ក្រោម​អធិប​តីភាព​ដ៏​ខ្ពង់​ខ្ពស់​របស់​ ឯក​ឧត្តម​ លី​ ឆេង ទី​ប្រឹក្សា​អម​ទី​ស្តី​ការ​គណៈ​រដ្ឋ​មន្រ្តី​ អគ្គ​នាយក​ ប៊ែល​ធី​ គ្រុប​ និង​ជា​នាយក​វិទ្យា​ស្ថាន​ ប៊ែល​ធី​ អន្តរ​ជាតិ​។​ សាលា​ ប៊ែល​ធី​ទី៨​ សង់​ឡើង​ពី​បេតុង​អាម៉េ​ (Reinforced Concrete) កំពស់​ ៤ជាន់​ មាន​ ៥០​បន្ទប់​ ដែល​ជា​កម្ម​សិទ្ធិ​ផ្ទាល់​ខ្លួន​ និង​សាង​សង់​ដោយ​ខ្លួន​ឯង​ផ្ទាល់ ។',
                'ស្ថិត​នៅ​អាគារ​លេខ​ ៣០៣២​ ផ្លូវ​វេង​ស្រេង​ កែង​ ២១៧​ សង្កាត់​ស្ទឹង​មានជ័យ​ ខណ្ឌ​មានជ័យ​ ក្រុងភ្នំពេញ​ ដែល​បាន​សម្ពោធ​បើក​អោយ​ដំណើរ​ការ​នៅ​ថ្ងៃទី១១​ ខែមីនា​ ឆ្នាំ២០១០​ ក្រោម​អធិបតីភាព​ដ៏​ខ្ពង់​ខ្ពស់​របស់​ ឯក​ឧត្តម​ លី ឆេង​ ទីប្រឹក្សា​អម​ទីស្តី​ការគណៈ​រដ្ឋ​មន្រ្តី​ និង​ជា​អគ្គនាយក​ប៊ែលធីគ្រុប។​ សាលាប៊ែលធី​ទី៩​ សង់​ឡើង​ពី​បេតុង​អាម៉េ(Reinforced Concrete) កំពស់​ ៧ជាន់​ មាន ១៣៥បន្ទប់​ និង​មាន​ជាន់​ក្រោម​ដី​ សម្រាប់​ជា​ចំណត​យាន​ជំនិះ​គ្រប់​ប្រភេទ​របស់​សិស្ស​ ដែល​ជា​កម្ម​សិទ្ធិផ្ទាល់​ខ្លួន​និង​សាង​សង់​ដោយ​ខ្លួន​ឯង​ផ្ទាល់។',
                'ស្ថិតនៅ​អាគារលេខ ៥៧ ផ្លូវ២១៧ កែង ផ្លូវ២៩០ សង្កាត់ទួលស្វាយព្រៃ​២ ខណ្ឌ​ចំការមន ក្រុងភ្នំពេញ​ ដែលបាន​សម្ពោធ​បើក​អោយ​ដំណើរ​ការ​នៅថ្ងៃទី១៣ ខែកញ្ញា ឆ្នាំ២០១០ ក្រោមអធិបតីភាព ដ៏ខ្ពង់ខ្ពស់របស់ ឯកឧត្តម លី ឆេង ទីប្រឹក្សាអមទីស្តីការគណៈរដ្ឋមន្រ្តី និងជា អគ្គនាយក ប៊ែលធីគ្រុប។ សាលា​ប៊ែលធីទី១០ សង់​ឡើង​ពី​បេតុង​អាម៉េ (Reinforced Concrete) កំពស់​ ៧ជាន់ មាន ៥៥បន្ទប់ និងមានជាន់ក្រោមដី (Basement) សម្រាប់​ជា​ចំណត​យាន​ជំនិះ​គ្រប់​ប្រភេទ​របស់​សិស្ស ដែល​ជាកម្មសិទ្ធិ​ផ្ទាល់ខ្លួន និង​សាងសង់​ដោយ​ខ្លួន​ឯង​ផ្ទាល់។',
                'ស្ថិតនៅ​អាគារលេខ ១៧៩៦ ផ្លូវជាតិលេខ៥, ភូមិផ្សារតូច, សង្កាត់ ទួលសង្កែ ខណ្ឌឬស្សីកែវ ក្រុងភ្នំពេញ​ ដែល​​បានសម្ពោធ បើកអោយដំណើរការ​ នៅថ្ងៃទី១ ខែកញ្ញា ឆ្នាំ២០១១ ក្រោម អធិបតីភាពដ៏ខ្ពង់ខ្ពស់របស់ ឯក​ឧត្តម​ លី​ ឆេង ទី​ប្រឹក្សា​អម​ទី​ស្តី​ការ​គណៈ​រដ្ឋ​មន្រ្តី​ និងជា​​អគ្គ​នាយក​ ប៊ែល​ធី​ គ្រុប​​។​ សាលា​ប៊ែល​ធី​ ទី១១​ សង់​ឡើង​ពី​បេតុង​អាម៉េ​(Reinforced Concrete) កំពស់​ ៧ជាន់​ មាន​ ៥៥​បន្ទប់​ និងមានជាន់ក្រោមដី (Basement) សម្រាប់​ជា​ចំណត​យានជំនិះ​គ្រប់​ប្រភេទ​របស់​​ សិស្ស ​ ដែល​ជា​កម្ម​សិទ្ធិ​ផ្ទាល់​ខ្លួន​ និង​សាង​សង់​ដោយ​ ក្រុមហ៊ុន ​ប៊ែលធីសំណង់​ នៃ​ ប៊ែលធី គ្រុប។',
                'ស្ថិត​នៅ​អគារ​លេខ​ ២​២​៥​៨​ ផ្លូវ​ហា​ណូយ​(១​០​១​៩​) ​សង្កាត់​ទឹក​ថ្លា​ខណ្ឌ​សែន​សុខ ​ក្រុង​ភ្នំពេញ​ ដែល​​បានសម្ពោធបើកអោយដំណើរការ​ នៅថ្ងៃទី១៨ ខែកក្កដា ឆ្នាំ២០១៣ ក្រោមអធិបតីភាពដ៏ខ្ពង់ខ្ពស់របស់ ឯក​ឧត្តម​ លី​ ឆេង ទី​ប្រឹក្សា​អម​ទី​ស្តី​ការ​គណៈ​រដ្ឋ​មន្រ្តី​ និងជា​​អគ្គ​នាយក​ ប៊ែល​ធី​ គ្រុប​​។​ សាលា​ប៊ែល​ធី​ ទី១២ សង់​ឡើង​ពី​បេតុង​អាម៉េ​(Reinforced Concrete) កំពស់​ ៧ជាន់​ មាន​ ៨១​បន្ទប់​ និងមានជាន់ក្រោមដី (Basement) សម្រាប់​ជា​ចំណត​យានជំនិះ​គ្រប់​ប្រភេទ​របស់​​ សិស្ស ​ ដែល​ជា​កម្ម​សិទ្ធិ​ផ្ទាល់​ខ្លួន​ និង​សាង​សង់​ដោយ​ ក្រុមហ៊ុន ​ប៊ែលធីសំណង់​នៃ​ ប៊ែលធី គ្រុប។',
                'ស្ថិត​នៅ​អគារ​លេខ​ ១​៦​៣ ផ្លូវ​លេខ​៥២៨​ កែង​ផ្លូវ​លេខ​៣​៥​៣​ សង្កាត់​បឹង​កក់​ទី​១​ ខណ្ឌ​ទួល​គោក​ ​រាជ​ធា​នី​ភ្នំពេញ​ ដែលបានដាក់សម្ពោធបើកឱ្យដំណើរការ នៅថ្ងៃទី០២ ខែធ្នូ ឆ្នាំ២០១៣ ក្រោមអធិបតី ភាពដ៏ខ្ពង់ខ្ពស់របស់ ឯឧត្តម លី ឆេង អគ្គនាយកប៊ែលធីគ្រុប និងលោកជំទាវ។ សាលា​ប៊ែល​ធី​ សាខាទី​១​៣​សង់​ឡើង​ពី​បេ​តុង​អា​ម៉េ​កម្ពស់​ ៧​ជាន់​ មាន​ ៦០​បន្ទប់​ និង​មាន​ជាន់​ក្រោម​ដី​សម្រាប់​ធ្វើ​ជា​ចំណត​កង់​-​ម៉ូតូ​ ដែល​ជា​កម្ម​សិទ្ធិ​ផ្ទាល់​ខ្លួន​ និង​សាង​សង់​ដោយ​ក្រុម​ហ៊ុន​ប៊ែល​ធី​ សំណង់​នៃ​ប៊ែល​ធី​គ្រុប​​។',
                'ស្ថិត​នៅ​អ​គារ​លេខ​ ៧៨៦​A ផ្លូវ​ជាតិ​លេខ​២ ​សង្កាត់​ព្រែក​ឫ​ស្សី​ ក្រុង​តា​ខ្មៅ​ ខេត្ត​កណ្តាល​ ដែលបានដាក់សម្ពោធអោយដំណើរការនៅថ្ងៃទី០៤ ខែឧសភា ឆ្នាំ២០១៥ ក្រោម​អធិ​បតី​ភាព​ ឯក​ឧត្តម​ លី ​ឆេង​ អគ្គ​នា​យក​ ប៊ែល​ធី​ គ្រុប​ និង​លោក​ជំ​ទាវ​។ អ​គារ​ប៊ែល​ធី​ទី​១៤​នេះ​ មាន​កំ​ពស់​ ៧​ជាន់​ ចំ​ណត​ក្រោម​ដី​០១​ជាន់​ និង​មាន​ ៧0​បន្ទប់​ ដោយ​មាន​ទី​ធ្លា​ខាង​លើ​សម្រាប់​ហាត់​ប្រាណ​-​លំ​ហែ​កាយ​ និង​អា​ហារ​ដ្ឋាន​​ ដែល​ជា​កម្ម​សិទ្ធិ​ផ្ទាល់ខ្លួន​ និង​សាង​សង់​ដោយ​ខ្លួន​ឯង​ផ្ទាល់។',
                'ស្ថិត​នៅ​អ​គារ​លេខ​ ១១៩A ផ្លូវ​ជាតិ​លេខ​៤ ភូមិជម្ពូវ័ន ​សង្កាត់ចោមចៅ ខណ្ឌពោធិ៍សែនជ័យ រាជធានីភ្នំពេញ​ ដែលបានសម្ពោធបើកអោយដំណើរការនៅថ្ងៃទី៣០ ខែកញ្ញា ឆ្នាំ២០៥ ក្រោម​អធិ​បតី​ភាព​ ឯក​ឧត្តម​ លី ​ឆេង​ អគ្គ​នា​យក​ ប៊ែល​ធី​ គ្រុប​ និង​លោក​ជំ​ទាវ​។ អ​គារ​ប៊ែល​ធី​ទី​១៥​នេះ​ មាន​កំ​ពស់​ ០៤​ជាន់​ ចំ​ណត​ក្រោម​ដី​០១​ជាន់​ និង​មាន​ ៦៧​បន្ទប់​ ដោយ​មាន​ទី​ធ្លា​ខាង​លើ​សម្រាប់​ហាត់​ប្រាណ​-​លំ​ហែ​កាយ​ និង​អា​ហារ​ដ្ឋាន​​ ដែល​ជា​កម្ម​សិទ្ធិ​ផ្ទាល់ខ្លួន​ និង​សាង​សង់​ដោយ​ខ្លួន​ឯង​ផ្ទាល់។',
                'ស្ថិត​នៅ​អ​គារ​លេខ​ ៧៧A ផ្លូវ​វេង​ស្រេង​ ភូមិ​ជ្រៃ​កោង ​សង្កាត់​ចោម​ចៅ​ ខណ្ឌ​ពោធិ៍​សែន​ជ័យ​ រាជ​ធា​នី​ភ្នំ​ពេញ​ ដែល​បាន​សម្ពោធ​បើក​ឱ្យ​ដំ​ណើរ​ការ​នៅថ្ងៃទី៣០ ខែឧសភា ឆ្នាំ២០១៦ ក្រោម​អធិ​បតី​ភាព​ដ៏​ខ្ពង់​ខ្ពស់​របស់​ ឯក​ឧត្តម​ លី ​ឆេង​ អគ្គ​នា​យក​ប៊ែល​ធី​ គ្រុប​ និង​ជា​សា​កល​វិ​ទ្យា​ធិ​ការ​ សា​កល​វិ​ទ្យា​ល័យ ​ប៊ែល​ធី​ អន្តរ​ជាតិ​ និង​លោក​ជំ​ទាវ​ ។ សា​លា​ប៊ែល​ធី​ទី​១៦​ សង់​ឡើង​ពី​បេ​តុង​អាម៉េ​(Reinforced Concrete) មាន​កម្ពស់​ ០៤ជាន់​ មាន​ ៨២បន្ទប់​ និង​មាន​ជាន់​ក្រោម​ដី​សម្រាប់​ធ្វើ​ជា​ចំ​ណត​កង់​-​ម៉ូ​តូ ដែល​ជា​កម្ម​សិទ្ធិ​ផ្ទាល់ខ្លួន​ និង​សាង​សង់​ដោយ​ខ្លួន​ឯង​ផ្ទាល់។',
                'ស្ថិតនៅផ្លូវជាតិលេខ៥​ ​សង្កាត់​ស្វាយប៉ាក ខណ្ឌ​ឫស្សីកែវ រាជ​ធា​នី​ភ្នំ​ពេញ​ ដែល​បាន​សម្ពោធ​បើក​ឱ្យ​ដំ​ណើរ​ការនៅថ្ងៃទី០២ ខែឧសភា ឆ្នាំ២០១៧ ​ក្រោម​អធិ​បតី​ភាព​ដ៏​ខ្ពង់​ខ្ពស់​របស់​ ឯក​ឧត្តម​ លី ​ឆេង​ អគ្គ​នា​យក​ប៊ែល​ធី​ គ្រុប​ និង​ជា​សា​កល​វិ​ទ្យា​ធិ​ការ​ សា​កល​វិ​ទ្យា​ល័យ ​ប៊ែល​ធី​ អន្តរ​ជាតិ​ និង​លោក​ជំ​ទាវ​ ។',
                'ស្ថិតនៅផ្លូវជាតិលេខ១​ ភូមិព្រែកជាងព្រំ ​សង្កាត់​វាលស្បូវ ខណ្ឌ​ច្បារអំពៅ រាជ​ធា​នី​ភ្នំ​ពេញ​ ដែលមានកម្ពស់ ៧ជាន់ មាន៧២បន្ទប់ ក្នុងនោះមានជាន់ក្រោមដី​ធំទូលាយសម្រាប់ចតឡាន ម៉ូតូ ​ទី​ធ្លា​ខាង​លើ​សម្រាប់​ហាត់​ប្រាណ​-​លំ​ហែ​កាយ​ និង​អា​ហារ​ដ្ឋាន ព្រមទាំងមានក្លោងទ្វារដែលជាអត្តសញ្ញាណរបស់ប៊ែលធីផងដែរ និង​បាន​សម្ពោធ​បើក​ឱ្យ​ដំ​ណើរ​ការនៅថ្ងៃទី២៩ ខែមីនា ឆ្នាំ២០១៨ ​ក្រោម​អធិ​បតី​ភាព​ដ៏​ខ្ពង់​ខ្ពស់​របស់​ ឯក​ឧត្តម​ លី ​ឆេង​ អគ្គ​នា​យក​ប៊ែល​ធី​ គ្រុប​ និង​ជា​សា​កល​វិ​ទ្យា​ធិ​ការ​ សា​កល​វិ​ទ្យា​ល័យ ​ប៊ែល​ធី​ អន្តរ​ជាតិ​ និង​លោក​ជំ​ទាវ​ ដែល​ជា​កម្ម​សិទ្ធិ​ផ្ទាល់ខ្លួន​ និង​សាង​សង់​ដោយ​ខ្លួន​ឯង​ផ្ទាល់។',
                'ស្ថិតនៅ​ ផ្លូវជាតិលេខ ៦អា សង្កាត់​ព្រែលលៀប ខណ្ឌជ្រោយចង្វាររាជធានីភ្នំពេញ បានសម្ពោធបើកឱ្យដំណើរការនៅថ្ងៃទី២៥ ខែកក្កដា ២០១៨ ក្រោមអធិបតីភាពដ៏ខ្ពង់ខ្ពស់របស់ ឯកឧត្តម បណ្ឌិត លី ឆេង អគ្គនាយកប៊ែលធី គ្រុប និងជាសាកលវិទ្យាធិការ សាកលវិទ្យាល័យ ប៊ែលធី អន្តរជាតិ។ សាលាប៊ែលធីទី១៩ សង់ឡើងពីបេតុងអាម៉េ កម្ពស់ ០៨ជាន់ មាន ៧០បន្ទប់ និងមានជាន់ផ្ទាល់ដី សម្រាប់ចតកង់-ម៉ូតូ។ ​',
                'សិ្ថតនៅផ្លូវជាតិលេខ៣​ សង្កាត់ចោមចៅ៣ខណ្ឌពោធិ៍សែនជ័យ ​ រាជ​ធា​នី​ភ្នំ​ពេញ​ ដែល​បាន​សម្ពោធ​បើក​ឱ្យ​ដំ​ណើរ​ការ​នៅ ថ្ងៃទី០៤ ខែមីនា ឆ្នាំ២០១៩ ក្រោម​អធិ​បតី​ភាព​ដ៏​ខ្ពង់​ខ្ពស់​របស់​ ឯក​ឧត្តម​បណ្ឌិត លី ​ឆេង​ តំណាងរាស្ដ្រមណ្ឌលរាជធានីភ្នំពេញ ស្ថាបនិកនិងជាអគ្គ​នា​យក​ ប៊ែល​ធី​គ្រុប​ និង​ជា​ប្រធានក្រុមប្រឹក្សាភិបាលសាកលវិទ្យាល័យ ប៊ែលធី អន្តរជាតិ។​ សាលាប៊ែលធីទី២០​ សាងសង់​ឡើង​ពី​បេ​តុង​អាម៉េ​មាន​កម្ពស់​ ០៥ជាន់​ មាន​ ៧៥បន្ទប់​ និង​មាន​ជាន់​ក្រោម​ដី​សម្រាប់​ធ្វើ​ជា​ចំ​ណត​កង់​-​ម៉ូ​តូ ។',
                'សិ្ថតនៅ ផ្លូវឧកញ៉ាំ ទ្រីហេង​ ភូមិគោកឃ្លាង សង្កាត់គោកឃ្លាងខណ្ឌពោធិ៍សែនសុខ ​ រាជ​ធា​នី​ភ្នំ​ពេញ។​ ដែល​បាន​សម្ពោធ​បើក​ឱ្យ​ដំ​ណើរ​ការ​នៅ ថ្ងៃទី០៣ ខែកញ្ញា ឆ្នាំ២០២០ ក្រោម​អធិ​បតី​ភាព​ដ៏​ខ្ពង់​ខ្ពស់​របស់​ ឯក​ឧត្តម​បណ្ឌិត លី ​ឆេង​ តំណាងរាស្ដ្រមណ្ឌលរាជធានីភ្នំពេញ ស្ថាបនិកនិងជាអគ្គ​នា​យក​ ប៊ែល​ធី​គ្រុប​ និង​ជា​ប្រធានក្រុមប្រឹក្សាភិបាលសាកលវិទ្យាល័យ ប៊ែលធី អន្តរជាតិ។​ សាលាប៊ែលធីទី២១ សាងសង់​ឡើង​ពី​បេ​តុង​អាម៉េ​មាន​កម្ពស់​ ០៩ជាន់​ មាន​ ១១៥បន្ទប់​ និង​មាន​ជាន់​ក្រោម​ដី​សម្រាប់​ធ្វើ​ជា​ចំ​ណត​កង់​-​ម៉ូ​តូ ។',
                'សិ្ថតនៅផ្លូវជាតិលេខ២​ ភូមិក្រាំស្វាយ សង្កាត់ព្រែកកំពឹសខណ្ឌដង្កោ ​ រាជ​ធា​នី​ភ្នំ​ពេញ។​ ដែល​បាន​សម្ពោធ​បើក​ឱ្យ​ដំ​ណើរ​ការ​នៅ ថ្ងៃទី៣០ ខែសីហាឆ្នាំ២០២១ ក្រោម​អធិ​បតី​ភាព​ដ៏​ខ្ពង់​ខ្ពស់​របស់​ ឯក​ឧត្តម​បណ្ឌិត លី ​ឆេង​ តំណាងរាស្ដ្រមណ្ឌលរាជធានីភ្នំពេញ ស្ថាបនិកនិងជាអគ្គ​នា​យក​ ប៊ែល​ធី​គ្រុប​ និង​ជា​ប្រធានក្រុមប្រឹក្សាភិបាលសាកលវិទ្យាល័យ ប៊ែលធី អន្តរជាតិ។​ សាលាប៊ែលធីទី២២ សាងសង់​ឡើង​ពី​បេ​តុង​អាម៉េ​មាន​កម្ពស់​ ០៩ជាន់​ មាន​ ១៥៦បន្ទប់​ និង​មាន​ជាន់​ក្រោម​ដី​សម្រាប់​ធ្វើ​ជា​ចំ​ណត​កង់​-​ម៉ូ​តូ ។',
                'ស្ថិតនៅភូមិប្រការ សង្កាត់ព្រៃស ខណ្ឌដង្កោ រាជធានីភ្នំពេញ បានសម្ពោធបើកឱ្យដំណើរការ នៅថ្ងៃទី២៩ ខែសីហា ឆ្នាំ ២០២២ ក្រោមអធិបតីភាពដ៏ខ្ពង់ខ្ពស់របស់ ឯកឧត្តម បណ្ឌិត លី ឆេង តំណាងរាស្ត្រមណ្ឌល រាជធានីភ្នំពេញ ស្ថាបនិកនិងជាអគ្គនាយកប៊ែលធី គ្រុបនិង ជាប្រធានក្រុម ប្រឹក្សាភិបាលសាកលវិទ្យាល័យប៊ែលធី អន្តរជាតិ។ សាលា ប៊ែលធីទី២៣ សង់ឡើងពីបេតុង អាម៉េ កម្ពស់ ៩ជាន់ មាន ១៧៩បន្ទប់ និងមានជាន់ក្រោមដីសម្រាប់ធ្វើជាចំណត កង់-ម៉ូតូ។',
                'ស្ថិតនៅ ភូមិព្រែកតាមាក់ ឃុំព្រែកតាមាក់ ស្រុកខ្សាច់ កណ្តាល ខេត្តកណ្តាល បានសម្ពោធបើកឱ្យដំណើរការ នៅថ្ងៃទី០៥ ខែកញ្ញា ឆ្នាំ ២០២២ ក្រោមអធិបតីភាពដ៏ខ្ពង់ខ្ពស់របស់ ឯកឧត្តម បណ្ឌិត លី ឆេង តំណាងរាស្ត្រមណ្ឌល រាជធានីភ្នំពេញ ស្ថាបនិកនិងជាអគ្គនាយកប៊ែលធី គ្រុបនិង ជាប្រធានក្រុមប្រឹក្សាភិបាលសាកលវិទ្យាល័យប៊ែលធី អន្តរជាតិ។ សាលាប៊ែលធីទី២៤ សង់ឡើងពីបេតុង អាម៉េ កម្ពស់ ៩ជាន់ មាន ១៧៣បន្ទប់ និងមានជាន់ក្រោមដីសម្រាប់ធ្វើជា ចំណត កង់-ម៉ូតូ។',
                
            ];
        } else {
            var campusNameArr = [
                "Kirirom",
                "Toul Tum Pong",
                "DN",
                "Phsar Doeum Thkov",
                "Chbar Ampeou",
                "Orssei",
                "Loksang Hospital",
                "Pochen Tong",
                "Steung Meanchey",
                "Ang Teuk Olympic",
                "Phsar Touch",

                "Phsar Deihoy",
                "Comko City",
                "Takhmao Town",
                "Phsar Chumpu Vorn",
                "Phlov Yeng Sreng",
                "Russey Keo",
                "Phsar Preak Leap",
                "Phsar Preak Eak",
                "Chom Chao",
                "Phsar Chhouk Meas",
                "Kour Srov",
                "Preysor Russey Sanh",
                "Prek Ta Mek",
                "Pumping Station 371",
                "Preak Pra",
                "B27",
                "B28",
                "B29",
                "B30",
            ];
            var descriptionArray = [
                'BELTEI Kirirom is located at 77, Street 125, Sangkat Veal Vong, Khan 7 Makara, Phnom Penh and was officially opened on January 01, 2002 and presided over by Mr. Oum Hoeung, Director of Phnom Penh Municipal Department of Education, Youth and Sport. It is a five-story building with 41 rooms and it belongs to BELTEI, which was built by BELTEI Construction Company of BELTEI Group, and it belongs to BELTEI.'
                ,'It is located at 34, Street 431, Sangkat Tuol Tumpoung 1, Khan Chamkamon, Phnom Penh. It is a reinforced concrete and seven-story building with convenient parking lots in the basement and has more than 50 rooms and it belongs to BELTEI and it is scheduled to open on May 02, 2011, which was built by BELTEI Construction Company of BELTEI Group, and it belongs to BELTEI.'
                ,'It is located at Nº 10A, Street 118, Sangkat Phsar Depo 3, Khan Tuol Kork, Phnom Penh City. It was inauguration on October 30, 2014, and highly presided over by H.E. Ly Chheng, Director-General of BELTEI Group and President of BELTEI International University and Lok Chum Teav. It is the transformation of the former BELTEI Campus 3 (DN) into the new one (It’s been operated since April 20, 2005) due to the end of the contract. It is seven-storey reinforced concrete building with 60 rooms and basement and ground floor for parking lot, which was built by BELTEI Construction Company of BELTEI Group, and it belongs to BELTEI.'
                ,'It is located at 54, Street 488, Sangkat Phsar Deum Thkov, Khan Chamka Mon, Phnom Penh. It was opened on August 03, 2006 and highly presided over by His Excellency Kep Chutema, Phnom Penh Municipal Governor. It is a reinforced concrete and six-story building with 45 rooms and it belongs to BELTEI, which was built by BELTEI Construction Company of BELTEI Group, and it belongs to BELTEI.'
                ,'It is situated at 36, National Road 1, Sangkat Chba Ampov I, Khan Chba Ampov, Phnom Penh. It was inaugurated on August 02, 2007 and presided over by His Excellency Mob Sarin, Deputy Phnom Penh Municipal Governor. It is a reinforced concrete and six-story building with convenient parking lots in the basement and has 55 rooms and it belongs to BELTEI, which was built by BELTEI Construction Company of BELTEI Group, and it belongs to BELTEI.'
                ,'Head Office, is located at 25, Street 105, Sangkat Beung Prolit, Khan 7 Makara, Phnom Penh. It was opened on June 03, 2008 and highly presided over by His Excellency Kep Chutema, Phnom Penh Municipal Governor. It is a reinforced concrete and seven-story building with 63 rooms and it belongs to BELTEI, which was built by BELTEI Construction Company of BELTEI Group, and it belongs to BELTEI.'
                ,'It is located at 96, Corner of Street 160 and 265, Sangkat Teuk Laak II, Khan Tuol Kork, Phnom Penh. It was opened on October 13, 2008 and highly presided over by H.E. Ly Chheng, Advisor to the Council of Ministers, Director-General of BELTEI Group Co., Ltd and Director of BELTEI International Institute. It is a reinforced concrete and seven-story building with convenient parking lots in the basement and has 65 rooms and it belongs to BELTEI.'
                ,'It is located at 123, Russian Federation Blvd, Sangkat Kakab, Khan Dangkor, Phnom Penh. It was opened on May 18, 2009 and highly presided over by H.E. Ly Chheng, Advisor to the Council of Ministers, Director-General of BELTEI Group Co.,Ltd and Director of BELTEI International Institute. It is a reinforced concrete and four-story building with 50 rooms and it belongs to BELTEI, which was built by BELTEI Construction Company of BELTEI Group, and it belongs to BELTEI.'
                ,'It is located at 3032, Corner of Veng Sreng Street and 217 Sangkat Stung Meanchey, Khan Meanchey, Phnom Penh. It was opened on March 11, 2010 and highly presided over by H.E. Ly Chheng, Advisor to the Council of Ministers, Director-General of BELTEI Group Co., Ltd and Director of BELTEI International Institute. It is a reinforced concrete and seven-story building with convenient parking lots in the basement and has 135 rooms and it belongs to BELTEI, which was built by BELTEI Construction Company of BELTEI Group, and it belongs to BELTEI.'
                ,'It is located at 57, Corner of Street 217 and 290, Sangkat Tuol Svay Prey II, Khan Chamcarmon, Phnom Penh. It was opened on September 13, 2010, and highly presided over by H.E. Ly Chheng, Advisor to the Council of Ministers and Director-General of BELTEI Group Co., Ltd. It is a reinforced concrete and seven-story building with convenient parking lots in the basement and has 55 rooms and it belongs to BELTEI, which was built by BELTEI Construction Company of BELTEI Group, and it belongs to BELTEI.'
                ,'It is located at #1796 National Road 5,Phsa Toch Village, Sangkat Tuol Sangke,Khan Russey Keo, Phnom Penh. It was opened on September 1, 2011 and highly presided over by H.E. Ly Chheng, Advisor to the Council of Ministers and Director-General of BELTEI Group Co., Ltd. It is a reinforced concrete and seven-story building with convenient parking lots in the basement and has 55 rooms, which is being built by BELTEI Construction Company of BELTEI Group and belogs to BELTEI.'
                ,'It is located at the building Nº 2258, Hanoi Street (1019), Sangkat Teuk Thla, Khan Sen Sok, Phnom Penh city. It was opened on July 18, 2013 and highly presided over by H.E. Ly Chheng, Advisor to the Council of Ministers and Director-General of BELTEI Group Co., Ltd. It is a reinforced concrete and seven-story building with convenient parking lots in the basement and has 81 rooms, which is being built by BELTEI Construction Company of BELTEI Group and belogs to BELTEI.'
                ,'It is located at the building Nº 163, Corner of Street 528 and 353, Sangkat Boeung Kak 1, Khan Tuol Kork, Phnom Penh city. It was opened on December 02, 2013 and highly presided over by H.E. LY Chheng, Director-General of BELTEI Group and Lok Chumteav. It is a reinforced concrete with seven-storey building with 60 rooms and a basement for parking, which was built by BELTEI Construction Company of BELTEI Group, and it belongs to BELTEI.'
                ,'BELTEI International School Campus 14 (Takhmao Town), which is located at Building Nº 786A, National Road number 2, Sangkat Preak Reosey, Takhmao City, Kandal Province. The event was presided over by H.E. LY Chheng, Director-General of BELTEI Group and Lok Chumteav. The BELTEI International School Campus 14 building consists of 7 floors including a basement for parking; 70 classrooms; terrace for exercise; and a canteen., which was built by BELTEI Construction Company of BELTEI Group, and it belongs to BELTEI.'
                ,'BELTEI International School Campus 15 (Phsar Chompovorn), which is located at Building Nº 119A, National Road number 4, Chumpou Vorn Village, Sangkat Chaom Chao, Khan Posenchey, Phnom Penh Capital City. The BELTEI International Institute Campus 15 building consists of 04 floors including a basement for parking; 67 classrooms; terrace for exercise; and a canteen , which was built by BELTEI Construction Company of BELTEI Group, and it belongs to BELTEI.'
                ,'It is located at Nº 77A Veng Sreng Street, Chrey Koang Village, Sangkat Posenchey, Phnom Penh City. It was inauguration on May 30, 2016 and highly presided over by H.E. Ly Chheng, Director-General of BELTEI Group and President of BELTEI International University and Lok Chum Teav. It is a four-storey reinforced concrete building with 82 rooms and basement for parking lot, which was built by BELTEI Construction Company of BELTEI Group, and it belongs to BELTEI.'
                ,'It is located at the National Road No 5, Sangkat Svay Pak, Khan Russey Keo,  Phnom Penh City. It was inauguration on May 02, 2017 and highly presided over by H.E. Ly Chheng, Director-General of BELTEI Group and President of BELTEI International University and Lok Chum Teav.'
                ,'It is located at the National Road No 1, Preak Cheang Prom Village, Sangkat Veal Sbov, Khan Chbar Ampov,  Phnom Penh City. It is schedule to open in 2017.'
                ,'It is located at the National Road Nº 6A, Sangkat Preak Leab, Khan Chroy Changvar, Phnom Penh City. It was inaugurated on July 25, 2018 and highly presided over by H.E. Dr. LY Chheng, Director-General of BELTEI Group and President of BELTEI International University. It is a eight-storey reinforced concrete building with 70 rooms and a basement for parking.'
                ,'It is located at the National Road Nº 3, Sangkat Chaom Chao 3, Khan Porsenchey, Phnom Penh City. It was inaugurated on March 04, 2019 and highly presided over by H.E. Dr. LY Chheng, a Member of the National Assembly for Phnom Penh Capital City, founder and the Director-General of BELTEI Group and the Chairman of the Biard Directors of BELTEI International University. It is five storey reinforced concrete building with 75 rooms and a basement for parking.'
                ,'It is located at Street Okhna Triheng (2011) kok Kleang Village, sangkat Kok kleang, Khan Sen sok, Phnom Penh. It was inaugurated on September 03, 2020 and highly presided over by H.E. Dr. LY Chheng, a Member of the National Assembly for Phnom Penh Capital City, founder and the Director-General of BELTEI Group and the Chairman of the Biard Directors of BELTEI International University. It is nine storey reinforced concrete building with 115 rooms and a basement for parking.'
                ,'It is located at National Road N2, Krang Svay, sangkat Prek Kompues, Khan Dangkor, Phnom Penh. It was inaugurated on august 30, 2021 and highly presided over by H.E. Dr. LY Chheng, a Member of the National Assembly for Phnom Penh Capital City, founder and the Director-General of BELTEI Group and the Chairman of the Biard Directors of BELTEI International University. It is nine storey reinforced concrete building with 156 rooms and a basement for parking.'
                ,'It is located at Phum Brakar sangkat Prey Sar, Khan Dangkor, Phnom Penh. It was inaugurated on August 29, 2022 and highly presided over by H.E. Dr. LY Chheng, a Member of the National Assembly for Phnom Penh Capital City, Founder and the Director-General of BELTEI Group and the Chairman of the Board of Directors of BELTEI International University. It is nine storey reinforced concrete building with 179 rooms and a basement for parking..'
                ,'It is located at Phum Ta Meak, Khum Prek Ta Meak, Khsach Kandal District, Kandal Province. It was inaugurated on September 05, 2022 and highly presided over by H.E. Dr. Ly Chheng, a Member of the National Assembly for Phnom Penh Capital City, Founder and the Director-General of BELTEI Group and the Chairman of the Board of Directors of BELTEI International University. It is nine storey reinforced concrete building with 173 rooms and a basement for parking.'
                ,'It is located nearby the Beoung Tompun Pumping Station, Street 371, Tnot Chhrum 3 Village, Sangkhat Beoung Tompun, Khan Mean Chhey, Phnom Penh'
                ,
            ];
        }

        var mapArray = [
            '<iframe class="col-12" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15635.756796627726!2d104.9167313!3d11.5562165!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3109513d6bd718c7%3A0x289dc1dbf6affee0!2sBELTEI%20International%20School%20(Campus%201%2C%20Kirirom)!5e0!3m2!1sen!2skh!4v1723029897875!5m2!1sen!2skh" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            '<iframe class="col-12" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15636.582690448166!2d104.9156287!3d11.5414062!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31095156bf1a7bb1%3A0x584be94eaadffd5d!2sBELTEI%20International%20School%20(Campus%202%2C%20Phsar%20Tuol%20Tum%20Poung)!5e0!3m2!1sen!2skh!4v1723029956330!5m2!1sen!2skh" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            '<iframe class="col-12" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d125078.08696352113!2d104.83552522107871!3d11.57405103374377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3109516d09637a03%3A0x5b5ce63720727e8c!2sBELTEI%20International%20School%20(Campus%203%2C%20DN)!5e0!3m2!1sen!2skh!4v1723030028051!5m2!1sen!2skh" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            '<iframe class="col-12" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3909.2509654274836!2d104.91487877476195!3d11.533846344767191!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310950dd161d4555%3A0x9e249e0c85fe856e!2sBELTEI%20International%20School%20(Campus%204%2C%20Phsar%20Doeum%20Thkov)!5e0!3m2!1sen!2skh!4v1723030052754!5m2!1sen!2skh" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            '<iframe class="col-12" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3909.2862866183127!2d104.9364933747619!3d11.53130924481702!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3109572d5581ba6d%3A0x31ffefcb8d2ddc25!2sBELTEI%20International%20School%20(Campus%205%2C%20Chbar%20Ampeou)!5e0!3m2!1sen!2skh!4v1723030072634!5m2!1sen!2skh" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            '<iframe class="col-12" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31272.666726609466!2d104.90266069106544!3d11.545879221352456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3109513e82f69349%3A0x49701f8da1c6cd61!2sBELTEI%20International%20School%20(Campus%206%2C%20Orussey)!5e0!3m2!1sen!2skh!4v1723030098442!5m2!1sen!2skh" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            '<iframe class="col-12" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15635.43275214664!2d104.87247658715823!3d11.562022300000017!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31095190c6929de5%3A0xe608122517f8daa6!2sBELTEI%20International%20School%20(Campus%207%2C%20Preah%20Kosomak%20Hospital)!5e0!3m2!1sen!2skh!4v1723030131401!5m2!1sen!2skh" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            '<iframe class="col-12" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3908.84624124077!2d104.85531147476237!3d11.562878244196067!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310951b9b0c4f0b3%3A0x14e6e99e9f83115c!2sBELTEI%20International%20School%20(Campus%208%2C%20Phsar%20Pochentong)!5e0!3m2!1sen!2skh!4v1723030147930!5m2!1sen!2skh" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            '<iframe class="col-12" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3909.2438002951985!2d104.88313647476191!3d11.534360944757035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310951cd8116c74f%3A0xca8874a3f0d6a735!2sBELTEI%20International%20School%20(Campus%209%2C%20Steung%20Meanchey)!5e0!3m2!1sen!2skh!4v1723030166010!5m2!1sen!2skh" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            '<iframe class="col-12" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3908.9341583170763!2d104.90487747476223!3d11.556577844320145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310951f0c7c14233%3A0xb5c626a3d0626006!2sBELTEI%20International%20School%20(Campus%2010%2C%20Angteuk%20Olympic)!5e0!3m2!1sen!2skh!4v1723030184306!5m2!1sen!2skh" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',


            '<iframe class="col-12" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3908.4424822051687!2d104.9156377747626!3d11.591769443626328!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310953a17fafc1d5%3A0xd51624d38ba41c84!2sBELTEI%20International%20School%20(Campus%2011%2C%20Phsar%20Toch)!5e0!3m2!1sen!2skh!4v1723030201545!5m2!1sen!2skh" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            '<iframe class="col-12" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3908.802075098849!2d104.86814457476234!3d11.566042044133752!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3109516722253d91%3A0x47c67c2e42ea9844!2sBELTEI%20International%20School%20(Campus%2012%2C%20Phsar%20Deihoy)!5e0!3m2!1sen!2skh!4v1723030215817!5m2!1sen!2skh" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            '<iframe class="col-12" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3908.466580872299!2d104.89438087476266!3d11.59004704366038!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31095333a8f519cd%3A0x1d6ea8c1607c37c8!2sBELTEI%20International%20School%20(Campus%2013%2C%20Camko%20City%20Roundabout)!5e0!3m2!1sen!2skh!4v1723030233025!5m2!1sen!2skh" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            '<iframe class="col-12" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3910.0524773742645!2d104.93885237476127!3d11.476138045898454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31095915caa0d823%3A0x20b8b1def2851e32!2sBELTEI%20International%20School%20(Campus%2014%2C%20Takhmao%20Town)!5e0!3m2!1sen!2skh!4v1723030245681!5m2!1sen!2skh" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            '<iframe class="col-12" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62548.428993355934!2d104.83606359309154!3d11.531989848919277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31094fdc3162a027%3A0xbca3e0cb793b590c!2sBELTEI%20International%20School%20(Campus%2015%2C%20Phsar%20Chumpou%20Vorn)!5e0!3m2!1sen!2skh!4v1723030270538!5m2!1sen!2skh" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            '<iframe class="col-12" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62548.31239787309!2d104.73924104863279!3d11.532513300000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31094fd4c9bf8a59%3A0x3eb43a4cd3a9cd0b!2sBELTEI%20International%20School%20(Campus%2016%2C%20Plov%20Koang%20Veng%20Sreng)!5e0!3m2!1sen!2skh!4v1723030288297!5m2!1sen!2skh" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            '<iframe class="col-12" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3907.735395705685!2d104.87529447476324!3d11.642195042628853!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310952f0fece2c85%3A0xae1b7c6363469899!2sBELTEI%20International%20School%20(Campus%2017%2C%20Russey%20Keo%20Kilometer%2010)!5e0!3m2!1sen!2skh!4v1723030302393!5m2!1sen!2skh" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            '<iframe class="col-12" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3909.269307063256!2d104.97934117476187!3d11.532528944793045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31095706f06f3df1%3A0xde18a8adbae8dd26!2sBELTEI%20International%20School%20(Campus%2018%2C%20Phsar%20Prek%20Eng)!5e0!3m2!1sen!2skh!4v1723030409370!5m2!1sen!2skh" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            '<iframe class="col-12" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3907.921402508043!2d104.92132877476314!3d11.62895094289127!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3109534b8869c139%3A0x5e2089f2c4e611d7!2sBELTEI%20International%20School%20(Campus%2019%2C%20Phsar%20Prek%20Leab)!5e0!3m2!1sen!2skh!4v1723030340665!5m2!1sen!2skh" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            '<iframe class="col-12" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3909.3815770085457!2d104.82024077476183!3d11.524461844951512!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31094f35d222fe21%3A0x7ca4369284c04059!2sBELTEI%20International%20School%20(Campus%2020%2C%20Chaom%20Chao)!5e0!3m2!1sen!2skh!4v1723030440921!5m2!1sen!2skh" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',

            '<iframe class="col-12" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62539.5281463355!2d104.77758765220644!3d11.571882701390452!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310951cc2cec4c65%3A0xf7e82b32b3332910!2z4Z6f4Z624Z6b4Z624Z6U4Z-K4Z-C4Z6b4Z6S4Z644Z6i4Z6T4Z-S4Z6P4Z6a4Z6H4Z624Z6P4Z63IOGekeGeuOGfouGfoSAo4Z6f4Z624Z6B4Z624Z6V4Z-S4Z6f4Z624Z6a4Z6I4Z684Z6A4Z6Y4Z624Z6fKQ!5e0!3m2!1sen!2skh!4v1723030683049!5m2!1sen!2skh" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            '<iframe class="col-12" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d125135.78518602252!2d104.81311086190878!3d11.444277700000029!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31095b8ad4dac721%3A0xc1ffb87b4d1f2b9b!2sBELTEI%20International%20School%20(Campus%2022%2C%20Kour%20Srov%20Roundabout)!5e0!3m2!1sen!2skh!4v1723030728425!5m2!1sen!2skh" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            '<iframe class="col-12" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62548.476180120604!2d104.88754369309086!3d11.531777999033114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31095bb1de804163%3A0x44415340ee867df8!2sBELTEI%20International%20School%2C%20Campus%2023!5e0!3m2!1sen!2skh!4v1723030750489!5m2!1sen!2skh" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            '',
            '<iframe class="col-12" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3909.4229508297476!2d104.9018359747618!3d11.521487545009899!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310951c3c1c0f83d%3A0x80c52e5867169785!2sBELTEI%20International%20School%2C%20Campus%2025!5e0!3m2!1sen!2skh!4v1723030962648!5m2!1sen!2skh" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            '<iframe class="col-12" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3909.6366141830326!2d104.94243567476161!3d11.506115545311408!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3109572ffb7fec01%3A0xc15c0e7daa89743!2sBELTEI%20International%20School%2C%20Campus%2026!5e0!3m2!1sen!2skh!4v1723030979377!5m2!1sen!2skh" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            '<iframe class="col-12" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d125043.4212738375!2d104.70417329726561!3d11.651334500000011!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310953679e8f0d7b%3A0x8537308479428348!2sBELTEI%20International%20School%2C%20Campus%2027!5e0!3m2!1sen!2skh!4v1723030997898!5m2!1sen!2skh" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            '<iframe class="col-12" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3909.0786991779887!2d104.85804137476212!3d11.546212244524062!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31095160c218811b%3A0xa2079455f28f87da!2sBELTEI%20International%20School%2C%20Campus%2028!5e0!3m2!1sen!2skh!4v1723031010248!5m2!1sen!2skh" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            '<iframe class="col-12" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3909.4541825244087!2d104.85217657476183!3d11.519241845053992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310951b387d85e35%3A0xb90241fb295e5441!2sBELTEI%20International%20School%2C%20Campus%2029!5e0!3m2!1sen!2skh!4v1723031023776!5m2!1sen!2skh" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            '<iframe class="col-12" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62522.81674690449!2d104.8201739486328!3d11.646417700000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3109530028d1bcd9%3A0x453e7f9ac698172d!2sBELTEI%20International%20School%2C%20Campus%2030!5e0!3m2!1sen!2skh!4v1723031040194!5m2!1sen!2skh" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
        ]

        try {
            if(id){
                var BCampus = document.getElementById('BCampus');
                var img = document.getElementById('img');
                var description = document.getElementById('description');

                document.getElementById('map').innerHTML = mapArray[id-1];

                BCampus.innerHTML = ` ${id} ( ${campusNameArr[id-1]} )`;
                img.src = `{{ asset('asset/img/school/campus/school-B${id}.jpg') }}`;
                description.innerHTML = descriptionArray[id-1]
            }
        } catch (error) {
            
        }
        
    </script>
@endsection
