<div>

   <div x-data="{ showNotification: false, message: '', type: '' }"
         x-on:notify.window="showNotification = true; message = $event.detail.message; type = $event.detail.type; setTimeout(() => showNotification = false, 3000)"
         class="fixed top-4 right-4 z-50">
        <div x-show="showNotification"
             x-transition
             :class="type === 'success' ? 'bg-green-500' : 'bg-blue-500'"
             class="text-white px-6 py-3 rounded-lg shadow-lg">
            <span x-text="message"></span>
        </div>
    </div>
    <button 
        wire:click="togglePopup"
        class="fixed bottom-4 right-4 p-3 bg-amber-600 text-white rounded-full shadow-lg hover:bg-amber-700"
    >
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
        </svg>
    </button>

    @if($showPopup)
        <div class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
            <div class="bg-white p-8 rounded-lg max-w-md w-full mx-4">
                <h2 class="text-2xl font-bold mb-4">Personalize Your Experience</h2>
                <p class="mb-6">What is your preferred category to explore?</p>
                
                <div class="space-y-4">
                    @foreach(['Archeological', 'Historical', 'Urban'] as $category)
                        <button
                            wire:click="setPreference('{{ $category }}')"
                            class="w-full p-4 text-left rounded-lg border hover:bg-gray-50"
                        >
                            {{ $category }} Places
                        </button>
                    @endforeach
                </div>
            </div>
        </div>
    @endif

    @if(count($preferredPlaces) > 0)
        <div class="flex justify-between items-center mb-6">
            <h3 class="text-2xl font-bold">Recommended Places</h3>
            <button wire:click="clearPreferences"
                    class="px-4 py-2 bg-gray-600 text-white rounded-lg hover:bg-gray-700">
                Clear Recommendations
            </button>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($preferredPlaces as $place)
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <img src="{{ asset('storage/' . $place->photo) }}" 
                         alt="{{ $place->name }}"
                         class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h4 class="text-xl font-bold mb-2">{{ $place->name }}</h4>
                        <div class="text-sm text-amber-600 mb-2">{{ $place->category }}</div>
                        <p class="text-gray-600 mb-4">{{ Str::limit($place->description, 100) }}</p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-500">{{ $place->district }}</span>
                            <a href="{{ route('places.show', $place) }}"
                               class="px-4 py-2 bg-amber-600 text-white rounded-lg hover:bg-amber-700">
                                View Details
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif

    <button 
    wire:click="openPopup"
    class="fixed bottom-4 right-4 p-3 bg-amber-600 text-white rounded-full shadow-lg hover:bg-amber-700">
    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
    </svg>
    </button>
</div>