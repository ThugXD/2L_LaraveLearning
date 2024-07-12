@extends('layouts.main')
@section('title', $event->title)

@section('content')
    <div class="col-md-10 offse-md-1">
        <div class="row">
            <div id="image-container" class="col-md-6">
                <img src="/img/events/{{ $event->image }}" class="img-fluid" alt="{{ $event->title }}">
            </div>
            <div id="info-container" class="col-md-6">
                <h1>{{ $event->title }}</h1>
                <p class="event-city"><i class="fas fa-location"></i> {{ $event->city }}</p>
                <p class="events-participants"><i class="fas fa-users"></i>X Pariticipantes</p>
                <p class="event-owner"><i class="fas fa-star"></i>Dono do evento</p>
                <h3>O evento conta com</h3>
                <u id="items-list">
                @foreach ($event->items as $item)
                    <li><i class="fa fa-play"></i><span>{{ $item }}</span></li>
                @endforeach
                </u>
                <a href="#" class="btn btn-primary" id="event-submit">Confirmar presença</a>
            </div>
            <div class="col-md-12" id="description-container">
                <h3>Sobre o evento:</h3>
                <p class="event-description">{{ $event->description }}</p>
            </div>
        </div>
    </div>
@endsection