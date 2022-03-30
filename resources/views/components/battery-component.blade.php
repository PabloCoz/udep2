@props(['exams'])
<table class="min-w-full divide-y divide-gray-200">
    <thead class="bg-gray-50">
        <tr>
            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                Nombre de Exámen</th>
            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
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
                                <a class="hover:underline hover:text-blue-500" href="{{ route('questions', $exam) }}">
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
                        <a href="{{ route('exams.show', $exam) }}"
                            class="text-blue-500 hover:font-bold hover:underline">Enviar Examen</a>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
