<x-app-layout>
    <div class="max-w-6xl mx-auto py-8 md:py-16">
        <div class="block md:flex justify-between mb-5 mx-3 md:mx-0">
            @livewire('psychologist.exam.users', ['exam' => $exam])
            <a href="{{ route('pdf', $exam) }}"
                class="flex items-center space-x-3 text-center text-white bg-red-500 px-3 py-2 rounded shadow-lg shadow-red-500/75">
                <i class="fa-solid fa-download"></i>
                <h1 class="font-bold">PDF</h1>
            </a>
        </div>
        <div class="overflow-hidden bg-white rounded-lg shadow-md shadow-slate-800/50">
            <div class="px-6 py-4">
                <div class="block md:flex justify-center font-bold space-x-1 text-lg text-center">
                    <h1>Examen</h1>
                    <h1 class="text-sky-700">"{{ $exam->name }}"</h1>
                </div>
                <div class="my-6">
                    <p>{{ $exam->description }}</p>
                </div>
                <div class="mt-4">
                    @foreach ($exam->questions as $index => $question)
                        <div class="mb-4 flex items-center space-x-2">
                            <h1>{{ $index + 1 }}.</h1>
                            <h1>{{ $question->name }}</h1>
                            <div class="flex space-x-5 items-center">
                                @foreach ($question->options as $option)
                                    <div class="flex items-center space-x-1">
                                        <label for="" class="block">{{ $option->name }}</label>
                                        <input type="checkbox" class="rounded" name="{{ $option->name }}">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
