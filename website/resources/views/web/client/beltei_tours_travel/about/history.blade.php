@extends('web.client.beltei_tours_travel.layout.app')


@section('content')
    <div class="text-start p-3">

        <h2 class="title-translate-font text-center my-3 underline">{{ __('beltei_tours_travel/about/history.header') }}</h2>





        <div id="campusDetail" class="content-translate-font text-justify">
            {!! __('beltei_tours_travel/about/history.description') !!}
        </div>




    </div>

    <script>
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
        }

        if (lang == "kh") {
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

            ]
        } else {
            var descriptionArray = [
                'BELTEI Kirirom is located at 77, Street 125, Sangkat Veal Vong, Khan 7 Makara, Phnom Penh and was officially opened on January 01, 2002 and presided over by Mr. Oum Hoeung, Director of Phnom Penh Municipal Department of Education, Youth and Sport. It is a five-story building with 41 rooms and it belongs to BELTEI, which was built by BELTEI Construction Company of BELTEI Group, and it belongs to BELTEI.',
                'It is located at 34, Street 431, Sangkat Tuol Tumpoung 1, Khan Chamkamon, Phnom Penh. It is a reinforced concrete and seven-story building with convenient parking lots in the basement and has more than 50 rooms and it belongs to BELTEI and it is scheduled to open on May 02, 2011, which was built by BELTEI Construction Company of BELTEI Group, and it belongs to BELTEI.',
                'It is located at Nº 10A, Street 118, Sangkat Phsar Depo 3, Khan Tuol Kork, Phnom Penh City. It was inauguration on October 30, 2014, and highly presided over by H.E. Ly Chheng, Director-General of BELTEI Group and President of BELTEI International University and Lok Chum Teav. It is the transformation of the former BELTEI Campus 3 (DN) into the new one (It’s been operated since April 20, 2005) due to the end of the contract. It is seven-storey reinforced concrete building with 60 rooms and basement and ground floor for parking lot, which was built by BELTEI Construction Company of BELTEI Group, and it belongs to BELTEI.',
                'It is located at 54, Street 488, Sangkat Phsar Deum Thkov, Khan Chamka Mon, Phnom Penh. It was opened on August 03, 2006 and highly presided over by His Excellency Kep Chutema, Phnom Penh Municipal Governor. It is a reinforced concrete and six-story building with 45 rooms and it belongs to BELTEI, which was built by BELTEI Construction Company of BELTEI Group, and it belongs to BELTEI.',
                'It is situated at 36, National Road 1, Sangkat Chba Ampov I, Khan Chba Ampov, Phnom Penh. It was inaugurated on August 02, 2007 and presided over by His Excellency Mob Sarin, Deputy Phnom Penh Municipal Governor. It is a reinforced concrete and six-story building with convenient parking lots in the basement and has 55 rooms and it belongs to BELTEI, which was built by BELTEI Construction Company of BELTEI Group, and it belongs to BELTEI.',
                'Head Office, is located at 25, Street 105, Sangkat Beung Prolit, Khan 7 Makara, Phnom Penh. It was opened on June 03, 2008 and highly presided over by His Excellency Kep Chutema, Phnom Penh Municipal Governor. It is a reinforced concrete and seven-story building with 63 rooms and it belongs to BELTEI, which was built by BELTEI Construction Company of BELTEI Group, and it belongs to BELTEI.',
                'It is located at 96, Corner of Street 160 and 265, Sangkat Teuk Laak II, Khan Tuol Kork, Phnom Penh. It was opened on October 13, 2008 and highly presided over by H.E. Ly Chheng, Advisor to the Council of Ministers, Director-General of BELTEI Group Co., Ltd and Director of BELTEI International Institute. It is a reinforced concrete and seven-story building with convenient parking lots in the basement and has 65 rooms and it belongs to BELTEI.',
                'It is located at 123, Russian Federation Blvd, Sangkat Kakab, Khan Dangkor, Phnom Penh. It was opened on May 18, 2009 and highly presided over by H.E. Ly Chheng, Advisor to the Council of Ministers, Director-General of BELTEI Group Co.,Ltd and Director of BELTEI International Institute. It is a reinforced concrete and four-story building with 50 rooms and it belongs to BELTEI, which was built by BELTEI Construction Company of BELTEI Group, and it belongs to BELTEI.',
                'It is located at 3032, Corner of Veng Sreng Street and 217 Sangkat Stung Meanchey, Khan Meanchey, Phnom Penh. It was opened on March 11, 2010 and highly presided over by H.E. Ly Chheng, Advisor to the Council of Ministers, Director-General of BELTEI Group Co., Ltd and Director of BELTEI International Institute. It is a reinforced concrete and seven-story building with convenient parking lots in the basement and has 135 rooms and it belongs to BELTEI, which was built by BELTEI Construction Company of BELTEI Group, and it belongs to BELTEI.',
                'It is located at 57, Corner of Street 217 and 290, Sangkat Tuol Svay Prey II, Khan Chamcarmon, Phnom Penh. It was opened on September 13, 2010, and highly presided over by H.E. Ly Chheng, Advisor to the Council of Ministers and Director-General of BELTEI Group Co., Ltd. It is a reinforced concrete and seven-story building with convenient parking lots in the basement and has 55 rooms and it belongs to BELTEI, which was built by BELTEI Construction Company of BELTEI Group, and it belongs to BELTEI.',
                'It is located at #1796 National Road 5,Phsa Toch Village, Sangkat Tuol Sangke,Khan Russey Keo, Phnom Penh. It was opened on September 1, 2011 and highly presided over by H.E. Ly Chheng, Advisor to the Council of Ministers and Director-General of BELTEI Group Co., Ltd. It is a reinforced concrete and seven-story building with convenient parking lots in the basement and has 55 rooms, which is being built by BELTEI Construction Company of BELTEI Group and belogs to BELTEI.',
                'It is located at the building Nº 2258, Hanoi Street (1019), Sangkat Teuk Thla, Khan Sen Sok, Phnom Penh city. It was opened on July 18, 2013 and highly presided over by H.E. Ly Chheng, Advisor to the Council of Ministers and Director-General of BELTEI Group Co., Ltd. It is a reinforced concrete and seven-story building with convenient parking lots in the basement and has 81 rooms, which is being built by BELTEI Construction Company of BELTEI Group and belogs to BELTEI.',
                'It is located at the building Nº 163, Corner of Street 528 and 353, Sangkat Boeung Kak 1, Khan Tuol Kork, Phnom Penh city. It was opened on December 02, 2013 and highly presided over by H.E. LY Chheng, Director-General of BELTEI Group and Lok Chumteav. It is a reinforced concrete with seven-storey building with 60 rooms and a basement for parking, which was built by BELTEI Construction Company of BELTEI Group, and it belongs to BELTEI.',
                'BELTEI International School Campus 14 (Takhmao Town), which is located at Building Nº 786A, National Road number 2, Sangkat Preak Reosey, Takhmao City, Kandal Province. The event was presided over by H.E. LY Chheng, Director-General of BELTEI Group and Lok Chumteav. The BELTEI International School Campus 14 building consists of 7 floors including a basement for parking; 70 classrooms; terrace for exercise; and a canteen., which was built by BELTEI Construction Company of BELTEI Group, and it belongs to BELTEI.',
                'BELTEI International School Campus 15 (Phsar Chompovorn), which is located at Building Nº 119A, National Road number 4, Chumpou Vorn Village, Sangkat Chaom Chao, Khan Posenchey, Phnom Penh Capital City. The BELTEI International Institute Campus 15 building consists of 04 floors including a basement for parking; 67 classrooms; terrace for exercise; and a canteen , which was built by BELTEI Construction Company of BELTEI Group, and it belongs to BELTEI.',
                'It is located at Nº 77A Veng Sreng Street, Chrey Koang Village, Sangkat Posenchey, Phnom Penh City. It was inauguration on May 30, 2016 and highly presided over by H.E. Ly Chheng, Director-General of BELTEI Group and President of BELTEI International University and Lok Chum Teav. It is a four-storey reinforced concrete building with 82 rooms and basement for parking lot, which was built by BELTEI Construction Company of BELTEI Group, and it belongs to BELTEI.',
                'It is located at the National Road No 5, Sangkat Svay Pak, Khan Russey Keo,  Phnom Penh City. It was inauguration on May 02, 2017 and highly presided over by H.E. Ly Chheng, Director-General of BELTEI Group and President of BELTEI International University and Lok Chum Teav.',
                'It is located at the National Road No 1, Preak Cheang Prom Village, Sangkat Veal Sbov, Khan Chbar Ampov,  Phnom Penh City. It is schedule to open in 2017.',
                'It is located at the National Road Nº 6A, Sangkat Preak Leab, Khan Chroy Changvar, Phnom Penh City. It was inaugurated on July 25, 2018 and highly presided over by H.E. Dr. LY Chheng, Director-General of BELTEI Group and President of BELTEI International University. It is a eight-storey reinforced concrete building with 70 rooms and a basement for parking.',
                'It is located at the National Road Nº 3, Sangkat Chaom Chao 3, Khan Porsenchey, Phnom Penh City. It was inaugurated on March 04, 2019 and highly presided over by H.E. Dr. LY Chheng, a Member of the National Assembly for Phnom Penh Capital City, founder and the Director-General of BELTEI Group and the Chairman of the Biard Directors of BELTEI International University. It is five storey reinforced concrete building with 75 rooms and a basement for parking.',
                'It is located at Street Okhna Triheng (2011) kok Kleang Village, sangkat Kok kleang, Khan Sen sok, Phnom Penh. It was inaugurated on September 03, 2020 and highly presided over by H.E. Dr. LY Chheng, a Member of the National Assembly for Phnom Penh Capital City, founder and the Director-General of BELTEI Group and the Chairman of the Biard Directors of BELTEI International University. It is nine storey reinforced concrete building with 115 rooms and a basement for parking.',
                'It is located at National Road N2, Krang Svay, sangkat Prek Kompues, Khan Dangkor, Phnom Penh. It was inaugurated on august 30, 2021 and highly presided over by H.E. Dr. LY Chheng, a Member of the National Assembly for Phnom Penh Capital City, founder and the Director-General of BELTEI Group and the Chairman of the Biard Directors of BELTEI International University. It is nine storey reinforced concrete building with 156 rooms and a basement for parking.',
                'It is located at Phum Brakar sangkat Prey Sar, Khan Dangkor, Phnom Penh. It was inaugurated on August 29, 2022 and highly presided over by H.E. Dr. LY Chheng, a Member of the National Assembly for Phnom Penh Capital City, Founder and the Director-General of BELTEI Group and the Chairman of the Board of Directors of BELTEI International University. It is nine storey reinforced concrete building with 179 rooms and a basement for parking..',
                'It is located at Phum Ta Meak, Khum Prek Ta Meak, Khsach Kandal District, Kandal Province. It was inaugurated on September 05, 2022 and highly presided over by H.E. Dr. Ly Chheng, a Member of the National Assembly for Phnom Penh Capital City, Founder and the Director-General of BELTEI Group and the Chairman of the Board of Directors of BELTEI International University. It is nine storey reinforced concrete building with 173 rooms and a basement for parking.',
                'It is located nearby the Beoung Tompun Pumping Station, Street 371, Tnot Chhrum 3 Village, Sangkhat Beoung Tompun, Khan Mean Chhey, Phnom Penh',
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
    </script>
@endsection
