<div>
    <div class="max-w-5xl mx-auto py-8 md:py-16">
        <div class="block md:flex items-center justify-between text-center space-y-4">
            <div>
                <h1 class="font-bold text-2xl">Mensajes</h1>
            </div>
            @livewire('messages')
        </div>
        <div class="mt-8 mx-1">
            <div class="bg-white overflow-hidden rounded-lg shadow-md shadow-gray-700/50">
                <div class="px-6 py-4">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-200">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-bold uppercase tracking-wider">
                                    EMISOR
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-bold uppercase tracking-wider">
                                    FECHA
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-bold uppercase tracking-wider">
                                    DESCRIPCIÓN
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-bold uppercase tracking-wider">
                                    ENLACE</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @if (count($messages))
                                @foreach ($messages as $message)
                                    <tr>
                                        <td class="px-6 py-4 text-sm">{{ $message->data['to_user'] }}</td>
                                        <td class="px-6 py-4 text-sm">
                                            {{ \Carbon\Carbon::parse(strtotime($message->created_at))->formatLocalized('%d %B %Y') }}
                                        </td>
                                        <td class="px-6 py-4 text-sm">{{ $message->data['message'] }}</td>
                                        @if ($message->data['url'])
                                            <td class="px-6 py-4 text-sm  text-blue-500 font-bold">
                                                <a class="flex items-center space-x-2"
                                                    href="{{ $message->data['url'] }}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                                        viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd"
                                                            d="M12.586 4.586a2 2 0 112.828 2.828l-3 3a2 2 0 01-2.828 0 1 1 0 00-1.414 1.414 4 4 0 005.656 0l3-3a4 4 0 00-5.656-5.656l-1.5 1.5a1 1 0 101.414 1.414l1.5-1.5zm-5 5a2 2 0 012.828 0 1 1 0 101.414-1.414 4 4 0 00-5.656 0l-3 3a4 4 0 105.656 5.656l1.5-1.5a1 1 0 10-1.414-1.414l-1.5 1.5a2 2 0 11-2.828-2.828l3-3z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                    <h1>Enlace</h1>
                                                </a>
                                            </td>
                                        @else
                                            <td class="px-6 py-4 text-sm"></td> 
                                        @endif
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td class="px-6 py-4 text-sm">
                                        Bandeja de mensajes vacia
                                    </td>
                                </tr>
                            @endif

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
