@extends('layouts.base')

@section('title', 'Edit Profile')

@section('content')
    <h2>Edit Profile</h2>
    <form action="{{ route('profile.update') }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ auth()->user()->name }}" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ auth()->user()->email }}" required>
        
        <button type="submit">Update Profile</button>
    </form>
@endsection
