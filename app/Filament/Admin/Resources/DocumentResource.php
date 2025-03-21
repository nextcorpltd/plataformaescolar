<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\DocumentResource\Pages;
use App\Filament\Admin\Resources\DocumentResource\RelationManagers;
use App\Models\Document;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DocumentResource extends Resource
{
    protected static ?string $model = Document::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('user_id')
                    ->required()
                    ->numeric(),
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
                Forms\Components\Textarea::make('content')
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('file')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('status')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('score')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('sourceCounts')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('textWordCounts')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('totalPlagiarismWords')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('identicalWordCounts')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('credits_used')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\Textarea::make('observation')
                    ->columnSpanFull(),
                Forms\Components\Toggle::make('is_repo')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user_id')
                    ->numeric()
                    ->sortable(),
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
                Tables\Columns\TextColumn::make('status')
                    ->searchable(),
                Tables\Columns\TextColumn::make('score')
                    ->searchable(),
                Tables\Columns\TextColumn::make('sourceCounts')
                    ->searchable(),
                Tables\Columns\TextColumn::make('textWordCounts')
                    ->searchable(),
                Tables\Columns\TextColumn::make('totalPlagiarismWords')
                    ->searchable(),
                Tables\Columns\TextColumn::make('identicalWordCounts')
                    ->searchable(),
                Tables\Columns\TextColumn::make('credits_used')
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
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDocuments::route('/'),
            'create' => Pages\CreateDocument::route('/create'),
            'edit' => Pages\EditDocument::route('/{record}/edit'),
        ];
    }
}
