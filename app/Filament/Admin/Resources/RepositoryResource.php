<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\RepositoryResource\Pages;
use App\Filament\Admin\Resources\RepositoryResource\RelationManagers;
use App\Models\Repository;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RepositoryResource extends Resource
{
    protected static ?string $model = Repository::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('author')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('course')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('teacher')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\FileUpload::make('file')
                    ->label('Carregue aqui o ficheiro da tese')
                    ->acceptedFileTypes(['application/pdf'])
                    ->directory('repo'),
                Forms\Components\Toggle::make('is_repo')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('author')
                    ->searchable(),
                Tables\Columns\TextColumn::make('course')
                    ->searchable(),
                Tables\Columns\TextColumn::make('teacher')
                    ->searchable(),
                Tables\Columns\TextColumn::make('file')
                    ->searchable(),
                Tables\Columns\IconColumn::make('is_repo')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageRepositories::route('/'),
        ];
    }
}
