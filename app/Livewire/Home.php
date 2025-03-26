<?php

namespace App\Livewire;

use App\Models\Event;
use App\Models\Post;
use App\Models\Slide;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return view('livewire.home', [
            'slide' => Slide::find(1),
            'slides' => Slide::where('id', '!=', 1)->get(),
            'posts' => Post::limit(3)->get(),
            'events' => Event::limit(4)->get(),
        ]);
    }
}
