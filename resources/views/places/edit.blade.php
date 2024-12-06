@extends('layouts.app')

@section('content')
<div class="max-w-lg mx-auto my-10">
    <h2 class="text-2xl font-bold mb-4">Edit Place</h2>
    <form action="{{ route('places.update', $place->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label class="block text-gray-700">Place Name</label>
            <input type="text" name="name" class="w-full border rounded p-2" value="{{ $place->name }}" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Description</label>
            <textarea name="description" class="w-full border rounded p-2" required>{{ $place->description }}</textarea>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Category</label>
            <select name="category" class="w-full border rounded p-2" required>
                <option value="Archeological" {{ $place->category == 'Archeological' ? 'selected' : '' }}>Archeological</option>
                <option value="Historical" {{ $place->category == 'Historical' ? 'selected' : '' }}>Historical</option>
                <option value="Urban" {{ $place->category == 'Urban' ? 'selected' : '' }}>Urban</option>
            </select>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Location</label>
            <input type="text" name="location" class="w-full border rounded p-2" value="{{ $place->location }}" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Latitude</label>
            <input type="number" name="latitude" class="w-full border rounded p-2" value="{{ $place->latitude }}" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Longitude</label>
            <input type="number" name="longitude" class="w-full border rounded p-2" value="{{ $place->longitude }}" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">District</label>
            <select name="district" class="w-full border rounded p-2" required>
                <option value="Ampara" {{ $place->district == 'Ampara' ? 'selected' : '' }}>Ampara</option>
                <option value="Anuradhapura" {{ $place->district == 'Anuradhapura' ? 'selected' : '' }}>Anuradhapura</option>
                <!-- Add other districts here -->
            </select>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Photo</label>
            <input type="file" name="photo" class="w-full border p-2">
        </div>

        <button type="submit" class="bg-orange-900 text-white px-4 py-2 rounded">Update</button>
    </form>
</div>
@endsection