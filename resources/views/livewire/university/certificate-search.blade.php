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
                <td>{{ __('beltei_university/certificate/certificate.latin_name') }}</td>
                <td>{{ __('beltei_university/certificate/certificate.gender') }}</td>
                <td>{{ __('beltei_university/certificate/certificate.dob') }}</td>
                <td>{{ __('beltei_university/certificate/certificate.profile') }}</td>
                <td>{{ __('beltei_university/certificate/certificate.certificate') }}</td>
            </tr>
            
        </thead>
    
        <tbody class="f14">
    

            {{-- {{ dd($certificates) }}  --}}

            @foreach ($certificates as $certificate)
                <tr>
                    <td>{{ $certificate->certi_no }}</td>
                    <td>{{ $certificate->name_kh }}</td>
                    <td>{{ $certificate->name_eng }}</td>
                    <td>{{ $certificate->gender }}</td>
                    <td>{{ $certificate->dob }}</td>
                    <td>
                        <a target="blank" href="{{ url('certificate/biu/'.$certificate->degree_id.'/'.$certificate->academicBatch->start_academic_year.'/'.$certificate->identify_user.'/profile/'.$certificate->certi_no.'.jpg') }}">
                            <img loading="lazy" style="width: 50px" alt="report" src="{{ asset('certificate/biu/'.$certificate->degree_id.'/'.$certificate->academicBatch->start_academic_year.'/'.$certificate->identify_user.'/profile/'.$certificate->certi_no.'.jpg') }}" alt="">
                        </a>
                    </td>
                    <td>
                        <a target="blank" href="{{ url('certificate/biu/'.$certificate->degree_id.'/'.$certificate->academicBatch->start_academic_year.'/'.$certificate->identify_user.'/beltei/'.$certificate->certi_no.'.jpg') }}">
                            <img loading="lazy" style="width: 50px" alt="report" src="{{ asset('certificate/biu/'.$certificate->degree_id.'/'.$certificate->academicBatch->start_academic_year.'/'.$certificate->identify_user.'/beltei/'.$certificate->certi_no.'.jpg') }}" alt="">
                        </a>
                    </td>
                </tr>
            @endforeach
            
        </tbody>
        
    </table>

    {{ $certificates->links() }}
    
    
</div>