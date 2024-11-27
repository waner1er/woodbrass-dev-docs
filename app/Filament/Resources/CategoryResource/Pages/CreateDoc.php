<?php

namespace App\Filament\Resources\CategoryResource\Pages;

use App\Filament\Resources\DocResource;
use App\Models\Category;
use Filament\Forms\Form;
use Filament\Resources\Pages\CreateRecord;

class CreateDoc extends CreateRecord
{
    protected static string $resource = DocResource::class;
}
