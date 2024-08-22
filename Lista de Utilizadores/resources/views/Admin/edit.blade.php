@extends('admin.layouts.app')
@section('title', 'Editar Utilizadores')

@section('content')

    @include('admin.users.partials.breadcrumb')
    <div class="py-6">
        <h1 class="font-semibold text-xl text-gray-800 dark:text-gray dark:text-cyan-400">
            Editar utilizador {{ $user->name }}
        </h1>
    </div>

    {{-- @include('admin.icludes.errors') --}}
    <x-alert/>
    <form action="{{ route('users.update', $user->id)}}" method="post">
        @csrf
        @method('put')
        <input type="text" name="name" placeholder="Nome" value="{{ $user->name}}">
        <input type="email" name="email" placeholder="Email" value="{{ $user->email }}">
        <input type="password" name="password" placeholder="Password">
        <button type="submit">Criar</button>
    </form>
@endsection