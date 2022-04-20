<div>
    <button wire:click="$set('open', true)"
        class="px-4 py-1 leading-8 uppercase font-semibold text-sm tracking-wider text-white bg-blue-500 rounded-lg shadow">Crear
        Bateria</button>

    <x-jet-dialog-modal wire:model="open">
        <x-slot name="title">
            <h1 class="font-bold">Crear Bateria</h1>
        </x-slot>
        <x-slot name="content">
            <div class="px-4 py-4">
                <form wire:submit.prevent="store">
                    <div class="mb-4">
                        <x-jet-label class="font-bold" for="name" value="{{ __('Nombre de Bateria') }}" />
                        <x-jet-input class="block mt-1 w-full" type="text" wire:model="name" />
                        @error('name')
                            <span class="text-red-600 text-sm mt-2"> {{ $message }}</span>
                        @enderror
                    </div>
                    <div x-data="{ exm: false }">
                        <div @click="exm = !exm" class="bg-gray-200 cursor-pointer rounded flex items-center justify-between w-full font-bold">
                            <h1>Examenes</h1>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-6" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                        <div class="space-y-2 mt-2" x-show="exm">
                            @foreach ($exams as $index => $exam)
                                <div class="flex items-center">
                                    <input type="checkbox" wire:model="exam.{{ $index }}"
                                        value="{{ $exam->id }}" class="rounded">
                                    <div class="ml-2 text-sm leading-5">
                                        {{ $exam->name }}
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    @error('exam')
                            <span class="text-red-600 text-sm mt-2"> {{ $message }}</span>
                        @enderror
                    <div class="flex items-center justify-end mt-6">
                        <x-jet-button>
                            {{ __('Crear') }}
                        </x-jet-button>
                    </div>
                </form>
            </div>
        </x-slot>
        <x-slot name="footer"></x-slot>
    </x-jet-dialog-modal>
</div>
