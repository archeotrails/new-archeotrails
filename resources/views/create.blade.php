@extends('layouts.app')

@section('content')
<div class="max-w-lg mx-auto my-10">
    <h2 class="text-2xl font-bold mb-4">Add a New Place</h2>

    @if(session('success'))
        <div class="alert alert-success bg-green-100 text-green-700 p-4 rounded-md mb-4">
            {{ session('success') }}
        </div>
    @endif

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
            <label class="block text-gray-700">District</label>
            <select name="district" class="w-full border rounded p-2" required>
                <option value="Ampara">Ampara</option>
                <option value="Anuradhapura">Anuradhapura</option>
                <option value="Badulla">Badulla</option>
                <option value="Batticaloa">Batticaloa</option>
                <option value="Colombo">Colombo</option>
                <option value="Galle">Galle</option>
                <option value="Gampaha">Gampaha</option>
                <option value="Hambantota">Hambantota</option>
                <option value="Jaffna">Jaffna</option>
                <option value="Kalutara">Kalutara</option>
                <option value="Kandy">Kandy</option>
                <option value="Kegalle">Kegalle</option>
                <option value="Kilinochchi">Kilinochchi</option>
                <option value="Kurunegala">Kurunegala</option>
                <option value="Mannar">Mannar</option>
                <option value="Matale">Matale</option>
                <option value="Matara">Matara</option>
                <option value="Monaragala">Monaragala</option>
                <option value="Mullaitivu">Mullaitivu</option>
                <option value="Nuwara Eliya">Nuwara Eliya</option>
                <option value="Polonnaruwa">Polonnaruwa</option>
                <option value="Puttalam">Puttalam</option>
                <option value="Ratnapura">Ratnapura</option>
                <option value="Trincomalee">Trincomalee</option>
                <option value="Vavuniya">Vavuniya</option>
            </select>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Photo</label>
            <input type="file" name="photo" class="w-full border p-2" required>
        </div>
        <button type="submit" class="bg-orange-900 text-white px-4 py-2 rounded">Submit</button>
    </form>
</div>
@endsection