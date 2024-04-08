@extends('web.admin.layouts.app')
@section('content-header', 'User')
@section('sub-header', 'User')


@section('setting-link')
    @if (Auth::user()->role_id < 4)
        <a class="dropdown-item" href="{{ route('admin.school.grade-A.create') }}">Create Grade-A </a>
    @endif
    {{-- <a class="dropdown-item" href="javascript:;">Another action</a>
    <a class="dropdown-item" href="javascript:;">Something else here</a> --}}
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="javascript:;">Report</a>
@endsection


@section('content')


<div class="container">
    <div class="card">
        <div class="card-header">
            <h5>Grade A</h5>
        </div>
        <div class="card-body">

            <form id="form" action="{{ route('admin.school.grade-A.store') }}" method="post" enctype="multipart/form-data">

                @csrf
                
                <div class="row">
    
    
                    <div class="row mb-3 me-0 pe-0" id="academicYearDiv">
                        <div class="col-6 mb-3">
                            <label for="" class="form-label">Start Academic Year <i class="text-danger"></i></label>
                            <input required class="form-control" name="startAcademicYear" id="startAcademicYear"
                                type="number" placeholder="YYYY / 2022">
                        </div>
                        <div class="col-6 mb-3">
                            <label for="" class="form-label">End Academic Year <i class="text-danger"></i></label>
                            <input required class="form-control" name="endAcademicYear" id="endAcademic" type="number"
                                placeholder="YYYY / 2023">
                        </div>
                    </div>
    
    
    
                    <div class="row mb-3 me-0 pe-0">
                        <div class="col-6 mb-3">
                            <label for="" class="form-label"><b>Student Information</b> <i
                                    class="text-danger">(Excel:
                                    .xlsx)</i></label>
                            <div class="form-group d-flex">
                                <input required class="form-control" name="certificateInformationExcel"
                                    id="certificateInformationExcel" accept=".xlsx" type="file">
                                <a class="btn btn-info text-white" id="test" href="{{ asset('assets\images\school\excel-placeholder.png') }}">?</a>
                            </div>
                        </div>
                        <div class="col-6 mb-3">
                            <label for="" class="form-label"><b>Student Images</b> <i
                                    class="text-danger">(Excel:
                                    .pdf)</i></label>
                            <div class="form-group d-flex">
                                <input required class="form-control" name="certificateReferencePDF" id="certificateReferencePDF"
                                    accept=".jpg , .png , .jpeg" multiple type="file">
                            </div>
                        </div>
                    </div>
    
    
                    <div class="d-flex justify-content-end py-3">
                        <button class="btn btn-success px-3" type="sumit">submit</button>
                    </div>
                </div>
                
            </form>
            

        </div>
    </div>
</div>


<script>

    
    
</script>


@endsection
