<div>


    <div class="title-translate-font mb-4">
        @php
            use Carbon\Carbon;
            if (app()->getLocale() == 'kh') {
                $degree = $batchCert->degree->degree_kh;
            } else {
                $degree = $batchCert->degree->degree_eng;
            }

        @endphp

        <h4 class="Blue-color">{{ $degree }} {{ __('beltei_university/certificate/certificate.batch') }}
            {{ $batchCert->batch }} {{ __('beltei_university/certificate/certificate.year') }}
            {{ $batchCert->academic_year . '-' . $batchCert->academic_year + 1 }}</h4>
        <h5 class="mt-3">{{ __('beltei_university/certificate/certificate.find') }}</h5>
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
                    <td>{{ __('beltei_university/certificate/certificate.profile') }}</td>
                    <td>{{ __('beltei_university/certificate/certificate.certificate') }}</td>
                </tr>

            </thead>

            <tbody class="f14">

                {{-- {{ dd($certificates->groupBy('major_id')) }} --}}

                @foreach ($certificates->groupBy('major_id') as $certificatesGroup)
                    @if ($certificatesGroup->first()->major->faculty)
                        @php
                            $facultyColor = $certificatesGroup->first()->major->faculty->color;

                            if (app()->getLocale() == 'kh') {
                                $faculty = $certificatesGroup->first()->major->faculty->FacultyKhmer;
                                $major = $certificatesGroup->first()->major->MajorKhmer;
                            } else {
                                $major = $certificatesGroup->first()->major->MajorEnglish;
                                $faculty = $certificatesGroup->first()->major->faculty->FacultyEnglish;
                            }

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
                            $profileImagePath = asset(
                                "storage/upload/certificate/university/{$degreeId}/{$batchId}/profile/{$profileNo}.jpg",
                            );
                            $certificateImagePath = asset(
                                "storage/upload/certificate/university/{$degreeId}/{$batchId}/beltei/{$certificateNo}.jpg",
                            );

                            if (app()->getLocale() == 'kh') {
                                $name = $certificate->khmer_name;
                            } else {
                                $name = $certificate->latin_name;
                            }

                        @endphp
                        <tr style="border-color: {{ $facultyColor }} !important;">
                            <td>{{ $certificateNo }}</td>
                            <td>{{ $name }}</td>
                            <td>{{ $certificate->gender }}</td>
                            <td>{{ Carbon::parse($certificate->dob)->format('d/M/Y') }}</td>
                            <td>
                                <a href="{{ $profileImagePath }}">
                                    <img loading="lazy" style="max-width: 80px" src="{{ $profileImagePath }}"
                                        alt="profile">
                                </a>
                            </td>
                            <td>
                                <a href="{{ $certificateImagePath }}">
                                    <img loading="lazy" style="max-width: 80px" src="{{ $certificateImagePath }}"
                                        alt="certificate">
                                </a>
                            </td>
                        </tr>
                    @endforeach
                @endforeach



            </tbody>

        </table>

        {{ $certificates->links('vendor.livewire.bootstrap') }}
    </div>



</div>
