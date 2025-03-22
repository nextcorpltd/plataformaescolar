<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\DocumentResource\Pages;
use App\Filament\Admin\Resources\DocumentResource\RelationManagers;
use App\Models\Document;
use App\Models\Repository;
use Filament\Forms;
use Filament\Forms\Components\View;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DocumentResource extends Resource
{
    protected static ?string $model = Document::class;

    protected static ?string $navigationIcon = 'heroicon-o-chart-bar';

    protected static ?string $navigationGroup = 'Verificador de plágio';

    protected static ?string $modelLabel = 'relatório';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                View::make('document-view')->columnSpanFull()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('author')
                ->label('Autor/a')
                    ->default(function($record){
                        $author = Repository::find($record->repository_id);
                        if ($author) {
                            return $author->author;
                        } else {
                            return null;
                        }

                    })
                    ->sortable(),
                Tables\Columns\TextColumn::make('title')
                ->label('Título do trabalhos')
                    ->default(function($record){
                        $author = Repository::find($record->repository_id);
                        if ($author) {
                            return $author->title;
                        } else {
                            return null;
                        }

                    })
                    ->sortable(),

                Tables\Columns\TextColumn::make('score')
                    ->label('Pontuação')
                    ->badge()
                    ->suffix('%')
                    ->color('danger')
                    ->tooltip('Pontuação de plágio indicando a percentagem de conteúdo plagiado no texto analisado.')
                    ->searchable(),
                Tables\Columns\TextColumn::make('sourceCounts')
                    ->label('N/fontes')
                    ->badge()
                    ->tooltip('Número de fontes identificadas durante a análise que contêm conteúdo plagiado.')
                    ->searchable(),
                Tables\Columns\TextColumn::make('textWordCounts')
                    ->label('Palavras verificadas')
                    ->badge()
                    ->color('success')
                    ->tooltip('Número total de palavras no texto digitalizado.')
                    ->searchable(),
                Tables\Columns\TextColumn::make('totalPlagiarismWords')
                    ->label('Palavras plagiadas')
                    ->badge()
                    ->color('warning')
                    ->tooltip('Número total de palavras identificadas como plagiadas.')
                    ->searchable(),
                Tables\Columns\TextColumn::make('credits_used')
                    ->label('Créditos utilizados')
                    ->badge()
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->label('Data de verificação')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make()->label('Visualizar')->button()->outlined(),
                //Tables\Actions\EditAction::make(),
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
            //'create' => Pages\CreateDocument::route('/create'),
            'view' => Pages\ViewDocument::route('/{record}'),
            //'edit' => Pages\EditDocument::route('/{record}/edit'),
        ];
    }
}
