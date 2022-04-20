<div class="mt-2">
    {!! Form::label('name', 'Nombre del exámen', ['class' => 'uppercase text-sm text-gray-500']) !!}
    {!! Form::text('name', null, ['class' => 'rounded w-full py-1']) !!}

    @error('name')
        <span class="text-xs text-red-500">{{ $message }}</span>
    @enderror
</div>

<div class="mt-2">
    {!! Form::label('slug', 'Slug del examen') !!}
    {!! Form::text('slug', null, ['class' => 'rounded w-full mt-1', 'readonly']) !!}

    @error('slug')
        <strong class="text-xs text-red-500">{{ $message }}</strong>
    @enderror

</div>

<div class="mt-2">
    {!! Form::label('description', 'Descripción', ['class' => 'uppercase text-sm text-gray-500']) !!}
    {!! Form::textarea('description', null, ['class' => 'rounded w-full py-1']) !!}
    
    @error('description')
        <span class="text-xs text-red-500">{{ $message }}</span>
    @enderror
</div>