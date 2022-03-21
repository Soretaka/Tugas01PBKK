@extends('template')

@section('container')
    <h1>Halaman Artikel Berita</h1>
    <h5 class="bm-5"> Post Categories</h5>
    <hr/>
    @foreach($categories as $category)
    <ul>
        <li>
            <h2><a href="/categories/{{ $category->slug }}"> {{ $category->name }} </a></h2>
        </li>
    </ul>
    @endforeach
@endsection
