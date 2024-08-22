@extends('layouts.main')
@section('title', 'ThugXD Events')

@section('content')
    <!-- Directivas do Blade
    @foreach ($events as $event)
        <p>{{ $event->title }}-- {{ $event->description }}; {{ $event->city }}; {{ $event->private }}</p>
    @endforeach-->

    <div id="search-container" class="col-md-12">
        <h1>Busque um evento</h1>
        <form action="/" method="GET">
            <input type="text" name="search" class="form-control" id="search" placeholder="Buscar evento">
        </form>
    </div>

    <div id="events-container" class="col-md-12">
        @if ($search)
            <h2>Buscando por: {{ $search }}</h2>
        @else
            <h2>Próximos eventos</h2>
            <p class="subtitle">veja os eventos dos próximos dias</p>
        @endif
        <div id="cards-container" class="row">
            @foreach ($events as $event)
                <div class="cards col-md-3" id="cards">
                    <img src="/img/events/{{ $event->image }}" class="img-fluid" alt="{{ $event->title }}">
                    <div class="card-body">
                        <p class="card-date"> {{  date('d/m/y',strtotime($event->date)) }}</p>
                        <h5 class="card-title"> {{ $event->title }}</h5>
                        <p class="card-participants">{{ count($event->users) }} Participantes</p>
                        <a href="/events/{{ $event->id }}" class="btn btn-primary">Saber mais</a>
                    </div>
                </div>
            @endforeach
            @if (count($events) == null && $search)
                <p>Não foi possivel encontrar evento {{ $search }}  <strong><a href="/">Ver todos</a></strong></p>
            @elseif(count($events) == 0)
                <p>Não há eventos disponíveis</p>
            @endif
        </div>
    </div>

@endsection