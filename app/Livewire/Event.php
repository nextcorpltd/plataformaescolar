<?php

namespace App\Livewire;

use App\Models\Event as ModelsEvent;
use Livewire\Component;

class Event extends Component
{
    public $event;

    public function mount($slug)
    {
        $this->event = ModelsEvent::where('slug', $slug)->first();
    }

    public function render()
    {
        return view('livewire.event');
    }
}
