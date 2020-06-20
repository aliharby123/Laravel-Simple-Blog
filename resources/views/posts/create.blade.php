@extends('layouts.app')
@section('content')
    <h1>Create New Post</h1>
      <form method="post" action="{{route('posts.store')}}">
        @csrf
        <div class="form-group">
          <label for="title">Post Title</label>
          <input type="text" class="form-control" id="post_title" placeholder="Enter post title" name="title">
        </div>
        <div class="form-group">
          <label for="title">Post Body</label>
          <input type="text" class="form-control" id="post_body" placeholder="Enter post body" name="body">
        </div>
        <button type="submit" class="btn btn-primary">Publish</button>
      </form>
@endsection
