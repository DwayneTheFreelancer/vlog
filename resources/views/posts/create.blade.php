@extends('layouts.main')

@section('title')
    <h1>Create A Post</h1>
@endsection

@section('content')
    <form class="form-horizontal" action="/posts" method="POST">
        {{ csrf_field() }}
        <h1>Create A Post</h1>
        <hr>
        <div class="form-group">
          <label for="title" class="col-sm-2 control-label">Title</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="title" name="title" placeholder="Title">
          </div>
        </div>
        <div class="form-group">
          <label for="content" class="col-sm-2 control-label">Content</label>
          <div class="col-sm-10">
            <textarea name="content" id="content" cols="132" rows="5"></textarea>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Post</button>
          </div>
        </div>
    </form>
@endsection