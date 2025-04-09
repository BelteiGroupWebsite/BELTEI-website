<div>
    <div class="title-translate-font mb-4">
        @php
            use Carbon\Carbon;
            $degree = app()->getLocale() == 'kh' ? $batchCert->degree->degree_kh : $batchCert->degree->degree_eng;
        @endphp

        <h4 class="Blue-color">{{ $degree }} {{ __('beltei_university/certificate/certificate.batch') }}
            {{ $batchCert->batch }} {{ __('beltei_university/certificate/certificate.year') }}
            {{ $batchCert->academic_year . '-' . ($batchCert->academic_year + 1) }}</h4>
        <h5 class="mt-3">{{ __('beltei_university/certificate/certificate.find') }}</h5>
    </div>

    <div class="input-group mb-3 shadow-sm">
        <input wire:model.live="search" type="search" class="form-control" id="searchBar"
            onfocus="document.getElementById('searchResults').classList.remove('d-none');"
            onblur="setTimeout(function() { document.getElementById('searchResults').classList.add('d-none'); }, 500);"
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
                    <td>{{ __('beltei_university/certificate/certificate.profile') }}</td>
                    <td>{{ __('beltei_university/certificate/certificate.certificate') }}</td>
                </tr>
            </thead>

            <tbody class="f14">
                @foreach ($certificates->groupBy('major_id') as $certificatesGroup)
                    @if ($certificatesGroup->first()->major)
                        @php
                            $facultyColor = $certificatesGroup->first()->major->faculty->color;
                            $faculty =
                                app()->getLocale() == 'kh'
                                    ? $certificatesGroup->first()->major->faculty->FacultyKhmer
                                    : $certificatesGroup->first()->major->faculty->FacultyEnglish;
                            $major =
                                app()->getLocale() == 'kh'
                                    ? $certificatesGroup->first()->major->MajorKhmer
                                    : $certificatesGroup->first()->major->MajorEnglish;
                        @endphp
                        <tr>
                            <td colspan="10" class="text-uppercase text-white title-translate-font"
                                style="background-color: {{ $facultyColor }}; border-color: {{ $facultyColor }} !important;">
                                <h6>{{ __('beltei_university/certificate/certificate.faculty') }} {{ $faculty }}
                                </h6>
                                <p>{{ __('beltei_university/certificate/certificate.major') }} {{ $major }}</p>
                            </td>
                        </tr>
                    @endif
                    @foreach ($certificatesGroup as $certificate)
                        @php
                            $certificateNo = $certificate->certi_no;
                            $profileNo = $certificate->profile_no;
                            $name = app()->getLocale() == 'kh' ? $certificate->khmer_name : $certificate->latin_name;
                        @endphp
                        <tr class="cursor-pointer" data-bs-toggle="modal" data-bs-target="#testModel"
                            wire:click="openPortalModal('{{ $certificate->id }}')"
                            style="border-color: {{ $facultyColor }} !important;">
                            <td>{{ $certificateNo }}</td>
                            <td>{{ $name }}</td>
                            <td>{{ $certificate->gender }}</td>
                            {{-- <td>{{ Carbon::parse($certificate->dob)->format('d/M/Y') }}</td> --}}
                            <td>
                                <img data-bs-toggle="modal" data-bs-target="#VerifyModal"
                                    wire:click="openCertificateModal('{{ $certificate->id }}','profile' , '{{ $certificate->profile_no }}')"
                                    loading="lazy" style="max-width: 80px"
                                    src="https://t3.ftcdn.net/jpg/07/64/40/98/360_F_764409869_bcZuUrVPCXkeX09GIZOlSseroQKANt4O.jpg"
                                    alt="profile">
                            </td>
                            <td>
                                <img data-bs-toggle="modal" data-bs-target="#VerifyModal"
                                    wire:click="openCertificateModal('{{ $certificate->id }}','beltei' , '{{ $certificate->certi_no }}')"
                                    loading="lazy" style="max-width: 80px" class="cursor-pointer"
                                    src="{{ asset('asset/img/university/certificate/certi_placeholder.jpg') }}"
                                    alt="certificate">
                            </td>
                        </tr>
                    @endforeach
                @endforeach
            </tbody>
        </table>

        {{ $certificates->links('vendor.livewire.bootstrap') }}
    </div>

    <div wire:ignore.self class="modal fade" id="VerifyModal" tabindex="-1" aria-labelledby="VerifyModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Identity Verification</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form wire:submit.prevent="verify">
                    <div class="modal-body">
                        <div class="pb-3 alert alert-warning text-center">
                            <small>To protect your privacy, please verify that you are a human.</small>
                        </div>
                        <div class="recaptcha-box w-100">
                            <div class="recaptcha-left">
                                <input wire:model="robot" type="checkbox" id="notRobot">
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
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Verify</button>
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
                    <div class="card overflow-hidden shadow-lg border-3 border-header-color">
                        <img class="py-2 bg-header-color"
                            src="{{ asset('asset/img/university/certificate/header.png') }}" alt="">
                        <div wire:loading class="p-4">
                            <div class="alert alert-info" role="alert">
                                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                loading...
                            </div>
                        </div>
                        <div class="d-flex flex-column justify-content-center align-items-center py-4">
                            @if ($studentInfoShow)
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
                                            <td class="Times-New-Roman">Gender</td>
                                            <td class="Times-New-Roman">:</td>
                                            <td class="Times-New-Roman">{{ $studentInfoShow->gender }}</td>
                                        </tr>
                                        <tr>
                                            <td class="Times-New-Roman">Major</td>
                                            <td class="Times-New-Roman">:</td>
                                            <td class="Times-New-Roman">{{ $studentInfoShow->major->MajorEnglish }}
                                            </td>
                                        </tr>
                                    </table>
                                    <button class="btn btn-outline-success" data-bs-target="#VerifyModal"
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
