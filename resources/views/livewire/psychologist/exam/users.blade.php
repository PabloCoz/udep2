<div>
    <button wire:click="$set('open', true)"
        class="px-3 py-2 rounded bg-cyan-500 shadow-lg shadow-cyan-500/50 font-bold">Enviar Examen</button>

    <x-jet-dialog-modal wire:model="open">
        <x-slot name="title">Alumnos</x-slot>
        <x-slot name="content">
            <div class="mx-6 rounded-lg">
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
                                        type="checkbox" value="{{$user->id}}">
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </x-slot>
        <x-slot name="footer">
            <div class="flex justify-end">
                <button wire:click="save"
                    class="uppercase leading-10 bg-blue-500 rounded px-5 py-1 shadow tracking-widest text-sm text-white font-bold">Enviar</button>
            </div>
        </x-slot>
    </x-jet-dialog-modal>
</div>
