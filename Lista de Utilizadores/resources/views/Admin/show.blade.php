@extends('Admin.layouts.app')

@section('title', 'Mostrar Detalhes')

@section('content')
    <h1>Detalhes do utilizador</h1>
    <ul>
        <li>Nome: {{ $user->name}}</li>
        <li>Email: {{ $user->email }}</li>
        <li>Password: {{ $user->password }}</li>
    </ul>
    <x-alert></x-alert>

    @can('is-admin')
    <form action="{{ route('users.destroy', $user->id) }}" method="post">

        @csrf
        @method('delete')
        <button type="submit">Deletar</button>


    </form>
    @endcan
@endsection