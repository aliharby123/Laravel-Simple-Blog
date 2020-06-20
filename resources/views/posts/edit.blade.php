@extends('layouts.app')
@section('content')
    <h1>Create New Post</h1>
    <div class="col-md-6">
      <form method="post" action="{{route('posts.update', $post)}}">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="title">Post Title</label>
          <input type="text" class="form-control" value="{{ $post->title }}" placeholder="Enter post title" name="title">
        </div>
        <div class="form-group">
          <label for="title">Post Body</label>
          <input type="text" class="form-control" value="{{ $post->body }}" placeholder="Enter post body" name="body">
        </div>
        <button type="submit" class="btn btn-primary">Publish</button>
      </form>
      </div>
@endsection
