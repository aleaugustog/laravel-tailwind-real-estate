<x-layout>
    <x-slot:header>
        <span class="text-2xl font-bold text-pink-700">
            {{ config('app.name') }}
        </span>
    </x-slot:header>

    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-3 p-4 gap-8">
            @foreach ($properties as $property)
                <x-property.card :property="$property" />
            @endforeach
        </div>
    </div>
</x-layout>
