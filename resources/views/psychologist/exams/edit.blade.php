<x-app-layout>
    <div class="max-w-5xl mx-auto py-12 md:py-16">
        <div class="shadow-md rounded-lg overflow-auto bg-white shadow-slate-700/50">
            <div class="px-6 py-4">
                <div>
                    {!! Form::model($exam, ['route' => ['exams.update', $exam], 'method' => 'put']) !!}

                    
                    @include('psychologist.exams.partials.form')

                    <div class="flex justify-end mt-4">
                        {!! Form::submit('Actualizar información', ['class' => 'bg-blue-500 block text-white font-bold rounded px-3 py-2 cursor-pointer shadow-lg shadow-blue-500/70']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

    <x-slot name="js">
        <script src="{{ asset('js/form.js') }}"></script>
    </x-slot>
</x-app-layout>
