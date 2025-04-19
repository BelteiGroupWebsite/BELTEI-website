<?php

namespace App\Livewire\University\Collaborator;

use App\Models\University\Collaborator\{
    UtbCollaborators,
    UtbCollaboratorTranslations,
    UtbCountry,
    UtbCountryTranslations
};
use App\Models\Language;
use App\Models\Branch;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination, WithFileUploads;

    public $country_id, $collaboration_logo, $collaboration_image, $collaboration_website;
    public $collaborator_id, $flag_logo;
    public $descriptions = [], $languages, $branches;
    public $branch, $branch_id = 3;
    public $new_country_name = [];

    protected $listeners = ['collaboratorDelete' => 'deleteCollaborator'];

    public function mount()
    {
        // Fetch only necessary columns to reduce payload
        $this->languages = Language::get();
        $this->branches = Branch::get();
    }
    
    public function render()
    {
        // Eager load only required relations and columns
        $collaboratorsQuery = UtbCollaborators::with('collaborator.language')->where('branch_id', $this->branch_id)
        ->orderBy('order_column')
        ->get();
    
        // Group once instead of running the same query twice
        $collaborators= $collaboratorsQuery->groupBy('branch_id');
        $collaboratorsByCountry = $collaboratorsQuery->groupBy('utb_country_id');
    
        $countries = UtbCountry::select('id','flag', 'order_column')->get();
        // $countries = UtbCountry::select('id','flag', 'order_column')->paginate(5);
        
        return view('livewire.university.collaborator.index', compact(
            'countries',
            'collaborators',
            'collaboratorsByCountry'
        ));
    }
    

    public function updatedBranch($branch_id)
    {
        $this->branch_id = $branch_id;
    }

    public function createOrUpdateCollaborator()
    {
        $this->collaborator_id ? $this->updateCollaborator() : $this->createCollaborator();
    }

    public function createCollaborator()
    {
        $this->validate($this->collaboratorValidationRules());

        $collaborator = UtbCollaborators::create([
            'utb_country_id' => $this->country_id,
            'branch_id' => $this->branch_id,
            'logo' => $this->storeFile($this->collaboration_logo, 'logos/'.$this->branch_id),
            'photos' => $this->storeFiles($this->collaboration_image, 'photos/'.$this->branch_id),
            'link' => $this->collaboration_website,
        ]);

        foreach ($this->languages as $language) {
            UtbCollaboratorTranslations::create([
                'language_id' => $language->id,
                'utb_collaborator_id' => $collaborator->id,
                'description' => $this->descriptions[$language->id] ?? null,
            ]);
        }

        $this->resetInputs();
        session()->flash('message', 'Collaborator saved successfully!');
    }

    public function updateCollaboratorModal($id)
    {
        $this->collaborator_id = $id;

        $collaborator = UtbCollaborators::find($id);
        $this->country_id = $collaborator->utb_country_id;
        $this->collaboration_website = $collaborator->link;
        $this->descriptions = $collaborator->collaborator->pluck('description', 'language_id')->toArray();
    }

    public function updateCollaborator()
    {
        $this->validate($this->collaboratorValidationRules(true));

        $collaborator = UtbCollaborators::find($this->collaborator_id);

        $updateData = [
            'utb_country_id' => $this->country_id,
            'branch_id' => $this->branch_id,
            'link' => $this->collaboration_website,
        ];

        if ($this->collaboration_logo) {
            $updateData['logo'] = $this->storeFile($this->collaboration_logo, 'logos/'.$this->branch_id);
        }

        if ($this->collaboration_image) {
            $updateData['photos'] = $this->storeFiles($this->collaboration_image, 'photos/'.$this->branch_id);
        }

        $collaborator->update($updateData);

        foreach ($this->languages as $language) {
            UtbCollaboratorTranslations::updateOrCreate(
                ['utb_collaborator_id' => $collaborator->id, 'language_id' => $language->id],
                ['description' => $this->descriptions[$language->id] ?? null]
            );
        }

        $this->resetInputs();
        session()->flash('message', 'Collaborator updated successfully!');
    }

    public function deleteId($id)
    {
        $this->collaborator_id = $id;
    }

    public function deleteCollaborator()
    {
        UtbCollaborators::find($this->collaborator_id)?->delete();
        $this->reset('collaborator_id');
        session()->flash('message', 'Collaborator deleted successfully!');
        $this->closeModal();
    }

    public function saveCountry()
    {
        $this->validate($this->countryValidationRules());

        $country = UtbCountry::create([
            'flag' => $this->storeFile($this->flag_logo, 'flags'),
        ]);

        foreach ($this->languages as $language) {
            UtbCountryTranslations::create([
                'language_id' => $language->id,
                'utb_country_id' => $country->id,
                'name' => $this->new_country_name[$language->id],
            ]);
        }

        session()->flash('message', 'Country saved successfully!');
        $this->closeModal();
    }

    public function updateCountryOrder($orderedIds)
    {
        foreach ($orderedIds as $index => $id) {
            UtbCountry::where('id', $id['value'])->update(['order_column' => $index + 1]);
        }
    }

    public function updateTaskOrder($orderedIds)
    {
        foreach ($orderedIds as $index => $id) {
            UtbCollaborators::where('id', $id['value'])->update(['order_column' => $index + 1]);
        }
    }

    public function updateCollaboratorOrder($orderedIds)
    {
        foreach ($orderedIds as $index => $id) {
            UtbCollaborators::where('branch_id', $this->branch_id)
                ->where('id', $id['value'])
                ->update(['order_column' => $index + 1]);
        }
    }

    public function closeModal()
    {
        $this->resetInputs();
    }

    public function resetInputs()
    {
        $this->reset([
            'country_id', 'collaboration_logo', 'collaboration_image',
            'collaboration_website', 'descriptions', 'new_country_name',
            'flag_logo', 'collaborator_id'
        ]);
    }

    public function setCountry($id)
    {
        $this->country_id = $id;
    }

    private function collaboratorValidationRules(bool $isUpdate = false): array
    {
        $rules = [
            'country_id' => 'required|integer',
            'collaboration_website' => 'required|url',
        ];

        if (!$isUpdate) {
            $rules['collaboration_logo'] = 'required|image|mimes:jpeg,png,jpg,webp|max:1024';
            $rules['collaboration_image.*'] = 'image|mimes:jpeg,png,jpg|max:1024';
        }

        return $rules;
    }

    private function countryValidationRules(): array
    {
        return [
            'new_country_name' => 'array',
            'flag_logo' => 'required|image|mimes:jpeg,png,jpg|max:1024',
        ];
    }

    private function storeFile($file, $folder): ?string
    {
        return $file?->store("app/collaborator/{$folder}", 'public');
    }

    private function storeFiles($files, $folder): string
    {
        $paths = [];

        if (empty($files)) return json_encode($paths);

        foreach ($files as $file) {
            $paths[] = $file->store("app/collaborator/{$folder}", 'public');
        }

        return json_encode($paths);
    }
}
