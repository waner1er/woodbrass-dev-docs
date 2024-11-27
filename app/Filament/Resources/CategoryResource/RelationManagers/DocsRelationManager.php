<?php

namespace App\Filament\Resources\CategoryResource\RelationManagers;

use App\Filament\Resources\DocResource;
use AskerAkbar\GptTrixEditor\Components\GptTrixEditor;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;

class DocsRelationManager extends RelationManager
{
    protected static string $relationship = 'docs';

    public function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\Grid::make(3)
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('slug')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\FileUpload::make('image'),
                    ]),
                Forms\Components\Grid::make(1)
                    ->schema([
                        GptTrixEditor::make('content')->disableToolbarButtons([
                            'gptTools',
                        ])->columnSpan('full'),
                    ]),

            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('name')
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                ->width('100px')
                ->height('auto'),
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextInputColumn::make('slug'),
                Tables\Columns\TextColumn::make('description'),

            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make()
                ->url(fn (): string => DocResource::getUrl('create')),
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->url(fn (Model $record): string => DocResource::getUrl('edit', ['record' => $record])),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
