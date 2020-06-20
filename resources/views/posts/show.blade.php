@extends('layouts.app')

@section('content')
    <a href="{{ route('posts.index')}}" class="btn btn-info mb-5">Back</a>

      <h1>{{ $post->title }}</h1>
      <p>{{ $post->body}}</p>
      <p>Published at: {{ $post->created_at }}</p>
      <hr>
      @auth
        @if(auth()->user()->id == $post->user_id)
          <a href="{{ route('posts.edit', $post)}}" class="btn btn-info">Edit Post</a>
          <form class="form-group" action="{{ route('posts.destroy', $post)}}" method="post" style="display:inline-block">
            @csrf
            @method('DELETE')
            <button type="submit" name="button" class="btn btn-danger">Delete</button>
          </form>
        @endif
      @endauth

@endsection
