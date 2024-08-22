@extends('admin.layouts.app')
@section('title', 'Criar Novos Users')

@section('content')
    <div class="py-6">

        <h1 class="font-semibold text-xl text-gray-800 dark:text-gray dark:text-cyan-400 ">Novo utilizador</h1>

    </div>

    {{-- @include('admin.icludes.errors') --}}
    <x-alert/>
    <form action="{{ route('users.store') }}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Nome" value="{{ old('name') }}">
        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}">
        <input type="password" name="password" placeholder="Password">
        <button type="submit">Criar</button>
    </form>
@endsection