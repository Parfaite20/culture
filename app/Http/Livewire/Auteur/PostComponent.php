<?php

namespace App\Http\Livewire\Auteur;

use App\Models\Post;
use Livewire\Component;

class PostComponent extends Component
{
    public $posts;

    public function mount()
    {
        $this->posts = auth()->user()->posts;
    }

    public function render()
    {
        //$user = auth()->user();
        //$post = Post::all();
        return view('livewire.auteur.post-component')->layout('layouts.templateUser');
    }
}
