<div>
    <button wire:click="$set('open', true)"
        class="px-3 py-1 rounded font-bold flex items-center space-x-2 bg-white border border-gray-700">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
            stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
        </svg>
        <h1>Enviar Examen</h1>
    </button>

    <x-jet-dialog-modal wire:model="open">
        <x-slot name="title">Alumnos</x-slot>
        <x-slot name="content">
            <div x-data="{ students: false }">
                <div @click="students = !students"
                    class="cursor-pointer flex items-center justify-between font-bold w-full bg-gray-100">
                    <h1 class="">
                        Seleccione los alumnos para enviar el examen
                    </h1>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </div>

                <div class="mx-6 mt-1 rounded-lg" x-show="students">
                    <table class="min-w-full divide-y divide-gray-200 rounded-lg">
                        <thead class="bg-gray-100">
                            <tr>
                                <th scope="col" class=" text-center text-black text-sm uppercase">DNI</th>
                                <th scope="col" class=" text-center text-black text-sm uppercase">NOMBRES</th>
                                <th scope="col" class=" text-center text-black text-sm uppercase">CHECK</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($allUser as $index => $user)
                                <tr class="text.center">
                                    <td>{{ $user->DNI }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>
                                        <input wire:model="students.{{ $index }}"
                                            class="focus:outline-none rounded appearance-none bg-white checked:bg-blue-700 text-blue-500 "
                                            type="checkbox" value="{{ $user->id }}">
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </x-slot>
        <x-slot name="footer">
            <div class="flex justify-end">
                <x-jet-button wire:click="save">Enviar</x-jet-button>
            </div>
        </x-slot>
    </x-jet-dialog-modal>
</div>
