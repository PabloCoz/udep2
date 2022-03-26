<div class="max-w-5xl mx-auto py-8 md:py-16">
    <div class="text-xl text-gray-700 mb-2 leading-6">
        <input wire:keydown="clearPage" wire:model="search"
            class="rounded w-full border focus:border-slate-800 focus:ring-slate-800" type="text"
            placeholder="Ingrese DNI o nombre del Alumno">
    </div>

    @if ($users->count())
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="px-6 py-4">
                <table class="border-collapse table-auto w-full text-sm">
                    <thead>
                        <tr>
                            <th class="border-b border-slate-800 px-2 py-3 pt-0 pb-3 text-slate-800 font-bold text-left">
                                ID</th>
                            <th class="border-b border-slate-800 px-2 py-3 pt-0 pb-3 text-slate-800 font-bold text-left">
                                Nombre</th>
                            <th class="border-b border-slate-800 px-2 py-3 pt-0 pb-3 text-slate-800 font-bold text-left">
                                DNI</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        @foreach ($users as $user)
                            <tr>
                                <td class="border-b border-slate-100 px-2 py-3">{{ $user->id }}</td>
                                <td class="border-b border-slate-100 px-2 py-3">{{ $user->name }}</td>
                                <td class="border-b border-slate-100 px-2 py-3">{{ $user->DNI }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="mt-6">
            {{ $users->links() }}
        </div>
    @else
        <div class="px-6 py-4">
            <strong>No hay registro</strong>
        </div>
    @endif

</div>
