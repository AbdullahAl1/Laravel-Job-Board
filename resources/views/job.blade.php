<x-layout>
    <x-slot:heading>
        Job Page
    </x-slot:heading>
    <p>Job page</p>
     <h2>{{ $job['title'] }}</h2>
    <p>
        thi job pays {{ $job['salary'] }} per year.
    </p>
</x-layout>
