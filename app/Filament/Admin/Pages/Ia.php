<?php

namespace App\Filament\Admin\Pages;

use Filament\Pages\Page;

class Ia extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.admin.pages.ia';

    protected static ?string $title = 'Verificador de IA';

    protected static ?string $navigationGroup = 'Verificador de plágio';

    public static function getNavigationBadge(): ?string
    {
        return 'Breve';
    }
}
