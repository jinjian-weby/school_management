<?php

namespace App\Livewire;

use App\Models\Todo;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class FilamentForm extends Component implements HasForms
{
    use InteractsWithForms;

    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill();
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->required()
                    ->prefix('start')
                    ->suffixIcon('heroicon-o-magnifying-glass'),

            ])

            ->statePath('data');
    }

    public function create(): void
    {
        dd($this->form->getState());
    }

    public function render(): View
    {
        return view('livewire.filament-form', [
            'todos' => Todo::latest(),
        ]);
    }
}
