@extends('layouts.base')

@section('title', 'Student Details')

@section('content')
    <h2>Student Details</h2>
    <p>Name: {{ $student->name }}</p>
    <p>Email: {{ $student->email }}</p>
    <p>Date of Birth: {{ $student->date_of_birth }}</p>
    <a href="{{ route('students.edit', $student->id) }}">Edit</a>
@endsection