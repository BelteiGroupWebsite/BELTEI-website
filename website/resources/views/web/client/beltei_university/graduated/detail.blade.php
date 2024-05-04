@extends('web.client.beltei_university.layout.app')

@section('content')


<table class="table content-translate-font table-hover table-bordered w-100 f14" style="vertical-align: middle">

    <thead class="table-primary">
        <tr>
            <td>N<sup>o</sup></td>
            <td>Khmer Name</td>
            <td>Latin Name</td>
            <td>Gender</td>
            <td>Date of Birth</td>
            <td>Profile</td>
            <td>Certificate</td>
        </tr>
        
    </thead>

    <tbody class="f14">


        @foreach ($academicBatches as $academicBatch)
            
            @foreach($academicBatch->graduatedBIU as $graduatedBIU)
                <tr>
                    <td>{{ $graduatedBIU->certi_no }}</td>
                    <td>{{ $graduatedBIU->name_kh }}</td>
                    <td>{{ $graduatedBIU->name_eng }}</td>
                    <td>{{ $graduatedBIU->gender }}</td>
                    <td>{{ $graduatedBIU->dob }}</td>
                    <td>
                        <a target="blank" href="{{ url('certificate/'.$academicBatch->degree_id.'/'.$academicBatch->start_academic_year.'/'.$graduatedBIU->identify_user.'/profile/'.$graduatedBIU->certi_no.'.jpg') }}">
                            <img style="width: 50px" alt="report" src="{{ asset('certificate/'.$academicBatch->degree_id.'/'.$academicBatch->start_academic_year.'/'.$graduatedBIU->identify_user.'/profile/'.$graduatedBIU->certi_no.'.jpg') }}" alt="">
                        </a>
                    </td>
                    <td>
                        <a target="blank" href="{{ url('certificate/'.$academicBatch->degree_id.'/'.$academicBatch->start_academic_year.'/'.$graduatedBIU->identify_user.'/beltei/'.$graduatedBIU->certi_no.'.jpg') }}">
                            <img style="width: 50px" alt="report" src="{{ asset('certificate/'.$academicBatch->degree_id.'/'.$academicBatch->start_academic_year.'/'.$graduatedBIU->identify_user.'/beltei/'.$graduatedBIU->certi_no.'.jpg') }}" alt="">
                        </a>
                    </td>
                </tr>
            @endforeach

        @endforeach
        
        
    </tbody>
    
</table>


@endsection
