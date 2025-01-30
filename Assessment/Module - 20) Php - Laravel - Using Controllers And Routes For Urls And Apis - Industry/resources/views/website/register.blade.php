@extends('layouts.base')

@section('title', 'Register')

@section('content')
    <h2>Register</h2>
    <form id="register-form" action="{{ route('register') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        
        <label for="password_confirmation">Confirm Password:</label>
        <input type="password" id="password_confirmation" name="password_confirmation" required>
        
        <button type="submit">Register</button>
    </form>

    <script>
        document.getElementById('register-form').addEventListener('submit', function(event) {
            event.preventDefault();
            const form = event.target;
            const formData = new FormData(form);

            fetch(form.action, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Accept': 'application/json'
                },
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.errors) {
                
                    alert('Registration failed: ' + data.errors.join(', '));
                } else {
                    alert('Registration successful! Please check your email for confirmation.');
                 //   window.location.href = '{{ route('login') }}';
                }
            })
            .catch(error => console.error('Error:', error));
        });
    </script>
@endsection
