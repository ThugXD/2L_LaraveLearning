@extends('layouts.main')
@section('title', 'Dashbord')

@section('content')
<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Meus Eventos</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-events-container">
    @if(count($events)>0)
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Participantes</th>
                <th scope="col">Acções</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($events as $event)
            <tr>
                <td scope="row">{{ $loop->index+1 }}</td>
                <td><a href="/events/{{ $event->id}}" >{{ $event->title }}</a></td>
                <td> {{ count($event->users) }}</td>
                <td>
                    <a href="/events/edit/{{ $event->id }}" class="btn btn-primary edit-btn"><i class="fas fa-edit"></i> Editar</a> 
                    <form action="/events/{{ $event->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger delete-btn"><i class="fas fa-trash"></i> Deletar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>Ainda não ha eventos, <a href="/events/create">Criar Eventos</a></p>
    @endif
</div>

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Eventos que estou participando</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-events-container">
@if( count($eventsasparticipant) > 0)
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Participantes</th>
            <th scope="col">Acções</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($eventsasparticipant as $event)
        <tr>
            <td scope="row">{{ $loop->index+1 }}</td>
            <td><a href="/events/{{ $event->id}}" >{{ $event->title }}</a></td>
            <td> {{ count($event->users) }}</td>
            <td>
                <form action="/events/leave/{{ $event->id }}" method="post">
                    @csrf
                    @method("DELETE")
                    <button type="submit" class="btn btn-danger delete-btn">
                        <i class="fas fa-trash"></i> Sair do Evento
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@else
    <p>Vovê não participa de nenhum evento, <a href="/">Veja todos os eventos</a></p>
@endif

</div>
@endsection