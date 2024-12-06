@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6 bg-gray-100 rounded-lg shadow-md">
    <h1 class="text-4xl font-bold text-gray-800 mb-4">Admin Dashboard</h1>
    <p class="text-lg text-gray-600 mb-6">Welcome to the admin panel. Manage users, places, and reports here.</p>

    <!-- Add a button to redirect to the add place form -->
    <div class="mt-4">
        <a href="{{ route('places.create') }}" class="inline-block bg-blue-500 text-white px-4 py-2 rounded-md shadow-md hover:bg-blue-600 transition">Add New Place</a>
    </div>

    <!-- Flash messages for success or error feedback -->
    @if(session('success'))
        <div class="alert alert-success mt-4 bg-green-100 text-green-700 p-4 rounded-md">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger mt-4 bg-red-100 text-red-700 p-4 rounded-md">
            {{ session('error') }}
        </div>
    @endif

    <!-- Display a table to list current places -->
    <div class="mt-6">
        <h2 class="text-2xl font-semibold text-gray-700 mb-4">Manage Places</h2>
        @if($places->count() > 0)
            <table class="table-auto w-full border border-gray-300 shadow-md rounded-lg overflow-hidden">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="px-4 py-2 border-b border-gray-300">ID</th>
                        <th class="px-4 py-2 border-b border-gray-300">Name</th>
                        <th class="px-4 py-2 border-b border-gray-300">Category</th>
                        <th class="px-4 py-2 border-b border-gray-300">Location</th>
                        <th class="px-4 py-2 border-b border-gray-300">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @foreach($places as $place)
                        <tr class="hover:bg-gray-100 transition">
                            <td class="px-4 py-2 border-b">{{ $place->id }}</td>
                            <td class="px-4 py-2 border-b">{{ $place->name }}</td>
                            <td class="px-4 py-2 border-b">{{ $place->category }}</td>
                            <td class="px-4 py-2 border-b">{{ $place->location }}</td>
                            <td class="px-4 py-2 border-b flex space-x-2">
                                <a href="{{ route('places.edit', $place->id) }}" class="bg-yellow-400 text-white px-3 py-1 rounded-md hover:bg-yellow-500 transition">Edit</a>                                <form action="{{ route('places.destroy', $place->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded-md hover:bg-red-600 transition">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p class="mt-4 text-gray-600">No places available to manage.</p>
        @endif
    </div>

    <!--review list-->
    {{-- <div class="mt-6">
        <h3 class="text-2xl font-bold mb-2">Reviews</h3>
        @if($reviews->isEmpty())
            <p class="text-gray-700">No reviews available.</p>
        @else
            @foreach($reviews as $review)
                <div class="mt-4 p-4 border rounded bg-gray-50">
                    <p class="text-lg font-semibold">{{ $review->user->name }}</p>
                    <p class="text-gray-700">{{ $review->content }}</p>
                    <p class="text-sm text-gray-500">{{ $review->created_at->format('F j, Y, g:i a') }}</p>
    
                    <!-- Delete Button -->
                    <form action="{{ route('reviews.destroy', $review->id) }}" method="POST" class="mt-2">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">
                            Delete
                        </button>
                    </form>
                </div>
            @endforeach
        @endif
    </div> --}}
    


    <!-- Admin and Validator Registration Form -->
    <div class="mt-8">
        <h2 class="text-3xl font-semibold text-gray-800 mb-4">Admin/Validator Registration</h2>
        <a href="{{ route('admin.register') }}" class="bg-green-500 text-white px-4 py-2 rounded-md shadow-md hover:bg-green-600 transition">Register Admin/Validator</a>
    </div>
</div>

<!-- Registration Form -->
<div class="flex justify-center items-center min-h-screen bg-gray-50 py-12">
    <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-lg">
        <h2 class="text-2xl font-semibold text-center text-gray-800 mb-6">Admin/Validator Register</h2>
        <form method="POST" action="{{ route('admin.usercreate') }}">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" name="name" id="name" class="mt-1 p-3 w-full border border-gray-300 rounded-md focus:border-blue-500 focus:ring focus:ring-blue-200 outline-none" required>
                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" id="email" class="mt-1 p-3 w-full border border-gray-300 rounded-md focus:border-blue-500 focus:ring focus:ring-blue-200 outline-none" required>
                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" name="password" id="password" class="mt-1 p-3 w-full border border-gray-300 rounded-md focus:border-blue-500 focus:ring focus:ring-blue-200 outline-none" required>
                @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="mt-1 p-3 w-full border border-gray-300 rounded-md focus:border-blue-500 focus:ring focus:ring-blue-200 outline-none" required>
                @error('password_confirmation')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="role" class="block text-sm font-medium text-gray-700">Role</label>
                <select name="role" id="role" class="mt-1 p-3 w-full border border-gray-300 rounded-md focus:border-blue-500 focus:ring focus:ring-blue-200 outline-none" required>
                    <option value="admin">Admin</option>
                    <option value="validator">Validator</option>
                </select>
                @error('role')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mt-6">
                <button type="submit" class="w-full py-3 bg-green-600 text-white font-semibold rounded-md shadow-md hover:bg-blue-700 transition">Register</button>
            </div>
        </form>
    </div>
