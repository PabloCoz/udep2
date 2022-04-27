<div>
    <a href="{{ route('messages') }}" wire:click="resetNotificationCount()"
        class="flex items-center py-2.5 px-4 rounded transition duration-200 @routeIs ('messages') bg-white text-black font-bold @endif hover:bg-white hover:font-bold hover:text-black justify-between">
        <span class="">Mensajes</span>
        <span
            class="inline-flex justify-center items-center p-3 ml-3 w-3 h-3 text-sm font-bold text-white bg-red-500 rounded-full">{{ auth()->user()->notification }}</span>
    </a>
</div>
