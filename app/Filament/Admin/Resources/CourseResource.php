<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\CourseResource\Pages;
use App\Filament\Admin\Resources\CourseResource\RelationManagers;
use App\Models\Course;
use App\Models\Section;
use Filament\Forms;
use Filament\Forms\Components\Section as ComponentsSection;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CourseResource extends Resource
{
    protected static ?string $model = Course::class;

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';

    protected static ?string $navigationGroup = 'Portal';

    protected static ?string $modelLabel = 'curso';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
               ComponentsSection::make()->schema([
                Forms\Components\Select::make('section_id')
                ->label('Formação')
                ->options(Section::all()->pluck('name', 'id'))
                ->searchable(),
            Forms\Components\TextInput::make('name')
                ->label('Nome')
                ->required()
                ->maxLength(255),
            Forms\Components\TextInput::make('slug')
            ->label('URL')
                ->required()
                ->maxLength(255),
            Forms\Components\FileUpload::make('image')
            ->label('Imagem de destaque')
            ->directory('courses')
                ->image(),
            Forms\Components\RichEditor::make('content')
                ->label('Conteúdo')
                ->columnSpanFull(),
               ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('section.name')
                    ->label('Formação')
                    ->sortable(),
                Tables\Columns\TextColumn::make('name')
                    ->label('Curso')
                    ->searchable(),
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
            'index' => Pages\ListCourses::route('/'),
            'create' => Pages\CreateCourse::route('/create'),
            'edit' => Pages\EditCourse::route('/{record}/edit'),
        ];
    }
}
