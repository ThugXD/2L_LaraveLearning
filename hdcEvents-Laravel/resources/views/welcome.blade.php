@extends('layouts.main')
@section('title', 'ThugXD Events')

@section('content')
    <!-- Directivas do Blade-->
    <h1>Titulo Principal</h1>
    <img src="/img/banner.jpg" alt="Banner do grupo">
    @if(10>5)
        <p>SIm isso é verdade</p>
    @endif
    <p> VErificar se o nome é igual a {{ $nome }}</p>
    @if($nome == "ThugXD")
        <p>Sim o Nome é Mesmo esse: {{ $nome }} e a sua idade é {{ $idade }}</p>
    @else   
        <p>Oh não, ome não é esse, o certo é: {{ $nome }} esse desse individuo é {{ $idade }}</p>
    @endif
</br>
    <p>Imprimir elementos do array</p>
    @for ($i = 0; $i < count($array); $i++)
        <p>{{ $array[$i] }}</p>
        @if ($i == 2)
            <p>O {{  $i }} é 2</p>
        @endif
    @endfor
    @php
        $nome = ['Valter', 'André', 'Gil', 'Zandamela'];
        for($i=0; $i < count($nome); $i++){
            echo "<p>Seu nome é $nome[$i]</p>";
        }
        
    @endphp
    {{-- Imprimir array usando o foreach né --}}
    @foreach ($nomeThug as $nome)
         <p> {{$loop->index }} </p> {{--Vai ter acesso ao indice do foreach --}}
        <p> {{$nome }} </p>
    @endforeach

@endsection