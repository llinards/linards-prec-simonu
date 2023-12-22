<?php

namespace App\Livewire;

use App\Models\Guest;
use Illuminate\Support\Facades\Log;
use Livewire\Attributes\Validate;
use Livewire\Component;

class GuestStore extends Component
{
    #[Validate('required', message: 'Vārds ir obligāts.')]
    #[Validate('string', message: 'Vārds drīkst sastāvēt tikai no burtiem.')]
    #[Validate('max:255', message: 'Vārds ir aizdomīgi garš.')]
    #[Validate('alpha', message: 'Vārds drīkst sastāvēt tikai no burtiem.')]
    public string $first_name;

    #[Validate('required', message: 'Uzvārds ir obligāts.')]
    #[Validate('string', message: 'Uzvārds drīkst sastāvēt tikai no burtiem.')]
    #[Validate('max:255', message: 'Uzvārds ir aizdomīgi garš.')]
    #[Validate('alpha', message: 'Uzvārds drīkst sastāvēt tikai no burtiem.')]
    public string $last_name;

    #[Validate('required', message: 'Telefona numurs ir obligāts.')]
    #[Validate('max:255', message: 'Telefona numurs ir aizdomīgi garš.')]
    #[Validate('regex:/^([0-9\s\-\+\(\)]*)$/', message: 'Telefona numurs drīkst sastāvēt tikai no cipariem.')]
    #[Validate('min:8', message: 'Telefona numurs nedrīkst būt īsāks par 8 cipariem.')]
    public string $phone_number;

    #[Validate('required', message: 'Lūdzu norādiet, vai paliksiet naktsmītnē.')]
    public string $is_staying;

    public bool $is_visible = true;
    public bool $after_submit = false;

    public function save(): void
    {
        $this->validate();
        try {
            Guest::create($this->all());
            $this->reset();
            $this->toggleFormVisibility();
            session()->flash('success', 'Paldies! Informācija reģistrēta!');
        } catch (\Throwable $th) {
            Log::error($th);
            session()->flash('error', 'Notikusi kļūda! Mēģini vēlreiz.');
        }
    }

    public function toggleFormVisibility(): void
    {
        $this->is_visible = !$this->is_visible;
        $this->after_submit = !$this->after_submit;
    }

    public function render()
    {
        return view('livewire.guests.guest-store');
    }
}
