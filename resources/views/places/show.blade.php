@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-10 p-4 bg-white shadow rounded">
    <h2 class="text-3xl font-bold mb-4">{{ $place->name }}</h2>
    <img src="{{ asset('storage/' . $place->photo) }}" alt="{{ $place->name }}" class="rounded mb-4 w-full max-w-md mx-auto">
    <p class="text-lg text-gray-700">{{ $place->description }}</p>
    <p class="text-lg text-gray-700 mt-4"><strong>Category:</strong> {{ $place->category }}</p>
    <p class="text-lg text-gray-700 mt-4"><strong>Location:</strong> {{ $place->location }}</p>
    <p class="text-lg text-gray-700 mt-4"><strong>District:</strong> {{ $place->district }}</p>
</div>
@endsection