@extends('admin.layouts.app')
@section('title', 'Listagem de Utilizadores')
@section('content')
    <h1>Utilizadores</h1>
     <a href="{{ route('users.create') }}">Novo utilizador</a>

    <x-alert/>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Acções</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <a href="{{ route('users.edit', $user->id) }}">Editar</a>
                    <a href="{{ route('users.show', $user->id) }}">Detalhes</a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="100">Nenhum utilizador encontrado</td>
            </tr>
            @endforelse
        </tbody>
    </table>
    {{ $users->links() }}
@endsection