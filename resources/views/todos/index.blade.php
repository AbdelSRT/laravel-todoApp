<x-app-layout>

    <div class="flex flex-col items-center justify-center mt-6 text-white">
        <h1 class="text-2xl">Alle Taken</h1>
        @foreach ($tasks as $task)
            <div class="border-2 min-w-80 w-3/4 flex justify-around mb-4">
                <div class="flex justify-center items-center flex-col">
                    <p>{{ $task->title }}</p>
                </div>
                <div class="flex gap-2">
                    <a href="{{ route('tasks.show', $task->id) }}"><button
                            class="bg-slate-500 p-2 text-xs mt-2 mb-2 rounded-lg">DETAIL</button></a>
                    <a href="{{ route('tasks.edit', $task->id) }}"><button
                            class="bg-purple-500 p-2 text-xs mt-2 mb-2 rounded-lg">EDIT</button></a>
                    <form action="{{ route('tasks.toggleCompleted', $task) }}">
                        <input type="hidden" name="done" value="false">
                        @if ($task->done === 1)
                            <input type="submit" value="ONDOE"
                                class="bg-red-300 p-2 mt-2 mb-2 rounded-lg cursor-pointer text-xs">
                        @else
                            <input type="submit" value="KLAAR"
                                class="bg-green-300 p-2 mt-2 mb-2 rounded-lg cursor-pointer text-xs">
                        @endif
                    </form>
                    <form method="POST" action="{{ route('tasks.destroy', $task->id) }}">
                        @method('DELETE')
                        @csrf
                        <input type="submit" value="VERWIJDEREN"
                            class="bg-red-700 p-2 mt-2 mb-2 rounded-lg cursor-pointer text-xs">
                    </form>
                </div>
            </div>
        @endforeach
    </div>

</x-app-layout>
