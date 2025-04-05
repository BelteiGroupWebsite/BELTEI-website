<div>




    @foreach ($collaborators as $collaboratorbybranch)
        @php
            $firstCollaborator = $collaboratorbybranch->first();
            $countryName =
                optional(optional($firstCollaborator->country)->countryName)->firstWhere(
                    'language.key',
                    app()->getLocale(),
                )?->name ?? 'N/A';
        @endphp

        <p class="title-translate-font">{{ $countryName }}</p>

        <div wire:sortable="updateCollaboratorOrder">
            @foreach ($collaboratorbybranch->sortBy('order_column') as $collaborator)
                <img wire:sortable.item="{{ $collaborator->id }}" wire:key="collaborator-{{ $collaborator->id }}"
                    style="max-width: 60px; max-height: 60px; cursor: move;"
                    src="{{ asset('storage/' . $collaborator->logo) }}" alt="">
            @endforeach
        </div>
    @endforeach




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
                                        <option selected disabled value="">Please select news branch</option>
                                        @foreach ($branches as $branch)
                                            <option value="{{ $branch->id }}">{{ $branch->branch }}</option>
                                        @endforeach
                                    </select>
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">filter <i
                                                class="bi bi-funnel"></i></button>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-8">
                            <h5 class="py-2">Collaborators</h5>
                            <div class="card shadow-2-strong shadow">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        @if (session()->has('message'))
                                            <div class="alert alert-success">
                                                {{ session('message') }}
                                            </div>
                                        @endif
                                        <table class="table mb-0 vertical-align-middle">
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
                                                {{-- @foreach ($collaborators as $collaborator)
                                                    <tr>
                                                        <td>{{ $collaborator->id }}</td>
                                                        <td>{{ $collaborator->collaborator->firstWhere('language.key', app()->getLocale())?->description ?? 'N/A' }}
                                                        </td>
                                                        <td><img loading="lazy"
                                                                style="max-width: 100px; max-height: 100px;"
                                                                src="{{ asset('storage/' . $collaborator->logo) }}"
                                                                alt=""></td>
                                                        <td>

                                                            @php
                                                                $photos = json_decode($collaborator->photos, true);
                                                            @endphp

                                                            @if (is_array($photos))
                                                                @foreach ($photos as $photo)
                                                                    <img loading="lazy"
                                                                        style="max-width: 50px; max-height: 5  0px;"
                                                                        src="{{ asset('storage/' . $photo) }}"
                                                                        alt="">
                                                                @endforeach
                                                            @else
                                                                <img loading="lazy"
                                                                    style="max-width: 50px; max-height: 5  0px;"
                                                                    src="{{ asset('storage/' . $collaborator->photos) }}"
                                                                    alt="">
                                                            @endif

                                                        </td>
                                                        <td><a class="underline text-primary" target="blank"
                                                                href="{{ $collaborator->link }}">Goto Website</a></td>
                                                        <td>
                                                            <div
                                                                class="d-flex justify-content-center align-items-center gap-2">
                                                                <button type="button" data-bs-toggle="modal"
                                                                    data-bs-target="#collaboratorModal"
                                                                    wire:click="updateCollaboratorModal({{ $collaborator->id }})"
                                                                    class="btn btn-warning btn-sm bi bi-pencil-square"></button>
                                                                <button type="button"
                                                                    class="btn btn-danger btn-sm bi bi-trash"
                                                                    wire:click="deleteId({{ $collaborator->id }})"
                                                                    onclick="confirmDelete({{ $collaborator->id }})"></button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach --}}
                                            </tbody>
                                        </table>
                                        <div class="my-2">
                                            {{-- {{ $collaborators->links('vendor.pagination.bootstrap-5') }} --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <h5 class="py-2">Country</h5>
                            <div class="card shadow-2-strong shadow">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        @if (session()->has('message'))
                                            <div class="alert alert-success">
                                                {{ session('message') }}
                                            </div>
                                        @endif
                                        <table class="table mb-0 vertical-align-middle">
                                            <thead>
                                                <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Country</th>
                                                    <th scope="col">Flag</th>
                                                    <th scope="col">Collaborators</th>
                                                </tr>
                                            </thead>
                                            <tbody class="content-translate-font" wire:sortable="updateCountryOrder">
                                                {{-- @foreach ($countries->sortBy('order_column') as $country)
                                                    <tr wire:sortable.item="{{ $country->id }}" style="cursor: move;"
                                                        wire:key="country-{{ $country->id }}">
                                                        <td>{{ $country->id }}</td>
                                                        <td>{{ $country->countryName->firstWhere('language.key', app()->getLocale())?->name ?? 'N/A' }}
                                                        </td>
                                                        <td><img loading="lazy"
                                                                style="max-width: 60px; max-height: 60px;"
                                                                src="{{ asset('storage/' . $country->flag) }}"
                                                                alt=""></td>
                                                        <td>{{ $country->collaborators->count() }}</td>
                                                    </tr>
                                                @endforeach --}}
                                            </tbody>
                                        </table>
                                        <div class="my-2">
                                            {{-- {{ $countries->links('vendor.pagination.bootstrap-5') }} --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mask d-flex align-items-center h-100">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <h5 class="py-2">Collaborators in country</h5>
                            <div class="card shadow-2-strong shadow">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                            <thead>
                                                <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Country</th>
                                                    <th scope="col">Flag</th>
                                                    <th scope="col">Collaborators</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="content-translate-font">
                                                {{-- @foreach ($countries->sortBy('order_column') as $country)
                                                    <tr>
                                                        <td>{{ $country->id }}</td>
                                                        <td>{{ $country->countryName->firstWhere('language.key', app()->getLocale())?->name ?? 'N/A' }}
                                                        </td>
                                                        <td><img loading="lazy"
                                                                style="max-width: 100px; max-height: 100px;"
                                                                src="{{ asset('storage/' . $country->flag) }}"
                                                                alt=""></td>
                                                        <td>
                                                            <div class="d-flex gap-2" wire:sortable="updateTaskOrder">
                                                                @forelse ($country->collaborators->sortBy('order_column') as $collaborator)
                                                                    <div class="d-flex align-items-center"
                                                                        wire:sortable.item="{{ $collaborator->id }}"
                                                                        wire:key="collaborator-{{ $collaborator->id }}"
                                                                        style="cursor: move;">
                                                                        <img loading="lazy"
                                                                            style="max-height: 80px; max-width: 80px;"
                                                                            src="{{ asset('storage/' . $collaborator->logo) }}"
                                                                            alt="">
                                                                    </div>
                                                                @empty
                                                                    <a class="text-primary underline cursor-pointer"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#collaboratorModal"
                                                                        wire:click="setCountry({{ $country->id }})">Click
                                                                        here to insert!</a>
                                                                @endforelse
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <button class="btn btn-sm btn-primary bi bi-plus-lg"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#collaboratorModal"
                                                                wire:click="setCountry({{ $country->id }})"></button>
                                                        </td>
                                                    </tr>
                                                @endforeach --}}
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
    <div wire:ignore.self class="modal modal-lg fade" id="collaboratorModal" tabindex="-1"
        aria-labelledby="collaboratorModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="collaboratorModalLabel">Create Student</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                        wire:click="closeModal"></button>
                </div>
                <form wire:submit.prevent="createOrUpdateCollaborator">
                    <div class="modal-body">
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-6 mb-3">
                                <label for="" class="form-label">Branch</label>
                                <div class="input-group">
                                    <select wire:model.live="branch" required class="form-control" name="branch">
                                        <option selected value="">Please select branch</option>
                                        @foreach ($branches as $branch)
                                            <option value="{{ $branch->id }}">{{ $branch->branch }}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>
                            <div class="col-6 mb-3">
                                <label class="form-label">Collaboration Country</label>
                                <div class="input-group">
                                    <select wire:model="country_id" required name="country_id" class="form-control">
                                        <option selected value="">Please select Country</option>
                                        @foreach ($countries as $country)
                                            <option value="{{ $country->id }}">
                                                {{ $country->countryName->firstWhere('language.key', 'en')?->name ?? 'N/A' }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                                        data-bs-target="#newCountryModal">
                                        <i class="bi bi-plus-lg"></i>
                                    </button>
                                </div>
                                @error('country_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="collaboration_logo">Collaboration Logo</label>
                                <input wire:model="collaboration_logo" name="collaboration_logo" type="file"
                                    accept=".jpg, .jpeg, .png" class="form-control">
                                <div>
                                    @error('collaboration_logo')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                @if ($collaboration_logo)
                                    <img loading="lazy" width="200px"
                                        src="{{ $collaboration_logo->temporaryUrl() }}">
                                @endif
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="collaboration_image">Collaboration Image</label>
                                <input wire:model="collaboration_image" name="collaboration_image" type="file"
                                    multiple accept=".jpg, .jpeg, .png" class="form-control">
                                <div>
                                    @error('collaboration_image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                @if ($collaboration_image)
                                    @foreach ($collaboration_image as $image)
                                        <img loading="lazy" width="200px" src="{{ $image->temporaryUrl() }}">
                                    @endforeach
                                @endif

                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="collaboration_website">Collaboration Website URL</label>
                                <input wire:model="collaboration_website" placeholder="https://www.beltei.edu.kh"
                                    type="text" class="form-control" required>
                                @error('collaboration_website')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            @foreach ($languages as $language)
                                <div class="col-12 mb-3">
                                    <label for="description_{{ $language->id }}">Description in
                                        {{ $language->lang }}</label>
                                    <textarea class="form-control" wire:model="descriptions.{{ $language->id }}" id="description_{{ $language->id }}"></textarea>
                                    @error('descriptions.{{ $language->id }}')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            @endforeach
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
    <div wire:ignore.self class="modal modal-lg fade" id="newCountryModal" tabindex="-1"
        aria-labelledby="newCountryModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newCountryModalLabel">Create New Country</h5>
                    <button type="button" class="btn-close" data-bs-target="#collaboratorModal"
                        data-bs-toggle="modal" data-bs-dismiss="modal"></button>
                </div>
                <form wire:submit.prevent="saveCountry">
                    <div class="modal-body">
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
                        <div class="row">
                            @foreach ($languages as $language)
                                <div class="col-md-6 mb-3">
                                    <label for="country_name" class="form-label">Country Name In
                                        {{ $language->lang }}</label>
                                    <input wire:model="new_country_name.{{ $language->id }}" type="text"
                                        id="country_name" placeholder="Enter country name" class="form-control"
                                        required>
                                    @error('new_country_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            @endforeach
                            <div class="col-12 mb-3">
                                <label for="flag_logo">Flag Logo</label>
                                <input wire:model="flag_logo" name="flag_logo" required type="file"
                                    accept=".jpg, .jpeg, .png" class="form-control">
                                <div>
                                    @error('flag_logo')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                @if ($flag_logo)
                                    <img loading="lazy" width="200px" src="{{ $flag_logo->temporaryUrl() }}">
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" wire:click="closeModal"
                            data-bs-dismiss="modal">Close</button>
                        <button class="btn btn-primary" data-bs-target="#collaboratorModal" data-bs-toggle="modal"
                            data-bs-dismiss="modal">Back to first</button>
                        <button type="submit" class="btn btn-primary">Save Country</button>
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
                        Livewire.dispatch('collaboratorDelete');
                    } else {
                        Swal.showValidationMessage("You must type DELETE to confirm.");
                    }
                }
            });
        }
    </script>
</div>
