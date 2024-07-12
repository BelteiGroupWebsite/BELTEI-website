<div>

    
    <div class="title-translate-font mb-4">
        <h4 class="Blue-color">{{ $batchCert->degree->degree_kh . " ជំនាន់ទី​ " . $batchCert->batch . " ឆ្នាំ " . $batchCert->academic_year . "-" .$batchCert->academic_year + 1 }}</h4>
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

    <table class="table content-translate-font table-hover table-bordered w-100 f14" style="vertical-align: middle">

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
                <tr>
                    <td colspan="10" class=" text-uppercase text-white" style="background-color: {{ $certificatesGroup->first()->major->faculty->color }};">
                        <h5>{{ $certificatesGroup->first()->major->faculty->FacultyEnglish }}</h5>
                        <h6>{{ $certificatesGroup->first()->major->MajorEnglish }}</h6>
                    </td>
                </tr>
                @foreach ($certificatesGroup as $certificate)
                    <tr>
                        <td>{{ $certificate->certi_no }}</td>
                        <td>{{ $certificate->khmer_name }}</td>
                        <td>{{ $certificate->gender }}</td>
                        <td>{{ $certificate->dob }}</td>
                        <td>
                            <a href="{{ asset('storage/upload/certificate/university/' . $degreeId . '/' . $batchId. '/profile/' . $certificate->certi_no . '.jpg') }}">
                                <img style="max-width: 100px" src="{{ asset('storage/upload/certificate/university/' . $degreeId . '/' . $batchId. '/profile/' . $certificate->certi_no . '.jpg') }}" alt="profile">
                            </a>
                        </td>
                        <td>
                            <a href="{{ asset('storage/upload/certificate/university/' . $degreeId . '/' . $batchId. '/beltei/' . $certificate->certi_no . '.jpg') }}">
                                <img style="max-width: 100px" src="{{ asset('storage/upload/certificate/university/' . $degreeId . '/' . $batchId. '/beltei/' . $certificate->certi_no . '.jpg') }}" alt="certificate">
                            </a>
                        </td>
                    </tr>
                @endforeach
            @endforeach
        
            
        </tbody>
        
    </table>

    {{ $certificates->links() }}
    
    
</div>