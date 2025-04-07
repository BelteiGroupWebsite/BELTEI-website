@extends('web.client.school.layout.app')


@section('content')
    <style>
        .recaptcha-box {
            border: 1px solid #ccc;
            border-radius: 6px;
            padding: 15px 20px;
            background-color: white;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .recaptcha-left {
            display: flex;
            align-items: center;
        }

        .recaptcha-left input[type="checkbox"] {
            width: 22px;
            height: 22px;
            margin-right: 15px;
        }

        .recaptcha-right {
            display: flex;
            flex-direction: column;
            align-items: center;
            font-size: 12px;
        }

        .recaptcha-right img {
            width: 25px;
            height: 25px;
        }
    </style>

    <div class="">
        <div class="card">
            <div class="card-body">
                <div class="my-3">
                    {{-- @livewire('school.certificate-search') --}}
                    {{-- <livewire:school.certificate-search :program="$program" :grade="$grade" :year="$year"/> --}}
                    <livewire:school.certificate-search :batch="$academicBatchId" />

                    {{-- <table class="table table-bordered " >
                    <thead >
                        <th>ID</th>
                        <th>Khmer Name</th>
                        <th>Latin Name</th>
                        <th>Gender</th>
                        <th>DOB</th>
                        <th>Nationality</th>
                        <th>Profile</th>
                        <th>Certificate</th>
                        <th>Moey</th>
                    </thead>
                        @foreach ($studentInfo as $student)
                        <tr>
                            <td>{{ $student->student_id }}</td>
                            <td>{{ $student->khmer_name }}</td>
                            <td>{{ $student->latin_name }}</td>
                            <td>{{ $student->gender }}</td>
                            <td>{{ $student->dob }}</td>
                            <td>{{ $student->nationality }}</td>
                            <td>
                                <img style="max-width: 50px" loading="lazy" src="{{ asset('storage/upload/certificate/school/'.$programId.'/'.$gradeId.'/'.$academicBatchId.'/profile/'.$student->student_id.'.jpeg') }}" alt="Profile Image">
                            </td>
                            <td>
                                <a href="{{ asset('storage/upload/certificate/school/'.$programId.'/'.$gradeId.'/'.$academicBatchId.'/beltei/'.$student->student_id.'.jpeg') }}">
                                    <img style="max-width: 50px" loading="lazy" src="{{ asset('storage/upload/certificate/school/'.$programId.'/'.$gradeId.'/'.$academicBatchId.'/beltei/'.$student->student_id.'.jpeg') }}" alt="Beltei certificate">
                                </a>
                            </td>
                            <td>
                                <a href="{{ asset('storage/upload/certificate/school/'.$programId.'/'.$gradeId.'/'.$academicBatchId.'/moey/'.$student->moey.'.jpeg') }}">
                                    <img style="max-width: 50px" loading="lazy" src="{{ asset('storage/upload/certificate/school/'.$programId.'/'.$gradeId.'/'.$academicBatchId.'/beltei/'.$student->student_id.'.jpeg') }}" alt="Moey certificate">
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    
                    
                </table>
                {{ $studentInfo->links() }} --}}

                </div>
            </div>
        </div>
    </div>
@endsection
