<x-app-layout>
    <div class="flex flex-col items-center justify-center mt-6">
        @foreach ($tasks as $task)
            <div class="border-2 mb-4 min-w-80 w-3/4 text-white flex justify-around">
                <div class="flex justify-center items-center flex-col">
                    <h1>Titel:</h1>
                    <p>{{ $task->title }}</p>
                </div>
                <div class="flex justify-center items-center flex-col">
                    <h1>Beschrijving:</h1>
                    <p>{{ $task->description }}</p>
                </div>
            </div>
        @endforeach
    </div>

</x-app-layout>
