<div>
    <button wire:click="$set('update', true)"><i
            class="fa-solid fa-file-pen cursor-pointer hover:text-green-600 focus:outline-none"></i></button>

    <x-jet-dialog-modal wire:model="update">
        <x-slot name="title">
            <h1 class="font-bold">Actualizar Pregunta</h1>
        </x-slot>
        <x-slot name="content">
            <div class="mb-3">
                <input type="text" wire:model="question.name"
                    class="rounded w-full border focus:border-gray-700 focus:ring-gray-700 focus:shadow-md focus:shadow-slate-600/50"
                    placeholder="Escriba la pregunta aquí">
                @error('question.name')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <h1 class="text-sm font-bold">Opciones:</h1>
                @if (count($question->options))
                    <div class="font-bold text-base">
                        <div class="flex justify-between items-center">
                            <div class="flex space-x-3">
                                @foreach ($opt as $item)
                                    <h1>{{ $item->value }}. {{ $item->name }}</h1>
                                @endforeach
                            </div>
                            <div>
                                <button wire:click="deleteOpt" class="underline text-sm font-bold text-red-500 animate-pulse">Actualizar Opciones</button>
                            </div>
                        </div>
                    </div>
                @else
                    <button class="rounded font-bold bg-gray-200 px-2" wire:click="addOption">Añadir opcion</button>
                    <div class="mt-2">
                        @foreach ($options as $index => $option)
                            <div class="flex items-center justify-between mx-2">
                                <input type="text" wire:model="options.{{ $index }}"
                                    class="block rounded w-full py-1 border mt-2 focus:border-gray-700 focus:ring-gray-700 focus:shadow-md focus:shadow-slate-600/50">
                                <i class="fa-solid fa-minus cursor-pointer font-extrabold text-red-500 ml-8"
                                    wire:click="removeOption({{ $index }})"></i>
                            </div>
                        @endforeach


                    </div>
                @endif
            </div>
        </x-slot>
        <x-slot name="footer">
            <div class="flex justify-end mb-3">
                <button wire:click="update"
                    class="bg-green-600 text-white font-bold rounded-lg shadow-lg shadow-green-800/80 px-3 py-2">Guardar
                    Cambios</button>
            </div>
        </x-slot>
    </x-jet-dialog-modal>
</div>
