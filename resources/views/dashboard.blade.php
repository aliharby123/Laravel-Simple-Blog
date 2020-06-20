@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">Post ID</th>
                          <th scope="col">Post Title</th>
                          <th scope="col">Show</th>
                          <th scope="col">Delete</th>

                        </tr>
                      </thead>
                      <tbody>
                        @foreach($posts as $post)
                        <tr>
                          <th scope="row">{{ $post->id }}</th>
                          <th scope="row">{{ $post->title }}</th>
                          <th scope="row"><a class="btn btn-info" href="{{ route('posts.show', $post)}}">Show Post</a></th>
                          <th scope="row"><form class="form-group" action="{{ route('posts.destroy', $post)}}" method="post" style="display:inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" name="button" class="btn btn-danger">Delete</button>
                          </form></th>
                        </tr>
                      @endforeach
                      </tbody>
                    </table>
                </div>
            </div>

    </div>
</div>
@endsection
