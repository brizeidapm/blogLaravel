@extends('layouts.master')

@section('titulo', 'Inicio')

@section('content')
 <h1> Bienvenido al curso</h1>

@foreach ($posts as $post)
 <h1>{{ $post->title }}</h1>
 <h3>{{ $post->descripcion }}</h3>
@endforeach

@endsection
