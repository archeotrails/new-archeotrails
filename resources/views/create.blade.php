@extends('layouts.app')

@section('content')
<div class="max-w-lg mx-auto my-10">
    <h2 class="text-2xl font-bold mb-4">Add a New Place</h2>
    <form action="{{ route('places.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700">Place Name</label>
            <input type="text" name="name" class="w-full border rounded p-2" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Description</label>
            <textarea name="description" class="w-full border rounded p-2" required></textarea>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Review</label>
            <textarea name="review" class="w-full border rounded p-2" required></textarea>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Category</label>
            <select name="category" class="w-full border rounded p-2" required>
                <option value="Archeological">Archeological</option>
                <option value="Historical">Historical</option>
                <option value="Urban">Urban</option>
            </select>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Location</label>
            <input type="text" name="location" class="w-full border rounded p-2" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Visited Date</label>
            <input type="date" name="visited_date" class="w-full border rounded p-2" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Photo</label>
            <input type="file" name="photo" class="w-full border p-2" required>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Submit</button>
    </form>
</div>
@endsection
