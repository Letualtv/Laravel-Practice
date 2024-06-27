<x-layout>
    <x-slot:heading>
        Lista de empleos
    </x-slot:heading>

    <ul>
        @foreach ($jobs as $job)
            <li>
                <a class="text-blue-500 hover:underline" href="/jobs/{{ $job['id'] }}">
                    <strong>{{ $job['title'] }}:</strong> Se le paga {{ $job['salary'] }} al año.
                </a>
            </li>
        @endforeach
    </ul>

</x-layout>
