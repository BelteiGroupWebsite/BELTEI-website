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
                            <label for="" class="form-label">Batch <i class="text-danger"></i></label>
                            <input required class="form-control" name="batch" id="batch"
                                type="number" placeholder="NN / 18">
                        </div>
                        <div class="col-6 mb-3">
                            <label for="" class="form-label">Start Academic Year <i class="text-danger"></i></label>
                            <input required class="form-control" name="startAcademicYear" id="startAcademicYear"
                                type="number" placeholder="YYYY / 2022">
                        </div>
                        {{-- <div class="col-6 mb-3">
                            <label for="" class="form-label">End Academic Year <i class="text-danger"></i></label>
                            <input required class="form-control" name="endAcademicYear" id="endAcademic" type="number"
                                placeholder="YYYY / 2023">
                        </div> --}}
                    </div>



                    <div class="row mb-3 me-0 pe-0">
                        <div class="col-6 mb-3">
                            <label for="" class="form-label"><b>Certificate Information</b> <i
                                    class="text-danger">(Excel:
                                    .xlsx)</i></label>
                            <div class="form-group d-flex">
                                <input class="form-control" name="certificateInformationExcel"
                                    id="certificateInformationExcel" accept=".xlsx" type="file">
                                <a class="btn btn-info text-white" download id="test" href="{{ asset('asset/pdf/admin/university/ExampleCertificate.xlsx') }}">?</a>
                            </div>
                        </div>
                        <div class="col-6 mb-3">
                            <label for="" class="form-label"><b>Certificate Reference</b> <i
                                    class="text-danger">(Excel:
                                    .pdf)</i></label>
                            <div class="form-group d-flex">
                                <input class="form-control" name="certificateReferencePDF" id="certificateReferencePDF"
                                    accept=".pdf" type="file">
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3 me-0 pe-0">
                        <div class="col-6 mb-3" id="profileDiv">
                            <label for="" class="form-label"><b>Student Profile</b> <i
                                    class="text-danger">(Multiple
                                    Images:
                                    jpg)</i></label>
                            <div class="form-group d-flex">
                                <input class="form-control" name="studentProfileImg" id="studentProfileImg" multiple
                                    accept=".jpg" type="file">
                                <button class="btn btn-info text-white">?</button>
                            </div>
                        </div>
                        <div class="col-6 mb-3" id="belteiCertificateDiv">
                            <label for="" class="form-label"><b>Beltei Certificate</b> <i
                                    class="text-danger">(Multiple
                                    Images:
                                    jpg)</i></label>
                            <div class="form-group d-flex">
                                <input class="form-control" name="belteiCertificateImg" id="belteiCertificateImg"
                                    accept=".jpg" multiple type="file">
                                <button class="btn btn-info text-white">?</button>
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

            </div>
        </div>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.4/xlsx.full.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/resumablejs@1.1.0/resumable.min.js"></script>

    <script>
        let resumableBeltei = createResumable('beltei', '#belteiCertificateImg');
        let resumableReference = createResumable('reference', '#certificateReferencePDF');
        let resumableProfile = createResumable('profile', '#studentProfileImg');

        function createResumable(targetUrl, fileInput) {
            let resumable = new Resumable({
                target: '{{ route('admin.university.certificate.files.upload.large') }}?folder=' + targetUrl,
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
                    // const cleanedData = jsonData.filter(row => row[0] !== undefined).map(row => row.slice(1, 9));
                    const cleanedData = jsonData.slice(1) // Start from the second row
                    .filter(row => row[0] !== undefined) // Filter out rows with undefined first element
                    .map(row => row.slice(0, 7)); // Remove the first element from each row and keep columns 1 to 9

                    // console.log(cleanedData);

                    fetch('{{ route('admin.university.certificate.excel.upload') }}', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                                    'content')
                            },
                            body: JSON.stringify({
                                
                                data: [cleanedData, $('#degree').val() , $('#startAcademicYear').val() ,$('#batch').val() ]
                            })
                        })
                        .then(response => {
                            if (response.ok) {
                                return response.json();
                            } else {
                                throw new Error('Failed to send data');
                            }
                        })
                        .then(data => {

                            if (!$('#belteiCertificateImg').hasClass('d-none'))
                                resumableBeltei.upload();

                            if (!$('#certificateReferencePDF').hasClass('d-none'))
                                resumableReference.upload();

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

    {{-- <script type="text/javascript">
        let PhotoInput = $('#belteiCertificateImg');
        let moey = $('#moeyCertificateImg');
        let submited = false;

        var test = 1;


        // Function to create a Resumable instance for a specific file input button
        let resumable = new Resumable({
            target: '{{ route('admin.university.certificate.files.upload.large') }}',
            query: {
                _token: '{{ csrf_token() }}'
            },
            // fileType: ['pdf'],
            chunkSize: (5 * 1024 * 1024),
            headers: {
                'Accept': 'application/json'
            },
            forceChunkSize: true,
            chunkRetryInterval: 5000, // Retry failed chunk uploads every 5 seconds
            testChunks: true, // Test chunks before uploading
            throttleProgressCallbacks: 1, // Increase progress event frequency
            maxChunkRetries: 20, // Retry uploading a chunk up to 20 times
            prioritizeFirstAndLastChunk: true,
            simultaneousUploads: 1, // Upload files one by one to reduce errors
        });
        resumable.on('fileAdded', function(file) {
            // Do not automatically upload here
            showProgress();
        });

        resumable.on('fileProgress', function(file) {
            // updateProgress(((test++)/2));
            //  updateProgress(((test++)/2));
            updateProgress(Math.floor(file.progress() * 100));
        });

        resumable.on('fileSuccess', function(file, response) {
            response = JSON.parse(response);
            resumable1.upload();
        });

        resumable.on('fileError', function(file, error) {
            console.log('File Upload error:', error);
            if (file.retry < resumable.maxChunkRetries) {
                console.log('Retrying...');
                file.retry(); // Retry uploading the file
            } else {
                alert('Failed to upload file: ' + file.fileName);
            }
        });
        let resumable1 = new Resumable({
            target: '{{ route('admin.university.certificate.files.upload.large1') }}',
            query: {
                _token: '{{ csrf_token() }}'
            },
            // fileType: ['pdf'],
            chunkSize: (5 * 1024 * 1024),
            headers: {
                'Accept': 'application/json'
            },
            forceChunkSize: true,
            chunkRetryInterval: 5000, // Retry failed chunk uploads every 5 seconds
            testChunks: true, // Test chunks before uploading
            throttleProgressCallbacks: 1, // Increase progress event frequency
            maxChunkRetries: 20, // Retry uploading a chunk up to 20 times
            prioritizeFirstAndLastChunk: true,
            simultaneousUploads: 1, // Upload files one by one to reduce errors
        });
        resumable1.on('fileAdded', function(file) {
            // Do not automatically upload here
            showProgress();
        });

        resumable1.on('fileProgress', function(file) {
            //  updateProgress(((test++)/cleanedData.length));
            // updateProgress(Math.floor((test++)/cleanedData.length));
            updateProgress(Math.floor(file.progress() * 100));
        });

        resumable1.on('fileSuccess', function(file, response) {
            response = JSON.parse(response);
            hideLoader(test++)
            // console.log(response)
            // setTimeout(() => {
            //     document.getElementById("loader").classList.add('d-none');
            //     document.getElementById("alert").classList.remove('d-none');
            // }, 1000);
        });

        resumable1.on('fileError', function(file, error) {
            console.log('File Upload error:', error);
            if (file.retry < resumable1.maxChunkRetries) {
                console.log('Retrying...');
                file.retry(); // Retry uploading the file
            } else {
                alert('Failed to upload file: ' + file.fileName);
            }
        });

        resumable.assignBrowse($('#belteiCertificateImg'));
        resumable1.assignBrowse($('#moeyCertificateImg'));





        let progress = $('.progress');

        function showProgress() {
            progress.find('.progress-bar').css('width', '0%');
            progress.find('.progress-bar').html('0%');
            progress.find('.progress-bar').removeClass('bg-success');
            progress.show();
        }

        function updateProgress(value) {
            progress.find('.progress-bar').css('width', `${value}%`);
            progress.find('.progress-bar').html(`${value}%`);

            if (value === 100) {
                $('#fileNameP').text("Completed!");
                progress.find('.progress-bar').addClass('bg-success');
            }
        }

        function hideProgress() {
            progress.hide();
        }

        function hideLoader(value){
            if(value == cleanedData.length )
            setTimeout(() => {
                document.getElementById("loader").classList.add('d-none');
                document.getElementById("alert").classList.remove('d-none');
            }, 1000);
        }
        
        function SubmitForm() {
            const fileInput = document.getElementById('certificateInformationExcel');

            document.getElementById("loader").classList.remove('d-none');

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

                // const filteredData = jsonData.map(row => row.slice(1, 8)); // Extract columns B to D
                const cleanedData = jsonData.filter(row => row[0] !== undefined).map(row => row.slice(1,9)); // Extract columns B to D

                console.log(cleanedData.length);
                console.log("Successfully");


                fetch('{{ route('admin.university.certificate.excel.upload') }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                                'content')
                        },
                        body: JSON.stringify({
                            data: [cleanedData, document.getElementById('grade').value, document
                                .getElementById('batch').value
                            ],

                        })
                    })
                    .then(response => {
                        if (response.ok) {
                            return response.json(); // Return the promise to chain further

                        } else {
                            throw new Error('Failed to send data');
                            console.log(response);
                            console.log(data.message);
                        }
                    })
                    .then(data => {
                        resumable.upload();
                        console.log(data.message);
                    })
                    .catch(error => console.error('Error:', error));
            }

            reader.readAsArrayBuffer(file);

            // });

        }
    </script> --}}

@endsection
