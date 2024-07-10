<div class="row mb-3 me-0 pe-0">
    <div class="col-6">
        <label for="programs" class="form-label">programs <i class="text-danger"></i></label>
        <select wire:model.live="selectedprograms" required class="form-select" name="programs" id="programs">
            <option value="">Select a programs</option>
            @foreach ($programs as $program)
                <option value="{{ $program->id }}">{{ $program->program_name }}</option>
            @endforeach
        </select>
    </div>
    

        <div class="col-6">
            <label for="grade" class="form-label">Grade <i class="text-danger"></i></label>
            <select wire:model="selectedGrade" required class="form-select" name="grade" id="grade">
                <option value="" selected>Select a grade</option>
                @if(!is_null($selectedprograms))
                    @foreach ($grades as $grade)
                        <option value="{{ $grade->id }}">{{ $grade->grade }}</option>
                    @endforeach
                @endif
            </select>
        </div>
</div>
