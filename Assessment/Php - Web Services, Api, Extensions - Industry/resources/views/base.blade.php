<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <h1>Blog App</h1>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('articles.index') }}">Articles</a></li>
                <li><a href="{{ route('categories.index') }}">Categories</a></li>
                <li><a href="{{ route('comments.index') }}">Comments</a></li>
                @guest
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @else
                    <li><a href="{{ route('profile') }}">Profile</a></li>
                    <li><a href="{{ route('logout') }}">Logout</a></li>
                @endguest
            </ul>
        </nav>
    </header>

    <div class="container">
        <div class="sidebar">
            @section('sidebar')
                <ul>
                    <li><a href="{{ route('categories.index') }}">Categories</a></li>
                    <li><a href="{{ route('articles.index') }}">Articles</a></li>
                    <li><a href="{{ route('comments.index') }}">Comments</a></li>
                </ul>
            @show
        </div>
        
        <div class="content">
            @yield('content')
        </div>
    </div>

    <footer>
        <p>&copy; 2025 Blog App</p>
    </footer>
</body>
</html>
