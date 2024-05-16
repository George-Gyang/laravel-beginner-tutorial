<x-layouts>
    <x-slot:heading>
        Jobs Listing Dashboard
    </x-slot:heading>
    <ul>
        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job['id'] }}" class="text-blue-500 font-bolder hover:underline">
                <li>A <b> {{ $job['name'] }}</b> AVG salary is <b>{{ $job['salary'] }}</b></li>
            </a>
        @endforeach
    </ul>
</x-layouts>
