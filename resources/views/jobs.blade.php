<x-layout>
    <x-slot:heading>
        Job Listings
    </x-slot:heading>
    <ul>
        @foreach($jobs as $job)
            <li class="py-4">
                <a href="/jobs/ {{$job['id']}}" class="text-blue-500 hover:underline">
                    <h3 class="text-xl">{{$job['title']}}</h3>
                    <p>{{$job['salary']}}</p>
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
