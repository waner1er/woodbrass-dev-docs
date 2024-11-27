<?php

namespace App\Livewire;

use App\Models\Category;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;

class DocList extends Component
{
    public $category;

    public $docs;

    public function mount(Category $category)
    {
        $this->category = $category;
        $this->docs = $category->docs;
    }

    public function redirectToDoc($docSlug)
    {
        return Redirect::route('doc-show', ['category' => $this->category->slug, 'doc' => $docSlug]);
    }

    public function render()
    {
        return view('livewire.doc-list', [
            'docs' => $this->docs,
            'category' => $this->category,
        ]);
    }
}
