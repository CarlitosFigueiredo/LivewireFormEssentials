<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Validate;
use Livewire\Component;

class EditProfile extends Component
{
    public User $user;

    #[Validate]
    public string $username = '';
    public string $bio = '';

    public $showSuccessIndicator = false;

    public function rules()
    {
        return [
            'username' => [
                'required',
                Rule::unique('users')->ignore($this->user),
            ]
        ];
    }

    public function mount(): void
    {
        $this->user = auth()->user();

        $this->username = $this->user->username;
        $this->bio = $this->user->bio;
    }

    public function save(): void
    {
        $this->validate();

        $this->user->username = $this->username;
        $this->user->bio = $this->bio;

        sleep(1);

        $this->showSuccessIndicator = true;

        $this->user->save();
    }

    public function render()
    {
        return view('livewire.edit-profile');
    }
}
