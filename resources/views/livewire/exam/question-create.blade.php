<div>
    <button wire:click="$set('create', true)"
        class="font-bold texl-lg cursor-pointer flex items-center text-white rounded shadow-lg shadow-red-500/75 p-2 bg-red-500 focus:outline-none">
        <i class="fa-solid fa-plus"></i>
        <h1 class="ml-2">Crear preguntas</h1>
    </button>

    <x-jet-dialog-modal wire:model="create">
        <x-slot name="title">
            <h1 class="font-bold">Nueva Pregunta</h1>
        </x-slot>
        <x-slot name="content">
            <div class="mb-3">
                <input type="text" wire:model="name"
                    class="rounded w-full border focus:border-gray-700 focus:ring-gray-700 focus:shadow-md focus:shadow-slate-600/50"
                    placeholder="Escriba la pregunta aquí">
                @error('name')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <h1 class="text-sm font-bold">Opciones:</h1>
                <button class="rounded font-bold bg-gray-200 px-2" wire:click="addOption">Añadir opcion</button>
                <div class="block mt-2">
                    @foreach ($options as $index => $option)
                        <div class="flex items-center justify-between mx-2">
                            <input type="text" wire:model="options.{{ $index }}"
                                class="block rounded w-full py-1 border mt-2 focus:border-gray-700 focus:ring-gray-700 focus:shadow-md focus:shadow-slate-600/50">
                            <i class="fa-solid fa-minus cursor-pointer font-bold text-red-500 ml-8"
                                wire:click="removeOption({{ $index }})"></i>
                        </div>
                    @endforeach

                </div>
            </div>
        </x-slot>
        <x-slot name="footer">
            <div class="flex justify-end mb-3">
                <button wire:click="store"
                    class="bg-red-500 text-white font-bold rounded-lg shadow-lg shadow-red-800/80 px-3 py-2">Añadir
                    Pregunta</button>
            </div>
        </x-slot>
    </x-jet-dialog-modal>
</div>
