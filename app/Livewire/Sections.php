<?php

namespace App\Livewire;

use App\Models\Course;
use App\Models\Section;
use Livewire\Component;

class Sections extends Component
{
    public $section;

    public function mount($slug)
    {
        $this->section = Section::where('slug', $slug)->first();
    }

    public function render()
    {
        return view('livewire.sections', [
            'courses' => Course::where('section_id', $this->section->id)->get(),
        ]);
    }
}
