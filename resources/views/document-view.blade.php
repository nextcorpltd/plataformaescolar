<div>
    @php
        $document = \App\Models\Document::find($getRecord()->id);
        $sources = \App\Models\Source::where('document_id', $document->id)->get();
        $repository = \App\Models\Repository::find($getRecord()->repository_id);
    @endphp

    <div class="flex flex-col gap-1">
        <div><strong>Autor/a:</strong> <span>{{ $repository->author ?? null }}</span></div>
        <div><strong>Curso:</strong> <span>{{ $repository->course ?? null }}</span></div>
        <div><strong>Moderador:</strong> <span>{{ $repository->teacher ?? null }}</span></div>
        <div><strong>Data de verificação:</strong> <span>{{ date('d/m/Y H:i', strtotime($repository->created_at ?? null)) }}</span></div>
    </div>

    <style>  
        .stats{
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
        }
    </style>

    <div class="mt-6">
        <x-filament::section>
            <div class="flex justify-between items-center">
                <h1 class="text-2xl font-black">{{ $repository->title ?? null }}</h1>
                @if ($document->generator)
                <x-filament::button target="_blank" color="gray" tag="a" href="/{{ \Illuminate\Support\Str::slug($repository->title).'.pdf' }}">
                    Descarregar
                </x-filament::button>
                @else
                <x-filament::button wire:click="generator({{ $repository->id }})">
                    Gerar relatório
                </x-filament::button>
                @endif
            </div>
        </x-filament::section>
    </div>

    @if ($document->content)
        <div class="mt-6">
            <x-filament::fieldset>
                <x-slot name="label">
                    Conteúdo verificado
                </x-slot>

                {!! $document->content !!}
            </x-filament::fieldset>
        </div>
    @endif

    <div class="mt-6 grid grid-cols-4 gap-4 stats">
        <x-filament::section style="background: rgba(255, 0, 0, 0.137)">
            <div class="text-center flex flex-col gap-3 pt-2">
                <div>
                    <span class="font-extrabold text-2xl p-3 rounded" style="background: red; color:white">{{ $document->score }}%</span>
                </div>
                <div>
                    <span>Percentual de plágio</span>
                </div>
            </div>
        </x-filament::section>
        <x-filament::section style="background: rgba(0, 140, 255, 0.137)">
            <div class="text-center flex flex-col gap-3 pt-2">
                <div>
                    <span class="font-extrabold text-2xl p-3 rounded" style="background: rgb(0, 47, 255); color:white">{{ $document->sourceCounts }}</span>
                </div>
                <div>
                    <span>Total de fontes</span>
                </div>
            </div>
        </x-filament::section>
        <x-filament::section style="background: rgba(21, 255, 0, 0.103)">
            <div class="text-center flex flex-col gap-3 pt-2">
                <div>
                    <span class="font-extrabold text-2xl p-3 rounded" style="background: rgb(23, 128, 58); color:white">{{ $document->textWordCounts }}</span>
                </div>
                <div>
                    <span>Palavras verificadas</span>
                </div>
            </div>
        </x-filament::section>
        <x-filament::section style="background: rgba(255, 136, 0, 0.137)">
            <div class="text-center flex flex-col gap-3 pt-2">
                <div>
                    <span class="font-extrabold text-2xl p-3 rounded" style="background: rgb(255, 94, 0); color:white">{{ $document->totalPlagiarismWords }}</span>
                </div>
                <div>
                    <span>Palavras plagiadas</span>
                </div>
            </div>
        </x-filament::section>
    </div>



    <div class="mt-6">
        <header class="">
            <h2 class="font-bold text-xl">Conteúdo semelhante</h2>
        </header>
        <div class="grid mt-6 grid-cols-1 md:grid-cols-2 gap-4">
            @foreach ($sources as $item)
            <x-filament::section style="background: rgba(255, 0, 0, 0.123); overflow: hidden;">
                <div class="mb-4">
                    <div class="flex items-center gap-2"><strong>Palavras plagiadas</strong> <x-filament::badge color="danger">{{ $item->plagiarismWords }}</x-filament::badge></div>
                </div>
                <h2 class="font-bold text-xl">{{ $item->title }}</h2>
                <div class="mb-4">
                    {{ $item->description }}
                </div>
                <div class="flex gap-2 items-center">
                    <strong>Citações:</strong>
                    <x-filament::badge color="warning">{{ $item->citation }}</x-filament::badge>
                </div>
                <div class="flex flex-col gap-2">
                    <strong>Fonte:</strong>
                    <a href="{{ $item->url }}" target="_bank" style="color: rgb(24, 57, 148); text-decoration: underline">{{ $item->url }}</a>
                </div>

            </x-filament::section>
            @endforeach

        </div>
     </div>

</div>