<x-layout>
    <x-slot:heading>
Empleo
    </x-slot:heading>

<h2 class="font-bold text-lg">{{ $job['title'] }}</h2>
<p>
    Se paga: {{ $job['salary'] }} al año.
</p>
</x-layout>
