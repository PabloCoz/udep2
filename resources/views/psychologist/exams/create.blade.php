<x-app-layout>
    <div class="max-w-5xl mx-auto py-12 md:py-16">
        <div class="shadow-md rounded-lg overflow-auto bg-white shadow-slate-700/50">
            <div class="px-6 py-4">
                <div>
                    {!! Form::open(['route' => ['exams.store'], 'autocomplete' => 'off']) !!}

                    {!! Form::hidden('user_id', auth()->user()->id) !!}
                    @include('psychologist.exams.partials.form')

                    <div class="flex justify-end mt-4">
                        {!! Form::submit('Crear curso', ['class' => 'bg-yellow-400 block font-bold rounded px-3 py-2 cursor-pointer shadow-lg shadow-amber-700/50']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
    <script src="{{ asset('js/form.js') }}"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#description'))
            .catch(error => {
                console.error(error);
            });
    </script>

</x-app-layout>
