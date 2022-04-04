<div>
    <div class="max-w-5xl mx-auto py-8 md:py-16">
        <div class="text-center mb-6">
            <h1 class="text-2xl font-bold">Examen de {{ $exam->name }}</h1>
        </div>

        <div class="overflow-hidden bg-white rounded-lg shadow-md shadow-gray-700/50">
            <div class="px-6 py-4">
                <div class="mt-7">

                    <div class="relative overflow-x-auto shadow-md rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-200">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        PREGUNTAS
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        OPCIONES
                                    </th>
                                    <th scope="col" class="px-6 py-3">

                                    </th>
                                    <th scope="col" class="px-6 py-3">

                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($exam->questions as $question)
                                    <tr class="bg-white border-b">
                                        <td class="px-6 py-4 font-medium text-gray-900">
                                            {{ $question->name }}
                                        </td>
                                        @foreach ($question->options as $index => $option)
                                            <td class="px-6 py-4 space-x-3">
                                                <label>{{ $option->name }}</label>
                                                <input type="radio" wire:model="selected.{{ $question->id }}"
                                                    name="selected.{{ $question->id }}" class="" 
                                                    value="{{ $option->id }}">
                                            </td>
                                        @endforeach
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="flex items-center justify-end my-4">
                        <button wire:click="save"
                            class="bg-blue-500 px-5 py-1 rounded-lg shadow-lg shadow-blue-500/50 leading-8 tracking-widest font-bold uppercase text-xs text-white ">Enviar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

