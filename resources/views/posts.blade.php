@extends('layouts.main')


@section('container')
    @foreach ($posts as $post)
    <article class="mb-5">
        <h5>
        <a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a>
        <p>By. Depiwww in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
        </h5>
        <p>{{ $post->excerpt }}</p>
    </article>
    @endforeach
@endsection