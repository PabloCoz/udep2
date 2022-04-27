<x-app-layout>
    <div class="max-w-5xl mx-auto py-8 md:py-16">
        <div class="text-2xl">
            <h1 class="font-bold">Examenes de Evaluacion</h1>
        </div>
        <div class="mt-8">
            <div class="flex flex-col my-4">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow shadow-slate-700/50 overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-200">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-center text-xs font-bold text-gray-900 uppercase tracking-wider">
                                            Nombre de Alumnos</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-center text-xs font-bold text-gray-900 uppercase tracking-wider">
                                            Nombre de Examen</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-center text-xs font-bold text-gray-900 uppercase tracking-wider">
                                            Acciones</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @if (count($exam->responses))
                                        @foreach ($exam->responses as $item)
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="flex items-center">
                                                        <div class="ml-4">
                                                            <div class="text-sm font-medium text-gray-900">
                                                                <h1>
                                                                    {{ $item->user->name }}
                                                                </h1>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="text-sm text-gray-900 text-center">
                                                        {{ $exam->name }}
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="text-sm text-gray-900 text-center">
                                                        {{-- <a href=" {{ route('users.evaluation', $item) }}"
                                                            class="text-red-500 hover:font-bold hover:underline">Calificar
                                                        </a> --}}
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr class="">
                                            <td>
                                                <div class="text-sm text-gray-900 text-center">
                                                    No hay alumnos registrados
                                                </div>
                                            </td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
