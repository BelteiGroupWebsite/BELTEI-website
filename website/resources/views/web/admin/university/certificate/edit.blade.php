@extends('web.admin.layouts.app')
@section('content-header', 'User')
@section('sub-header', 'User')

@section('head')
    <style>
        #img-placeholder {
            display: none;
        }

        #test:hover~#img-placeholder {
            display: block;
        }

        .loader {
            width: 80px;
            height: 80px;
            border: 10px solid;
            border-color: #ffffff transparent;
            border-radius: 50%;
            display: inline-block;
            box-sizing: border-box;
            animation: rotation 1s linear infinite;
            position: absolute;
        }

        .body-active {
            z-index: 10000;
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        @keyframes rotation {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>
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


                <form action="{{ route('admin.school.certificate.update' , $certificate->id) }}" method="post" enctype="multipart/form-data">
                    @method("PATCH")
                    @csrf
                    <div class="row">

                        <div class="row mb-3 me-0 pe-0">
                            <div class="col-6 mb-3">
                                <label for="" class="form-label">Khmer name</label>
                                <input class="form-control Battambang-Regular" type="text" name="khmer_name"
                                    value="{{ $certificate->name_kh }}">
                            </div>
                            <div class="col-6 mb-3">
                                <label for="" class="form-label">English name</label>
                                <input class="form-control Battambang-Regular" type="text" name="english_name"
                                    value="{{ $certificate->name_eng }}">
                            </div>
                        </div>
                        <div class="row mb-3 me-0 pe-0">
                            <div class="col-6 mb-3">
                                <label for="" class="form-label">Nation</label>
                                <input class="form-control Battambang-Regular" type="text" name="nation"
                                    value="{{ $certificate->nation }}">
                            </div>
                            <div class="col-6 mb-3">
                                <label for="" class="form-label">Gender</label>
                                <input class="form-control Battambang-Regular" type="text" name="gender"
                                    value="{{ $certificate->gender }}">
                            </div>
                        </div>
                        <div class="row mb-3 me-0 pe-0">
                            <div class="col-6 mb-3">
                                <label for="" class="form-label">DOB</label>
                                <input class="form-control Battambang-Regular" type="text" name="dob"
                                    value="{{ $certificate->dob }}">
                            </div>
                            <div class="col-6 mb-3">
                                <label for="" class="form-label">Campus</label>
                                <input class="form-control Battambang-Regular" type="text" name="campus"
                                    value="{{ $certificate->campus }}">
                            </div>
                        </div>


                        <div class="row mb-3 me-0 pe-0">
                            <div class="col-4 mb-3" id="profileDiv">
                                <label for="" class="form-label"><b>Student Profile</b> <i class="text-danger">(
                                        Images:
                                        jpg)</i></label>
                                <div class="form-group d-flex">
                                    <input class="form-control" name="studentProfileImg" id="studentProfileImg"
                                        accept=".jpg" onchange="ShowInputSRC(this)" type="file">
                                    <button class="btn btn-info text-white">?</button>
                                </div>
                                <img loading="lazy" alt="please update" class="w-100" style="max-width: 100px"
                                    src="{{ asset('certificate/' . $certificate->grade . '/' . $certificate->batch_startYear . '/' . $certificate->identify_user . '/profile/' . str_replace(' ', '', strtoupper($certificate->name_eng)) . '.jpg') }}"
                                    alt="">
                            </div>
                            <div class="col-4 mb-3" id="belteiCertificateDiv">
                                <label for="" class="form-label"><b>Beltei Certificate</b> <i class="text-danger">(
                                        Images:
                                        jpg)</i></label>
                                <div class="form-group d-flex">
                                    <input class="form-control" name="belteiCertificateImg" id="belteiCertificateImg"
                                        accept=".jpg" onchange="ShowInputSRC(this)" type="file">
                                    <button class="btn btn-info text-white">?</button>
                                </div>
                                <img loading="lazy" alt="please update" class="w-100" style="max-width: 100px"
                                    src="{{ asset('certificate/' . $certificate->grade . '/' . $certificate->batch_startYear . '/' . $certificate->identify_user . '/beltei/' . $certificate->certi_no . '.jpg') }}"
                                    alt="">

                            </div>
                            <div class="col-4 mb-3" id="moeyCertificateDiv">
                                <label for="" class="form-label"><b>Moey/IELTS Certificate</b> <i
                                        class="text-danger">(
                                        Images:
                                        jpg)</i></label>
                                <div class="form-group d-flex">
                                    <input class="form-control" name="moeyCertificateImg" id="moeyCertificateImg"
                                        accept=".jpg" onchange="ShowInputSRC(this)" type="file">
                                    <button class="btn btn-info text-white">?</button>
                                </div>
                                <img loading="lazy" alt="please update" class="w-100" style="max-width: 100px"
                                    src="{{ asset('certificate/' . $certificate->grade . '/' . $certificate->batch_startYear . '/' . $certificate->identify_user . '/moey/' . $certificate->moey_id . '.jpg') }}"
                                    alt="">

                            </div>
                        </div>

                        <div class="my-3">
                            <div class="col-12">
                                <p id="fileNameP"></p>
                                <div class="progress mt-3" style="height: 25px">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated"
                                        role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
                                        style="width: 0%; height: 100%">
                                        0%</div>
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






    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

    <script>
        function ShowInputSRC(btn) {
            let parent = btn.parentNode;
            let file = btn.files[0]; // Get the file from the input

            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    let newElement;

                    if (file.type.startsWith('image')) {
                        newElement = document.createElement('img');
                    } else if (file.type === 'application/pdf') {
                        newElement = document.createElement('iframe');
                    } else {
                        console.log('Unsupported file type:', file.type);
                        return;
                    }

                    newElement.src = e.target.result;
                    newElement.style.height = '120px';

                    if (newElement.tagName === 'IFRAME') {
                        newElement.style.height = '120px'; // Set the desired height for the iframe
                    }

                    // Remove any existing element of the same type
                    let existingElement = parent.parentNode.querySelector(newElement.tagName);
                    if (existingElement) {
                        parent.parentNode.removeChild(existingElement);
                    }

                    parent.parentNode.appendChild(newElement);
                };

                reader.readAsDataURL(file);
            }
        }
    </script>

@endsection
