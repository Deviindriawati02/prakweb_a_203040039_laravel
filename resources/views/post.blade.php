@extends('layouts.main')

@section('container')
<h2>{{ $post->title }}</h2>

<p>By. <a class="text-decoration-none" href="#">{{ $post->user->name }}</a> in <a class="text-decoration-none" href="/categories/{{ $post->category->slug }}"> {{ $post->category->name }}</a></p>

{!! $post->body !!}

<a href="/blog" class="d-block mt-3">Back to posts</a>
@endsection