<div>

    <style>
        .previewSideBar {
            /* width: 200px;
            height: 1000px; */
            background-color: #f8f9fa;
            border: 1px solid #e9ecef;
            border-radius: 5px;
            margin-bottom: 10px;
        }
    </style>


    <section class="intro">
        <div class="bg-image h-100 py-4 rounded">
            <div class="mask d-flex align-items-center h-100">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="col-4">
                                <label for="" class="form-label"><b>Branch</b></label>
                                <div class="input-group">
                                    <select wire:model.live="branch" required class="form-control" name="branch">
                                        {{-- <option selected disabled value="">Please select news branch</option> --}}
                                        @foreach ($branches as $branch)
                                            <option value="{{ $branch->id }}">{{ $branch->branch }}</option>
                                        @endforeach
                                    </select>
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">filter <i class="bi bi-funnel"></i></button>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-8">
                            <h5 class="py-2">Poster Preview</h5>
                            <div class="card shadow-2-strong shadow">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        @if (session()->has('message'))
                                            <div class="alert alert-success">
                                                {{ session('message') }}
                                            </div>
                                        @endif

                                        <div class="row d-flex justify-content-between position-relative"
                                            style="overflow: hidden">
                                            <div class="previewSideBar col-3"></div>
                                            <div class="col-6" wire:sortable="updatePosterOrder">
                                                @if ($posters)
                                                    @forelse ($posters->sortBy('order_column') as $poster)
                                                        <div class="text-center"
                                                            wire:sortable.item="{{ $poster->id }}"
                                                            style="cursor: move;" wire:key="poster-{{ $poster->id }}">
                                                            <img class="w-80 py-2 text-center"
                                                                src="{{ asset('storage/' . $poster->image) }}"
                                                                alt="">
                                                        </div>
                                                    @empty
                                                    @endforelse
                                                @else
                                                @endif
                                            </div>
                                            <div class="previewSideBar col-3"></div>
                                        </div>


                                        <div>

                                        </div>


                                        {{-- <table class="table mb-0 vertical-align-middle">
                                            <thead>
                                                <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Collaborator</th>
                                                    <th scope="col">Logo</th>
                                                    <th scope="col">Image</th>
                                                    <th scope="col">URL</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="content-translate-font">

                                            </tbody>
                                        </table> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <h5 class="py-2">Poster</h5>
                            <div class="card shadow-2-strong shadow">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        @if (session()->has('message'))
                                            <div class="alert alert-success">
                                                {{ session('message') }}
                                            </div>
                                        @endif

                                        {{-- <div class="row d-flex justify-content-between position-relative" style="overflow: hidden">
                                            <div class="previewSideBar col-3"></div>
                                            <div class="col-6" wire:sortable="updatePosterOrder">

                                                @foreach ($posters->sortBy('order_column') as $poster)
                                                    
                                                    <div class="text-center" wire:sortable.item="{{ $poster->id }}" style="cursor: move;" wire:key="poster-{{ $poster->id }}">
                                                        <img class="w-80 py-2 text-center" src="{{ asset('storage/' . $poster->image) }}"
                                                            alt="">
                                                    </div>
                                                @endforeach
                                            </div>
                                            <div class="previewSideBar col-3"></div>
                                        </div> --}}


                                        <table class="table mb-0 vertical-align-middle">
                                            <thead>
                                                <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Image</th>
                                                    <th scope="col">Column</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="content-translate-font">
                                                @if ($posters)
                                                    @foreach ($posters->sortBy('order_column') as $poster)
                                                        <tr>
                                                            <td>
                                                                {{ $poster->order_column }}
                                                            </td>
                                                            <td>
                                                                <img class=""
                                                                    style="max-width: 100px; max-height: 100px;"
                                                                    src="{{ asset('storage/' . $poster->image) }}"
                                                                    alt="">
                                                            </td>
                                                            <td>
                                                                {{ $poster->row }}
                                                            </td>
                                                            <td>
                                                                <button type="button"
                                                                    class="btn btn-primary btn-sm bi bi-pencil-square"
                                                                    data-bs-toggle="modal" data-bs-target="#PosterModal"
                                                                    wire:click="editPoster({{ $poster->id }})"></button>
                                                                <button type="button"
                                                                    class="btn btn-danger btn-sm bi bi-trash"
                                                                    wire:click="deletePosterID({{ $poster->id }})"
                                                                    onclick="confirmDelete({{ $poster->id }})"></button>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @else
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <div wire:ignore.self class="modal modal-lg fade" id="PosterModal" tabindex="-1" aria-labelledby="PosterModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="PosterModalLabel">Create Student</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                        wire:click=""></button>
                </div>
                <form wire:submit.prevent="createOrUpdatePoster">
                    <div class="modal-body">
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="branch">Branch</label>
                                <div class="input-group ">
                                    <select wire:model.live="branch" required class="form-control" name="branch"
                                        id="branch">
                                        <option selected disabled value="">Please select news branch</option>
                                        @foreach ($branches as $branch)
                                            <option value="{{ $branch->id }}">{{ $branch->branch }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="poster_image">Collaboration Logo</label>
                                <input type="file" wire:model="poster_image" name="poster_image"
                                    class="form-control">
                                <div>
                                    @error('poster_image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                @if ($poster_image)
                                    <img loading="lazy" width="200px" src="{{ $poster_image->temporaryUrl() }}">
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" wire:click="closeModal"
                            data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

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
    </script>

</div>
