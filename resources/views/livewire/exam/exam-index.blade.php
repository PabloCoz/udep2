<div>
    <div class="flex flex-col mt-12 mb-8">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow shadow-slate-700/50 overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Nombre de Exámen</th>
                                <th scope="col"
                                    class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Vista de Examen</th>
                                <th scope="col"
                                    class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Acciones</th>
                                <th scope="col"
                                    class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                </th>

                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($exams as $exam)
                                <tr>

                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">
                                                    <a class="hover:underline hover:text-blue-500"
                                                        href="{{ route('questions', $exam) }}">
                                                        {{ Str::limit($exam->name, 30) }}
                                                    </a>
                                                </div>
                                                <div class="text-sm text-gray-500">
                                                    {{ Str::limit($exam->description, 30) }}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900 text-center">
                                            <a href="{{route('exams.show', $exam)}}" class="text-blue-500 hover:font-bold hover:underline">Ver Examen</a>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                                        <a href="{{ route('exams.edit', $exam) }}"
                                            class="text-green-600 hover:text-green-800 font-bold">Editar</a>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                                        <form action="{{ route('exams.destroy', $exam) }}" method="post">
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
                <div class="mt-8">
                    {{ $exams->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
