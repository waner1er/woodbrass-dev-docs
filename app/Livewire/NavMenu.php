<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class NavMenu extends Component
{
    public function render()
    {
        return view('livewire.nav-menu', [
            'categories' => Category::all(),
        ]);
    }
}
