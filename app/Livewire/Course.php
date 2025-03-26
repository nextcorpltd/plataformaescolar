<?php

namespace App\Livewire;

use App\Models\Course as ModelsCourse;
use Livewire\Component;

class Course extends Component
{
    public $course;

    public function mount($slug)
    {
        $this->course = ModelsCourse::where('slug', $slug)->first();
    }

    public function render()
    {
        return view('livewire.course');
    }
}
