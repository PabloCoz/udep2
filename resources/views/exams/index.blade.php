<x-app-layout>
    <div class="max-w-6xl mx-auto py-8 md:py-16">
        <div class="block md:flex justify-between items-center space-y-3 md:space-y-0">
            <div>
                <h1 class="font-bold text-2xl uppercase leading-8 tracking-wide text-center">Lista de Examenes</h1>
            </div>
            <div>
                <a href="{{route('exams.create')}}" class="mx-2 rounded p-2 block text-center bg-yellow-400 font-bold shadow-lg shadow-amber-600/75">Nuevo Examen</a>
            </div>
        </div>
        @livewire('exam.exam-index')
    </div>
</x-app-layout>