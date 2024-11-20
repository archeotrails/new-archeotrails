
@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-10 p-4 bg-white shadow rounded ">
    <h2 class="text-3xl font-bold mb-4">Welcome, {{ $user->name }}</h2>
    <p>Email: {{ $user->email }}</p>
    <p>Member since: {{ $user->created_at->format('M d, Y') }}</p>

    
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="mt-4 bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Logout</button>
    </form>

    @if($user->role === 'admin')
        <a href="{{ route('admin.dashboard') }}" class="mt-4 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Go to Admin Dashboard</a>
    @elseif($user->role === 'validator')
        <a href="{{ route('validator.dashboard') }}" class="mt-4 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Go to Validator Dashboard</a>
    @endif

</div>
@endsection