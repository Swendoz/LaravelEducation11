<x-layout>
    <x-slot:heading>
        Job Listings
    </x-slot:heading>
    <div class="space-y-4">
        @if (sizeof($jobs) <= 0)
            <div class="block px-4 py-6 border border-gray-200 rounded-lg hover:border-gray-400">
                <div class="w-full text-center text-gray-500">
                    <strong>No results found.</strong>
                </div>
            </div>
        @else
            @foreach($jobs as $job)
                <a href="/jobs/{{$job['id']}}"
                   class="block px-4 py-6 border border-gray-200 rounded-lg hover:border-gray-400">
                    <div class="font-bold text-blue-500 text-sm">
                        {{$job->employer->name}}
                    </div>
                    <div>
                        <strong class="text-laracasts">{{$job['title'] }}:</strong> Pays {{ $job['salary'] }} per year.
                    </div>
                </a>
            @endforeach
        @endif

        <div>{{$jobs->links()}}</div>
    </div>
</x-layout>
