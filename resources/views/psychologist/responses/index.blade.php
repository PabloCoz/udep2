<x-app-layout>
    <div class="max-w-5xl mx-auto py-8 md:py-16">
        <div class="font-bold text-center">
            <h1 class="text-2xl">Resultados de los Usuarios</h1>
        </div>
        <div class="flex flex-col my-4">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow shadow-slate-700/50 overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-200">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-center text-xs font-bold text-gray-900 uppercase tracking-wider">
                                        Nombre de Exámen</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-center text-xs font-bold text-gray-900 uppercase tracking-wider">
                                        N° de Alumnos</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-center text-xs font-bold text-gray-900 uppercase tracking-wider">
                                        Acciones</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($exams as $exam)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        <h1>
                                                            {{ $exam->name }}
                                                        </h1>
                                                    </div>
                                                    <div class="text-sm text-gray-500">
                                                        {{ Str::limit($exam->description, 30) }}</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900 text-center">
                                                {{ $exam->students->count() }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900 text-center">
                                                <a href="{{ route('responses.show', $exam)}}"
                                                    class="text-red-500 hover:font-bold hover:underline">Calificar
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-8">
                        {{ $exams->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
