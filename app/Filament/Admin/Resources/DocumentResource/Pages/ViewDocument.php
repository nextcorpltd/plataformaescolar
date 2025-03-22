<?php

namespace App\Filament\Admin\Resources\DocumentResource\Pages;

use App\Filament\Admin\Resources\DocumentResource;
use App\Filament\Admin\Widgets\StatsDocument;
use App\Models\Document;
use App\Models\Repository;
use App\Models\Source;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\ViewRecord;
use Illuminate\Support\Str;

class ViewDocument extends ViewRecord
{
    protected static string $resource = DocumentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            //Actions\EditAction::make(),
        ];
    }

    public function generator($repo)
    {
        $repo = Repository::find($repo);
        $doc = Document::where('repository_id', $repo->id)->first();
        $sources = Source::where('document_id', $doc->id)->get();


        $mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML(view('pdf.generator', [
            'doc' => $doc,
            'repo' => $repo,
            'sources' => $sources,
        ]));

        $name = Str::slug($repo->title).'.pdf';

        $mpdf->Output($name, \Mpdf\Output\Destination::FILE);

        $doc->generator = true;
        $doc->save();

        Notification::make()
            ->title('Relatório gerado')
            ->body('O relatório de verificação foi gerado. Clique no botão abaixo para baixar.')
            ->success()
            ->send();
    }


}
