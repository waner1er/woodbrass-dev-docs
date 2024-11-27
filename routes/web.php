<?php

use App\Livewire\DocController;
use Illuminate\Support\Facades\Route;

Route::get('/', \App\Livewire\WelcomeController::class)->name('welcome');
Route::get('/category/{category:slug}', \App\Livewire\DocList::class)->name('category-docs-list');
Route::get('/category/{category:slug}/{doc:slug}', DocController::class)->name('doc-show');
