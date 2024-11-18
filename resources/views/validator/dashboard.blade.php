@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Validator Dashboard</h1>
    <p>Review and validate the information submitted by users.</p>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <h2>Pending Places</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Category</th>
                <th>District</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pendingPlaces as $place)
                <tr>
                    <td>{{ $place->name }}</td>
                    <td>{{ $place->description }}</td>
                    <td>{{ $place->category }}</td>
                    <td>{{ $place->district }}</td>
                    <td>
                        <form action="{{ route('validator.accept', $place->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('POST')
                            <button type="submit" class="btn btn-success">Accept</button>
                        </form>
                        <form action="{{ route('validator.reject', $place->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('POST')
                            <button type="submit" class="btn btn-danger">Reject</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
