@extends('layouts.main')

@section('title')
    All My Posts
@endsection

@section('content')
    <form class="form-horizontal" action="/posts/{{ $post->id }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <h1>Edit A Post</h1>
        <hr>
        <div class="form-group">
        <label for="title" class="col-sm-2 control-label">Title</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}" placeholder="Title">
        </div>
        </div>
        <div class="form-group">
        <label for="content" class="col-sm-2 control-label">Content</label>
        <div class="col-sm-10">
            <textarea name="content" id="content" name="content" cols="132" rows="5">{{ $post->content }}</textarea>
        </div>
        </div>
        <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Submit</button>
        </div>
        </div>
    </form>
@endsection