<x-app-layout>
    <div class="max-w-5xl mx-auto py-8 md:py-16">
        <h1 class="font-bold text-3xl text-center md:text-left mb-8 uppercase">Baterias</h1>

        <div class="flex items-center justify-center md:justify-end mb-6">
            @livewire('psychologist.battery-exam')
        </div>
        
        <div class="">
            @livewire('psychologist.exam-table', ['batteries' => $batteries])
        </div>
    </div>
    
</x-app-layout>