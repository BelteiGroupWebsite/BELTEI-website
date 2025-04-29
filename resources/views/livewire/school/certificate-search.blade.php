<div>
    <div class="title-translate-font mb-4">
        <h4>{{ __('beltei_university/certificate/certificate.find') }}</h4>
    </div>

    <div class="input-group mb-3 shadow-sm">
        <input wire:model.live="search" type="search" class="form-control" id="searchBar"
            onfocus="document.getElementById('searchResults').classList.remove('d-none');"
            onblur="setTimeout(() => document.getElementById('searchResults').classList.add('d-none'), 500);"
            placeholder="Search ...">
        <button class="btn btn-primary content-translate-font" id="modalCreatePreferenceButton" type="button">
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
                    <td>{{ __('beltei_university/certificate/certificate.gender') }}</td>
                    {{-- <td>{{ __('beltei_university/certificate/certificate.dob') }}</td> --}}
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
                        {{-- @php
                            $encryptedCerti = Crypt::encryptString(
                                "$programId/$gradeId/$batchId/beltei/$student->certi_no.jpg",
                            );
                            $encryptedMoey = Crypt::encryptString(
                                "$programId/$gradeId/$batchId/moey/$student->moey_no.jpg",
                            );
                            $encryptedProfile = Crypt::encryptString(
                                "$programId/$gradeId/$batchId/profile/$student->profile_no.jpg",
                            );
                        @endphp --}}

                        @php
                            $profileImagePath = Crypt::encryptString(
                                "school/$programId/$gradeId/$batchId/profile/$student->profile_no.jpg",
                            );

                        @endphp

                        <tr class="cursor-pointer" data-bs-toggle="modal" data-bs-target="#testModel"
                            {{-- wire:click="openCertificateModal('{{ $student->id }}','beltei' , '{{ $student->certi_no }}')" --}} wire:click="openPortalModal('{{ $student->id }}')">
                            <td>{{ $student->student_id }}</td>
                            <td>{{ $student->khmer_name }}</td>
                            <td>{{ $student->gender }}</td>
                            {{-- <td>{{ $student->dob }}</td> --}}
                            @if ($profile)
                                <td>
                                    {{-- {{ $student->profile_no }} --}}
                                    <img style="max-width: 50px" loading="lazy" data-bs-toggle="modal"
                                        data-bs-target="#updateStudentModal"
                                        wire:click="openCertificateModal('{{ $student->id }}','profile' , '{{ $student->profile_no }}')"
                                        src="{{ route('certificate.view', ['filename' => $profileImagePath]) }}"
                                        {{-- @if ($student->gender == 'F') src="https://t3.ftcdn.net/jpg/07/64/40/98/360_F_764409867_iXpBxs90ZimTFHobmqvOaTtuJHJgHPOR.jpg"
                                        @else
                                            src="https://t3.ftcdn.net/jpg/07/64/40/98/360_F_764409869_bcZuUrVPCXkeX09GIZOlSseroQKANt4O.jpg" 
                                            @endif --}} alt="Profile Image">
                                </td>
                            @endif
                            @if ($beltei)
                                <td>
                                    <img style="max-width: 50px" data-bs-toggle="modal"
                                        data-bs-target="#updateStudentModal"
                                        wire:click="openCertificateModal('{{ $student->id }}','beltei' , '{{ $student->certi_no }}')"
                                        class="cursor-pointer" loading="lazy"
                                        src="{{ asset('asset\img\school\certificate\diploma\certplaceholder'.$gradeId.'.jpg') }}"
                                        alt="Profile Image">
                                </td>
                            @endif
                            @if ($moey)
                                <td>
                                    <img style="max-width: 50px" data-bs-toggle="modal"
                                        data-bs-target="#updateStudentModal"
                                        wire:click="openCertificateModal('{{ $student->id }}','moey' , '{{ $student->moey_no }}')"
                                        class="cursor-pointer" loading="lazy"
                                        src="{{ asset('asset\img\school\certificate\diploma\moeyplaceholder.jpg') }}"
                                        alt="Profile Image">
                                </td>
                            @endif
                            @if ($ielts)
                                @php
                                    $ieltsImagePath = Crypt::encryptString(
                                        "school/$programId/$gradeId/$batchId/ielts/$student->ielts_no.jpg",
                                    );
                                @endphp
                                <td>
                                    <img style="max-width: 50px" data-bs-toggle="modal"
                                        data-bs-target="#updateStudentModal"
                                        wire:click="openCertificateModal('{{ $student->id }}','ielts' , '{{ $student->ielts_no }}')"
                                        class="cursor-pointer" loading="lazy"
                                        src="{{ route('certificate.view', ['filename' => $ieltsImagePath]) }}"
                                        alt="IELTS Image">
                                </td>
                            @endif
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
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form wire:submit="verify">
                    <div class="modal-body">
                        <div class="pb-3 alert alert-warning text-center">
                            <small>To protect your privacy, please verify that you are a human.</small>
                        </div>
                        <div class="recaptcha-box w-100">
                            <div class="recaptcha-left">
                                <input wire:model="robot" wire:change="submit" type="checkbox" id="notRobot">
                                <label for="notRobot" class="mb-0">I'm not a robot</label>
                            </div>
                            <div class="recaptcha-right">
                                <img src="https://www.gstatic.com/recaptcha/api2/logo_48.png" alt="reCAPTCHA logo">
                                <div>
                                    <a href="#" style="text-decoration:none;">Privacy</a> -
                                    <a href="#" style="text-decoration:none;">Terms</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div wire:ignore.self class="modal fade" id="testModel" tabindex="-1" aria-labelledby="testModelLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title title-translate-font">Student Information</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="container my-2 py-2 px-3 d-flex justify-content-center">
                    <div class="card overflow-hidden shadow-lg border-2 border-header-color">
                        <img class="py-2 bg-header-color"
                            src="{{ asset('asset\img\school\certificate/header2.png') }}" alt="">
                        <div class="d-flex flex-column justify-content-center align-items-center py-4">
                            @if ($studentInfoShow)
                                @php
                                    if ($profile) {
                                        $imageCardFolder = 'profile';
                                        $imageCard = $studentInfoShow->profile_no;
                                    } else {
                                        $imageCardFolder = 'beltei';
                                        $imageCard = $studentInfoShow->certi_no;
                                    }
                                    $encryptedProfile = Crypt::encryptString(
                                        "school/$programId/$gradeId/$batchId/$imageCardFolder/$imageCard.jpg",
                                    );
                                @endphp
                                <div class="d-flex flex-row justify-content-center align-items-end position-relative">
                                    <div class="btn btn-primary p-1 rounded">
                                        <img class="rounded"
                                            src="{{ route('certificate.view', ['filename' => $encryptedProfile]) }}"
                                            width="150" />
                                    </div>
                                    <img class="position-absolute" style="bottom: -15px" width="40"
                                        src="{{ asset('asset/img/university/certificate/TickSticker.gif') }}">
                                </div>
                                <div class="mt-4">

                                    <p class="Muol-Light">{{ $studentInfoShow->khmer_name }}</p>
                                    <p class="Times-New-Roman">{{ $studentInfoShow->latin_name }}</p>
                                    <table class="table table-borderless text-start">
                                        <tr>
                                            <td class="Times-New-Roman">No</td>
                                            <td class="Times-New-Roman">:</td>
                                            <td class="Times-New-Roman">{{ $studentInfoShow->student_id }}</td>
                                        </tr>
                                        <tr>
                                            <td class="Times-New-Roman">Profile No</td>
                                            <td class="Times-New-Roman">:</td>
                                            <td class="Times-New-Roman">
                                                {{ $gradeId . '/' . $batchId . '/' . $imageCard }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="Times-New-Roman">Gender</td>
                                            <td class="Times-New-Roman">:</td>
                                            <td class="Times-New-Roman">{{ $studentInfoShow->gender }}</td>
                                        </tr>
                                        <tr>
                                            <td class="Times-New-Roman">Campus</td>
                                            <td class="Times-New-Roman">:</td>
                                            <td class="Times-New-Roman">{{ $studentInfoShow->campuses->campus_eng }}
                                            </td>
                                        </tr>
                                    </table>
                                    <button class="btn btn-outline-success" data-bs-target="#updateStudentModal"
                                        wire:click="openCertificateModal('{{ $studentInfoShow->id }}','beltei' , '{{ $studentInfoShow->certi_no }}')"
                                        data-bs-toggle="modal" data-bs-dismiss="modal">
                                        View Certificate
                                    </button>
                                </div>
                            @endif
                        </div>
                        <div class="bg-header-color py-4"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
