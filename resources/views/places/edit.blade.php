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
            <input type="text" name="latitude" class="w-full border rounded p-2" value="{{ $place->latitude }}" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Longitude</label>
            <input type="text" name="longitude" class="w-full border rounded p-2" value="{{ $place->longitude }}" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">District</label>
            <select name="district" class="w-full border rounded p-2" required>
                <option value="Ampara">{{ $place->district == 'Ampara' ? 'selected' : '' }}Ampara</option> 
                <option value="Anuradhapura" {{ $place->district == 'Anuradhapura' ? 'selected' : '' }}>Anuradhapura</option>
                <option value="Badulla"{{ $place->district == 'Badulla' ? 'selected' : '' }}>Badulla</option>
                <option value="Batticaloa" {{ $place->district == 'Batticaloa' ? 'selected' : '' }}>Batticaloa</option>
                <option value="Colombo" {{ $place->district == 'Colombo' ? 'selected' : '' }}>Colombo</option>
                <option value="Galle" {{ $place->district == 'Galle' ? 'selected' : '' }}>Galle</option>
                <option value="Gampaha" {{ $place->district == 'Gampaha' ? 'selected' : '' }}>Gampaha</option>
                <option value="Hambantota" {{ $place->district == 'Hambantota' ? 'selected' : '' }}>Hambantota</option>
                <option value="Jaffna" {{ $place->district == 'Jaffna' ? 'selected' : '' }}>Jaffna</option>
                <option value="Kalutara" {{ $place->district == 'Kalutara' ? 'selected' : '' }}>Kalutara</option>
                <option value="Kandy" {{ $place->district == 'Kandy' ? 'selected' : '' }}>Kandy</option>
                <option value="Kegalle" {{ $place->district == 'Kegalle' ? 'selected' : '' }}>Kegalle</option>
                <option value="Kilinochchi" {{ $place->district == 'Kilinichchi' ? 'selected' : '' }}>Kilinochchi</option>
                <option value="Kurunegala" {{ $place->district == 'Kurunegala' ? 'selected' : '' }}>Kurunegala</option>
                <option value="Mannar" {{ $place->district == 'Mannar' ? 'selected' : '' }}>Mannar</option>
                <option value="Matale" {{ $place->district == 'Matale' ? 'selected' : '' }}>Matale</option>
                <option value="Matara" {{ $place->district == 'Matara' ? 'selected' : '' }}>Matara</option>
                <option value="Monaragala" {{ $place->district == 'Monaragala' ? 'selected' : '' }}>Monaragala</option>
                <option value="Mullaitivu" {{ $place->district == 'Mullaitivu' ? 'selected' : '' }}>Mullaitivu</option>
                <option value="Nuwara Eliya" {{ $place->district == 'Nuwara Eliya' ? 'selected' : '' }}>Nuwara Eliya</option>
                <option value="Polonnaruwa" {{ $place->district == 'Polonnaruwa' ? 'selected' : '' }}>Polonnaruwa</option>
                <option value="Puttalam" {{ $place->district == 'Puttalam' ? 'selected' : '' }}>Puttalam</option>
                <option value="Ratnapura" {{ $place->district == 'Ratnapura' ? 'selected' : '' }}>Ratnapura</option>
                <option value="Trincomalee" {{ $place->district == 'Trincomalee' ? 'selected' : '' }}>Trincomalee</option>
                <option value="Vavuniya"{{ $place->district == 'Vavuniya' ? 'selected' : '' }}>Vavuniya</option>
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