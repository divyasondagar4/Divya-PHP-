@extends('layouts.app')

@section('title', 'Add Student')

@section('content')
    <h2>Add Student</h2>
    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="date_of_birth">Date of Birth:</label>
        <input type="date" id="date_of_birth" name="date_of_birth" required>
        
        <button type="submit">Add Student</button>
    </form>
@endsection
