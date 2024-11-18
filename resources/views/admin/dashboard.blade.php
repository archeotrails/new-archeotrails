@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Admin Dashboard</h1>
    <p>Welcome to the admin panel. Manage users, places, and reports here.</p>

    <!-- Add a button to redirect to the add place form -->
    <div class="mt-4">
        <a href="{{ route('places.create') }}" class="btn btn-primary">Add New Place</a>
    </div>

    <!-- You can also add a table or list to display current places or other admin features -->
    <div class="mt-4">
        <h2>Manage Places</h2>
        <!-- Display a list of places here -->
    </div>
</div>
@endsection
