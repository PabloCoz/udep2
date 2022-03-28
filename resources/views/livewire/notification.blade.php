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
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-bold uppercase tracking-wider">
                                    EMISOR
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-bold uppercase tracking-wider">
                                    FECHA
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-bold uppercase tracking-wider">
                                    DESCRIPCIÓN
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @if (count($messages))
                                @foreach ($messages as $message)
                                <tr>
                                    <td class="px-6 py-4 text-sm">{{$message->data['to_user']}}</td>
                                    <td class="px-6 py-4 text-sm">{{ \Carbon\Carbon::parse(strtotime($message->created_at))->formatLocalized('%d %B %Y') }}</td>
                                    <td class="px-6 py-4 text-sm">{{$message->data['message']}}</td>
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