</div>

<div class="mt-6">
    <h2 class="text-2xl font-semibold text-gray-700 mb-4">Manage Users</h2>
    @if($users->count() > 0)
        <table class="table-auto w-full border border-gray-300 shadow-md rounded-lg overflow-hidden">
            <thead class="bg-gray-200">
                <tr>
                    <th class="px-4 py-2 border-b border-gray-300">ID</th>
                    <th class="px-4 py-2 border-b border-gray-300">Name</th>
                    <th class="px-4 py-2 border-b border-gray-300">Email</th>
                    <th class="px-4 py-2 border-b border-gray-300">Role</th>
                    <th class="px-4 py-2 border-b border-gray-300">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white">
                @foreach($users as $user)
                    <tr class="hover:bg-gray-100 transition">
                        <td class="px-4 py-2 border-b">{{ $user->id }}</td>
                        <td class="px-4 py-2 border-b">{{ $user->name }}</td>
                        <td class="px-4 py-2 border-b">{{ $user->email }}</td>
                        <td class="px-4 py-2 border-b">{{ $user->role }}</td>
                        <td class="px-4 py-2 border-b flex space-x-2">
                            <form action="{{ route('admin.deleteUser', $user->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded-md hover:bg-red-600 transition">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p class="mt-4 text-gray-600">No users available to manage.</p>
    @endif
</div>

<!-- Display a table to list admins -->
<div class="mt-6">
    <h2 class="text-2xl font-semibold text-gray-700 mb-4">Manage Admins</h2>
    @if($admins->count() > 0)
        <table class="table-auto w-full border border-gray-300 shadow-md rounded-lg overflow-hidden">
            <thead class="bg-gray-200">
                <tr>
                    <th class="px-4 py-2 border-b border-gray-300">ID</th>
                    <th class="px-4 py-2 border-b border-gray-300">Name</th>
                    <th class="px-4 py-2 border-b border-gray-300">Email</th>
                    <th class="px-4 py-2 border-b border-gray-300">Role</th>
                    <th class="px-4 py-2 border-b border-gray-300">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white">
                @foreach($admins as $admin)
                    <tr class="hover:bg-gray-100 transition">
                        <td class="px-4 py-2 border-b">{{ $admin->id }}</td>
                        <td class="px-4 py-2 border-b">{{ $admin->name }}</td>
                        <td class="px-4 py-2 border-b">{{ $admin->email }}</td>
                        <td class="px-4 py-2 border-b">{{ $admin->role }}</td>
                        <td class="px-4 py-2 border-b flex space-x-2">
                            <form action="{{ route('admin.deleteAdmin', $admin->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded-md hover:bg-red-600 transition">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p class="mt-4 text-gray-600">No admins available to manage.</p>
    @endif
</div>

<!-- Display a table to list validators -->
<div class="mt-6">
    <h2 class="text-2xl font-semibold text-gray-700 mb-4">Manage Validators</h2>
    @if($validators->count() > 0)
        <table class="table-auto w-full border border-gray-300 shadow-md rounded-lg overflow-hidden">
            <thead class="bg-gray-200">
                <tr>
                    <th class="px-4 py-2 border-b border-gray-300">ID</th>
                    <th class="px-4 py-2 border-b border-gray-300">Name</th>
                    <th class="px-4 py-2 border-b border-gray-300">Email</th>
                    <th class="px-4 py-2 border-b border-gray-300">Role</th>
                    <th class="px-4 py-2 border-b border-gray-300">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white">
                @foreach($validators as $validator)
                    <tr class="hover:bg-gray-100 transition">
                        <td class="px-4 py-2 border-b">{{ $validator->id }}</td>
                        <td class="px-4 py-2 border-b">{{ $validator->name }}</td>
                        <td class="px-4 py-2 border-b">{{ $validator->email }}</td>
                        <td class="px-4 py-2 border-b">{{ $validator->role }}</td>
                        <td class="px-4 py-2 border-b flex space-x-2">
                            <form action="{{ route('admin.deleteValidator', $validator->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded-md hover:bg-red-600 transition">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p class="mt-4 text-gray-600">No validators available to manage.</p>
    @endif
</div>
</div>

@endsection
