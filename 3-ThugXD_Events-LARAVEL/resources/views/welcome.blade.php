@extends('layouts.main')
@section('title', 'ThugXD Events')

@section('content')
    <!-- Directivas do Blade
    @foreach ($events as $event)
        <p>{{ $event->title }}-- {{ $event->description }}; {{ $event->city }}; {{ $event->private }}</p>
    @endforeach-->

    <div id="search-container" class="col-md-12">
        <h1>Busque um evento</h1>
        <form action="">
            <input type="text" name="search" class="form-control" id="search" placeholder="Buscar evento">
        </form>
    </div>
    <div id="events-container" class="col-md-12">
        <h2>Próximos eventos</h2>
        <p class="subtitle">veja os eventos dos próximos dias</p>
        <div id="cards-container" class="row">
            @foreach ($events as $event)
                <div class="cards col-md-3">
                    <img src="/img/event_placeholder.jpg" alt="{{ $event->title }}">
                    <div class="card-body">
                        <p class="card-date">31/03/2003</p>
                        <h5 class="card-title"> {{ $event->title }}</h5>
                        <p class="card-participants">X Participantes</p>
                        <a href="#" class="btn btn-primary">Saber mais</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection