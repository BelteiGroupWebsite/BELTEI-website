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

                    <div class="row mb-3 me-0 pe-0">
                        <div class="col-6">
                            <label for="" class="form-label">Category <i class="text-danger"></i></label>
                            <select required class="form-select" name="category" id="category"
                                onchange="categoryOnchange(this)">
                                <option value="1">General Education</option>
                                <option value="2">ESL Program</option>
                                <option value="3">IMA Program</option>
                            </select>
                        </div>
                        <div class="col-6">
                            <label for="" class="form-label">Grade <i class="text-danger"></i></label>
                            <select onchange="changeProfile(this)" required class="form-select" name="grade"
                                id="grade">
                                <option class="GE profile" value="12">12</option>
                                <option class="GE profile" value="9">9</option>
                                <option class="GE c1" value="6">6</option>

                                <option class="ES profile" value="12">12</option>
                                <option class="ES c1" value="9">6</option>
                                <option class="ES c1" value="6">Pre-6</option>

                                <option class="IM c1" value="12">11</option>
                                <option class="IM c1" value="6">6</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3 me-0 pe-0" id="batchDiv">
                        <div class="col-6 mb-3">
                            <label for="" class="form-label">Batch<i class="text-danger">*</i></label>
                            <input required class="form-control" name="batch" id="batch" type="number"
                                placeholder="18">
                        </div>

                    </div>
                    {{-- <div class="col-6 mb-3" id="examDateDiv">
                        <label for="" class="form-label">Exam Date<i class="text-danger">*</i></label>
                        <input required class="form-control" name="examDate" id="examDate" type="date">
                    </div> --}}

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
                            <label for="" class="form-label"><b>Certificate Information</b> <i
                                    class="text-danger">(Excel:
                                    .xlsx)</i></label>
                            <div class="form-group d-flex">
                                <input class="form-control" name="certificateInformationExcel"
                                    id="certificateInformationExcel" accept=".xlsx , .xls" type="file">
                                <a class="btn btn-info text-white" id="test" href="{{ asset('assets\images\school\excel-placeholder.png') }}">?</a>
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
                        <div class="col-4 mb-3" id="profileDiv">
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
                        <div class="col-4 mb-3" id="belteiCertificateDiv">
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
                        <div class="col-4 mb-3" id="moeyCertificateDiv">
                            <label for="" class="form-label"><b>Moey/IELTS Certificate</b> <i
                                    class="text-danger">(Multiple
                                    Images:
                                    jpg)</i></label>
                            <div class="form-group d-flex">
                                <input class="form-control" name="moeyCertificateImg" id="moeyCertificateImg" multiple
                                    accept=".jpg" type="file">
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
        let resumableMoey = createResumable('moey', '#moeyCertificateImg');
        let resumableReference = createResumable('reference', '#certificateReferencePDF');
        let resumableProfile = createResumable('profile', '#studentProfileImg');

        function createResumable(targetUrl, fileInput) {
            let resumable = new Resumable({
                target: '{{ route('admin.school.certificate.files.upload.large') }}?folder=' + targetUrl,
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
                    .map(row => row.slice(1, 9)); // Remove the first element from each row and keep columns 1 to 9

                    console.log(cleanedData);

                    var batch_startYear;
                    if($('#batch').val()){
                        batch_startYear = $('#batch').val();
                    }else{
                        batch_startYear = $('#startAcademicYear').val();
                    }

                    fetch('{{ route('admin.school.certificate.excel.upload') }}', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                                    'content')
                            },
                            body: JSON.stringify({
                                
                                data: [cleanedData, $('#grade').val(), batch_startYear , $('#category').val() ]
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

                            if (!$('#moeyCertificateImg').hasClass('d-none'))
                                resumableMoey.upload();

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


        // let category = document.getElementById('category');
        categoryOnchange(document.getElementById('category'))

        function categoryOnchange(category) {
            var GE = $('.GE');
            var ES = $('.ES');
            var IM = $('.IM');

            $('#grade').prop('selectedIndex', -1);

            if (category.value === "1") {

                $('#academicYearDiv input').each(function() {
                    $(this).removeClass('d-none');
                });


                $('#academicYearDiv').removeClass('d-none');
                $('#batchDiv').addClass('d-none');
                $('#batchDiv input').addClass('d-none');

                GE.each(function() {
                    $(this).removeClass('d-none');
                });
                ES.each(function() {
                    $(this).addClass('d-none');
                });
                IM.each(function() {
                    $(this).addClass('d-none');
                });
                
            } else if (category.value === "2") {

                $('#academicYearDiv input').each(function() {
                    $(this).addClass('d-none');
                });

                $('#academicYearDiv').addClass('d-none');
                $('#batchDiv').removeClass('d-none');
                $('#batchDiv input').removeClass('d-none');
                GE.each(function() {
                    $(this).addClass('d-none');
                });
                ES.each(function() {
                    $(this).removeClass('d-none');
                });
                IM.each(function() {
                    $(this).addClass('d-none');
                });
            }else if (category.value === "3"){
                $('#academicYearDiv input').each(function() {
                    $(this).addClass('d-none');
                });

                $('#academicYearDiv').addClass('d-none');
                $('#batchDiv').removeClass('d-none');
                $('#batchDiv input').removeClass('d-none');
                IM.each(function() {
                    $(this).removeClass('d-none');
                });
                ES.each(function() {
                    $(this).addClass('d-none');
                });
                GE.each(function() {
                    $(this).addClass('d-none');
                });
            }


        }



        changeProfile($('#profileDiv'));

        function changeProfile(select) {
            var selectedOption = select.options[select.selectedIndex];
            if (selectedOption.classList.contains('profile')) {
                // Selected option has class 'profile'
                // Perform your actions here
                // console.log('Selected option has class "profile"');
                $('#belteiCertificateDiv').removeClass('col-6');
                $('#moeyCertificateDiv').removeClass('col-6');
                $('#profileDiv').removeClass('d-none')
            } else {
                $('#belteiCertificateDiv').addClass('col-6');
                $('#moeyCertificateDiv').addClass('col-6');
                $('#profileDiv').addClass('d-none')

            }

            if (selectedOption.classList.contains('c1')) {
                $('#moeyCertificateDiv').addClass('d-none');
            } else {
                $('#moeyCertificateDiv').removeClass('d-none');
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



