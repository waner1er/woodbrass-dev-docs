<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Doc;
use Livewire\Component;

class DocController extends Component
{
    public $category;

    public $doc;

    public function mount(Category $category, Doc $doc)
    {
        $this->category = $category;
        $this->doc = $doc;
    }

    public function render()
    {
        return view('livewire.doc-controller', [
            'category' => $this->category,
            'doc' => $this->doc,
        ]);
    }
}
