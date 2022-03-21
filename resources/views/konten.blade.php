@extends('template')

@section('container')
<article class="mb-5">
    <h3>{{ $article->title }} </h3>
    <h6>By:  {{ $article->user->name }} </a> in <a href = "/categories/{{ $article->category->slug }}">{{ $article->category->name }}</a></h6>
    {{-- <h6>By: <a href = "/author/ {{ $article->user->name }}"> {{ $article->user->name }} </a> in <a href = "/categories/{{ $article->category->slug }}">{{ $article->category->name }}</a></h6> --}}
    <p>{!! $article->body !!}</p>
</article>
@endsection
