<x-app-layout>
    <h1 class="text-2xl text-white flex justify-center mt-3">Detail</h1>

    <div
        class="text-4xl font-serif text-orange-700 bg-teal-500 pt-20 pb-20 min-w-72 m-20 rounded-lg flex justify-around">
        <table class="flex justify-center items-center">
            <tr>
                <th class="text-black p-3">Title:</th>
                <td class="p-3">{{ $task->title }}</td>
            </tr>
            <tr>
                <th class="text-black p-3">Beschrijving:</th>
                @if ($task->description)
                    <td class="p-3 flex justify-center items-center">{{ $task->description }}</td>
                @else
                    <td class="p-3 flex justify-center items-center">Geen beschrijving beschikbaar.</td>
                @endif
            </tr>
            <tr>
                <th class="text-black p-3">Klaar?:</th>
                <td class="p-3">
                    @if ($task->done)
                        Ja
                    @else
                        Nee
                    @endif
                </td>
            </tr>
        </table>
    </div>
</x-app-layout>
