<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\RepositoryResource\Pages;
use App\Filament\Admin\Resources\RepositoryResource\RelationManagers;
use App\Models\Repository;
use Filament\Forms;
use Filament\Forms\Components\Grid;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RepositoryResource extends Resource
{
    protected static ?string $model = Repository::class;

    protected static ?string $navigationIcon = 'heroicon-o-archive-box-arrow-down';

    protected static ?string $navigationGroup = 'Verificador de plágio';

    protected static ?string $modelLabel = 'repositório';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make()->schema([
                    Forms\Components\TextInput::make('title')
                    ->label('Título')
                    ->default(null),
                Forms\Components\TextInput::make('author')
                    ->label('Autor')
                    ->default(null),
                Forms\Components\TextInput::make('course')
                    ->label('Curso')
                    ->default(null),
                Forms\Components\TextInput::make('teacher')
                    ->label('Orientador')
                    ->default(null),
                Forms\Components\FileUpload::make('file')
                    ->label('Carregue aqui o ficheiro da tese')
                    ->acceptedFileTypes(['application/pdf'])
                    ->columnSpanFull()
                    ->directory('repo'),
                Forms\Components\Toggle::make('is_repo')
                    ->label('Visível para o público')
                    ->columnSpanFull()
                    ->required(),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('Título')
                    ->searchable(),
                Tables\Columns\TextColumn::make('author')
                    ->label('Autor')
                    ->searchable(),
                Tables\Columns\TextColumn::make('course')
                    ->label('Curso')
                    ->searchable(),
                Tables\Columns\TextColumn::make('teacher')
                    ->label('Orientador')
                    ->searchable(),
                Tables\Columns\IconColumn::make('is_repo')
                    ->label('Público')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->label('Criado')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->label('Editado')
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
