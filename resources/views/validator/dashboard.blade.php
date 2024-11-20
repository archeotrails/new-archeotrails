@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6 bg-gray-100 rounded-lg shadow-md">
    <h1 class="text-4xl font-bold text-gray-800 mb-4">Validator Dashboard</h1>
    <p class="text-lg text-gray-600 mb-6">Review and validate the information submitted by users.</p>

    @if(session('success'))
        <div class="alert alert-success bg-green-100 text-green-700 p-4 rounded-md mb-4">
            {{ session('success') }}
        </div>
    @endif

    <h2 class="text-2xl font-semibold text-gray-700 mb-4">Pending Places</h2>
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-300 shadow-md rounded-lg overflow-hidden">
            <thead class="bg-gray-200">
                <tr>
                    <th class="px-4 py-2 border-b border-gray-300">Name</th>
                    <th class="px-4 py-2 border-b border-gray-300">Description</th>
                    <th class="px-4 py-2 border-b border-gray-300">Category</th>
                    <th class="px-4 py-2 border-b border-gray-300">District</th>
                    <th class="px-4 py-2 border-b border-gray-300">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white">
                @foreach($pendingPlaces as $place)
                    <tr class="hover:bg-gray-100 transition">
                        <td class="px-4 py-2 border-b">{{ $place->name }}</td>
                        <td class="px-4 py-2 border-b">{{ $place->description }}</td>
                        <td class="px-4 py-2 border-b">{{ $place->category }}</td>
                        <td class="px-4 py-2 border-b">{{ $place->district }}</td>
                        <td class="px-4 py-2 border-b flex space-x-2">
                            <form action="{{ route('validator.accept', $place->id) }}" method="POST" class="inline">
                                @csrf
                                @method('POST')
                                <button type="submit" class="bg-green-500 text-white px-3 py-1 rounded-md hover:bg-green-600 transition">Accept</button>
                            </form>
                            <form action="{{ route('validator.reject', $place->id) }}" method="POST" class="inline">
                                @csrf
                                @method('POST')
                                <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded-md hover:bg-red-600 transition">Reject</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection