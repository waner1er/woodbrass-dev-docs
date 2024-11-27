<?php

namespace App\Livewire;

use App\Models\Category;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;

class WelcomeController extends Component
{
    public function render()
    {
        return view('livewire.welcome-controller', [
            'categories' => Category::all(),
        ]);
    }

    public function redirectToCategory($slug)
    {
        return Redirect::route('category-docs-list', ['category' => $slug]);
    }
}
