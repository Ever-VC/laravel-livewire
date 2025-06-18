<div>
    {{-- <h2>{{ $title }} desde el componente! Usuario:[{{ $name }}, {{$email}}] </h2> --}}
    <x-input type="text" wire:model.live="name" placeholder="Escribe el título del post" />
    <x-button wire:click="save">
        Save
    </x-button>
    <p>Nombre: {{ $name }}</p>
</div>
