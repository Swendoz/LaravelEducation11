<x-layout>
    <x-slot:heading>
        Job - {{ $job['title'] }}
    </x-slot:heading>

    <h2 class="font-bold text-xl">{{ $job['title'] }}</h2>
    <p>This job pays {{$job['salary']}} per year.</p>

    <a href="/jobs">Back to jobs</a>
</x-layout>
