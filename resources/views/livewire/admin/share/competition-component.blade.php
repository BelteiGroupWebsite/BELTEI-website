<div>

    <div class="row">
        <div class="col-md-4">
            <label for="" class="form-label">Branch</label>
            <select class="form-select" wire:model.live="branchInput">
                <option value="">Select Branch</option>
                @foreach ($branches as $branch)
                    <option value="{{ $branch->id }}">{{ $branch->branch }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-4">
            <label for="" class="form-label">Competition</label>
            <div class="input-group">
                <select class="form-select" wire:model.live="competitionInput">
                    <option value="">Select Competition</option>
                    @foreach ($competitions as $competition)
                        <option value="{{ $competition->id }}">
                            {{ $competition->translate->first()?->translate }}
                        </option>
                    @endforeach
                </select>
                <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                    data-bs-target="#competitionModal">
                    <i class="bi bi-plus-lg"></i>
                </button>
            </div>
        </div>
        <div class="col-md-4">
            <label for="" class="form-label">grade</label>
            <div class="input-group">
                <select class="form-select" wire:model.live="gradeInput">
                    <option value="">Select grade</option>
                    @foreach ($grades as $grade)
                        <option value="{{ $grade->id }}">
                            {{ $grade->translate->first()?->translate }}</option>
                    @endforeach
                </select>
                <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#gradeModal">
                    <i class="bi bi-plus-lg"></i>
                </button>
            </div>
        </div>
    </div>

    <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#competitionVideoModal">
        <i class="bi bi-plus-lg"></i>
    </button>


    <div class="row content-translate-font">

        <div class="col-6 text-center">

            <h3 class="text-center title-translate-font">
                {{-- {{ $competitionBatches?->first()->grade->translate->first()->translate }} --}}
            </h3>
            @forelse ($competitionBatches as $batch)
                <div class="text-center">
                    {{ 'Batch: ' . $batch->batch . ' Year: ' . $batch->year }}
                </div>
                <div class="row text-center">
                    @foreach ($batch->videos as $video)
                        <div class="col-md-{{ 12 / $batch->videos->count() }}">
                            @php
                                $embedUrl = $video->embed;
                                preg_match('/embed\/([^\?]+)/', $embedUrl, $matches);
                                $videoId = $matches[1] ?? null;
                            @endphp

                            @if ($videoId)
                                <img class="w-100" src="https://img.youtube.com/vi/{{ $videoId }}/hqdefault.jpg"
                                    alt="YouTube Thumbnail">
                            @endif
                            <p>
                                Rank {{ $video->rank }}
                            </p>
                        </div>
                    @endforeach
                </div>
            @empty

            @endforelse


            {{-- @foreach ($competitions as $competition)
                @foreach ($competition->competitionGrades as $grade)
                    <div class="py-3">
                        <h4 class="text-center title-translate-font">
                            {{ $grade->translate->first()->translate }}
                        </h4>
                        @foreach ($grade->batches as $batch)
                            <div class="text-center">
                                {{ 'Batch: ' . $batch->batch . ' Year: ' . $batch->year }}
                            </div>
                            <div class="row text-center">
                                @foreach ($batch->videos as $video)
                                    <div class="col-md-{{ 12 / $batch->videos->count() }}">
                                        @php
                                            $embedUrl = $video->embed;
                                            preg_match('/embed\/([^\?]+)/', $embedUrl, $matches);
                                            $videoId = $matches[1] ?? null;
                                        @endphp
        
                                        @if ($videoId)
                                            <img class="w-100" src="https://img.youtube.com/vi/{{ $videoId }}/hqdefault.jpg"
                                                alt="YouTube Thumbnail">
                                        @endif
                                        <p>
                                            Rank {{ $video->rank }}
                                        </p>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                @endforeach
            @endforeach --}}

        </div>

        <div class="col-6">

            @if ($competitions)
                <table class="table table-bordered"  wire:sortable="updateCompetitionOrder">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            @foreach ($languages as $language)
                                <th scope="col">{{ $language->lang }}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($competitions as $competition)
                            <tr wire:sortable.item="{{ $competition->id }}" style="cursor: move;"
                                wire:key="competition-{{ $competition->id }}">
                                <td wire:sortable.handle>
                                    {{ $loop->iteration }}
                                </td>
                                {{-- @foreach ($competition->translate as $language) --}}
                                    <td>
                                        {{ $competition->translate->first()?->translate }}
                                    </td>
                                {{-- @endforeach --}}
                            </tr>
                        @empty
                        @endforelse
                    </tbody>

                </table>
            @endif

            @if ($grades)
                <table class="table table-bordered"  wire:sortable="updateGradeOrder">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            @foreach ($languages as $language)
                                <th scope="col">{{ $language->lang }}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($grades as $grade)
                            <tr wire:sortable.item="{{ $grade->id }}" style="cursor: move;"
                                wire:key="grade-{{ $grade->id }}">
                                <td wire:sortable.handle>
                                    {{ $loop->iteration }}
                                </td>
                                {{-- @foreach ($languages as $language) --}}
                                    <td>
                                        {{ $grade->translate->first()?->translate }}
                                    </td>
                                {{-- @endforeach --}}
                            </tr>
                        @empty
                        @endforelse
                    </tbody>
                </table>
            @endif

        </div>

    </div>


    <div wire:ignore.self class="modal modal-lg fade" id="competitionVideoModal" tabindex="-1"
        aria-labelledby="competitionVideoModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="competitionVideoModalLabel">Create Competition Video</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form wire:submit.prevent="createOrUpdateCompetitionVideo">
                    <div class="modal-body">
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-md-12">
                                <label for="" class="form-label">Branch</label>
                                <select class="form-select" wire:model.live="branchInput">
                                    <option value="">Select Branch</option>
                                    @foreach ($branches as $branch)
                                        <option value="{{ $branch->id }}">{{ $branch->branch }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Competition</label>
                                <div class="input-group">
                                    <select class="form-select" wire:model.live="competitionInput">
                                        <option value="">Select Competition</option>
                                        @foreach ($competitions as $competition)
                                            <option value="{{ $competition->id }}">
                                                {{ $competition->translate->first()?->translate }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                                        data-bs-target="#competitionModal">
                                        <i class="bi bi-plus-lg"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">grade</label>
                                <div class="input-group">
                                    <select class="form-select" wire:model.live="gradeInput">
                                        <option value="">Select grade</option>
                                        @foreach ($grades as $grade)
                                            <option value="{{ $grade->id }}">
                                                {{ $grade->translate->first()?->translate }}</option>
                                        @endforeach
                                    </select>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                                        data-bs-target="#gradeModal">
                                        <i class="bi bi-plus-lg"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Batch</label>
                                <input type="number" class="form-control" wire:model="batchInput"
                                    placeholder="Enter Batch">
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Year</label>
                                <input type="number" class="form-control" wire:model="yearInput"
                                    placeholder="Enter Year">

                            </div>
                            <div>
                                <label for="" class="form-label">Video emded 1st</label>
                                <input type="text" class="form-control" wire:model="embedInputs.1"
                                    placeholder="Enter Video URL">
                            </div>

                            <div>
                                <label for="" class="form-label">Video emded 2nd</label>
                                <input type="text" class="form-control" wire:model="embedInputs.2"
                                    placeholder="Enter Video URL">
                            </div>
                            <div>
                                <label for="" class="form-label">Video emded 3rd</label>
                                <input type="text" class="form-control" wire:model="embedInputs.3"
                                    placeholder="Enter Video URL">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>




    <div wire:ignore.self class="modal modal-lg fade" id="competitionModal" tabindex="-1"
        aria-labelledby="competitionModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="competitionModalLabel">Create Competition</h5>
                    <button type="button" class="btn-close" data-bs-target="#competitionModal"
                        data-bs-toggle="modal" data-bs-dismiss="modal"></button>
                </div>
                <form wire:submit.prevent="storeCompetition">
                    <div class="modal-body">
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-md-12">
                                <label for="" class="form-label">Branch</label>
                                <select class="form-select" wire:model.live="branchInput">
                                    <option value="">Select Branch</option>
                                    @foreach ($branches as $branch)
                                        <option value="{{ $branch->id }}">{{ $branch->branch }}</option>
                                    @endforeach
                                </select>
                                @error('branchInput')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            @foreach ($languages as $language)
                                <div class="col-md-6">
                                    <label for="" class="form-label">Competition Name
                                        ({{ $language->lang }})
                                    </label>
                                    <input type="text" class="form-control"
                                        wire:model="competitionInputs.{{ $language->key }}"
                                        placeholder="Enter Competition Name">
                                    @error('competitionInputs.' . $language->key)
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            @endforeach


                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" data-bs-target="#competitionModal"
                            data-bs-toggle="modal" data-bs-dismiss="modal">Back to first</button>
                        <button type="submit" class="btn btn-primary">Save Country</button>
                    </div>
                </form>
            </div>
        </div>
    </div>




    <div wire:ignore.self class="modal modal-lg fade" id="gradeModal" tabindex="-1"
        aria-labelledby="gradeModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="gradeModalLabel">Create Competition</h5>
                    <button type="button" class="btn-close" data-bs-target="#gradeModal" data-bs-toggle="modal"
                        data-bs-dismiss="modal"></button>
                </div>
                <form wire:submit.prevent="storeGrade">
                    <div class="modal-body">
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-md-12">
                                <label for="" class="form-label">Branch</label>
                                <select class="form-select" wire:model.live="branchInput">
                                    <option value="">Select Branch</option>
                                    @foreach ($branches as $branch)
                                        <option value="{{ $branch->id }}">{{ $branch->branch }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-12">
                                <label for="" class="form-label">Competition</label>
                                <div class="input-group">
                                    <select class="form-select" wire:model.live="competitionInput">
                                        <option value="">Select Competition</option>
                                        @foreach ($competitions as $competition)
                                            <option value="{{ $competition->id }}">
                                                {{ $competition->translate->first()?->translate }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                                        data-bs-target="#competitionModal">
                                        <i class="bi bi-plus-lg"></i>
                                    </button>
                                </div>
                            </div>
                            @foreach ($languages as $language)
                                <div class="col-md-6">
                                    <label for="" class="form-label">Grade Name
                                        ({{ $language->lang }})
                                    </label>
                                    <input type="text" class="form-control"
                                        wire:model.defer="gradeInputs.{{ $language->key }}"
                                        placeholder="Enter grade Name">
                                </div>
                            @endforeach

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" data-bs-target="#competitionModal"
                            data-bs-toggle="modal" data-bs-dismiss="modal">Back to first</button>
                        <button type="submit" class="btn btn-primary">Save Country</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


</div>
