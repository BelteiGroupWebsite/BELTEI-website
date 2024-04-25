@extends('web.client.school.layout.app')

@section('content')
    <div>

        @foreach ($gradeA as $key => $gradeA)
            {{-- {{ $gradeA }} --}}
            {{-- <h4 class="title-translate-font bg-info p-3 text-white">សិស្សពូកែថ្នាក់ទី១២</h4> --}}
            <div class="content-translate-font table text-start">


                <div>
                    <h5 class="title-translate-font bg-success p-2 text-white text-center">ឆ្នាំ២០២២ = ០១នាក់</h5>
                    <div class="d-flex align-items-center border">
                        <img class="width-100" src="{{ asset('gradeA/'.$gradeA->academic_year.'/'.$gradeA->identify_user.'/profile/'.$key.'.JPG') }}" alt="">
                        <p>
                            {{ $gradeA->khmer_name }} ​​​ សិក្សា​នៅ​សា​លា​ប៊ែល​ធី​អន្តរ​ជាតិ​ទី​{{ $gradeA->campus_id }} ​(​សា​ខា​{{ $gradeA->campus->campus_kh }}) ជាប់ ​និ​ទ្ទេស​
                            “A” ​ ទូទាំង​ប្រទេស​ ទទួល​បាន​រង្វាន់​លើក​ទឹក​ចិត្ត​ចំនួន​ $១ ០០០​ និង​អាហា​រូបករណ៍​ពី
                            ​​ឧត្តម​បណ្ឌិត​ លី​ ឆេង​ តំណាង​រាស្រ្ត​មណ្ឌល​រាជ​ធានី​ភ្នំពេញ​ ស្ថាបនិក​
                            និង​ជា​អគ្គ​នាយក​ប៊ែលធី​ គ្រុប​ និង​​លោកជំទាវ​ សិក្សា​ថ្នាក់​បរិញ្ញា​បត្រ​ នៅ​សាកលវិទ្យាល័យ​
                            ប៊ែលធី​ អន្តរ​ជាតិ​ ។
                        </p>
                    </div>
                </div>

            </div>
        @endforeach

    </div>
@endsection
