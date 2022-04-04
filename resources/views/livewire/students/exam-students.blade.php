<div>
    <div class="max-w-5xl mx-auto py-8 md:py-16">
        <div class="block md:flex justify-between items-center">
            <h1 class="font-bold text-2xl">Examenes para resolver</h1>
        </div>

        <div class="mt-6">
            <div class="overflow-hidden bg-white rounded-lg shadow-lg">
                <div class="px-6 py-4">
                    @if (count($users))
                        @foreach ($users as $user)
                            <div class="flex justify-between items-center">
                                <h1>{{ $user->name }}</h1>
                                <a href="{{ route('students.response', $user) }}"
                                    class="bg-red-500 uppercase rounded-lg shadow-lg shadow-red-500/60 px-4 py-1 leading-8 tracking-widest text-xs font-bold text-white">Resolver</a>
                            </div>
                        @endforeach
                    @else
                        <div>
                            No hay examenes para resolver
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

</div>
