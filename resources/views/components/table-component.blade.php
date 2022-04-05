@props(['exams'])
<table class="min-w-full divide-y divide-gray-200">
    <thead class="bg-gray-50">
        <tr>
            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                Nombre de Exámen</th>
            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                N° de Preguntas</th>
            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                Acciones</th>
            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
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
                                <a class="hover:underline hover:text-blue-500" href="{{ route('questions', $exam) }}">
                                    {{ $exam->name }}
                                </a>
                            </div>
                            <div class="text-sm text-gray-500">
                                {{ Str::limit($exam->description, 30) }}</div>
                        </div>
                    </div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-center font-bold text-gray-900">
                        {{count($exam->questions)}}
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
