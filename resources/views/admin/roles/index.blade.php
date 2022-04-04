<x-app-layout>
    <div class="max-w-5xl mx-auto py-8 md:py-16">
        <div class="text-2xl">
            <h1 class="font-bold text-center">Roles y Permisos</h1>
        </div>
        <div class="mt-4 flex justify-end items-center">
            <a href="{{ route('admin.roles.create') }}" class="px-3 leading-10 bg-green-500 rounded font-bold text-white">Crear Rol</a>
        </div>

        <div class="mt-6">
            <div class="overflow-hidden bg-white shadow-lg rounded-lg">
                <div class="px-6 py-4">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    N°</th>
                                <th scope="col"
                                    class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Nombre de Rol</th>
                                <th scope="col"
                                    class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Acciones</th>
                                <th scope="col"
                                    class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($roles as $role)
                                <tr>
                                    <td class="px-6 py-4 ">
                                        <div class="text-sm font-bold text-gray-900">
                                            {{ $role->id }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="ml-4">
                                                <div class="text-sm font-bold text-gray-900">
                                                    {{ $role->name }}
                                                </div>

                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                                        <a href="{{ route('admin.roles.edit', $role) }}"
                                            class="text-green-600 hover:text-green-800 font-bold">Editar</a>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                                        <form action="{{ route('admin.roles.destroy', $role) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button class="text-white p-2 bg-red-500 rounded font-bold" type="submit">
                                                Eliminar
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
