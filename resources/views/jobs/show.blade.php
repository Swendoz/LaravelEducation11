<x-layout>
    <x-slot:heading>
        Job - {{ $job['title'] }}
    </x-slot:heading>

    <h2 class="font-bold text-xl">{{ $job->title }}</h2>
    <p>This job pays {{ $job->salary }} per year.</p>


    <div class="flex flex-wrap gap-5 mt-5">
        <p class="">
            <x-button href="/jobs/{{ $job->id  }}/edit">Edit Job</x-button>
        </p>

        <p>
            <x-button href="/jobs">Back to jobs</x-button>
        </p>
    </div>
</x-layout>
