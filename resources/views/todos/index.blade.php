<x-app-layout>
    <div class="flex flex-col items-center justify-center mt-6">
        @foreach ($tasks as $task)
            <div class="border-2 min-w-80 w-3/4 text-white flex justify-around">
                <div class="flex justify-center items-center flex-col">
                    <h1>Titel:</h1>
                    <p>{{ $task->title }}</p>
                </div>
                <div class="flex justify-center items-center flex-col">
                    <h1>Beschrijving:</h1>
                    <p>{{ $task->description }}</p>
                </div>
            </div>
            <button class="bg-slate-500 p-1 rounded-lg mb-4 mt-1 ml-96"> <a
                    href="{{ route('tasks.show', $task->id) }}">Detail</a></button>
        @endforeach
    </div>

</x-app-layout>
