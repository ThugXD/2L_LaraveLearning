@extends('layouts.main')
@section('title', 'Criar Evento')

@section('content')
    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Crie um evento</h1>
        <form action="/events" method="post">
            @csrf
            <div class="form-group">
                <label for="title">Evento:</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Nome do evento">
            </div>
            <div class="form-group">
                <label for="title">Cidade:</label>
                <input type="text" name="city" class="form-control" id="city" placeholder="Cidade do evento">
            </div>
            <div class="form-group">
                <label for="title">O evento é privado?</label>
                <select name="private" id="private" class="form-control">
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>
            <div class="form-group">
                <label for="cidade">Local:</label>
                <textarea name="description" id="description" class="form-control" placeholder="O que vai descrever"></textarea>
            </div>  
            <input type="submit" class="btn btn-primary" style="margin-left: 10px;" value="Criar evento">
        </form>
 
    </div>
@endsection