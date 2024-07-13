@extends('layouts.main')
@section('title', 'Dashbord')

@section('content')
<div class="col-ms-10 offset-md-1 dashboard-title-container">
    @if(count($events)>0)
    
    @else
    <p>Ainda não ha eventos, <a href="/events/create">Criar Eventos</a></p>
    @endif
</div>
@endsection