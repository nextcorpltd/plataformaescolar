<?php

namespace App\Filament\Admin\Resources\SlideResource\Pages;

use App\Filament\Admin\Resources\SlideResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageSlides extends ManageRecords
{
    protected static string $resource = SlideResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
