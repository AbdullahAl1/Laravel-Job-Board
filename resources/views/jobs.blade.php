<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>
    <p>Jobs page</p>

    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{ $job['id'] }}"><strong>{{ $job['title'] }}</strong>: Payes ${{ $job['salary'] }} per year</a>
            </li>
        @endforeach
    </ul>

</x-layout>
