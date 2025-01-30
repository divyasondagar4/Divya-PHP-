<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Institute Management')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <h1>Institute Management</h1>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('students.index') }}">Students</a></li>
                <li><a href="{{ route('teachers.index') }}">Teachers</a></li>
                <li><a href="{{ route('clubs.index') }}">Clubs</a></li>
                <li><a href="{{ route('books.index') }}">Books</a></li>
                @auth
                    <li><a href="{{ route('profile.edit') }}">Profile</a></li>
                    <li>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                @else
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @endauth
            </ul>
        </nav>
    </header>
    
    <div class="container">
        @yield('content')
    </div>

    <footer>
        <p>&copy; 2025 Institute Management</p>
    </footer>
</body>
</html>
