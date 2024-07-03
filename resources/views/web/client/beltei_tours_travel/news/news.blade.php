@extends('web.client.beltei_tours_travel.layout.app')

@section('content')
<div>
    <div class="text-start p-3  position-relative" id="newsContainer">
        <h4 class="title-translate-font mb-3" id="newsHeader">

        </h4>

        <div class=" w-100 h-100">
            <div class="float-start w-50 content-translate-font" >
                <p id="newsDescription">

                </p>
            </div>
            <div id="imgContainer">

            </div>
        </div>

    </div>
</div>

    <div>
        @include('web.client.beltei_tours_travel.layout.share.news')
    </div>


    <script>
        const myKeysValues = window.location.search;
        const urlParams = new URLSearchParams(myKeysValues);
        const id = urlParams.get("id");
        var lang = document.documentElement.getAttribute("lang");

        var newsContainer = document.getElementById('newsContainer');
        var newsHeader = document.getElementById('newsHeader');
        var newsDescription = document.getElementById('newsDescription');
        var imgContainer = document.getElementById('imgContainer');


        if (lang == "kh") {
            var newsArray = [
                [
                    'សា​លា​ ប៊ែល​ធី​ អន្តរ​ជាតិ​ បាន​ប្រារព្ធ​ពិធី​ប្រគល់​សញ្ញា​បត្រ​មធ្យម​សិក្សា​ទុតិយ​ភូមិ​ប៊ែល​ធី​ជូន​ដល់​សិស្ស​ជ័យ​លា​ភី​ថ្នាក់​ទី​១២​ ជំ​នាន់​ទី​១៨​ ចំ​នួន​ ១ ០៧៣​នាក់​ (​ក្រុម​ទី​១​)',
                    'សា​លា​ ប៊ែល​ធី​ អន្តរ​ជាតិ​ បាន​ប្រារព្ធ​ពិធី​ប្រគល់​សញ្ញា​បត្រ​មធ្យម​សិក្សា​ទុតិយ​ភូមិ​ប៊ែល​ធី​ (​BELTEI​Senior​ High​ School​ Diploma​)​ ជូន​ដល់​សិស្ស​ជ័យ​លា​ភី​ថ្នាក់​ទី​១២​ ជំ​នាន់​ទី​១៨​ ចំ​នួន​ ១ ០៧៣​នាក់​(​ក្រុម​ទី​១​)​ ដែល​បាន​ប្រឡង​ជាប់​សញ្ញា​បត្រ​មធ្យម​សិក្សា​ទុតិ​យ​ភូមិ​ (​បាក់​ឌុប​)​ មក​ពី​សា​ខា​ទី​១​ដល់​សា​ខា​ទី​១០​ ក្រោម​អធិប​តី​ភាព​ដ៏​ខ្ពង់​ខ្ពស់​របស់​ ឯក​ឧត្តម​បណ្ឌិត​ លី​ ឆេង​តំណាង​រាស្រ្ត​មណ្ឌល​រាជ​ធានី​ភ្នំពេញ​ ស្ថាប​និក​ និង​ជា​អគ្គ​នា​យក​ ប៊ែល​ធី​ គ្រុប​ ព្រម​ទាំង​លោក​ជំ​ទាវ​។​ពិ​ធី​នេះ​បាន​ប្រព្រឹត្ត​ទៅ​ នា​ព្រឹក​ថ្ងៃ​សៅរ៍​ ១​រោច​ ខែ​បុស្ស​ ឆ្នាំ​ថោះ​ បញ្ចស័ក​ ព.ស.​២៥៦៧​ត្រូវ​នឹង​ថ្ងៃ​ទី​២៧​ ខែ​មករា​ ឆ្នាំ​២០២៤​ នៅ​សាល​សន្និ​សីទ​ នៃ​សាកល​វិទ្យា​ល័យ​ ប៊ែលធី​អន្តរ​ជាតិ​ទី​តាំង​ទី​២​ (​ស្ពាន​អាកាស​ចោម​ចៅ​)​។​ក្នុង​ឱ​កាស​នោះ​ផង​ដែរ​ ​ឯក​ឧត្តម​បណ្ឌិត​ ​លី​ ​ឆេង​ ​បាន​ថ្លែង​កោត​សរ​សើរ​ចំ​ពោះ​ក្មួយៗ​ ​ដែល​បាន​ខិត​ខំ​​យក​ចិត្ត​ទុក​ដាក់​ប្រឹង​ប្រែង​សិក្សា​រៀន​សូត្រ​ ​និង​ស្តាប់​គ្រូ​ពន្យល់​​ក៏​ដូច​ជា​គោ​រព​បទ​បញ្ជា​ផ្ទៃ​ក្នុង​ ​មាន​វិ​ន័យ​ ​សីល​ធម៌​ ​និង​ ​គុណ​ធម៌​ល្អ​មិន​បង្ក​ផល​លំ​បាក​ដល់​គ្រួ​សារ​ ​និង​សង្គម​ជាតិ​ រហូត​ទទួល​បាន​ជោគ​ជ័យ​​​និង​ទទួល​​បាន​សញ្ញា​បត្រ​មធ្យមសិក្សាទុតិយភូមិ ​នា​ពេល​នេះ​។​ ​ឯក​ឧត្តម​បណ្ឌិត​ ​ក៏​បាន​ផ្តាំ​ផ្ញើ​​ដល់​ក្មួយៗ​ ទាំង​អស់ឱ្យខិត​ខំ​យក​ចិត្ត​ទុក​ដាក់​ ​លើ​ការ​រៀន​សូត្រ​បន្ថែម​ទៀត​ដើ​ម្បី​អ​ភិ​វឌ្ឍ​សមត្ថ​ភាព​ផ្ទាល់​ខ្លួន​ ​ក្នុង​ចាប់​យក​ ​អា​ជីព​ខ្លួន​ឯង​ទៅ​ថ្ងៃ​អនា​គត​​និង​ប្រ​កួត​ប្រ​ជែង​ដណ្តើម​ទី​ផ្សារ​ការ​ងារ​ ​ជា​មួយ​បណ្តា​យុវ​ជន​ទាំង​អស់​ ​ទាំង​ក្នុង​តំបន់​អា​ស៊ាន​និង​ពិ​ភព​លោក​​ជា​ពិ​សេស​ដើរ​ឱ្យ​ទាន់​នូវ​ការ​រីក​ចម្រើន​ផ្នែក​បច្ចេក​វិទ្យា​សម័យ​បដិវត្ត​ឧស្សាហ​កម្ម​៤.០​។​ជា​ទី​បញ្ចប់​ ​ឯក​ឧត្តម​បណ្ឌិត​ ​លី​ ​ឆេង​ ​និង​ ​លោក​ជំ​ទាវ​ ​បាន​ចូល​រួម​អប​អរ​សា​ទរ​​និង​ប្រ​គល់​សញ្ញា​បត្រ​ដល់​សិស្ស​ជ័យ​លា​ភី​ទាំង​ ១ ០៧៣​នាក់​ ​នា​ពេល​នោះ​ផង​ដែរ​។',
                    10
                ],

                [
                    'សា​លា​ ប៊ែល​ធី​ អន្តរ​ជាតិ​ បាន​ប្រារព្ធ​ពិធី​ប្រគល់ ​សញ្ញា​បត្រ​មធ្យម​សិក្សា​បឋម​ភូមិ​ប៊ែលធីជូនន​ដល់​សិស្ស​ជ័យ​លា​ភី​ថ្នាក់​ទី​៩​ ជំ​នាន់​ទី​១៨​ ចំ​នួន​ ១​ ០៤១​នាក់​ (​ក្រុម​ទី​៣​)',
                    'សា​លា​ ប៊ែល​ធី​ អន្តរ​ជាតិ​ បាន​ប្រារព្ធ​ពិធី​ប្រគល់​សញ្ញា​បត្រ​មធ្យម​សិក្សា​បឋម​ភូមិ​ប៊ែលធី​ (BELTEI Junior High School Diploma) ​ជូន​ដល់​សិស្ស​ជ័យ​លាភី​ថ្នាក់​ទី​៩​ ជំ​នាន់​ទី​១៨​ ចំ​នួន​ ១ ០៤១​នាក់​ (​ក្រុម​ទី​៣​)​ ដែល​បា​នប្រ​ឡង​ជាប់​សញ្ញា​បត្រ​មធ្យម​សិក្សា​បឋម​ភូមិ​ (​ឌី​ប្លូម​)​ មក​ពី​សា​ខា​ទី​១៥​ ដល់​សា​ខា​ទី​២២​ ក្រោម​អធិបតី​ភាព​ដ៏​ខ្ពង់​ខ្ពស់​របស់​ ឯក​ឧត្តម​បណ្ឌិត​ លី​ ឆេង​ តំ​ណាង​រាស្រ្ត​មណ្ឌល​រាជ​ធានី​ភ្នំពេញ​ ស្ថាប​និក​ និង​ជា​អគ្គ​នាយក​ ប៊ែល​ធី​ គ្រុប​ ព្រម​ទាំង​លោក​ជំទាវ​។​ ពិធី​នេះ​បាន​ប្រព្រឹត្ត​ទៅ​ នា​ព្រឹក​ថ្ងៃ​សៅរ៍​ ៣​កើត​ ខែ​បុស្ស​ ឆ្នាំ​ថោះ​ បញ្ចស័ក​ ព.ស.​២៥៦៧​ ត្រូវ​នឹង​ថ្ងៃ​ទី​១៣​ ខែ​មករា​ ឆ្នាំ​២០២៤​ នៅ​សាល​សន្និ​សីទ​ នៃ​សាកល​វិទ្យា​ល័យ​ ប៊ែល​ធី​ អន្តរ​ជាតិ​ទី​តាំង​ទី​២​ (​ស្ពាន​អាកាស​ចោម​ចៅ​)​។​ក្នុង​ឱ​កាស​នោះ​ផង​ដែរ​ ​ឯក​ឧត្តម​បណ្ឌិត​ ​លី​ ​ឆេង​ ​បាន​ថ្លែង​កោត​សរ​សើរ​ចំ​ពោះ​ក្មួយៗ​ ​ដែល​បាន​ខិត​ខំ​ ​យក​ចិត្ត​ទុក​ដាក់​ប្រឹង​ប្រែង​សិក្សា​រៀន​សូត្រ​ ​និង​ស្តាប់​គ្រូ​ពន្យល់​ ​ក៏​ដូច​ជា​គោ​រព​បទ​បញ្ជា​ផ្ទៃ​ក្នុង​ ​មាន​វិ​ន័យ​ ​សីល​ធម៌​ ​និង​ ​គុណ​ធម៌​ល្អ​ មិន​បង្ក​ផល​លំ​បាក​ដល់​គ្រួ​សារ​ ​និង​សង្គម​ជាតិ​ រហូត​ទទួល​បាន​ជោគ​ជ័យ​​ ​និង​ទទួល​​បាន​សញ្ញា​បត្រ​មធ្យមសិក្សាបឋមភូមិ ​នា​ពេល​នេះ​។​ ​ឯក​ឧត្តម​បណ្ឌិត​ ​ក៏​បាន​ផ្តាំ​ផ្ញើ​ ​ដល់​ក្មួយៗ​ ទាំង​អស់ឱ្យខិត​ខំ​យក​ចិត្ត​ទុក​ដាក់​ ​លើ​ការ​រៀន​សូត្រ​បន្ថែម​ទៀត​ ដើ​ម្បី​អ​ភិ​វឌ្ឍ​សមត្ថ​ភាព​ផ្ទាល់​ខ្លួន​ ​ក្នុង​ចាប់​យក​ ​អា​ជីព​ខ្លួន​ឯង​ទៅ​ថ្ងៃ​អនា​គត​ ​និង​ប្រ​កួត​ប្រ​ជែង​ដណ្តើម​ទី​ផ្សារ​ការ​ងារ​ ​ជា​មួយ​បណ្តា​យុវ​ជន​ទាំង​អស់​ ​ទាំង​ក្នុង​តំបន់​អា​ស៊ាន​ និង​ពិ​ភព​លោក​ ​ជា​ពិ​សេស​ដើរ​ឱ្យ​ទាន់​នូវ​ការ​រីក​ចម្រើន​ផ្នែក​បច្ចេក​វិទ្យា​សម័យ​បដិវត្ត​ឧស្សាហ​កម្ម​៤.០​។​ជា​ទី​បញ្ចប់​ ​ឯក​ឧត្តម​បណ្ឌិត​ ​លី​ ​ឆេង​ ​និង​ ​លោក​ជំ​ទាវ​ ​បាន​ចូល​រួម​អប​អរ​សា​ទរ​ ​និង​ប្រ​គល់​សញ្ញា​បត្រ​ដល់​សិស្ស​ជ័យ​លា​ភី​ទាំង​ ១ ០៤១​នាក់​ ​នា​ពេល​នោះ​ផង​ដែរ​។',
                    10
                ],
                [
                    'សា​លា​ ប៊ែល​ធី​ អន្តរ​ជាតិ​ បាន​ប្រារព្ធ​ពិធី​ប្រគល់សញ្ញា​បត្រ​មធ្យម​សិក្សា​បឋម​ភូមិ​ប៊ែលធីជូនន​ដល់​សិស្ស​ជ័យ​លា​ភី​ថ្នាក់​ទី​៩​ ជំ​នាន់​ទី​១៨​ ចំ​នួន​ ១​ ០១៤​នាក់​ (​ក្រុម​ទី​២​)',
                    'សា​លា​ ប៊ែល​ធី​ អន្តរ​ជាតិ​ បាន​ប្រារព្ធ​ពិធី​ប្រគល់​សញ្ញា​បត្រ​មធ្យម​សិក្សា​បឋម​ភូមិ​ប៊ែល​ធី​ ​(BELTEI​ Junior​ High​ School​ Diploma​)​ ជូន​ដល់​សិស្ស​ជ័យ​លា​ភី​ថ្នាក់​ទី៩​ ជំនាន់​ទី​១៨​ ចំនួន​ ១ ០១១​នាក់​ (​ក្រុមទី២​)​ ដែល​បាន​ប្រឡង​ជាប់​សញ្ញា​បត្រ​មធ្យម​សិក្សា​បឋម​ភូមិ​ (​ឌីប្លូម​)​ មក​ពី​សាខា​ទី​៩​ ដល់​សាខា​ទី​១៤​ ក្រោម​អធិប​តី​ភាព​ដ៏​ខ្ពង់​ខ្ពស់​របស់​ ឯក​ឧត្តម​បណ្ឌិត​ លី​ ឆេង​ តំណាង​រាស្រ្ត​មណ្ឌល​រាជ​ធានី​ភ្នំពេញ​ ស្ថាប​និក​ និង​ជា​អគ្គ​នាយក​ ប៊ែល​ធី​ គ្រុប​ ព្រម​ទាំង​លោក​ជំទាវ​។​ ពិធី​នេះ​បាន​ប្រព្រឹត្ត​ទៅ​ នា​ព្រឹក​ថ្ងៃ​សៅរ៍​ ៣​រោច​ ខែ​មិគសិរ​ ឆ្នាំ​ថោះ​ បញ្ច​ស័ក​ ព.ស.​២៥៦៧​ ត្រូវ​នឹង​ថ្ងៃ​ទី​៣០​ ខែ​ធ្នូ​ ឆ្នាំ​២០២៣​ នៅ​សាល​សន្និ​សីទ​ នៃ​សាកល​វិទ្យា​ល័យ​ ប៊ែលធី​ អន្តរ​ជាតិ​ទី​តាំង​ទី២​ (​ស្ពាន​អាកាស​ចោម​ចៅ​)​។​​ក្នុង​ឱ​កាស​នោះ​ផង​ដែរ​ ​ឯក​ឧត្តម​បណ្ឌិត​ ​លី​ ​ឆេង​ ​បាន​ថ្លែង​កោត​សរ​សើរ​ចំ​ពោះ​ក្មួយៗ​ ​ដែល​បាន​ខិត​ខំ​ ​យក​ចិត្ត​ទុក​ដាក់​ប្រឹង​ប្រែង​សិក្សា​រៀន​សូត្រ​ ​និង​ស្តាប់​គ្រូ​ពន្យល់​ ​ក៏​ដូច​ជា​គោ​រព​បទ​បញ្ជា​ផ្ទៃ​ក្នុង​ ​មាន​វិ​ន័យ​ ​សីល​ធម៌​ ​និង​ ​គុណ​ធម៌​ល្អ​ មិន​បង្ក​ផល​លំ​បាក​ដល់​គ្រួ​សារ​ ​និង​សង្គម​ជាតិ​ រហូត​ទទួល​បាន​ជោគ​ជ័យ​​ ​និង​ទទួល​​បាន​សញ្ញា​បត្រ​មធ្យមសិក្សាបឋមភូមិ ​នា​ពេល​នេះ​។​ ​ឯក​ឧត្តម​បណ្ឌិត​ ​ក៏​បាន​ផ្តាំ​ផ្ញើ​ ​ដល់​ក្មួយៗ​ ទាំង​អស់ឱ្យខិត​ខំ​យក​ចិត្ត​ទុក​ដាក់​ ​លើ​ការ​រៀន​សូត្រ​បន្ថែម​ទៀត​ ដើ​ម្បី​អ​ភិ​វឌ្ឍ​សមត្ថ​ភាព​ផ្ទាល់​ខ្លួន​ ​ក្នុង​ចាប់​យក​ ​អា​ជីព​ខ្លួន​ឯង​ទៅ​ថ្ងៃ​អនា​គត​ ​និង​ប្រ​កួត​ប្រ​ជែង​ដណ្តើម​ទី​ផ្សារ​ការ​ងារ​ ​ជា​មួយ​បណ្តា​យុវ​ជន​ទាំង​អស់​ ​ទាំង​ក្នុង​តំបន់​អា​ស៊ាន​ និង​ពិ​ភព​លោក​ ​ជា​ពិ​សេស​ដើរ​ឱ្យ​ទាន់​នូវ​ការ​រីក​ចម្រើន​ផ្នែក​បច្ចេក​វិទ្យា​សម័យ​បដិវត្ត​ឧស្សាហ​កម្ម​៤.០​។​ជា​ទី​បញ្ចប់​ ​ឯក​ឧត្តម​បណ្ឌិត​ ​លី​ ​ឆេង​ ​និង​ ​លោក​ជំ​ទាវ​ ​បាន​ចូល​រួម​អប​អរ​សា​ទរ​ ​និង​ប្រ​គល់​សញ្ញា​បត្រ​ដល់​សិស្ស​ជ័យ​លា​ភី​ទាំង​ ១ ០១១​នាក់​ ​នា​ពេល​នោះ​ផង​ដែរ​។',
                    10
                ],
                [
                    'សា​លា​ ប៊ែល​ធី​ អន្តរ​ជាតិ​ បាន​ប្រារព្ធ​ពិធី​ប្រគល់សញ្ញា​បត្រ​មធ្យម​សិក្សា​បឋម​ភូមិ​ប៊ែលធីជូនន​ដល់​សិស្ស​ជ័យ​លា​ភី​ថ្នាក់​ទី​៩​ ជំ​នាន់​ទី​១៨​ ចំ​នួន​ ១​ ០១៤​នាក់​ (​ក្រុម​ទី​២​)',
                    'សា​លា​ ប៊ែល​ធី​ អន្តរ​ជាតិ​ បាន​ប្រារព្ធ​ពិធី​ប្រគល់​សញ្ញា​បត្រ​មធ្យម​សិក្សា​បឋម​ភូមិ​ប៊ែល​ធី​ ​(BELTEI​ Junior​ High​ School​ Diploma​)​ ជូន​ដល់​សិស្ស​ជ័យ​លា​ភី​ថ្នាក់​ទី៩​ ជំនាន់​ទី​១៨​ ចំនួន​ ១ ០១១​នាក់​ (​ក្រុមទី២​)​ ដែល​បាន​ប្រឡង​ជាប់​សញ្ញា​បត្រ​មធ្យម​សិក្សា​បឋម​ភូមិ​ (​ឌីប្លូម​)​ មក​ពី​សាខា​ទី​៩​ ដល់​សាខា​ទី​១៤​ ក្រោម​អធិប​តី​ភាព​ដ៏​ខ្ពង់​ខ្ពស់​របស់​ ឯក​ឧត្តម​បណ្ឌិត​ លី​ ឆេង​ តំណាង​រាស្រ្ត​មណ្ឌល​រាជ​ធានី​ភ្នំពេញ​ ស្ថាប​និក​ និង​ជា​អគ្គ​នាយក​ ប៊ែល​ធី​ គ្រុប​ ព្រម​ទាំង​លោក​ជំទាវ​។​ ពិធី​នេះ​បាន​ប្រព្រឹត្ត​ទៅ​ នា​ព្រឹក​ថ្ងៃ​សៅរ៍​ ៣​រោច​ ខែ​មិគសិរ​ ឆ្នាំ​ថោះ​ បញ្ច​ស័ក​ ព.ស.​២៥៦៧​ ត្រូវ​នឹង​ថ្ងៃ​ទី​៣០​ ខែ​ធ្នូ​ ឆ្នាំ​២០២៣​ នៅ​សាល​សន្និ​សីទ​ នៃ​សាកល​វិទ្យា​ល័យ​ ប៊ែលធី​ អន្តរ​ជាតិ​ទី​តាំង​ទី២​ (​ស្ពាន​អាកាស​ចោម​ចៅ​)​។​​ក្នុង​ឱ​កាស​នោះ​ផង​ដែរ​ ​ឯក​ឧត្តម​បណ្ឌិត​ ​លី​ ​ឆេង​ ​បាន​ថ្លែង​កោត​សរ​សើរ​ចំ​ពោះ​ក្មួយៗ​ ​ដែល​បាន​ខិត​ខំ​ ​យក​ចិត្ត​ទុក​ដាក់​ប្រឹង​ប្រែង​សិក្សា​រៀន​សូត្រ​ ​និង​ស្តាប់​គ្រូ​ពន្យល់​ ​ក៏​ដូច​ជា​គោ​រព​បទ​បញ្ជា​ផ្ទៃ​ក្នុង​ ​មាន​វិ​ន័យ​ ​សីល​ធម៌​ ​និង​ ​គុណ​ធម៌​ល្អ​ មិន​បង្ក​ផល​លំ​បាក​ដល់​គ្រួ​សារ​ ​និង​សង្គម​ជាតិ​ រហូត​ទទួល​បាន​ជោគ​ជ័យ​​ ​និង​ទទួល​​បាន​សញ្ញា​បត្រ​មធ្យមសិក្សាបឋមភូមិ ​នា​ពេល​នេះ​។​ ​ឯក​ឧត្តម​បណ្ឌិត​ ​ក៏​បាន​ផ្តាំ​ផ្ញើ​ ​ដល់​ក្មួយៗ​ ទាំង​អស់ឱ្យខិត​ខំ​យក​ចិត្ត​ទុក​ដាក់​ ​លើ​ការ​រៀន​សូត្រ​បន្ថែម​ទៀត​ ដើ​ម្បី​អ​ភិ​វឌ្ឍ​សមត្ថ​ភាព​ផ្ទាល់​ខ្លួន​ ​ក្នុង​ចាប់​យក​ ​អា​ជីព​ខ្លួន​ឯង​ទៅ​ថ្ងៃ​អនា​គត​ ​និង​ប្រ​កួត​ប្រ​ជែង​ដណ្តើម​ទី​ផ្សារ​ការ​ងារ​ ​ជា​មួយ​បណ្តា​យុវ​ជន​ទាំង​អស់​ ​ទាំង​ក្នុង​តំបន់​អា​ស៊ាន​ និង​ពិ​ភព​លោក​ ​ជា​ពិ​សេស​ដើរ​ឱ្យ​ទាន់​នូវ​ការ​រីក​ចម្រើន​ផ្នែក​បច្ចេក​វិទ្យា​សម័យ​បដិវត្ត​ឧស្សាហ​កម្ម​៤.០​។​ជា​ទី​បញ្ចប់​ ​ឯក​ឧត្តម​បណ្ឌិត​ ​លី​ ​ឆេង​ ​និង​ ​លោក​ជំ​ទាវ​ ​បាន​ចូល​រួម​អប​អរ​សា​ទរ​ ​និង​ប្រ​គល់​សញ្ញា​បត្រ​ដល់​សិស្ស​ជ័យ​លា​ភី​ទាំង​ ១ ០១១​នាក់​ ​នា​ពេល​នោះ​ផង​ដែរ​។',
                    14
                ],



                [
                    'កម្មវិធីប្រគល់ វិញ្ញាបនបត្រជូនដល់ សិក្សានុសិស្សភាសាអង់គ្លេស Preschool 6 ជំនាន់ទី ៦៦, ៦៧ ចំនួន ៨៤០នាក់',
                    'សាលា​ ប៊ែលធី​ អន្តរ​ជាតិ​ បាន​ប្រារព្ធ​ពិធី​ប្រគល់​វិញ្ញា​បន​បត្រ​ជូន​ដល់​សិស្សា​នុសិស្ស​ភាសា​អង់​គ្លេស​ទូទៅ​កម្រិត​ Preschool​ 6 ជំនាន់​ទី​៦៦​ និង​ទី៦៧​ ដែល​បាន​ប្រឡង​បញ្ចប់​ការ​សិក្សា​ដោយ​ជោគ​ជ័យ​ចំនួន​ ៨៤០នាក់​ នៅ​សាល​សន្និ​សីទ​នៃ​សាកលវិទ្យា​ល័យ​ ប៊ែលធី​ អន្តរ​ជាតិ​ទី២​ (​ស្ពាន​អាកាស​ចោមចៅ​)​ ក្រោម​អធិប​តី​ភាព​ដ៏​ខ្ពង់ខ្ពស់​ ឯក​ឧត្តម​ លី​ ប៊ុនឆៃ​ អគ្គ​នាយក​រង​ ប៊ែលធី​ គ្រុប​ និង​ជា​ប្រធាន​គណៈ​គ្រប់​គ្រង​នាយក​សាខា​ តំណាង​ដ៏​ខ្ពង់​ខ្ពស់​ឯក​ឧត្តម​បណ្ឌិត​ លី​ ឆេង​ តំ​ណាង​រាស្ត្រ​មណ្ឌល​រាជ​ធានី​ភ្នំពេញ​ ស្ថាបនិក​ និង​ជា​អគ្គ​នាយក​ ប៊ែលធី​ គ្រុប​ នា​ព្រឹក​ថ្ងៃ​ទី​៣០​ ខែ​កញ្ញា​ ឆ្នាំ​២០២៣​។​លោក​ ចាន់​ ទីតា​ ប្រ​ធាន​ការិយាល័យ​ភាសា​អង់គ្លេស​ទូទៅ​បាន​ឱ្យ​ដឹង​ថា​៖​ បច្ចុប្បន្ន​នេះ​ សាលា​ ប៊ែលធី​ អន្តរ​ជាតិ​ មាន​ ២៦​សាខា​ ដែល​មាន​បុគ្គលិក​បម្រើ​ការ​សរុប​ចំនួន​ ២,៤៤៦​នាក់​ (​នារី​ ១,០០៨​នាក់​) ​និង​មាន​សិស្សា​នុសិស្ស​កំពុង​សិក្សា​ សរុប​ចំនួន​ ៦០,៥៥៩​នាក់​ (​នារី​ ២៩,២៩២​នាក់​)​។​ ក្នុង​ពិធី​ “​ប្រគល់​វិញ្ញា​បន​បត្រ​ជូន​ដល់​សិស្ស​ភា​សា​អង់​គ្លេស​ទូទៅ​កម្រិត​ PRESCHOOL​ 6​ ជំនាន់​ទី​៦៦​ និង​ទី​៦៧” ចំនួន​ ៨៤០​ នាក់​ មក​ពី​សាលា​ ប៊ែលធី​ អន្តរ​ជាតិ​ទាំង​ ២៦​ទីតាំង​ ដែល​បាន​អញ្ជើញ​ចូល​រួម​នា​ពេល​ព្រឹក​នេះ ​និង​មាន​ឯកឧត្តម​ លោក​ជំទាវ​ លោក​ លោក​ស្រី​ជា​មាតា​បិតា​ អ្នក​អាណា​ព្យាបាល​ និង​ក្រុម​គ្រួសារ​ សិស្ស​ជ័យ​លាភី​អញ្ជើញ​ចូល​រួម​ប្រមាណ​ជា​ជាង​ ២០០០​ នាក់​ផង​ដែរ​ ហើយ​វិញ្ញា​បន​បត្រ​នេះ​ ត្រូវ​បាន​ដាក់​បញ្ចូល​ (​Upload​)​ ទៅ​ក្នុង​វែប​សាយ​របស់​ប៊ែលធី​ ដើម្បី​ទុក​ជា​កាល​ប្បវត្តិ​សម្រាប់​សិស្ស​គ្រប់​រូប​ទាញ​យក​ (​Download​)​ ប្រើ​ប្រាស់​ជា​ផ្លូវ​ការ​ផង​ដែរ​។ ក្នុង​ឱកាស​នោះ​ ឯក​ឧត្តម​ លី​ ប៊ុនឆៃ​ បាន​កោត​សរសើរ​ចំពោះ​ក្មួយៗ ​ដែល​បាន​ខិត​ខំយក​ចិត្ត​ទុក​ដាក់​ប្រឹង​ប្រែង​សិក្សា​រៀន​សូត្រ​សម្រាប់​កម្រិត​ថ្នាក់​ត្រៀម​ (​Preschool 1-6​)​ ជា​ពិសេស​គោរព​បទ​បញ្ជា​ផ្ទៃ​ក្នុង​ មាន​វិន័យ​ សីលធម៌​ និង​គុណ​ធម៌​ល្អ​ មិន​បង្ក​ផល​លំបាក​ដល់​គ្រួសារ​ និង​សង្គម​ជាតិ​ រហូត​ទទួល​បាន​ជោគ​ជ័យ​នា​ពេល​នេះ​។​ ជា​មួយ​នឹង​ជោគ​ជ័យ​របស់​ក្មួយៗ​ ឯក​ឧត្តម​អគ្គ​នាយក​រង​ ក៏​បាន​ថ្លែង​អំណរ​គុណ​ចំពោះ​មាតា​បិតា​ និង​អាណា​ព្យាបាល​សិស្ស​ទាំង​អស់​ដែល​បាន​ផ្តល់​ឱកាស​ និង​ជំរុញ​កូនៗ​ឱ្យ​សិក្សា​បន្ថែម​នៅ​ផ្ទះ​ ធ្វើ​កិច្ច​ការ​ផ្ទះ​ និង​គោរព​ វិន័យ​សាលា ​ព្រម​ទាំង​សហការ​យ៉ាង​ជិត​ស្និត​ជា​មួយ​គណៈ​គ្រប់​គ្រង​នៅ​តាម​បណ្តា​សាខា​នៃ​សាលា​ ប៊ែលធី​ អន្តរ​ជាតិ​។​ ឯក​ឧត្តម​អគ្គនាយក​រង​ ក៏​បាន​ផ្តាំ​ផ្ញើ​ដល់​ក្មួយៗ​ទាំង​អស់​ឱ្យ​ខិត​ខំ​យក​ចិត្ត​ទុក​ដាក់​បន្ត​ការ​សិក្សា​រៀន​សូត្រ​បន្ថែម​ទៀត​នៅ​ថ្នាក់​ Young​ Learners​ (​Level​ 1-6​)​ ដើម្បី​ត្រៀម​ខ្លួន​ប្រកួត​ប្រជែង​ដណ្តើម​ទីផ្សារ​ការងារ​ជាតិ​ និង​អន្តរ​ជាតិ​ ជា​ពិសេស​ដើរ​ឱ្យ​ទាន់​នូវការ​រីក​ចម្រើន​ផ្នែក​បច្ចេក​វិទ្យា​នៃ​សម័យ​បដិវត្តន៍​ឧស្សាហកម្ម​៤.០​។​ជាទី​បញ្ចប់​ ឯក​ឧត្តម​អគ្គ​នាយក​រង​ បាន​ចូល​រួម​អប​អរ​សាទរ​ និង​ប្រគល់​វិញ្ញា​បនបត្រ​ដល់​សិស្ស​ជ័យ​លាភី​ទាំង​ ៨៤០​នាក់​ នា​ពេល​នោះ​ផង​ដែរ​។',
                    15
                ]
            ]
        }else{
            var newsArray = [
                [
                    'BELTEI International School organizes the Graduation Ceremony of BELTEI Senior High School Diploma to Grade 12, Batch 18, (Group 1)',
                    'BELTEI International School organizes the Graduation Ceremony of BELTEI Senior High School Diploma to Grade 12, 1 073 Students, Batch 18, (Group 1) Who passed the Exam of BELTEI Senior High School Diploma, From Campus 1 to 10 which was presided over by H.E. Dr. LY CHHENG, Member of National Assembly for Phnom Penh Capital, Founder and Director General of BELTEI Group and Lok Chumteav. The ceremony was held on January 27, 2024, at the Conference Hall of BELTEI International University Campus 2 (Chom Chao Flyover). On that wonderful occasion, His Excellency Dr. LY CHHENG congratulated and praised the students for their study hard, and for being good students, as well as respecting the internal regulations, discipline, morality, and good virtues, without harming the family and society, until they succeed and receive the BELTEI Senior High School Diploma today. He also instructed all students to pay more attention to learning to develop their own ability to capture their own careers in the future and compete for the job market with all young people in ASEAN and the world. In particular, keep up with the technological advances of the Industrial Revolution 4.0. Finally, His Excellency Dr. and Lok Chumteav congratulated and presented Senior High School Diploma to the 1,073 graduates at that time.',
                    10
                ],
                [
                    'BELTEI International School organizes the Graduation Ceremony of BELTEI Junior High School Diploma to Grade 9 batch 18, (Group 3)',
                    'BELTEI International School organizes the Graduation Ceremony of BELTEI Junior High School Diploma to Grade 9, 1 041 Students, Batch 18, (Group 3) Who passed the Exam of BELTEI Junior High School Diploma, From Campus 15 to 22 which was presided over by H.E. Dr. LY CHHENG, Member of National Assembly for Phnom Penh Capital, Founder and Director General of BELTEI Group and Lok Chumteav. The ceremony was held on January 13, 2024, at the Conference Hall of BELTEI International University Campus 2 (Chom Chao Flyover). On that wonderful occasion, His Excellency Dr. LY CHHENG congratulated and praised the students for their study hard, and for being good students, as well as respecting the internal regulations, discipline, morality, and good virtues, without harming the family and society, until they succeed and receive the BELTEI Junior High School Diploma today. He also instructed all students to pay more attention to learning to develop their own ability to capture their own careers in the future and compete for the job market with all young people in ASEAN and the world. In particular, keep up with the technological advances of the Industrial Revolution 4.0. Finally, His Excellency Dr. and Lok Chumteav congratulated and presented Junior High School Diploma to the 1,041 graduates at that time.',
                    10
                ],


                [
                    'BELTEI International School organizes the Graduation Ceremony of BELTEI Junior High School Diploma to Grade 9 batch 18, (Group 3)',
                    'BELTEI International School organizes the Graduation Ceremony of BELTEI Junior High School Diploma to Grade 9, 1 041 Students, Batch 18, (Group 3) Who passed the Exam of BELTEI Junior High School Diploma, From Campus 15 to 22 which was presided over by H.E. Dr. LY CHHENG, Member of National Assembly for Phnom Penh Capital, Founder and Director General of BELTEI Group and Lok Chumteav. The ceremony was held on January 13, 2024, at the Conference Hall of BELTEI International University Campus 2 (Chom Chao Flyover). On that wonderful occasion, His Excellency Dr. LY CHHENG congratulated and praised the students for their study hard, and for being good students, as well as respecting the internal regulations, discipline, morality, and good virtues, without harming the family and society, until they succeed and receive the BELTEI Junior High School Diploma today. He also instructed all students to pay more attention to learning to develop their own ability to capture their own careers in the future and compete for the job market with all young people in ASEAN and the world. In particular, keep up with the technological advances of the Industrial Revolution 4.0. Finally, His Excellency Dr. and Lok Chumteav congratulated and presented Junior High School Diploma to the 1,041 graduates at that time.',
                    10
                ],
                [
                    'BELTEI International School organizes the Graduation Ceremony of BELTEI Junior High School Diploma to Grade 9 batch 18, (Group 3)',
                    'BELTEI International School organizes the Graduation Ceremony of BELTEI Junior High School Diploma to Grade 9, 1 041 Students, Batch 18, (Group 3) Who passed the Exam of BELTEI Junior High School Diploma, From Campus 15 to 22 which was presided over by H.E. Dr. LY CHHENG, Member of National Assembly for Phnom Penh Capital, Founder and Director General of BELTEI Group and Lok Chumteav. The ceremony was held on January 13, 2024, at the Conference Hall of BELTEI International University Campus 2 (Chom Chao Flyover). On that wonderful occasion, His Excellency Dr. LY CHHENG congratulated and praised the students for their study hard, and for being good students, as well as respecting the internal regulations, discipline, morality, and good virtues, without harming the family and society, until they succeed and receive the BELTEI Junior High School Diploma today. He also instructed all students to pay more attention to learning to develop their own ability to capture their own careers in the future and compete for the job market with all young people in ASEAN and the world. In particular, keep up with the technological advances of the Industrial Revolution 4.0. Finally, His Excellency Dr. and Lok Chumteav congratulated and presented Junior High School Diploma to the 1,041 graduates at that time.',
                    10
                ],
                [
                    'BELTEI International School organizes the Graduation Ceremony of BELTEI Junior High School Diploma to Grade 9 batch 18, (Group 3)',
                    'BELTEI International School organizes the Graduation Ceremony of BELTEI Junior High School Diploma to Grade 9, 1 041 Students, Batch 18, (Group 3) Who passed the Exam of BELTEI Junior High School Diploma, From Campus 15 to 22 which was presided over by H.E. Dr. LY CHHENG, Member of National Assembly for Phnom Penh Capital, Founder and Director General of BELTEI Group and Lok Chumteav. The ceremony was held on January 13, 2024, at the Conference Hall of BELTEI International University Campus 2 (Chom Chao Flyover). On that wonderful occasion, His Excellency Dr. LY CHHENG congratulated and praised the students for their study hard, and for being good students, as well as respecting the internal regulations, discipline, morality, and good virtues, without harming the family and society, until they succeed and receive the BELTEI Junior High School Diploma today. He also instructed all students to pay more attention to learning to develop their own ability to capture their own careers in the future and compete for the job market with all young people in ASEAN and the world. In particular, keep up with the technological advances of the Industrial Revolution 4.0. Finally, His Excellency Dr. and Lok Chumteav congratulated and presented Junior High School Diploma to the 1,041 graduates at that time.',
                    10
                ],

            ]
        }



        try {

            if (id) {
                newsHeader.innerHTML = newsArray[id - 1][0];
                newsDescription.innerHTML = newsArray[id - 1][1];
                for (let i = 1; i <= newsArray[id - 1][2]; i++) {
                    var image = `<img loading="lazy" src="{{ asset('asset/img/school/dailyNews/${id}/${i}.jpg') }}" alt=""
                    class="w-50 p-2">`;
                    var div = document.createElement("div");
                    div.innerHTML = image.trim();
                    imgContainer.appendChild(div.firstChild);
                }
            }

        } catch (error) {

        }
    </script>
@endsection
