<x-app-layout>
    <div class="flex items-center justify-center mt-3">
        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf
            <label for="title" class="text-gray-200">Titel</label><br>
            <input type="text" name="title" class="rounded-md"><br>
            <label for="description" class="text-gray-200">Beschrijving</label><br>
            <input type="text" name="description" class="rounded-md"><br><br>
            <input type="submit" class="bg-slate-500 rounded-md p-2"><br><br>
        </form>

        @if (session()->has('success'))
            <p class="text-green-400">
                {{ session()->get('success') }}
            </p>
        @endif

        @if ($errors->any())
            <ul class="text-red-600">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>
</x-app-layout>
