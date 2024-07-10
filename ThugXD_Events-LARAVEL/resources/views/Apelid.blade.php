@extends('layouts.main')

@section('title','Apelido')

@section('content')
    <h1>Exibir o ID</h1>

    @if ($id != null)
        <p>Exibindo meu id: {{ $id }}</p>
    
    @endif
@endsection