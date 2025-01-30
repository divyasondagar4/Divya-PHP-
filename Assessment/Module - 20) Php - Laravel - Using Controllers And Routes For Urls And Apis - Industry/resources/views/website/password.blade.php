@extends('layouts.base')

@section('title', 'Forgot Password')

@section('content')
    <h2>Forgot Password</h2>
    <form action="{{ route('password.email') }}" method="POST">
        @csrf
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        
        <button type="submit">Send Password Reset Link</button>
    </form>
@endsection
