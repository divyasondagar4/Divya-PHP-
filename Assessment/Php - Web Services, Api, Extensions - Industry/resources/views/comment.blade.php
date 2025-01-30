@extends('base')

@section('title', 'Comments')

@section('content')
    <h2>Comments</h2>
    <ul>
        @foreach($comments as $comment)
            <li>
                <p>{{ $comment->content }}</p>
                <small>By {{ $comment->user->name }} on {{ $comment->created_at }}</small>
            </li>
        @endforeach
    </ul>
@endsection
