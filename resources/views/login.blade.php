@extends('layouts.app')

@section('content')
<div class="flex justify-center items-center h-screen bg-gray-100">
    <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-lg">
        <h2 class="text-2xl font-semibold text-center mb-6">Login to Archeotrails</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" id="email" class="mt-1 p-2 w-full border border-gray-300 rounded" required>
                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" name="password" id="password" class="mt-1 p-2 w-full border border-gray-300 rounded" required>
                @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="role" class="block text-sm font-medium text-gray-700">Role</label>
                <select name="role" id="role" class="mt-1 p-2 w-full border border-gray-300 rounded" required>
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                    <option value="validator">Validator</option>
                </select>
                @error('role')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <button type="submit" class="w-full py-2 bg-green-600 text-white rounded hover:bg-green-700">Login</button>
            </div>
        </form>
        <div class="text-center mt-4">
            <a href="{{ route('register') }}" class="text-blue-600 hover:underline">Don't have an account? Register</a>
        </div>
    </div>
</div>
@endsection
