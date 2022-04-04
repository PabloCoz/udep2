<div class="my-4">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class' => 'w-full rounded' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Escribir rol']) !!}

    @error('name')
        <span class="">
            <strong class="text-red-500 font-bold text-xs">{{ $message }}</strong>
        </span>
    @enderror
</div>


<strong>Permisos</strong>
@foreach ($permissions as $permission)
    <div>
        <label>
            {!! Form::checkbox('permissions[]', $permission->id, null, ['class' => 'mr-1 rounded']) !!}
            {{ $permission->name }}
        </label>
    </div>
@endforeach

@error('name')
    <small>
        <strong class="text-red-500 font-bold text-xs">{{ $message }}</strong>
    </small>
@enderror
