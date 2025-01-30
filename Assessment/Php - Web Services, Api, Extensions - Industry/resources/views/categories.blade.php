@extends('base')

@section('title', 'Categories')

@section('content')
    <h2>Categories</h2>
    <ul>
        @foreach($categories as $category)
            <li>
                <a href="{{ route('categories.show', $category->id) }}">{{ $category->name }}</a>
            </li>
        @endforeach
    </ul>
@endsection
