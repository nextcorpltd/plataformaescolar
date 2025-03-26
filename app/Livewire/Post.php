<?php

namespace App\Livewire;

use App\Models\Post as ModelsPost;
use Livewire\Component;

class Post extends Component
{
    public $post;

    public function mount($slug)
    {
        $this->post = ModelsPost::where('slug', $slug)->first();
    }

    public function render()
    {
        return view('livewire.post');
    }
}
