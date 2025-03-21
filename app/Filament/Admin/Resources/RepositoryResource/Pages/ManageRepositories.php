<?php

namespace App\Filament\Admin\Resources\RepositoryResource\Pages;

use App\Filament\Admin\Resources\RepositoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageRepositories extends ManageRecords
{
    protected static string $resource = RepositoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
