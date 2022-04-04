<x-app-layout>
    <div class="max-w-5xl mx-auto py-8 md:py-16">
        <div class="overflow-hidden bg-white shadow rounded-lg">
            <div class="px-6 py-4">
                <h1 class="text-xl font-bold">Nombre: </h1>
                <p class="">{{ $user->name }}</p>

                <h1 class="text-lg mt-4 mb-2 font-bold">Lista de roles</h1>

                {!! Form::model($user, ['route' => ['admin.users.update', $user], 'method' => 'put']) !!}
                @foreach ($roles as $role)
                    <div>
                        <label>
                            {!! Form::checkbox('roles[]', $role->id, null, ['class' => 'mr-1 rounded checked:bg-red-500']) !!}
                            {{ $role->name }}
                        </label>
                    </div>
                @endforeach

                {!! Form::submit('Asignar rol', ['class' => 'mt-4 rounded px-3 py-1 leading-8 uppercase text-sm bg-amber-300 font-bold tracking-wider']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>

</x-app-layout>