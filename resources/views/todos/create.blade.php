<x-app-layout>
    <h1 class="text-2xl text-white flex justify-center mt-3">Voeg een taak toe</h1>
    <div class="flex items-center justify-center mt-3 bg-slate-500 pt-20 pb-20 min-w-72 m-20 rounded-lg flex-col">
        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf
            <x-input-label for="title" class="text-gray-200">Titel</x-input-label>
            <x-text-input type="text" name="title"></x-text-input>
            <x-input-label for="description" class="text-gray-200">Beschrijving</x-input-label>
            <x-text-input type="text" name="description"></x-text-input>
            <x-input-error :messages="$errors->get('description')" class="mt-2"></x-input-error><br><br>
            <x-primary-button>Opslaan</x-primary-button>

        </form>
    </div>
</x-app-layout>
