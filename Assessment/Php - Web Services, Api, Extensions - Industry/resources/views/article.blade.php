

@extends('base')

@section('title', 'Articles')

@section('content')
    <h2>Articles</h2>
    <ul>
        @foreach($articles as $article)
            <li>
                <a href="{{ route('articles.show', $article->id) }}">{{ $article->title }}</a>
                <p>{{ Str::limit($article->content, 100) }}</p>
            </li>
        @endforeach
    </ul>
@endsection
