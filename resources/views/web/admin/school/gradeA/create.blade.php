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
        <a class="dropdown-item" href="{{ route('admin.school.grade-A.create') }}">Create Grade-A </a>
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
                <h5>Grade A</h5>
            </div>
            <div class="card-body">

                <form id="form" action="{{ route('admin.school.grade-A.store') }}" method="post"
                    enctype="multipart/form-data">

                    @csrf

                    <div class="row">


                        <div class="row mb-3 me-0 pe-0" id="academicYearDiv">
                            <div class="col-6 mb-3">
                                <label for="" class="form-label">Start Academic Year <i
                                        class="text-danger"></i></label>
                                <input required class="form-control" name="startAcademicYear" id="startAcademicYear"
                                    type="number" placeholder="YYYY / 2022">
                            </div>
                            <div class="col-6 mb-3">
                                <label for="" class="form-label">End Academic Year <i
                                        class="text-danger"></i></label>
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
                                    <input  class="form-control" name="certificateInformationExcel"
                                        id="certificateInformationExcel" accept=".xlsx" type="file">
                                    <a class="btn btn-info text-white" id="test"
                                        href="{{ asset('assets\images\school\excel-placeholder.png') }}">?</a>
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <label for="" class="form-label"><b>Student Images</b> <i
                                        class="text-danger">(Excel:
                                        .pdf)</i></label>
                                <div class="form-group d-flex">
                                    <input  class="form-control" name="studentProfileImg" id="studentProfileImg"
                                        accept=".jpg , .png , .jpeg" multiple type="file">
                                </div>
                            </div>
                        </div>


                        <div class="my-3">
                            <div class="col-12">
                                <p id="fileNameP"></p>
                                <div class="progress mt-3" style="height: 25px">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
                                        style="width: 0%; height: 100%">
                                        0%</div>
                                </div>
                            </div>
                        </div>


                        <div class="d-flex justify-content-end py-3">
                            <button class="btn btn-success px-3" type="button" onclick="SubmitForm()">submit</button>
                        </div>
                    </div>

                </form>


            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.4/xlsx.full.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/resumablejs@1.1.0/resumable.min.js"></script>

    <script>
        let resumableProfile = createResumable('profile', '#studentProfileImg');

        function createResumable(targetUrl, fileInput) {
            let resumable = new Resumable({
                target: '{{ route('admin.school.grade-A.files.upload.large') }}?folder=' + targetUrl,
                query: {
                    _token: '{{ csrf_token() }}'
                },
                chunkSize: 5 * 1024 * 1024,
                headers: {
                    'Accept': 'application/json'
                },
                forceChunkSize: true,
                chunkRetryInterval: 5000,
                testChunks: true,
                throttleProgressCallbacks: 1,
                maxChunkRetries: 20,
                prioritizeFirstAndLastChunk: true,
                simultaneousUploads: 1
            });

            resumable.on('fileAdded', () => showProgress());
            resumable.on('fileProgress', file => updateProgress(file));
            resumable.on('fileSuccess', file => hideLoader());
            resumable.on('fileError', (file, error) => handleUploadError(file, error));

            resumable.assignBrowse($(fileInput));
            return resumable;
        }

        function showProgress() {
            $('.progress .progress-bar').css('width', '0%').html('0%').removeClass('bg-success').show();
        }

        function updateProgress(file) {
            let value = Math.floor(file.progress() * 100);
            $('.progress .progress-bar').css('width', `${value}%`).html(`${value}%`);
            // if (value === 100) {
            //     $('#fileNameP').text("Completed!").addClass('bg-success');
            // }
        }

        function hideProgress() {
            $('.progress').hide();
        }

        function hideLoader() {
            setTimeout(() => {
                $('#loader').addClass('d-none');
                $('#alert').removeClass('d-none');
            }, 1000);
        }

        function handleUploadError(file, error) {
            console.log('File Upload error:', error);
            if (file.retry < file.resumableObj.maxChunkRetries) {
                console.log('Retrying...');
                file.retry(); // Retry uploading the file
            } else {
                console.log('Failed to upload file: ' + file.fileName);

            }
        }

        function SubmitForm() {

            if (validation()) {
                const fileInput = document.getElementById('certificateInformationExcel');
                $('#loader').removeClass('d-none');

                const file = fileInput.files[0];
                const reader = new FileReader();

                reader.onload = (event) => {
                    const data = new Uint8Array(event.target.result);
                    const workbook = XLSX.read(data, {
                        type: 'array'
                    });
                    const sheetName = workbook.SheetNames[0];
                    const sheet = workbook.Sheets[sheetName];
                    const jsonData = XLSX.utils.sheet_to_json(sheet, {
                        header: 1
                    });
                    const cleanedData = jsonData.filter(row => row[0] !== undefined).map(row => row.slice(1, 4));
                    console.log(cleanedData)
                    var batch_startYear;

                    batch_startYear = $('#startAcademicYear').val();

                    fetch('{{ route('admin.school.grade-A.excel.upload') }}', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                                    'content')
                            },
                            body: JSON.stringify({

                                data: [cleanedData, batch_startYear]
                            })
                        })
                        .then(response => {
                            if (response.ok) {
                                return response.json();
                            } else {
                                console.log(response.message);
                                throw new Error('Failed to send data');
                            }
                        })
                        .then(data => {

                            if (!$('#studentProfileImg').hasClass('d-none'))
                                resumableProfile.upload();




                            console.log(data.message);
                        })
                        .catch(error => console.error('Error:', error));
                };

                reader.readAsArrayBuffer(file);
            }

        }


        function validation() {
            var AllInput = document.querySelectorAll('[required]'); // it include input(text,file) and select
            var isChecked = true;

            AllInput.forEach(Input => {
                if (!Input.classList.contains('d-none')) {
                    if (Input.value == null || Input.value === "") {
                        isChecked = false;
                        console.log(Input);
                        Input.classList.add('is-invalid');
                    } else {
                        Input.classList.remove('is-invalid');
                    }
                }
            });

            console.log(isChecked);

            return isChecked;
        }
    </script>

@endsection
