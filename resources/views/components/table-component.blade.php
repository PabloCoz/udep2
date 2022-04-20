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
                PDF</th>
            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
            </th>
        </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-200">
        @foreach ($exams as $index => $exam)
            <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="flex items-center">
                        <div class="ml-4">
                            <div class="text-sm font-medium text-gray-900">
                                <a class="hover:underline hover:text-blue-500" href="{{ route('questions', $exam) }}">
                                    {{ $exam->name }}
                                </a>
                            </div>
                        </div>
                    </div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-center font-bold text-gray-900">
                        {{ count($exam->questions) }}
                    </div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                    <a href="{{ route('exams.edit', $exam) }}"
                        class="text-green-600 hover:text-green-800 font-bold">Editar</a>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                    <a href="{{ route('pdf', $exam) }}" class="text-red-600 hover:text-red-800 font-bold">PDF</a>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-center font-bold text-gray-900">
                        @livewire('psychologist.exam.users', ['exam' => $exam])
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
