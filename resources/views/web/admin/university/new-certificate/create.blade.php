@extends('web.admin.layouts.app')
@section('content-header', 'User')
@section('sub-header', 'User')

@section('head')

@endsection


@section('setting-link')
    @if (Auth::user()->role_id < 4)
        <a class="dropdown-item" href="{{ route('admin.user.create') }}">Create User</a>
    @endif
    {{-- <a class="dropdown-item" href="javascript:;">Another action</a>
    <a class="dropdown-item" href="javascript:;">Something else here</a> --}}
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="javascript:;">Report</a>
@endsection


@section('content')

    <div id="loader" class="body-active d-none">
        <span class="loader" style="z-index: 10"></span>
    </div>

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h5>Certificate</h5>
            </div>
            <div class="card-body">

                <form action="{{ route('admin.university.certificate-new.store') }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">


                        <div class="row mb-3 me-0 pe-0" id="academicYearDiv">
                            <div class="col-12 mb-3">
                                <label for="" class="form-label">Degree <i class="text-danger"></i></label>
                                <select required name="degree" id="degree" class="form-control">
                                    <option value="" disabled selected>Please select degree</option>
                                    @foreach ($degrees as $degree)
                                        <option value="{{ $degree->id }}">{{ $degree->degree_eng }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-6 mb-3">
                                <label for="batch" class="form-label">Batch <i class="text-danger">*</i></label>
                                <input class="form-control" required name="batch" id="batch" type="number"
                                    placeholder="18" min="1">
                                @error('batch')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-6 mb-3">
                                <label for="startAcademicYear" class="form-label">Start Academic Year <i
                                        class="text-danger"></i></label>
                                <input class="form-control" name="startAcademicYear" id="startAcademicYear" type="number"
                                    placeholder="YYYY / 2022" min="1970" max="9999">
                                @error('startAcademicYear')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>



                        <div class="row mb-3 me-0 pe-0">
                            <div class="col-6 mb-3">
                                <label for="" class="form-label"><b>Certificate Information</b> <i
                                        class="text-danger">(Excel:
                                        .xlsx, .xls)</i></label>
                                <div class="form-group d-flex">
                                    <input required class="form-control" name="certificateInformationExcel"
                                        id="certificateInformationExcel" accept=".xlsx, .xls , .scv" type="file">
                                    <a class="btn btn-info text-white" download id="test"
                                        href="{{ asset('asset/pdf/admin/university/exampleExcelList.xls') }}">?</a>
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <label for="" class="form-label"><b>Certificate Reference</b> <i
                                        class="text-danger">(Pdf:
                                        .pdf)</i></label>
                                <div class="form-group d-flex">
                                    <input required class="form-control" name="certificateReferencePDF"
                                        id="certificateReferencePDF" accept=".pdf" type="file">
                                </div>
                            </div>
                        </div>



                        <div class="d-flex justify-content-end py-3">
                            <button class="btn btn-success px-3" type="submit">submit</button>
                        </div>
                    </div>
                </form>


            </div>
        </div>
    </div>

@endsection
