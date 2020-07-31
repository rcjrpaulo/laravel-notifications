@extends('layouts.app')

@section('content')
    <h1>List of Posts</h1>

    @forelse($posts as $post)
        {{ $post->title  }}
        <hr>

    @empty
        <h2>No posts</h2>
    @endforelse

    {!! $posts->links() !!}


@endsection
