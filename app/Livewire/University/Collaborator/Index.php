<?php

namespace App\Livewire\University\Collaborator;

use App\Models\University\Collaborator\UtbCollaborators;
use App\Models\University\Collaborator\UtbCollaboratorTranslations;
use App\Models\University\Collaborator\UtbCountry;
use App\Models\University\Collaborator\UtbCountryTranslations;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Livewire\WithFileUploads as LivewireWithFileUploads;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    use LivewireWithFileUploads;

    public $country_id, $collaboration_logo, $collaboration_image, $collaboration_website;
    public $collaborator_id;
    public $flag_logo;
    public $descriptions = [];
    public $languages;
    public $branches, $branch, $branch_id = 3;
    public $new_country_name = [];

    protected $listeners = ['collaboratorDelete' => 'deleteCollaborator'];


    public function mount()
    {
        $this->languages = \App\Models\Language::all();
        $this->branches = \App\Models\Branch::all();
    }

    public function render()
    {
        $countries = UtbCountry::paginate(5);
        // $collaborators = UtbCollaborators::paginate(5);

        $collaborators = UtbCollaborators::with('country', 'branch')
            ->where('branch_id', $this->branch_id)
            ->get()
            ->groupBy('branch_id'); // You can group by `branch_id` or any other attribute

        // dd($collaborators);

        // dd(UtbCollaborators::with('country', 'branch')->first());

        return view('livewire.university.collaborator.index', compact('countries', 'collaborators'));
    }

    public function updatedBranch($branch_id)
    {
        $this->branch_id = $branch_id;
        // $this->loadPosters(); 
    }
    // private function loadPosters()
    // {
    //     $this->posters = UtbPoster::where('branch', $this->branch)->get();
    // }

    public function createOrUpdateCollaborator()
    {
        if ($this->collaborator_id) {
            $this->updateCollaborator();
        } else {
            $this->createCollaborator();
        }
    }

    public function createCollaborator()
    {
        $this->validate($this->collaboratorValidationRules());

        $collaboratorSave = UtbCollaborators::create([
            'utb_country_id' => $this->country_id,
            'branch_id' => $this->branch_id,
            'logo' => $this->storeFile($this->collaboration_logo, 'logos'),
            'photos' => $this->storeFiles($this->collaboration_image, 'photos'),
            'link' => $this->collaboration_website,
        ]);

        foreach ($this->languages as $language) {
            UtbCollaboratorTranslations::create([
                'language_id' => $language->id,
                'utb_collaborator_id' => $collaboratorSave->id,
                'description' => $this->descriptions[$language->id] ?? null,
            ]);
        }

        $this->resetInputs();
        session()->flash('message', 'Collaborator saved successfully!');
    }

    public function storeFiles($files, $folder)
    {
        $paths = [];

        if (empty($files)) { // Properly check for empty input
            return json_encode($paths);
        }

        foreach ($files as $file) {
            $paths[] = $file->store($folder, 'public');
        }

        return json_encode($paths); // Save as JSON
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
            'branch_id' => $this->branch_id,
            'utb_country_id' => $this->country_id,
            'link' => $this->collaboration_website,
        ];

        if ($this->collaboration_logo) {
            $updateData['logo'] = $this->storeFile($this->collaboration_logo, 'logos');
        }

        if ($this->collaboration_image) {
            $updateData['photos'] = $this->storeFiles($this->collaboration_image, 'photos'); // Store multiple files as JSON
        }

        $collaborator->update($updateData);

        foreach ($this->languages as $language) {
            UtbCollaboratorTranslations::updateOrCreate(
                [
                    'utb_collaborator_id' => $collaborator->id,
                    'language_id' => $language->id,
                ],
                [
                    'description' => $this->descriptions[$language->id] ?? null,
                ]
            );
        }

        $this->resetInputs();
        session()->flash('message', 'Collaborator updated successfully!');
    }


    public function deleteId($id)
    {
        $this->reset('collaborator_id');
        $this->collaborator_id = $id;
    }

    public function deleteCollaborator()
    {
        $collaborator = UtbCollaborators::find($this->collaborator_id);
        $collaborator->delete();
        $this->reset('collaborator_id');
        session()->flash('message', 'Collaborator deleted successfully!');
        $this->closeModal();
    }

    public function saveCountry()
    {
        $this->validate($this->countryValidationRules());

        $countrySave = UtbCountry::create([
            'flag' => $this->storeFile($this->flag_logo, 'flags'),
        ]);

        foreach ($this->languages as $language) {
            UtbCountryTranslations::create([
                'language_id' => $language->id,
                'utb_country_id' => $countrySave->id,
                'name' => $this->new_country_name[$language->id],
            ]);
        }

        session()->flash('message', 'Country saved successfully!');
        $this->closeModal();
    }

    public function closeModal()
    {
        $this->resetInputs();
    }

    public function resetInputs()
    {
        $this->country_id = '';
        $this->collaboration_logo = '';
        $this->collaboration_image = '';
        $this->collaboration_website = '';
        $this->descriptions = [];
        $this->new_country_name = [];
        $this->flag_logo = '';
        $this->collaborator_id = '';
    }

    public function setCountry($id)
    {
        $this->reset('country_id');
        $this->country_id = $id;
    }

    public function updateCountryOrder($orderedIds)
    {
        foreach ($orderedIds as $index => $id) {
            UtbCountry::where('id', $id['value'])->update(['order_column' => $index + 1]);
        }
        // $this->collaborators = $this->country->collaborators()->orderBy('order_column')->get();
    }
    public function updateTaskOrder($orderedIds)
    {
        foreach ($orderedIds as $index => $id) {
            UtbCollaborators::where('id', $id['value'])->update(['order_column' => $index + 1]);
        }
        // $this->collaborators = $this->country->collaborators()->orderBy('order_column')->get();
    }

    public function  updateCollaboratorOrder($orderedIds)
    {
        foreach ($orderedIds as $index => $id) {
            
            UtbCollaborators::with('country', 'branch')
                ->where('branch_id', $this->branch_id)
                ->where('id', $id['value'])->update(['order_column' => $index + 1]);
        }
    }

    private function collaboratorValidationRules($isUpdate = false)
    {
        $rules = [
            'country_id' => 'required|integer',
            'collaboration_website' => 'required|url',
            // 'descriptions' => 'array',
        ];

        if (!$isUpdate) {
            $rules['collaboration_logo'] = 'required|image|mimes:jpeg,png,jpg|max:1024';
            // $rules['collaboration_image'] = 'array'; // Ensure it's an array
            $rules['collaboration_image.*'] = 'image|mimes:jpeg,png,jpg|max:1024'; // Validate each image
        }

        return $rules;
    }

    private function countryValidationRules()
    {
        return [
            'new_country_name' => 'array',
            'flag_logo' => 'required|image|mimes:jpeg,png,jpg|max:1024',
        ];
    }

    private function storeFile($file, $folder)
    {
        return $file->store("university/collaborator/{$folder}", 'public');
    }
}
