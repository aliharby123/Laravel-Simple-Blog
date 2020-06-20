@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome in my Simple Blog Laravel Project</div>

                <div class="card-body">
                    Let's Check All Post From <a href="{{route('posts.index')}}" class="btn btn-info">Here</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
