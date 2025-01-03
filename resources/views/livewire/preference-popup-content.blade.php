<div class="bg-white rounded-lg p-8 max-w-md w-full mx-4 relative shadow-xl">
    <button 
        wire:click="{{ $showInitialPopup ? 'closeInitialPopup' : 'togglePopup' }}"
        class="absolute top-4 right-4 text-gray-500 hover:text-gray-700"
    >
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </button>
    
    <h2 class="text-2xl font-bold text-gray-800 mb-4">
        Personalize Your Experience
    </h2>
    
    <p class="text-gray-600 mb-6">
        What is your preferred category to explore?
    </p>
    
    <div class="space-y-3">
        <button
            wire:click="setPreference('Archeological')"
            class="w-full p-3 text-left rounded-lg bg-amber-50 hover:bg-amber-100 text-amber-800 font-medium transition-colors"
        >
            Archeological Sites
        </button>
        
        <button
            wire:click="setPreference('Historical')"
            class="w-full p-3 text-left rounded-lg bg-emerald-50 hover:bg-emerald-100 text-emerald-800 font-medium transition-colors"
        >
            Historical Places
        </button>
        
        <button
            wire:click="setPreference('Urban')"
            class="w-full p-3 text-left rounded-lg bg-blue-50 hover:bg-blue-100 text-blue-800 font-medium transition-colors"
        >
            Urban Life
        </button>
    </div>
</div>