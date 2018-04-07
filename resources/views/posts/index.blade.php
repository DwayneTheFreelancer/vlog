@extends('layouts.main')

@section('title')
    All My Posts
@endsection

@section('content')

    {{--  Welcome back, {{ $user_name }}  --}}

    @foreach($posts as $post)
        <a href="/posts/show"><h1>{{ $post->title }}</h1></a>
        <p>{{ $post->content }}</p>

        <hr>
    @endforeach
@endsection