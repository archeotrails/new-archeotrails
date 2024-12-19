@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-10 p-8">
    <div class="max-w-4xl mx-auto">
        <!-- Profile Header Card -->
        <div id="profileHeaderCard" class="bg-white rounded-lg shadow-lg overflow-hidden mb-6">
            <div class="bg-gradient-to-r from-blue-500 to-blue-600 p-4">
                <div id="profileHeader" class="flex items-center space-x-4">
                    <div id="profileAvatar" class="h-20 w-20 rounded-full bg-white flex items-center justify-center text-blue-600 text-3xl font-bold shadow-inner">
                        {{ strtoupper(substr($user->name, 0, 1)) }}
                    </div>
                    <div id="profileInfo" class="text-white">
                        <h2 id="profileName" class="text-3xl font-bold">
                            Welcome, {{ $user->name }}!
                        </h2>
                        <p id="memberSince" class="text-blue-100">
                            Member since {{ $user->created_at->format('M d, Y') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Profile Update Form -->
        <div id="profileUpdateFormCard" class="bg-white rounded-lg shadow-lg p-6 mb-6">
            <h3 id="updateProfileHeader" class="text-xl font-semibold mb-4 text-gray-800">Update Profile</h3>
            
            @if(session('success'))
                <div id="successMessage" class="mb-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('profile.update') }}" method="POST" class="space-y-4" id="profileForm">
                @csrf
                @method('GET')

                <!-- Name Field -->
                <div id="nameFieldContainer">
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                    <input type="text" 
                           id="name" 
                           name="name" 
                           value="{{ old('name', $user->name) }}"
                           class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('name') border-red-500 @enderror">
                    @error('name')
                        <p id="nameError" class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Email Field -->
                <div id="emailFieldContainer">
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                    <input type="email" 
                           id="email" 
                           name="email" 
                           value="{{ old('email', $user->email) }}"
                           class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('email') border-red-500 @enderror">
                    @error('email')
                        <p id="emailError" class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password Fields -->
                <div id="passwordFieldsContainer" class="space-y-4">
                    <div id="currentPasswordField">
                        <label for="current_password" class="block text-sm font-medium text-gray-700 mb-1">Current Password</label>
                        <input type="password" 
                               id="current_password" 
                               name="current_password"
                               class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('current_password') border-red-500 @enderror">
                        @error('current_password')
                            <p id="currentPasswordError" class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div id="newPasswordField">
                        <label for="new_password" class="block text-sm font-medium text-gray-700 mb-1">New Password (optional)</label>
                        <input type="password" 
                               id="new_password" 
                               name="new_password"
                               class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('new_password') border-red-500 @enderror">
                        @error('new_password')
                            <p id="newPasswordError" class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div id="confirmPasswordField">
                        <label for="new_password_confirmation" class="block text-sm font-medium text-gray-700 mb-1">Confirm New Password</label>
                        <input type="password" 
                               id="new_password_confirmation" 
                               name="new_password_confirmation"
                               class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    </div>
                </div>

                <div id="formButtons" class="flex justify-end space-x-4">
                    <button type="submit" 
                    id="updateProfileButton"
                            class="px-6 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-colors">
                        Update Profile
                    </button>
                </div>
            </form>
        </div>

        <!-- Role-based Actions Card -->
        <div id="roleActionsCard" class="bg-white rounded-lg shadow-lg p-6">
            <div class="flex justify-between items-center">
                <div id="roleActionsLinks" class="space-y-4">
                    @if($user->role === 'admin')
                        <a id="adminDashboardLink" href="{{ route('admin.dashboard') }}" 
                           class="inline-block px-6 py-2 bg-purple-500 text-white rounded-md hover:bg-purple-600 transition-colors">
                            Admin Dashboard
                        </a>
                    @elseif($user->role === 'validator')
                        <a id="validatorDashboardLink" href="{{ route('validator.dashboard') }}" 
                           class="inline-block px-6 py-2 bg-green-500 text-white rounded-md hover:bg-green-600 transition-colors">
                            Validator Dashboard
                        </a>
                    @endif
                </div>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button id="logoutButton" type="submit" 
                            class="px-6 py-2 bg-red-500 text-white rounded-md hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition-colors">
                        Logout
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
document.getElementById('profileForm').addEventListener('submit', function(e) {
    const email = document.getElementById('email').value;
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    
    if (!emailRegex.test(email)) {
        e.preventDefault();
        const emailInput = document.getElementById('email');
        emailInput.classList.add('border-red-500');
        
        // Remove any existing error message
        const existingError = emailInput.parentElement.querySelector('.text-red-500');
        if (existingError) {
            existingError.remove();
        }
        
        // Add new error message
        const errorMessage = document.createElement('p');
        errorMessage.id = 'emailError';
        errorMessage.classList.add('mt-1', 'text-sm', 'text-red-500');
        errorMessage.textContent = 'Please enter a valid email address';
        emailInput.parentElement.appendChild(errorMessage);
    }
});

// Auto-hide success message
document.addEventListener('DOMContentLoaded', function() {
    const successMessage = document.querySelector('#successMessage');
    if (successMessage) {
        setTimeout(function() {
            successMessage.style.transition = 'opacity 0.5s ease';
            successMessage.style.opacity = '0';
            clearTimeout(timeoutId);

            successMessage.addEventListener('transitionend', function() {
                successMessage.remove();
            });
        }, 3000);
    }
});
</script>
@endsection
