<div>
    <div class="max-w-6xl mx-2 lg:mx-auto py-8 md:py-16">
        <div class="block text-center md:flex items-center justify-center font-bold text-xl md:space-x-2">
            <h1>Examen</h1>
            <h1 class="text-sky-700 uppercase leading-10">"{{ $exam->name }}"</h1>
        </div>

        <div class="mt-8">
            @livewire('exam.question-create', ['exam' => $exam])
        </div>
        <div class="mt-4">
            @foreach ($questions as $index => $question)
                <div class="bg-white shadow-md shadow-slate-700/60 rounded overflow-hidden mb-4">
                    <div class="px-6 py-4">
                        <article class="flex items-center justify-between">
                            <div>
                                <div class="font-bold uppercase">
                                    <h1>{{ $question->name }}</h1>
                                </div>
                                <div class="text-sm flex items-center space-x-2 mt-2">
                                    <h1 class="font-semibold">Opciones:</h1>
                                    <div class="flex items-center space-x-2">
                                        @foreach ($question->options as $option)
                                            <h2 class="">{{ $option->value }}. {{ $option->name }}
                                            </h2>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center mr-2 space-x-3">
                                @livewire('exam.question-edit', ['question' => $question], key($question->id))
                                <i class="fa-solid fa-trash-can cursor-pointer hover:text-red-600 focus:outline-none" wire:click="destroy({{$question}})"></i>
                            </div>
                        </article>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
