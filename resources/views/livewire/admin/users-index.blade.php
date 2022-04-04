<div>
    <div class="px-6 py-4">
        <input wire:keydown="clearPage" wire:model="search"
            class="rounded w-full border focus:border-slate-800 focus:ring-slate-800" type="text"
            placeholder="Buscar...">
    </div>
    @if ($users->count())
        <table class="min-w-full divide-y divide-gray-200 shadow-md">
            <thead class="bg-blue-100 ">
                <tr class="">
                    <th scope="col"
                        class="px-3 py-3 text-left text-xs font-bold text-gray-800 uppercase tracking-wider rounded-l-lg">
                        DNI
                    </th>
                    <th scope="col" class="px-3 py-3 text-left text-xs font-bold text-gray-800 uppercase tracking-wider">
                        Nombres y Apellidos
                    </th>
                    <th scope="col"
                        class="px-3 py-3 text-left text-xs font-bold text-gray-800 uppercase tracking-wider ">
                        Rol
                    </th>
                    <th scope="col"
                        class="px-3 py-3 text-left text-xs font-bold text-gray-800 uppercase tracking-wider rounded-r-lg">
                        Acciones
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200 rounded-lg">

                @foreach ($users as $user)
                    <tr>
                        <td class="px-3 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <h1>{{ $user->DNI }}</h1>
                                </div>
                            </div>
                        </td>
                        <td class="px-3 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">{{ $user->name }}</div>
                        </td>
                        <td class="px-3 py-4 whitespace-nowrap">
                            @foreach ($user->roles as $role)
                                <div class="text-sm text-gray-900 flex items-center">
                                    {{ $role->name }}
                                </div>
                            @endforeach
                        </td>
                        <td class="px-3 py-4 whitespace-nowrap font-bold text-sm">
                            <a href="{{ route('admin.users.edit', $user) }}"
                                class="text-green-600 hover:text-green-900">Editar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
        <div class="px-6 py-4 mt-8">
            {{ $users->links() }}
        </div>
    @else
        <div class="px-6 py-4">
            <strong>No hay registro del usuario</strong>
        </div>
    @endif
</div>
