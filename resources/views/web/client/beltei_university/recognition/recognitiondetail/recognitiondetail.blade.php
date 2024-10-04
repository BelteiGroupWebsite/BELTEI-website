@extends('web.client.beltei_university.layout.app')

@section('content')

<div class="content-translate-font">

    <h5 class="font-bold mb-3 underline px-3" id="recognitionHeader"></h5>
    <div id="recognitionContent"></div>
</div>



@php
    
try {
    //code...
    $id = $_GET['id'];
    
    $folderPath = public_path("asset/img/university/recognition/$id");
    $fileCount = count(glob("$folderPath/*"));
    
    echo "
    <script>
        var id = $id;
        var fileCount = $fileCount;
    </script>
    ";
} catch (\Throwable $th) {
    //throw $th;
}
@endphp

<script>

    var recognitionContent = document.getElementById('recognitionContent');
    var recognitionHeader = document.getElementById('recognitionHeader');


    var headerArr = [
        'វិញ្ញាបនបត្រទទួលស្គាល់គុណភាពអប់រំពេញសិទ្ធិ របស់ ACC លេខ គ.ទ.ក ០១១២០៧២១ FA ចុះថ្ងៃទី២៩ ខែមិថុនា ឆ្នាំ២០២២',
        'ប្រកាសស្តីពី ការទទួលស្គាល់រចនាសម្ព័ន្ធមហាវិទ្យាល័យ ដេប៉ាតឺម៉ង់ និងមុខជំនាញ ថ្នាក់បរិញ្ញាបត្រ និងបរិញ្ញាបត្ររង លេខ ១៣៩.អយក.ប្រក ថ្ងៃទី២៧ ខែមករា ឆ្នាំ២០២២។',
        'ប្រកាសស្តីពី ការបើកបណ្តុះបណ្តាលថ្នាក់បរិញ្ញាបត្រជាន់ខ្ពស់ លេខ ១១៨៦.អយក.ប្រក ថ្ងៃទី១៥ ខែធ្នូ ឆ្នាំ២០២១។',
        'ប្រកាសស្តីពី ការបើកបណ្តុះបណ្តាលថ្នាក់បណ្ឌិត លេខ ១១៨៧.អយក.ប្រក ថ្ងៃទី១៥ ខែធ្នូ ឆ្នាំ២០២១។',
        'ប៊ែលធី គ្រុប ទទួលបានពានរង្វាន់ជាអង្គភាពឆ្នើមពីអាស៊ាន',
        'វិញ្ញាបនបត្រទទួលស្គាល់ប្រព័ន្ធគ្រប់គ្រងគុណភាពថ្នាក់អន្តរជាតិ (ISO9001:2008)',
        'វិញ្ញាបនបត្របញ្ចាក់ប្រព័ន្ធគ្រប់គ្រងគុណភាពថ្នាក់ជាតិ​ លេខ QMS 006/12 CCD-ISC ថ្ងៃទី១៧ កញ្ញា ២០១២',
        'អនុក្រឹត្យ៖ការទទួលស្គាល់ការប្រែក្លាយពី វិទ្យាស្ថានប៊ែលធីអន្តរជាតិ ទៅជា សកលវិទ្យាល័យប៊ែលធីអន្តរជាតិ លេខៈ១៣៨.អនក្រ.បក ថ្ងៃទី០៦ ខែកញ្ញា ឆ្នាំ២០១២',
        'វិញ្ញាបនបត្រទទួលស្គាល់គុណភាពអប់រំពេញសិទ្ធិ របស់ ACC លេខៈ គ.ទ.ក ០២៤៦១១១២ ចុះថ្ងៃទី១៩ ខែកញ្ញា ឆ្នាំ២០១១ ចុះហត្ថលេខាដោយ ឯកឧត្តម សាម មន្តិយ៉ា',
        'វិញ្ញាបនបត្រទទួលស្គាល់គុណភាពអប់រំពេញសិទ្ធិ របស់ ACC លេខៈ គ.ទ.ក ០២៤៦០៨៣២ ចុះថ្ងៃទី២២ ខែតុលា ឆ្នាំ២០០៨ ចុះហត្ថលេខាដោយ ឯកឧត្តម សុខ អាន',
        'ប្រកាស៖ លេខៈ១៤២៦.អយក.ប្រក ថ្ងៃទី៣១ ខែសីហា​ឆ្នាំ២០០៦ ការ ទទួល ស្គាល់ ដេប៉ា ដឺម៉ងថ្នាក់ឆ្នាំសិក្សាមូលដ្ឋាន',
        'អនុក្រឹត្យ៖ប្តូរឈ្មោះពី វិទ្យាស្ថានអាស៊ីប៉ាស៊ីភិច ទៅជា វិទ្យាស្ថានប៊ែលធីអន្តរជាតិ លេខៈ៩៧ ថ្ងៃទី០៤ ខែសីហា ឆ្នាំ២០០៥',
        'វិញ្ញាបនបត្រទទួលស្គាល់ស្តង់ដារជាតិ (ISO 9001:2015) លើ ប្រព័ន្ធគ្រប់គ្រងគុណភាព (Quality Management System) ពីវិទ្យាស្ថាន ស្តង់ដារកម្ពុជា (ISC) នៃព្រះរាជាណាចក្រកម្ពុជា លេខ No. QMS 006/24 D/DER-ISC',
    ]
    

    recognitionHeader.innerHTML = `${headerArr[id-1]} `;

    for (let i = 1; i <= fileCount; i++) {
            var recognitionTemplate = `
            <img class="w-75 shadow rounded my-2" src="{{ asset('asset/img/university/recognition/${id}/recognition_${i}.jpg') }}" alt="">
            `;
            
            var div = document.createElement("div");
            div.innerHTML = recognitionTemplate.trim();
            recognitionContent.appendChild(div.firstChild);

        }
    
</script>


@endsection