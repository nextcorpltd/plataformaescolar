<x-filament-panels::page>
    <div>
        <form wire:submit="create">
            {{ $this->form }}

            <div class="mt-6">
                <x-filament::button type="submit" class="w-full">
                    Verificar
                </x-filament::button>
            </div>
        </form>

        <x-filament-actions::modals />
    </div>
</x-filament-panels::page>
