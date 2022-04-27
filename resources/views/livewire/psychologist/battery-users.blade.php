<div>
    <x-jet-button wire:click="$set('openB', true)">
        Enviar Baterias
    </x-jet-button>

    <x-jet-dialog-modal wire:model="openB">
        <x-slot name="title">
            <h1 class="font-bold">Enviar Baterias</h1>
            
        </x-slot>

        <x-slot name="content">
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
        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('openB')">
                Cancelar
            </x-jet-secondary-button>

            <x-jet-button wire:click="save" class="ml-2">
                Enviar
            </x-jet-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
