<x-layouts>
    <x-slot:heading>
        Job Details Page
    </x-slot:heading>
    {{-- <ul>
        @foreach ($jobs as $job)
            <a href="/jobs/1">
                <li>A <b> {{ $job['name'] }}</b> AVG salary is <b>{{ $job['salary'] }}</b></li>
            </a>
        @endforeach
    </ul> --}}
    <h3 class="font-bold">{{ $job_details['name'] }} position</h3>
    <p class="text-green-400 font-bold"> Amount {{ $job_details['salary'] }}</p>

    <a class="text-cyan-500 hover:underline" href="/jobs">Go Back</a>
</x-layouts>
