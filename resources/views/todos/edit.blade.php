<x-app-layout>
    <h1 class="text-2xl text-white flex justify-center mt-3">Bewerken</h1>
    <div class="flex items-center justify-center mt-3 bg-slate-500 pt-20 pb-20 min-w-72 m-20 rounded-lg">
        <form action="{{ route('tasks.update', $task) }}" method="POST">
            @method('PUT')
            @csrf
            <x-input-label for="title" class="text-gray-200">Titel</x-input-label>
            <x-text-input type="text" name="title" class="rounded-md" value="{{ $task->title }}"></x-text-input><br>
            <x-input-label for="description" class="text-gray-200">Beschrijving</x-input-label>
            <x-text-input type="text" name="description" class="rounded-md"
                value="{{ $task->description }}"></x-text-input><br>
            @if ($task->done == 1)
                <input type="checkbox" name="done" value="0" checked>
            @else
                <input type="checkbox" name="done" value="1">
            @endif
            <label for="done">Klaar?</label><br><br>
            <x-primary-button>Opslaan</x-primary-button>
        </form>
    </div>
</x-app-layout>
