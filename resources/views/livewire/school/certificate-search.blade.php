<div>


    <div class="title-translate-font mb-4">
        <h4>{{ __('beltei_university/certificate/certificate.find') }}</h4>
    </div>

    <div class="input-group mb-3 shadow-sm">
        <input wire:model.live="search" type="search" class="form-control" name="" id="searchBar"
            onfocus='document.getElementById("searchResults").classList.remove("d-none");'
            onblur='setTimeout(function() { document.getElementById("searchResults").classList.add("d-none"); }, 500);'
            placeholder="Search ...">
        <button class="btn btn-primary content-translate-font " id="modalCreatePreferenceButton" type="button">
            {{ __('beltei_university/certificate/certificate.search') }}
        </button>
    </div>

    <table class="table content-translate-font table-hover table-bordered w-100 f14" style="vertical-align: middle">

        <thead class="table-info font-bold">
            <tr>
                <td>N<sup>o</sup></td>
                <td>{{ __('beltei_university/certificate/certificate.khmer_name') }}</td>
                {{-- <td>{{ __('beltei_university/certificate/certificate.latin_name') }}</td> --}}
                <td>{{ __('beltei_university/certificate/certificate.gender') }}</td>
                <td>{{ __('beltei_university/certificate/certificate.dob') }}</td>
                
                @if ($profile)
                    <td>{{ __('beltei_university/certificate/certificate.profile') }}</td>
                @endif

                @if ($beltei)
                    <td>{{ __('beltei_university/certificate/certificate.certificate') }}</td>
                @endif

                @if ($moey)
                    <td>{{ __('beltei_university/certificate/certificate.moey') }}</td>
                @endif

                @if ($ielts)
                    <td>{{ __('beltei_university/certificate/certificate.ielts') }}</td>
                @endif

            </tr>

        </thead>

        <tbody class="f14">


            {{-- {{ dd($students) }}  --}}

            @foreach ($studentInfos as $student)
                <tr>
                    <td>{{ $student->student_id }}</td>
                    <td>{{ $student->khmer_name }}</td>
                    <td>{{ $student->campus->campus_kh }}</td>
                    {{-- <td>{{ $student->latin_name }}</td> --}}
                    <td>{{ $student->gender }}</td>
                    <td>{{ $student->dob }}</td>


                    @if ($profile)
                        <td>
                            <a
                                href="{{ asset('storage/upload/certificate/school/' . $programId . '/' . $gradeId . '/' . $batchId . '/profile/' . $student->profile . '.jpg') }}">
                                <img style="max-width: 50px" loading="lazy"
                                    src="{{ asset('storage/upload/certificate/school/' . $programId . '/' . $gradeId . '/' . $batchId . '/profile/' . $student->profile . '.jpg') }}"
                                    alt="Profile Image">
                            </a>
                        </td>
                    @endif

                    @if ($beltei)
                        <td>
                            <a
                                href="{{ asset('storage/upload/certificate/school/' . $programId . '/' . $gradeId . '/' . $batchId . '/beltei/' . $student->certi_no . '.jpg') }}">
                                <img style="max-width: 50px" loading="lazy"
                                    src="{{ asset('storage/upload/certificate/school/' . $programId . '/' . $gradeId . '/' . $batchId . '/beltei/' . $student->certi_no . '.jpg') }}"
                                    alt="Beltei">
                            </a>
                        </td>
                    @endif

                    @if ($moey)
                        <td>
                            <a
                                href="{{ asset('storage/upload/certificate/school/' . $programId . '/' . $gradeId . '/' . $batchId . '/moey/' . $student->moey_no . '.jpg') }}">
                                <img style="max-width: 50px" loading="lazy"
                                    src="{{ asset('storage/upload/certificate/school/' . $programId . '/' . $gradeId . '/' . $batchId . '/moey/' . $student->moey_no . '.jpg') }}"
                                    alt="Moey">
                            </a>
                        </td>
                    @endif

                    @if ($ielts)
                        <td>
                            <a
                                href="{{ asset('storage/upload/certificate/school/' . $programId . '/' . $gradeId . '/' . $batchId . '/moey/' . $student->ielts_no . '.jpg') }}">
                                <img style="max-width: 50px" loading="lazy"
                                    src="{{ asset('storage/upload/certificate/school/' . $programId . '/' . $gradeId . '/' . $batchId . '/moey/' . $student->ielts_no . '.jpg') }}"
                                    alt="IELTS">
                            </a>
                        </td>
                    @endif
                    {{-- <td>
                        <a target="blank" href="{{ url('certificate/biu/'.$student->degree_id.'/'.$student->academicBatch->start_academic_year.'/'.$student->identify_user.'/profile/'.$student->certi_no.'.jpg') }}">
                            <img loading="lazy" style="width: 50px" alt="report" src="{{ asset('certificate/biu/'.$student->degree_id.'/'.$student->academicBatch->start_academic_year.'/'.$student->identify_user.'/profile/'.$student->certi_no.'.jpg') }}" alt="">
                        </a>
                    </td>
                    <td>
                        <a target="blank" href="{{ url('certificate/biu/'.$student->degree_id.'/'.$student->academicBatch->start_academic_year.'/'.$student->identify_user.'/beltei/'.$student->certi_no.'.jpg') }}">
                            <img loading="lazy" style="width: 50px" alt="report" src="{{ asset('certificate/biu/'.$student->degree_id.'/'.$student->academicBatch->start_academic_year.'/'.$student->identify_user.'/beltei/'.$student->certi_no.'.jpg') }}" alt="">
                        </a>
                    </td> --}}
                </tr>
            @endforeach

        </tbody>

    </table>

    {{ $studentInfos->links() }}


</div>
