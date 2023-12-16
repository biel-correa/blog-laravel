@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if(count($posts) == 0)
                <div class="alert alert-info" role="alert">
                    No posts yet. <a class="btn btn-primary" href="{{ route('posts.create') }}">Create one</a>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
