<div>
    <button wire:click="$set('open', true)"
        class="px-3 py-2 rounded bg-green-600 shadow-lg shadow-green-600/50 text-white font-bold">
        Nuevo Mensaje
    </button>

    <x-jet-dialog-modal wire:model="open">
        <x-slot name="title">
            <h1 class="font-bold text-xl">Mensaje</h1>
        </x-slot>
        <x-slot name="content">
            <div class="mb-4">
                <x-jet-label class="font-bold text-left" for="subject" value="Asunto" />
                <input type="text" class="block w-full rounded border focus:border-black focus:ring-black" placeholder="Ingrese asunto" wire:model="subject" >
                <x-jet-input-error for="subject" />
            </div>

            <div class="mb-4">
                <x-jet-label class="font-bold text-left" value="Mensaje"/>
                <textarea class="block w-full rounded border focus:border-black focus:ring-black" placeholder="Ingrese descripcion" wire:model="body"></textarea>
                <x-jet-input-error for="body" />
            </div>

            <div class="mb-4">
                <x-jet-label class="font-bold text-left" value="Destino"/>
                <select wire:model="to_user_id" class="block w-full rounded border focus:border-black focus:ring-black">
                    <option value="0" selected disabled>Seleccione un usuario</option>
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
                <x-jet-input-error for="user" />
            </div>

        </x-slot>
        <x-slot name="footer">
            <div class="flex justify-end items-center">
                <button wire:click="store" class="uppercase px-3 py-1.5 rounded bg-blue-500 leading-10 text-white font-bold text-xs tracking-widest">Enviar Mensaje</button>
            </div>
        </x-slot>
    </x-jet-dialog-modal>
</div>
