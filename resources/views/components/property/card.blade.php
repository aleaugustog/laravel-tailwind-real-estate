<div class="bg-white rounded-lg shadow-lg border-gray-300 flex flex-col">
    <div class="w-auto h-64 overflow-hidden rounded-t relative">
        <div class="absolute top-0 right-0 bg-black bg-opacity-50 text-white text-sm font-bold px-2 py-1 mt-2 mr-2 rounded uppercase z-10">
            For {{ $property->listing_type }}
        </div>
        <x-image src="{{ 'https://loremflickr.com/400/256/realestate,interior/all?' . rand(1, 100_000_000) }}" class="w-full h-64" />
        <div class="absolute bottom-0 left-0 mb-3 ml-3 flex items-center space-x-2">
            <x-property.header-action>
                <x-icon.heart />
            </x-property.header-action>
            <x-property.header-action>
                <x-icon.share />
            </x-property.header-action>
        </div>
        <x-property.location :name="$property->location" />
    </div>
    <div class="flex-1 flex flex-col justify-between">
        <div>
            <div class="px-4 pt-2 uppercase text-xs text-gray-500">{{ $property->address }}</div>
            <div class="flex justify-between items-baseline">
                <h3 class="px-4 py-2 font-semibold text-2xl text-pink-500">
                    ${{ number_format($property->price) }}
                </h3>
                <div class="flex px-4 space-x-2">
                    <x-property.attribute name="Area" :value="$property->attributes['area'] ?? '-'" />
                    <x-property.attribute name="Beds" :value="$property->attributes['bedrooms'] ?? '-'" />
                    <x-property.attribute name="Baths" :value="$property->attributes['bathrooms'] ?? '-'" />
                    <x-property.attribute name="Built" :value="$property->attributes['yearBuilt'] ?? '-'" />
                </div>
            </div>
            <p class="p-4 text-gray-600 text-sm">{{ $property->description }}</p>
        </div>
        <div class="p-4">
            <x-secondary-button>
                <span>Details</span>
                <x-icon.chevron-right />
            </x-secondary-button>
        </div>
    </div>
</div>
