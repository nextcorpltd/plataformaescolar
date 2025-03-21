<?php

namespace App\Filament\Admin\Pages;

use App\Models\Document;
use App\Models\Repository;
use App\Models\Source;
use App\Models\User;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class Plage extends Page implements HasForms
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.admin.pages.plage';

    protected static ?string $title = 'Verificador de plágio';

    protected static ?string $navigationLabel = 'Verificador de plágio';

    protected static ?string $slug = 'plagio';

    protected ?string $subheading = 'Adicione um conteúdo ou um ficheiro para verificar.';

    use InteractsWithForms;

    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill();
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()->schema([
                    // TextInput::make('title')
                    //     ->label('Título do trabalho'),
                    // TextInput::make('author')
                    //     ->label('Autor'),
                    // TextInput::make('course')
                    //     ->label('Curso'),
                    // TextInput::make('teacher')
                    //     ->label('Orientador'),
                    Textarea::make('content')
                        ->columnSpanFull()
                        ->label('Adicione aqui o conteúdo'),
                    Select::make('repository_id')
                        ->label('Ficheiro de tese')
                        ->options(Repository::all()->pluck('author', 'id'))
                        ->searchable()
                        ->columnSpanFull()

                ])->columns()
                // ...
            ])
            ->statePath('data');
    }

    public function create(): void
    {
        $data = $this->form->getState();

        dd($data);


        $response = Http::withHeaders([
            'Authorization' => 'Bearer TI1S4rhTBW8KVoWhQ18PdVl8lCYtCBVpPPcv6Jh12ffe401a',
            'Content-Type' => 'application/json',
        ])->post('https://api.gowinston.ai/v2/plagiarism', [
            'text' => $data['content'],
            'file' => 'https://s3.amazonaws.com/rd-marketing-objects/ebook_guia-definitivo-marketing-digital/guia-definitivo-marketing-digital.pdf',
        ]);

        if ($response->successful()) {
           $result = Document::query()->create([
                'user_id' => Auth::user()->id,
                'repository_id' => $data['repository_id'],
                'content' => $data['content'],
                // 'author' => $data['author'],
                // 'course' => $data['course'],
                // 'teacher' => $data['teacher'],
                // 'file' => $data['file'],
                'status' => $response->json('status'),
                'score' =>  $response->json('result')['score'],
                'sourceCounts' =>  $response->json('result')['sourceCounts'],
                'textWordCounts' =>  $response->json('result')['textWordCounts'],
                'totalPlagiarismWords' =>  $response->json('result')['totalPlagiarismWords'],
                'identicalWordCounts' =>    $response->json('result')['identicalWordCounts'],
                'credits_used' =>  $response->json('credits_used'),
            ]);
            foreach ($response->json('sources') as $item) {
                Source::create([
                    'document_id' => $result->id,
                    'score' => $item['score'],
                    'canAccess' => $item['canAccess'],
                    'totalNumberOfWords' => $item['totalNumberOfWords'],
                    'plagiarismWords' => $item['plagiarismWords'],
                    'identicalWordCounts' => $item['identicalWordCounts'],
                    'url' => $item['url'],
                    'author' => $item['author'],
                    'description' => $item['description'],
                    'title' => $item['title'],
                    'source' => $item['source'],
                    'citation' => $item['citation'],

                    // 'startIndex' => $item['plagiarismFound']['startIndex'],
                    // 'endIndex' => $item['plagiarismFound'][0]['endIndex'],
                    // 'sequence' => $item['plagiarismFound'][0]['sequence'],
                ]);
            }

            Notification::make()
                ->title('Verificação completa')
                ->body('Será redirecionado/a ao relatório.')
                ->success()
                ->send();
        } else {
            Notification::make()
                ->title('Alguma coisa deu errado')
                ->body('Por favor, tente novamente.')
                ->warning()
                ->send();
            dd(response()->json(['error' => 'Erro na requisição', 'details' => $response->body()], $response->status()));
        }


    }

}
