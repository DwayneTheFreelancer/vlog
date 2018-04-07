@extends('layouts.main')

@section('title')
    All My Posts
@endsection

@section('content')
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->content }}</p>

    <hr>
@endsection