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

    <div class="w-100 overflow-auto">
        <table class="table table-responsive content-translate-font table-hover table-bordered w-100 f14"
            style="vertical-align: middle">

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


                {{-- {{ dd($studentInfos->groupBy('campus')) }}  --}}

                @foreach ($studentInfos->groupBy('campus') as $studentInfo)
                    @if ($studentInfo->first()->campuses)
                        <tr>
                            <td colspan="10" class="bg-success text-white title-translate-font">
                                <h6>
                                    សាខាទី {{ $studentInfo->first()->campuses->id }}
                                    {{ $studentInfo->first()->campuses->campus_kh }}
                                </h6>
                            </td>
                        </tr>
                    @endif
                    @foreach ($studentInfo as $student)
                        @php

                            $encryptedCerti = Crypt::encryptString(
                                $programId . '/' . $gradeId . '/' . $batchId . '/beltei/' . $student->certi_no . '.jpg',
                            );
                            $encryptedMoey = Crypt::encryptString(
                                $programId . '/' . $gradeId . '/' . $batchId . '/moey/' . $student->moey_no . '.jpg',
                            );
                            $encryptedProfile = Crypt::encryptString(
                                $programId .
                                    '/' .
                                    $gradeId .
                                    '/' .
                                    $batchId .
                                    '/profile/' .
                                    $student->profile_no .
                                    '.jpg',
                            );
                        @endphp

                        <tr>
                            <td>{{ $student->student_id }}</td>
                            <td>{{ $student->khmer_name }}</td>
                            {{-- <td>{{ $student->latin_name }}</td> --}}
                            <td>{{ $student->gender }}</td>
                            <td>{{ $student->dob }}</td>


                            @if ($profile)
                                <td>
                                    <img style="max-width: 50px" data-bs-toggle="modal"
                                        data-bs-target="#updateStudentModal"
                                        wire:click="openCertificateModal('{{ $student->id }}')" class="cursor-pointer"
                                        loading="lazy" wire:click="viewInfo(`{{ $encryptedCerti }}`)"
                                        src="{{ asset('asset\img\school\certificate\placeholder.jpg') }}"
                                        alt="Profile Image">
                                    {{-- <a
                                        href="{{ asset('storage/upload/certificate/school/' . $programId . '/' . $gradeId . '/' . $batchId . '/profile/' . $student->profile_no . '.jpg') }}">
                                        <img style="max-width: 50px" loading="lazy"
                                            src="{{ asset('storage/upload/certificate/school/' . $programId . '/' . $gradeId . '/' . $batchId . '/profile/' . $student->profile_no . '.jpg') }}"
                                            alt="Profile Image">
                                    </a> --}}
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
                @endforeach


            </tbody>

        </table>


        {{ $studentInfos->links('vendor.livewire.bootstrap') }}
    </div>



    <div wire:ignore.self class="modal fade" id="updateStudentModal" tabindex="-1"
        aria-labelledby="updateStudentModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Identity Verification</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" 
                    {{-- wire:click="closeModal" --}}
                        aria-label="Close"></button>
                </div>
                <form wire:submit="verify">
                    <div class="modal-body">
                        <div class="pb-3 alert alert-warning text-center">
                            <small class="">To protect your privacy, please verify that its belongs to
                                you.</small>
                        </div>
                        @if (session()->has('error'))
                            <div class="alert alert-danger text-center">
                                {{ session()->get('error') }}
                            </div>
                        @endif
                        <div class="text-start">
                            <label for="validationDefault03" class="form-label">Date of Birth</label>
                            <input wire:model="dob" type="date" class="form-control" id="validationDefault03"
                                required>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Verify</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
