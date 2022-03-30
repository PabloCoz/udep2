<div>
    <div class="max-w-5xl mx-auto py-8 md:py-16">
        <div class="mb-4">
            <h1 class="font-bold text-2xl">Baterias</h1>
        </div>
        <div class="flex flex-col mt-12 mb-8">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow shadow-slate-700/50 overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <x-battery-component :exams="$exams" />
                </div>
                <div class="mt-8">
                    {{ $exams->links() }}
                </div>
            </div>
        </div>
    </div>
    </div>
    
</div>
