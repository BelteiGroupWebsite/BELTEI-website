<div>

    <div class="input-group mb-3 shadow-sm">
        <input wire:model.live="search" type="search" class="form-control" id="searchBar"
            onfocus="document.getElementById('searchResults').classList.remove('d-none');"
            onblur="setTimeout(() => document.getElementById('searchResults').classList.add('d-none'), 500);"
            placeholder="Search ...">


        <button class="btn btn-primary content-translate-font" id="modalCreatePreferenceButton" type="button">

            {{ __('beltei_university/certificate/certificate.search') }}
        </button>
        <!-- This should open the modal to add a new student -->
        <button class="btn btn-outline-primary" wire:click="createStudent" data-bs-toggle="modal"
            data-bs-target="#StudentModal">Add New</button>
        <button class="btn btn-outline-primary" wire:click="downloadFile">Excel Export</button>

    </div>


    <table class="table table-bordered" style="vertical-align: middle">
        <thead>
            <tr>
                <th>Student ID</th>
                <th>Khmer Name</th>
                <th>Latin Name</th>
                <th>Gender</th>
                <th>DOB</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($studentInfo as $student)
                <tr>
                    <td>{{ $student->student_id }}</td>
                    <td class="Muol-Light">{{ $student->khmer_name }}</td>
                    <td>{{ $student->latin_name }}</td>
                    <td>{{ $student->gender }}</td>
                    <td>{{ $student->dob }}</td>
                    <td>
                        <button type="button" class="btn btn-warning btn-sm bi bi-pencil-square" data-bs-toggle="modal"
                            data-bs-target="#StudentModal" wire:click="editStudent({{ $student->id }})"></button>
                        <button type="button" class="btn btn-outline-danger btn-sm bi bi-trash"
                            wire:click="deleteStudentID({{ $student->id }})"
                            onclick="confirmDelete({{ $student->id }})"></button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="d-flex justify-content-end">
        {{ $studentInfo->links('vendor.livewire.bootstrap') }}
    </div>

    <div wire:ignore.self class="modal modal-lg fade" id="StudentModal" tabindex="-1"
        aria-labelledby="StudentModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title title-translate-font">Student Information</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="my-2 py-2 px-3 d-flex justify-content-center">
                    <div class="card overflow-hidden shadow-lg border-2 border-header-color">
                        <img class="py-2 bg-header-color" src="{{ asset('asset/img/university/certificate/header.png') }}"
                            alt="">
                        <div class="d-flex flex-column justify-content-center align-items-center py-4 text-center">

                            <div wire:loading>
                                <button class="btn btn-primary" type="button" disabled>
                                    <span class="spinner-border spinner-border-sm" role="status"
                                        aria-hidden="true"></span>
                                    Loading...
                                </button>
                            </div>

                            {{-- @if ($studentInfoShow) --}}
                            <div class="mt-2">
                                <form wire:submit.prevent="createOrUpdateStudent">

                                    @if (session()->has('message'))
                                        <div class="px-3">
                                            <div class="alert alert-success">
                                                {{ session('message') }}
                                            </div>
                                        </div>
                                    @endif

                                    <div class="text-start row px-3">
                                        <div class="form-group col-12">
                                            <label>Student ID</label>
                                            <input type="text" required placeholder="052444" class="form-control" wire:model="student_id">
                                        </div>
                                        <div class="form-group col-6">
                                            <label>Khmer Name</label>
                                            <input type="text" required placeholder="សុខ សិរីវិសាល" class="form-control" wire:model="khmer_name">
                                        </div>

                                        <div class="form-group col-6">
                                            <label>Latin Name</label>
                                            <input type="text" required placeholder="Sok sereyvisal" class="form-control" wire:model="latin_name">
                                        </div>

                                        <div class="form-group col-6">
                                            <label>Gender</label>
                                            <input type="text" required placeholder="M" class="form-control" wire:model="gender">
                                        </div>

                                        <div class="form-group col-6">
                                            <label>Date of Birth</label>
                                            <input type="text" required placeholder="01-09-2004" class="form-control" wire:model="dob">
                                        </div>

                                        <div class="form-group col-6">
                                            <label>Nationality</label>
                                            <input type="text" required placeholder="Khmer" class="form-control" wire:model="nationality">
                                        </div>

                                        <div class="form-group col-6">
                                            <label>Academic Batch ID</label>
                                            <input type="text" required placeholder="{{ $batchID }}" class="form-control" wire:model="degree_academicbatch_id" >
                                        </div>



                                        <div class="form-group col-4">
                                            <label>Profile No</label>
                                            <input type="file" accept=".jpg,image/jpeg" class="form-control"
                                                wire:model="profile_upload">

                                            @if ($profile_upload)
                                                <img loading="lazy" class="w-100"
                                                    src="{{ $profile_upload->temporaryUrl() }}">
                                            @elseif ($studentInfoShow)
                                                @php
                                                    $imageCardFolder = 'profile';
                                                    $imageCard = $studentInfoShow->profile_no;
                                                    $encryptedProfile = base64_encode(
                                                        "university/$academicBatch->degree_id/$batchID/$imageCardFolder/$imageCard.jpg",
                                                    );
                                                @endphp
                                                <img loading="lazy" class="w-100"
                                                    src="{{ route('certificate.viewEn', ['filename' => $encryptedProfile]) }}">
                                            @endif

                                            @error('profile_upload')
                                                <div class="text-danger"> <small>{{ $message }}</small> </div>
                                            @enderror
                                        </div>

                                        <div class="form-group col-4">
                                            <label>Certificate No</label>
                                            <input type="file" accept=".jpg,image/jpeg" class="form-control"
                                                wire:model="certi_no_upload">

                                            @if ($certi_no_upload)
                                                <img loading="lazy" class="w-100"
                                                    src="{{ $certi_no_upload->temporaryUrl() }}">
                                            @elseif ($studentInfoShow)
                                                @php
                                                    $imageCardFolder = 'beltei';
                                                    $imageCard = $studentInfoShow->certi_no;
                                                    $encryptedProfile = base64_encode(
                                                        "university/$academicBatch->degree_id/$batchID/$imageCardFolder/$imageCard.jpg",
                                                    );
                                                @endphp
                                                <img loading="lazy" class="w-100"
                                                    src="{{ route('certificate.viewEn', ['filename' => $encryptedProfile]) }}">
                                            @endif

                                            @error('certi_no_upload')
                                                <div class="text-danger"> <small>{{ $message }}</small> </div>
                                            @enderror
                                        </div>

                                        <div class="form-group col-4">
                                            <label>MoEY No</label>
                                            <input type="file" accept=".jpg,image/jpeg" class="form-control"
                                                wire:model="moey_no_upload">

                                            @if ($moey_no_upload)
                                                <img loading="lazy" class="w-100"
                                                    src="{{ $moey_no_upload->temporaryUrl() }}">
                                            @elseif ($studentInfoShow)
                                                @php
                                                    $imageCardFolder = 'moey';
                                                    $imageCard = $studentInfoShow->moey_no;
                                                    $encryptedProfile = base64_encode(
                                                        "university/$academicBatch->degree_id/$batchID/$imageCardFolder/$imageCard.jpg",
                                                    );
                                                @endphp
                                                <img loading="lazy" class="w-100"
                                                    src="{{ route('certificate.viewEn', ['filename' => $encryptedProfile]) }}">
                                            @endif

                                            @error('moey_no_upload')
                                                <div class="text-danger"> <small>{{ $message }}</small> </div>
                                            @enderror
                                        </div>


                                        <div class="py-2 d-flex gap-2 justify-content-end col-12">
                                            <button class="btn btn-outline-primary">Reset</button>
                                            <button wire:loading.attr="disabled" type="submit"
                                                class="btn btn-success">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            {{-- @endif --}}
                        </div>
                        <div class="bg-header-color py-4"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function confirmDelete(collaboratorId) {
            Swal.fire({
                title: "Are you sure?",
                text: "Type DELETE to confirm",
                input: "text",
                inputAttributes: {
                    autocapitalize: "off"
                },
                showCancelButton: true,
                confirmButtonText: "Delete",
                preConfirm: (inputValue) => {
                    if (inputValue === "DELETE") {
                        Livewire.dispatch('posterDelete');
                    } else {
                        Swal.showValidationMessage("You must type DELETE to confirm.");
                    }
                }
            });
        }

        window.addEventListener('show-modal', event => {
            const modal = new bootstrap.Modal(document.getElementById('StudentModal'));
            modal.show();
        });
    </script>
</div>
