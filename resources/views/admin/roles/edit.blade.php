<x-app-layout>
    <div class="max-w-5xl mx-auto py-12 md:py-16">
        <div class="shadow-md rounded-lg overflow-auto bg-white shadow-slate-700/50">
            <div class="px-6 py-4">
                <div>
                    {!! Form::model($role, ['route' => ['admin.roles.update', $role], 'method' => 'put']) !!}

                    {!! Form::hidden('user_id', auth()->user()->id) !!}
                    @include('admin.roles.partials.form')

                    <div class="flex justify-end mt-4">
                        {!! Form::submit('Actualizar Rol', ['class' => 'bg-blue-500 block font-bold text-white rounded px-3 py-2 cursor-pointer shadow-lg shadow-blue-700/50']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
