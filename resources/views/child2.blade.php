@extends('layouts.master')
@section('titulo','Página Hijo')
@section('sidebar')
     @parent
     <p>Estoy en hijo del sidebar master</p>
@endsection
@section('content')
      @include('partials.lista')
@endsection
