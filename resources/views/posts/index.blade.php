@extends('template')

@section('title')
    Posts
@endsection

@section('content')
    @foreach($posts as $post)
        <h1>{{ $post['titulo'] }}</h1>
        <p>{{ $post['conteudo'] }}</p>
    @endforeach
@stop
