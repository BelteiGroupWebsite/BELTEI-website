@extends('web.client.school.layout.app')

@section('content')
    <div>


        @foreach ($gradeAs as $gradeA)
            <div class="content-translate-font table text-start">


                <div>
                    <h5 class="title-translate-font bg-success p-2 text-white text-center py-3">

                        {{ __('school/outstanding-student/gradeA.academicYear') }}
                        {{ $gradeA->start_academic_year }}  = {{ $gradeA->studentGradeA->count() }}  
                        {{ __('school/outstanding-student/gradeA.student') }}
                    
                    </h5>

                    @foreach ($gradeA->studentGradeA as $key => $studentGradeA)
                        <div class="d-flex align-items-center border">
                            <div class="max-width-200 max-height-200  overflow-hidden">
                                <img class="w-100 rounded shadow-sm" loading="lazy"
                                    src="{{ asset('storage/upload/gradeA/' . $gradeA->start_academic_year . '/profile/' . ($key + 1) . '.jpg') }}"
                                    alt="">
                            </div>
                            @if (app()->getLocale() == 'kh')
                                <p>
                                    <strong>{{ $studentGradeA->khmer_name }}</strong>
                                    សិក្សា​នៅ​សា​លា​ប៊ែល​ធី​អន្តរ​ជាតិ​ទី​{{ $studentGradeA->campus_id }} ​(
                                    <strong>{{ $studentGradeA->campus->campus_kh }}</strong> ) ជាប់
                                    ​និ​ទ្ទេស​ “A” ​ ទូទាំង​ប្រទេស​ ទទួល​បាន​រង្វាន់​លើក​ទឹក​ចិត្ត​ចំនួន​ <strong>$១
                                        ០០០​</strong>
                                    និង​អាហា​រូបករណ៍​ពី ​​ឧត្តម​បណ្ឌិត​ លី​ ឆេង​ តំណាង​រាស្រ្ត​មណ្ឌល​រាជ​ធានី​ភ្នំពេញ​
                                    ស្ថាបនិក​
                                    និង​ជា​អគ្គ​នាយក​ប៊ែលធី​ គ្រុប​ និង​​លោកជំទាវ​ សិក្សា​ថ្នាក់​បរិញ្ញា​បត្រ​
                                    នៅ​សាកលវិទ្យាល័យ​
                                    ប៊ែលធី​ អន្តរ​ជាតិ​ ។
                                </p>
                            @else
                                <p>

                                    <strong>{{ $studentGradeA->latin_name }}</strong>, grade ​​"A"​ student for the National Exam from BELTEI International
                                    School, campus {{ $studentGradeA->campus_id }} ( <strong>{{ $studentGradeA->campus->campus_eng }}</strong> ), was awarded <strong>$1,000</strong> and Scholarship of Bachelor Degree at
                                    BELTEI International University by ​​H.E. Dr. LY Chheng, Member of National Assembly for
                                    Phnom Penh Capital, Founder and Director-General of BELTEI Group and Lok Chumteav.

                                </p>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
@endsection
