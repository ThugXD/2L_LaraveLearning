@extends('layouts.main')

@section('title','Apelido')

@section('content')


    <h1>Teu apelido é Zandamela</h1>
    <a href="/">Home</a></br>
    <a href="/Thug">Pagina do ThugXD</a>

    @if($busca != '')
        <p>Nome Prourado: {{ $busca }}</p>
    @endif
@endsection