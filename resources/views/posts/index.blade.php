<!DOCTYPE html>
@extends('layouts.app')
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    @section('content')

        <h1>All Posts</h1>
        <a href="{{route('posts.create')}}" class="btn btn-info mt-3">Create New Post</a>
        <ul class="mt-5">
          @foreach($posts as $post)
            <li class="mt-5"><a href="{{route('posts.show', $post)}}">{{ $post->title }}</a></li>
            - {{ $post->body }}

            <hr>
          @endforeach
        </ul>
        @endsection

  </body>
</html>
