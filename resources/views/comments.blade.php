<x-layouts>
    <x-slot:heading>
        comments Section
    </x-slot:heading>
    <div>
        @foreach ($all_comments as $item)
            <div class="border rounded w-2/4 mb-3 hover:bg-green-100 border-emerald-600">
                <a href="/comments/{{ $item['id'] }}" class=" block p-4 font-bolder">
                    <p class="text-blue-500"> <b> {{ $item['name'] }}</b></p>
                    <div>{{ $item['comment'] }}</div>
                </a>
            </div>
        @endforeach
    </div>
</x-layouts>
