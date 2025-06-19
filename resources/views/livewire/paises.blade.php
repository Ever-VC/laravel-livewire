<div>
    <h2 class="text-2xl font-bold mb-4">Lista de Países</h2>
    <form class="mb-4" wire:submit="agregarPais">
        <x-input type="text" wire:model.live="pais" placeholder="Agregar país..." class="mb-4" />
        <x-button class="mb-4">
            Añadir País
        </x-button>
    </form>

    <p wire:loading class="display: block">
        Cargando países.
    </p>
    {{-- <li wire:loading.remove>
        Carga completa.
    </li> --}}
    <div wire:loading.remove>
        <ul class="list-disc list-inside">
            @foreach($paises as $pais)
            <li>{{ $pais }}</li>
        </ul>
    @endforeach
    </div>

</div>
