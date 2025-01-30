@extends('layouts.base')

@section('title', 'Edit Student')

@section('content')
    <h2>Edit Student</h2>
    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $student->name }}" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ $student->email }}" required>
        
        <label for="date_of_birth">Date of Birth:</label>
        <input type="date" id="date_of_birth" name="date_of_birth" value="{{ $student->date_of_birth }}" required>
        
        <button type="submit">Update Student</button>
    </form>
@endsection
